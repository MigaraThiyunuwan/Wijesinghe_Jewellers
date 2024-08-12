<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Jiwesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
                    <li><a href="{{ asset('cart') }}"><span class="ico-products"></span>Cart</a></li>
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
        
		<div style="display: flex; justify-content: center" class="container">
            
			<div id="content" class="full">

					@if (session('removeItemError'))
					<div id="alert-2"  style="font-family:Novecentowide; " class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-100 " role="alert">
						<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
						  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
						</svg>
						<span class="sr-only">Info</span>
						<div class="ms-3 text-sm font-medium">
							{{ session('removeItemError') }}
						</div>
						<button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-2" aria-label="Close">
						  <span class="sr-only">Close</span>
						  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
						  </svg>
						</button>
					  </div>
					  
					@endif		

					@if (session('removeItemSuccess'))
                      
					<div id="alert-3"  style="font-family:Novecentowide; " class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-100 " role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
							{{ session('removeItemSuccess') }}
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-3" aria-label="Close">
                          <span class="sr-only">Close</span>
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                        </button>
                    </div>
                      
                  	@endif

               
                	@if (session('updateItemError'))
					  
					  <div id="alert-2"  style="font-family:Novecentowide; " class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-100 " role="alert">
						<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
						  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
						</svg>
						<span class="sr-only">Info</span>
						<div class="ms-3 text-sm font-medium">
							{{ session('updateItemError') }}
						</div>
						<button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-2" aria-label="Close">
						  <span class="sr-only">Close</span>
						  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
						  </svg>
						</button>
					  </div>
					@endif		

					@if (session('updateItemSuccess'))
					<div id="alert-3"  style="font-family:Novecentowide; " class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-100 " role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
							{{ session('updateItemSuccess') }}
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-3" aria-label="Close">
                          <span class="sr-only">Close</span>
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                        </button>
                    </div>
                     
                  	@endif
                @php
                    
                    $orders = session('orders', []);
                @endphp

                @if(count($orders) > 0)
                
				<div class="cart-table1">
					

					
                    
					<table style=" font-family:Novecentowide;">
						<tr>
							<th class="items">Items</th>
							<th class="price">Price</th>
							<th class="qnt">Quantity</th>
							<th class="total">Total</th>
                            <th class="total">Remove</th>
						</tr>
                        @php
                            $subTotal = 0;
                        @endphp
                        @foreach ($orders as &$existingOrder) 
						<tr>
                           
							<td class="items">
								<div class="image">  
									<img width="100px"; height="100px" src="{{ asset('storage/' . $item->getItemDetails($existingOrder['item_id'])->image) }}" alt="">
								</div>
								<h3><a style="color: black; text-decoration: none" href="#">{{$item->getItemDetails($existingOrder['item_id'])->name}} </a></h3>
								<p>{{$item->getItemDetails($existingOrder['item_id'])->description}}</p>
							</td>
							<td class="price">Rs.{{$item->getItemDetails($existingOrder['item_id'])->price}}</td>
                            @php
                                $subTotal += ($item->getItemDetails($existingOrder['item_id'])->price) * ($existingOrder['quantity']);
                            @endphp
							<td class="qnt">
                                <form id="myForm" action="{{ route('cart.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{$existingOrder['item_id']}}">
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <select style="width: 100px" onchange='this.form.submit()' id="mySelect" name="mySelect">
                                        @php
                                            $maxQuantity = 5;
                                        @endphp
                                        @for ($i = 1; $i <= $maxQuantity; $i++)
                                            <option value="{{ $i }}" @if ($i == $existingOrder['quantity']) selected @endif>{{ $i }}</option>
                                        @endfor
                                        
                                    </select>
                                    
                                </form>
                               
                            </td>
                            {{-- <td class="qnt"><input type="number" name="itemQty" max="5"></td> --}}
							<td class="total">Rs.{{($item->getItemDetails($existingOrder['item_id'])->price) * ($existingOrder['quantity'])}}</td> 
							{{-- <td class="delete"><a href="#" class="ico-del"></a></td> --}}
                            <td class="delete"><button type="button" data-toggle="modal" data-target="#myModal{{$existingOrder['item_id']}}" class="ico-del"></button></td>

							{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								Launch demo modal
							</button> --}}
							<!-- Modal -->
							<div class="modal fade" id="myModal{{$existingOrder['item_id']}}" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">Remove Item</h5>
									
									</div>
									<div class="modal-body">
									Are you sure to remove item "{{$item->getItemDetails($existingOrder['item_id'])->name}}" from the cart?
									</div>
									<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<form action="{{ route('cart.delete') }}" method="post">
										@csrf 
										<input type="hidden" name="item_id" value="{{$existingOrder['item_id']}}">
										@if ($user)
										<input type="hidden" name="user_id" value="{{$user->id}}">
										@endif
										<button type="submit" class="btn btn-danger">Yes I'm Sure</button>
									</form>
									</div>
								</div>
								</div>
							</div>
						</tr>

                        @endforeach
						
					</table>
                
				</div>

				<div class="total-count">
					
					<h3>Total to pay: <strong>Rs.{{$subTotal}}</strong></h3>
					<a style="text-decoration: none" href="{{ route('cart.receiver') }}" class="btn-grey">Confirm Order</a>
				</div>
            
            @else
            <div class="">
                <img src="{{ asset('images/empty_cart.png') }}" alt=""> 
				<div class="mb-5 text-center">
                	<h3 class="text-xl"><strong>Your Cart is Currently Empty</strong></h3>
				</div>
                
            </div>

            @endif

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