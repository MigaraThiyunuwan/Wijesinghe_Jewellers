<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Wijesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('css/about.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
	@php
      $user = session()->get('user');
	  $manager = session()->get('manager');
	  $leader = session()->get('leader');
	  $gemBusiness = session()->get('gemBusiness');
    @endphp

<style>

    .formbg1{
            background-color: rgba(255, 253, 242, 0.9);
            background-image: url('{{ asset('images/logo_no_bg.png') }}'); 
            background-repeat: no-repeat; 
            /* background-size: cover; */
            background-position: center;
            background-blend-mode: overlay;
            position: relative;
        }
   
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

   


<div id="body" class="formbg">
	
	<div class="item formbg1" style="border: 2px solid rgb(223, 222, 222); margin-bottom: 20px; margin-right: 200px; margin-left: 200px; padding-left: 20px; padding-right: 20px; ">
		<div class="container">
			
			<div id="content" class="full">
				<div style="display: flex;" class="product">
					
					<div style=" margin: 30px" onclick="openModal()" >
						<img style="width: 400px; height: 400px;" src="{{ asset('storage/' . $gem->image) }}" alt="">

					</div>
	
					<div id="imageModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-75">
						<div class="relative bg-white">
						  <!-- Large Image -->
						  <img id="modalImage" class="max-w-full max-h-full" style="width: 650px; width: 650px" src="{{ asset('storage/' . $gem->image) }}" alt="Large Image" />
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
							{{$gem->title}}
						</h1>
						<h4>Rs.{{$gem->price}}</h4>
						<div class="entry">
							<p>{{$gem->description}}
								<ul>
									<li><strong> shape: </strong>{{$gem->shape}} </li>
									<li><strong>Weight:</strong> {{$gem->carat}} CTS</li>
									<li><strong>Size:</strong> {{$gem->length}}mm x {{$gem->width}}mm</li>
									<li><strong>Contact:</strong> {{$gem->contact_no}}</li>
									<li><strong> Posted By: </strong>{{$ownerName}} </li>
								</ul>
	
							</p>
							
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
                        <li><a href="{{ route('faq') }}">How can I customize a piece of jewelry?</a></li>
                        <li><a href="{{ route('faq') }}">What types of jewelry can I customize? </a></li>
                        <li><a href="{{ route('faq') }}">How long does it take to create a custom piece of jewelry?</a></li>
                        <li><a href="{{ route('faq') }}">Do you offer international shipping?  </a></li>
                        <li><a href="{{ route('faq') }}">More FAQs</a></li>
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
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>