<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Jiwesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script> --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	@php
      $user = session()->get('user');
	  $manager = session()->get('manager');
    @endphp
</head>
<body>

    <header id="header">
		<div class="container">
			<a href="/" id="logo" title="Wijesinghe Jewellers">Wijesinghe Jewellers</a>
			<div class="right-links">
				<ul>
					@if ($user)
                   
					<li><a href="{{ asset('user/profile') }}"><span class="ico-account"></span>Hello, {{$user->username}}</a></li>
					@endif
					@if ($manager)
					<li><a href="{{ asset('manager/profile') }}"><span class="ico-account"></span>Hello, {{$manager->username}}</a></li>
					@endif
					

					@if ($user || $manager)
						<li><a href="{{ route('logout') }}"><span class="ico-signout"></span>Logout</a></li>
					@else
						<li><a href="{{ route('userlogin') }}"><span class="ico-signout"></span>Login</a></li>
					@endif

				</ul>
			</div>
		</div>
		<!-- / container -->
	</header>
	<!-- / header -->

    <nav id="menu">
		<div class="container">
			<div class="trigger"></div>
			<li><a href="{{ route('shop.bracelet') }}">Bracelet</a></li>
          <li><a href="{{ route('shop.earrings') }}">Earrings</a></li>
          <li><a href="{{ route('shop.rings') }}">Rings</a></li>
			    <li><a href="{{ route('shop.necklaces') }}">necklaces</a></li>
          <li><a href="{{ route('events.home') }}">Events</a></li>
          <li><a href="{{ route('aboutus') }}">About</a></li>
          <li><a href="{{ route('advertisement') }}">Advertisement</a></li>
          <li><a href="{{ route('contactus') }}">Contact Us</a></li>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->
    
    <div id="body">
        
		<div class="container">
            
			<div id="content" class="full">
                @php

                    $merchant_id = '1227581'; // Replace your Merchant ID
                    $order_id = $order->id;
                    $amount = $order->totalPrice;
                    $currency ='LKR';  
                    $merchant_secret = "MzM3ODE0Mjk5OTM4MDMyMjk4MDEyMDY0NjIzNDIxNDU1ODU5NDU1";
                    // $hash = strtoupper(
                    //     md5(
                    //         $merchant_id . 
                    //         $order_id . 
                    //         number_format($amount, 2, '.', '') . 
                    //         $currency .  
                    //         strtoupper(md5($merchant_secret)) 
                    //     ) 
                    // );
                    $hash = $merchant_id;
                    $hash .= $order_id;
                    $hash .= number_format($amount, 2, '.', '');
                    $hash .= $currency;
                    $hash .= strtoupper(md5($merchant_secret));
                    $hash = strtoupper(md5($hash));

                @endphp   
             
              

				<div class="total-count">
					<div style="text-align: left; margin: 20px ">
                    <p>Receiver Name: <strong>{{$order->receiverName}}</strong></p>
                    <p>Contact no: <strong>{{$order->contact_no}}</strong></p>
                    <p>Delivery Address: <strong>{{$order->deliveryAddress}}</strong></p>
                    </div>
					<h3>Total to pay: <strong>{{$order->totalPrice}}</strong></h3>
                    {{-- <button type="submit" id="payhere-payment" class="btn-grey">Pay Bill</button> --}}
                 
                    
                    ORDER ID  {{$order->id}}
                    amount  {{$order->totalPrice}}
                    Hash  {{$hash}}
                    ORDER ID  {{$order_id}}
                    amount  {{$amount}}
                    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">  
                      
                        <input type="hidden" name="merchant_id" value="1227581">    <!-- Replace your Merchant ID -->
                        <input type="hidden" name="return_url" value="{{ route('payment.return') }}">
                        <input type="hidden" name="cancel_url" value="{{ route('payment.cancel') }}">
                        <input type="hidden" name="notify_url" value="{{ route('payment.notify') }}">  
                      
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <input type="hidden" name="items" value="Jewellery">
                        <input type="hidden" name="currency" value="LKR">
                        <input type="hidden" name="amount" value="{{$order->totalPrice}}">  
                       
                        <input type="hidden" name="first_name" value="{{$order->receiverName}}">
                        <input type="hidden" name="last_name" value="{{$order->receiverName}}">
                        <input type="hidden" name="email" value="{{$user->email}}">
                        <input type="hidden" name="phone" value="{{$order->contact_no}}">
                        <input type="hidden" name="address" value="{{$order->deliveryAddress}}">
                        <input type="hidden" name="city" value="{{$user->city}}">
                        <input type="hidden" name="country" value="{{$order->country}}">
                        <input type="hidden" name="hash" value="{{$hash}}">    <!-- Replace with generated hash -->


                        
                        <input type="submit" class="btn-grey" value="Buy Now">  
                        
                    </form> 
				</div>
                Hash  {{$hash}}
                
                {{-- <script>
                    // Payment completed. It can be a successful failure.
                    payhere.onCompleted = function onCompleted(orderId) {
                        console.log("Payment completed. OrderID:" + orderId);
                        // Note: validate the payment and show success or failure page to the customer
                    };
            
                    // Payment window closed
                    payhere.onDismissed = function onDismissed() {
                        // Note: Prompt user to pay again or show an error page
                        console.log("Payment dismissed");
                    };
            
                    // Error occurred
                    payhere.onError = function onError(error) {
                        // Note: show an error page
                        console.log("There is a error:" + error);
                    };

                    var payment = {
                        "sandbox": true,
                                    "merchant_id": "1224349", // Replace with your Merchant ID
                                    "return_url": "{{ route('payment.return') }}",
                                    "cancel_url": "{{ route('payment.cancel') }}",
                                    "notify_url": "{{ route('payment.notify') }}",
                                    "order_id": "{{ $order->id}}",
                                    "items": "Order ",
                                    "amount": "{{ $order->totalPrice}}",
                                    "currency": "LKR",
                                    "hash": "{{ $hash}}",
                                    "first_name": "{{ $user->first_name}}",
                                    "last_name": "{{ $user->last_name}}",
                                    "email": "{{ $user->email}}",
                                    "phone": "{{ $user->contact_no}}",
                                    "address": "{{ $user->address }}",
                                    "city": "{{ $user->city }}",
                                    "country": "Sri Lanka",
                                    "delivery_address": "{{ $order->deliveryAddress}}",
                                    "delivery_city": "{{ $order->country}}",
                                    "delivery_country": "Sri Lanka"
                    };
            
                    // document.getElementById('payhere-payment').onclick = function (e) {

                    //     const fetchUrl = '{{ route('generate-hash', ['order_id' => $order->id, 'amount' => $order->totalPrice]) }}';
                    //     console.log('Fetching URL:', fetchUrl); // Log the fetch URL
                    //     // Fetch payment details from server
                    //     fetch(fetchUrl.replace(/&amp;/g, '&'))
                    //         .then(response => response.json())
                    //         .then(data => {
                    //             var payment = {
                    //                 "sandbox": true,
                    //                 "merchant_id": "1224349", // Replace with your Merchant ID
                    //                 "return_url": "{{ route('payment.return') }}",
                    //                 "cancel_url": "{{ route('payment.cancel') }}",
                    //                 "notify_url": "{{ route('payment.notify') }}",
                    //                 "order_id": data.order_id,
                    //                 "items": "Order " + data.order_id,
                    //                 "amount": data.amount,
                    //                 "currency": "LKR",
                    //                 "hash": data.hash,
                    //                 "first_name": "{{ $user->first_name}}",
                    //                 "last_name": "{{ $user->last_name}}",
                    //                 "email": "{{ $user->email}}",
                    //                 "phone": "{{ $user->contact_no}}",
                    //                 "address": "{{ $user->address }}",
                    //                 "city": "{{ $user->city }}",
                    //                 "country": "Sri Lanka",
                    //                 "delivery_address": "{{ $order->deliveryAddress}}",
                    //                 "delivery_city": "{{ $order->country}}",
                    //                 "delivery_country": "Sri Lanka"
                    //             };
                              
                    //             // console.log(data);
                    //             // console.log(payment);
                    //             payhere.startPayment(payment);
                    //         });
                    // };

                    document.getElementById('payhere-payment').onclick = function (e) {
                        payhere.startPayment(payment);
                    };
                </script> --}}
       
			</div>
			<!-- / content -->
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->


    <footer id="footer">
		<div class="container">
			<div class="cols">
				<div class="col">
					<h3>Frequently Asked Questions</h3>
					<ul>
                        <li><a href="#">FAQ Should add here </a></li>
                        <li><a href="#">FAQ Should add here </a></li>
                        <li><a href="#">FAQ Should add here </a></li>
                        <li><a href="#">FAQ Should add here </a></li>
                        <li><a href="#">FAQ Should add here </a></li>
                    </ul>
				</div>
				<div class="col media">
					<h3>Social media</h3>
					<ul class="social">
						<li><a href="#"><span class="ico ico-fb"></span>Facebook</a></li>
						<li><a href="#"><span class="ico ico-tw"></span>Twitter</a></li>
						<li><a href="#"><span class="ico ico-gp"></span>Google+</a></li>
						<li><a href="#"><span class="ico ico-pi"></span>Pinterest</a></li>
					</ul>
				</div>
				<div class="col contact">
					<h3>Contact us</h3>
					<p>Wijesinghe Jewellers,<br>No 89 Main Street,<br>Mawanella</p>
					<p><span class="ico ico-em"></span><a href="#">wijesinghejewellers@gmail.com</a></p>
					<p><span class="ico ico-ph"></span>077 192 2433</p>
				</div>
				<div class="col newsletter">
					
					<img src="{{ asset('images/logo_no_bg.png') }}" style="width: 200px; height: 200px; " >
				</div>
			</div>
			<p class="copy">Copyright 2024 wijesinghe Jewellers. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->
    

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>