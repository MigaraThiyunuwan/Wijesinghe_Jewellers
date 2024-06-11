<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Jiwesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('css/about.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
	@php
      $user = session()->get('user');
	  $manager = session()->get('manager');
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
            <div class="product">
				
                <div class="image">
                    <img src="{{ asset('images/shop/' . $item->image) }}" alt="">

                </div>
                <div class="details">
                    <h1>{{$item->name}}</h1>
                    <h4>{{$item->price}}</h4>
                    <div class="entry">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <div class="tabs">
							<div class="nav">
								<ul>
									<li style="height: 40px; justify-content: center; display: flex; padding-top: 5px" class="active" onclick="changeTab('desc', this)">Description</li>
									<li style="height: 40px; justify-content: center; display: flex; padding-top: 5px" onclick="changeTab('spec', this)">Specification</li>
									<li style="height: 40px; justify-content: center; display: flex; padding-top: 5px" onclick="changeTab('ret', this)">Customize</li>
								</ul>
							</div>
							<div class="tab-content active" id="desc">
								<p>{{$item->description}}</p>
							</div>
							<div class="tab-content" id="spec">
								<p>{{$item->specification}}</p>
							</div>
							<div class="tab-content" id="ret">
								<p>
									@if($item->customize = "true")
										<a href="#" class="btn-grey">Make Customize Request</a>
									@else
										<p>Customization not available</p>
									@endif

								</p>
							</div>
						</div>
						
                    </div>
                    <div class="actions">
                        <label>Add this item to cart</label>
                        {{-- <select><option>1</option></select> --}}
                        <a href="#" class="btn-grey">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- / content -->
    </div>
</div>
<!-- / body -->

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