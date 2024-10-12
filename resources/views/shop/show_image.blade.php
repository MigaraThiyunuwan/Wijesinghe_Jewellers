<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Wijesinghe Jewellery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
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
			<ul>
			<li><a href="{{ route('shop.bracelet') }}">Bracelet</a></li>
          <li><a href="{{ route('shop.earrings') }}">Earrings</a></li>
          <li><a href="{{ route('shop.rings') }}">Rings</a></li>
			    <li><a href="{{ route('shop.necklaces') }}">necklaces</a></li>
          <li><a href="{{ route('events.home') }}">Events</a></li>
          <li><a href="{{ route('aboutus') }}">About</a></li>
          <li><a href="{{ route('advertisement') }}">Advertisement</a></li>
          <li><a href="{{ route('contactus') }}">Contact Us</a></li>
			</ul>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->
   
    @if ($imagePath == null)
    <div class="container text-center">
        <div>
            <img style="width: 500px" class="border border-gray-900 rounded-md p-2 inline-block" src="{{ asset('images/face_recognition.png') }}" alt="Uploaded Image">
            <div class="mt-5 mb-5 text-center">
                <h1 style="font-size: 40px; font-weight: 500">System can not detect a face</h1>
            </div>
        </div>
        <div class="mt-5 mb-5">
            <a href="{{ route('shop.productDetails', $item_id) }}" class="inline-flex px-5 py-3 text-white bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-700 rounded-md ml-6 mb-3">Back </a>
        </div>
       
        
    </div>
    @else
    @if ($imagePath)
    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-4">
        <div>
            <img style="width: 800px" class="border border-gray-900 rounded-md p-2 inline-block" src="{{ $path }}" alt="Uploaded Image">
            <div class="mt-5 text-center">
                <h1 style="font-size: 40px; font-weight: 500">Uploaded Image</h1>
            </div>
        </div>
        
        <div >
            <img style="width: 800px" class="border border-gray-900 rounded-md p-2 inline-block" src="{{ $imagePath }}" alt="Processed Image">
            <div  class="mt-5 text-center">
                <h1 style="font-size: 40px; font-weight: 500">Proceesed Image</h1>
            </div>
        </div>
        
    </div>
      <div class="text-center mt-5 mb-5">
        <a href="{{ route('shop.productDetails', $item_id) }}" class="inline-flex px-5 py-3 text-white bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-700 rounded-md ml-6 mb-3">Back </a>
        </div>
    @endif
    
    @endif
    
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
</body>
</html>
