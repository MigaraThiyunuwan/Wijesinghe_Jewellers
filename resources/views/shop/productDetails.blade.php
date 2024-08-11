<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Jiwesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('css/about.css') }}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
	@php
      $user = session()->get('user');
	  $manager = session()->get('manager');
	  $leader = session()->get('leader');
	  $gemBusiness = session()->get('gemBusiness');
    @endphp

<style>
    #content .products .row {
        display: flex;
        flex-wrap: wrap;
    }
    #content .products .row article {
        flex: 1 0 20%; /* Five articles per row (20% each) */
        box-sizing: border-box;
        padding: 10px; /* Optional: Add some padding */
        border: 1px solid black; /* Add black border */
    }
    #content .products .row article img {
        width: 100%;
        height: auto;
    }
    /* Optional: Add some styles to ensure it looks good */
    #content .products {
        margin: 0 auto;
        max-width: 1200px; /* Adjust as needed */
    }
</style>
</head>
<body>

    <header id="header">
		<div class="container">
			<a href="/" id="logo" title="Wijesinghe Jewellers">Wijesinghe Jewellers</a>
			<div class="right-links">
				<ul>
					@if ($user)
					<li><a href="{{route('cart.cart')}}"><span class="ico-products"></span>Cart</a></li>
					<li><a href="{{ route('user.profile')  }}"><span class="ico-account"></span>Hello, {{$user->username}}</a></li>
					@endif
					@if ($manager)
					<li><a href="{{ route('manager.profile')  }}"><span class="ico-account"></span>Hello, {{$manager->username}}</a></li>
					@endif
					@if ($leader)
					<li><a href="{{ route('leader.profile') }}"><span class="ico-account"></span>Hello, {{$leader->first_name}}</a></li>
					@endif
					@if ($gemBusiness)
					<li><a href="{{ route('gem.profile') }}"><span class="ico-account"></span>Hello, {{$gemBusiness->owner_name}}</a></li>
					@endif
					

					@if ($user || $manager || $leader || $gemBusiness)
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
	

	<div class="item bg-yellow-50" style="border: 2px solid rgb(223, 222, 222); font-family:Novecentowide; box-shadow: 5px 5px 5px; margin-bottom: 20px; margin-right: 200px; margin-left: 200px; padding-left: 20px; padding-right: 20px;">
		<div class="container">
			
			<div id="content" class="full">
				<div style="display: flex;" class="product">
					
					<div class="mt-5 mb-5" onclick="openModal()" style="border: 1px solid; width: 420px; height: 335px;;" >
						<img src="{{ asset('storage/' . $item->image) }}"  alt="">

					</div>
					<div id="imageModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-75">
						<div class="relative bg-white">
						  <!-- Large Image -->
						  <img id="modalImage" class="max-w-full max-h-full" src="{{ asset('storage/' . $item->image) }}" alt="Large Image" />
						  <!-- Close Button -->
						  <span
							class="absolute top-0 right-0 m-4 text-gray text-3xl cursor-pointer"
							onclick="closeModal()"
						  >&times;</span>
						</div>
					  </div>
					  <script>
						function openModal() {
							document.getElementById('imageModal').classList.remove('hidden');
						}
						
						function closeModal() {
							document.getElementById('imageModal').classList.add('hidden');
						}
					  </script>
					<div style="padding-left: 50px; margin-top: 30px" class="details">
						<h1>
							{{$item->name}}
						</h1>
						@if ($item->getItemDetails($item->id)->quantity == 0)
						
						<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
							
							<span class="block sm:inline font-bold">Out of Stock</span>
						</div>
						
						@endif

						
						@if (session('addItemError'))
							<div style="display: flex; justify-content: center">
								<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
						
								<strong class="font-bold">{{ session('addItemError') }}</strong>
								
								</div>
							</div>
						@endif		

						@if (session('addItemSucces'))
						
						<div id="alert-3"  style="font-family:Novecentowide; " class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-100 " role="alert">
							<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
							</svg>
							<span class="sr-only">Info</span>
							<div class="ms-3 text-sm font-medium">
								{{ session('addItemSucces') }}
							</div>
							<button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-3" aria-label="Close">
							  <span class="sr-only">Close</span>
							  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
							  </svg>
							</button>
						  </div>
						@endif




						<h4>Rs.{{$item->price}}</h4>
						<div class="entry">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<div class="tabs">
								<div class="nav">
									<ul>
										<li style="height: 40px; justify-content: center; display: flex; padding-top: 5px; background-color: rgb(248, 244, 233)" class="" onclick="changeTab('desc{{$item->id}}', this)"><strong>Description</strong></li>
										<li style="height: 40px; justify-content: center; display: flex; padding-top: 5px; background-color: rgb(248, 244, 233)" onclick="changeTab('spec{{$item->id}}', this)"><strong>Specification</strong></li>
										<li style="height: 40px; justify-content: center; display: flex; padding-top: 5px; background-color: rgb(248, 244, 233)" onclick="changeTab('ret{{$item->id}}', this)"><strong>Customize</strong></li>
									</ul>
								</div>
								<div class="tab-content active" id="desc{{$item->id}}">
									<p>{{$item->description}} </p>
								</div>
								<div class="tab-content" id="spec{{$item->id}}">
									<p>{{$item->specification}} </p>
								</div>
								<div class="tab-content" id="ret{{$item->id}}">
									<p>
										@if($item->customize == "true")
											<a href="#" class="btn-grey">Make Customize Request</a>
										@else
											<p>Customization not available</p>
										@endif
	
									</p>
								</div>
							</div>
							<script>
								function changeTab(tabId, clickedTab) {
									// Find the parent .tabs element
									var tabsContainer = clickedTab.closest('.tabs');
	
									// Hide all tab contents within this specific tabs container
									var tabContents = tabsContainer.querySelectorAll('.tab-content');
									tabContents.forEach(function(content) {
										content.classList.remove('active');
									});
	
									// Remove active class from all tabs within this specific tabs container
									var tabs = tabsContainer.querySelectorAll('.nav ul li');
									tabs.forEach(function(tab) {
										tab.classList.remove('active');
									});
	
									// Show the selected tab content
									tabsContainer.querySelector('#' + tabId).classList.add('active');
	
									// Add active class to the clicked tab
									clickedTab.classList.add('active');
								}
							</script>
						</div>
						<div style="display: flex; justify-content: flex-end" class="">
							{{-- <label><h1>Buy Now </h1></label> --}}
							{{-- <select><option>1</option></select> --}}

							@if ($user == null)
							<div style="display: flex; justify-content: flex-end">
								<div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
									<svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
									<p>You need to login your account to buy this item.</p>
								</div>
							</div>
							@else

							@if ($item->getItemDetails($item->id)->quantity == 0)
								<a class="btn-grey">Add to cart </a>
							@elseif ($item->getItemDetails($item->id)->quantity > 0)
								<div style="display: flex; justify-content: flex-end">
									<form action="{{ route('cart.add') }}" method="post">
										@csrf 
										<input type="hidden" name="item_id" value="{{$item->id}}">
										@if ($user)
										<input type="hidden" name="user_id" value="{{$user->id}}">
										@endif
										<input type="hidden" name="item_name" value="{{$item->name}}">
										<input type="hidden" name="item_price" value="{{$item->price}}">
										<input type="hidden" name="item_image" value="{{$item->image}}">
										<button type="submit" class="btn-grey">Add to cart</button>
									</form>
								</div>
								
							@endif
								

							@endif

						</div>
					</div>
				</div>
			</div>
			<!-- / content -->
		</div>
	</div>
	
    
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

	
	<script>
		function changeTab(tabId, clickedTab) {
			// Hide all tab contents
			var tabContents = document.querySelectorAll('.tab-content');
			tabContents.forEach(function(content) {
				content.classList.remove('active');
			});
	
			// Remove active class from all tabs
			var tabs = document.querySelectorAll('.nav ul li');
			tabs.forEach(function(tab) {
				tab.classList.remove('active');
			});
	
			// Show the selected tab content
			document.getElementById(tabId).classList.add('active');
	
			// Add active class to the clicked tab
			clickedTab.classList.add('active');
		}
	</script>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>