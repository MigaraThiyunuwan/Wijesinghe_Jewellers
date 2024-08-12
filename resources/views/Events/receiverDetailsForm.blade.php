<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Jiwesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	
	<script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
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
        
		
					<section style="font-family:Novecentowide; " class=" py-1 ">
						<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
							<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
							  <div class="rounded-t bg-yellow-100 mb-0 px-6 py-6">
								<div class="text-center flex justify-between">
								  <h6 class="text-blueGray-700 text-xl font-bold">
									Delivery Details 
								  </h6>
					
								  <h1>Total: Rs. {{$eventOrder->price}}</h1>
						  
								</div>
							  </div>
							  <div class="flex-auto px-4 lg:px-10 py-10 pt-0 formbg">
						  
								@if($errors->any())
								<div class="alert alert-danger">
									<ul>
									  @foreach ($errors->all() as $index => $error)
									  <div id="alert-{{ $index }}" class="flex items-center p-4 mb-4 mt-2 text-red-800 rounded-lg bg-red-100" role="alert">
										  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
											  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
										  </svg>
										  <span class="sr-only">Info</span>
										  <div class="ms-3 text-sm font-medium">
											  {{ $error }}
										  </div>
										  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-{{ $index }}" aria-label="Close">
											  <span class="sr-only">Close</span>
											  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
												  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
											  </svg>
										  </button>
									  </div>
								  @endforeach
									</ul>
								</div>
								@endif
						  
								  {{-- Show Registration Success Messsage --}}
								  @if (session('unsuccess'))
								  <div style="display: flex; justify-content: center">
									<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
							  
									  <strong class="font-bold">{{ session('unsuccess') }}</strong>
									  
									</div>
								  </div>
								@endif
								{{-- Show Registration Success Messsage End --}}
						  
								{{-- {{route('order.placeorder')}} --}}
						  
								<form action="{{route('events.receiverdetailsSave')}}" method="POST"> 
								  @csrf
								  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
									{{-- Delivery Information --}}
								  </h6>
								  <div class="flex flex-wrap">
										<div class="w-full lg:w-6/12 px-4">
										  <div class="relative w-full mb-3">
											<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
												Receiver's Name <span style="color: red">*</span>
											</label>
											<input type="text" name="receiverName" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 "  value="{{ old('receiverName') }}">
										  </div>
										</div>
										<div class="w-full lg:w-6/12 px-4">
										  <div class="relative w-full mb-3">
											<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
											  Contact Number <span style="color: red">*</span>
											</label>
											<input type="phone" name="contact_no" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('contact_no') }}">
										  </div>
										</div>
									
									<div class="w-full lg:w-6/12 px-4">
									  <div class="relative w-full mb-3">
										<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
										  Delivery Address <span style="color: red">*</span>
										</label>
										<input type="text" name="deliveryAddress" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('deliveryAddress') }}">
									  </div>
									</div>

									
								
								</div>
						  
									  <div style="width: 100%; display:flex; justify-content:center">
										  
										<button type="submit" class="btn-grey">Submit Receiver Details</button>
										{{-- <a style="text-decoration: none" href="{{ route('cart.receiver') }}" class="btn-grey">Pay Bill</a> --}}
										
									  </div>
						  
								  </div>
								</form>
							  </div>
							</div>
						  
						  </div>
						  </section>
					
            
			
			<!-- / content -->
			
			
			
		
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