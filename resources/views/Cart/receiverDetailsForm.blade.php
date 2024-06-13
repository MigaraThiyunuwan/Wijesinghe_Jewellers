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
                    <li><a href="{{ asset('cart') }}"><span class="ico-products"></span>Cart</a></li>
					<li><a href="{{ asset('user/profile') }}"><span class="ico-account"></span>Hello, {{$user->username}}</a></li>
					@endif
					@if ($manager)
					<li><a href="{{ asset('manager/profile') }}"><span class="ico-account"></span>Hello, {{$manager->username}}</a></li>
					@endif
					

					@if ($user || $manager)
						<li><a href="{{ route('logout') }}"><span class="ico-signout"></span>Logout</a></li>
					@else
						<li><a href="{{ route('user.login') }}"><span class="ico-signout"></span>Login</a></li>
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
			<ul>
				<li><a href="products.html">New collection</a></li>
				<li><a href="{{ route('shop.necklaces') }}">necklaces</a></li>
				<li><a href="products.html">earrings</a></li>
				<li><a href="{{ route('events.home') }}">Events</a></li>
				<li><a href="{{ route('aboutus') }}">About</a></li>
				<li><a href="products.html">Promotions</a></li>
			</ul>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->
    
    <div id="body">
        
		<div class="container">
            
			<div id="content" class="full">

					@if (session('removeItemError'))
					  <div style="display: flex; justify-content: center; color: red; background-color: rgb(245, 215, 215)">
						<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
				  
						  <strong class="font-bold">{{ session('removeItemError') }}</strong>
						  
						</div>
					  </div>
					@endif		

					@if (session('removeItemSuccess'))
                      
                      <div style="display: flex; justify-content: center; color:green; background-color: rgb(182, 245, 182)">
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                  
                          <strong class="font-bold">{{ session('removeItemSuccess') }}</strong>
                          
                        </div>
                      </div>
                  	@endif

               
                	@if (session('updateItemError'))
					  <div style="display: flex; justify-content: center; color: red; background-color: rgb(245, 215, 215)">
						<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
				  
						  <strong class="font-bold">{{ session('updateItemError') }}</strong>
						  
						</div>
					  </div>
					@endif		

					@if (session('updateItemSuccess'))
                      
                      <div style="display: flex; justify-content: center; color:green; background-color: rgb(182, 245, 182)">
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                  
                          <strong class="font-bold">{{ session('updateItemSuccess') }}</strong>
                          
                        </div>
                      </div>
                  	@endif
                @php
                    
                    $orders = session('orders', []);
                @endphp

                @if(count($orders) > 0)
                
				<div class="cart-table1">
					

					
                    
					<table>
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
									<img width="100px"; height="100px" src="{{ asset('images/shop/' . $item->getItemDetails($existingOrder['item_id'])->image) }}" alt="">
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
					<a href="#" class="btn-grey">Finalize and pay</a>
				</div>
            
            @else
            <div class="total-count">
                
                <h3><strong>Your Cart is Empty</strong></h3>
                
            </div>

            @endif

			</div>
			<!-- / content -->
			
			
			
		</div>
		<!-- / container -->




		







	</div>
	<!-- / body -->
	<section class=" py-1 ">
		<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
		<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
		  <div class="rounded-t bg-white mb-0 px-6 py-6">
			<div class="text-center flex justify-between">
			  <h6 class="text-blueGray-700 text-xl font-bold">
				Delivery Details
			  </h6>
	  
				  
				
			  
	  
	  
			</div>
		  </div>
		  <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
	  
			  @if($errors->any())
			  <div class="alert alert-danger">
				  <ul>
					  @foreach ($errors->all() as $error)
					  {{-- <li>{{$error}}</li> --}}
					  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
				  
						  <strong class="font-bold">{{$error}}</strong>
						  
						  
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
	  
			  
	  
			<form action="{{route('user.save')}}" method="POST">
			  @csrf
			  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
				User Information
			  </h6>
			  <div class="flex flex-wrap">
					<div class="w-full lg:w-6/12 px-4">
					  <div class="relative w-full mb-3">
						<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
						  First Name <span style="color: red">*</span>
						</label>
						<input type="text" name="first_name" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  value="{{ old('first_name') }}">
					  </div>
					</div>
					<div class="w-full lg:w-6/12 px-4">
					  <div class="relative w-full mb-3">
						<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
						  Last Name
						</label>
						<input type="text" name="last_name" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ old('last_name') }}">
					  </div>
					</div>
				
				<div class="w-full lg:w-12/12 px-4">
				  <div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Username <span style="color: red">*</span>
					</label>
					<input type="text" name="username" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ old('username') }}">
				  </div>
				</div>
				
			  </div>
	  
			  <hr class="mt-6 border-b-1 border-blueGray-300">
	  
			  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
				Contact Information
			  </h6>
			  <div class="flex flex-wrap">
				<div class="w-full lg:w-6/12 px-4">
				  <div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Address
					</label>
					<input type="address" name="address" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  value="{{ old('address') }}">
				  </div>
				</div>
				<div class="w-full lg:w-6/12 px-4">
				  <div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Email <span style="color: red">*</span>
					</label>
					<input type="email" name="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ old('email') }}">
				  </div>
				</div>
	  
				
				<div class="w-full lg:w-4/12 px-4">
				  <div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  City
					</label>
					<input type="text" name="city" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ old('city') }}">
				  </div>
				</div>
				<div class="w-full lg:w-4/12 px-4">
				  <div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Country
					</label>
					<input type="text" name="country" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ old('country') }}">
				  </div>
				</div>
				<div class="w-full lg:w-4/12 px-4">
				  <div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Mobile No
					</label>
					<input type="tel" name="contact_no" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{ old('contact_no') }}">
				  </div>
				</div>
	  
			  </div>
	  
			  <hr class="mt-6 border-b-1 border-blueGray-300">
			  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
				  Password
				</h6>
			  <div class="flex flex-wrap">
				  <div class="w-full lg:w-6/12 px-4">
					  <div class="relative w-full mb-3">
						<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
						  Password <span style="color: red">*</span>
						</label>
						<input type="password" name="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
					  </div>
					</div>
					<div class="w-full lg:w-6/12 px-4">
					  <div class="relative w-full mb-3">
						<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
						  Confirm Password <span style="color: red">*</span>
						</label>
						<input type="password" name="password_confirmation" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
					  </div>
					</div>
			   
				
			  </div>
	  
	  
			  <hr class="mt-6 border-b-1 border-blueGray-300">
	  
			  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
				About Me
			  </h6>
			  <div class="flex flex-wrap">
				<div class="w-full lg:w-12/12 px-4">
				  <div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  About me
					</label>
					<textarea type="text" name="about" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"> </textarea>
				  </div>
				</div>
	  
				  <div style="width: 100%; display:flex; justify-content:center">
					  <button type="submit" style="width: 200px" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded" type="button">
						  Register
					  </button>
					  
				  </div>
	  
				  <div style="width: 100%; display:flex; justify-content:center; margin-top: 20px">
	  
					<div class="bg-yellow-100 border border-blue-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
					  <span class="block sm:inline">Already have an account?</span>
					  <a href="{{ asset('user/login') }}">
						<strong class="font-bold">LOGIN</strong>
					  </a>
					</div>
					  
				  </div>
				  
			  </div>
	  
			  
			</form>
		  </div>
		</div>
	  
	  </div>
	  </section>

    <footer id="footer">
		<div class="container">
			<div class="cols">
				<div class="col">
					<h3>Frequently Asked Questions</h3>
					<ul>
						<li><a href="#">Fusce eget dolor adipiscing </a></li>
						<li><a href="#">Posuere nisl eu venenatis gravida</a></li>
						<li><a href="#">Morbi dictum ligula mattis</a></li>
						<li><a href="#">Etiam diam vel dolor luctus dapibus</a></li>
						<li><a href="#">Vestibulum ultrices magna </a></li>
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