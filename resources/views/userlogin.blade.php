<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Jiwesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
	@php
      $user = session()->get('user');
	  $manager = session()->get('manager');
    @endphp

	<style>
		@media only screen and (max-width: 767px) {
			.bgimg{
				display: none;
			}
		}

		
      .formbg{
        background-color: rgba(255, 253, 242, 0.96);
        background-image: url('{{ asset('images/logo_no_bg.png') }}'); 
        background-repeat: no-repeat; 
        background-size: cover;
        background-position: center;
        background-blend-mode: overlay;
        position: relative;
      }
    
	</style>
</head>
<body >
	
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
						<li><a href="{{ route('user.register') }}"><span class="ico-signout"></span>Register</a></li>
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

	<div style="border: 1px solid; font-family:Novecentowide"  class="formbg mb-5  grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32"  >
		<div class="bgimg mr-5 mt-5"> 
			<img src="{{ asset('images/logo_no_bg.png') }}" style="width: 400px; height: 400px; " >
		</div>
		<div style="border: 1px solid; box-shadow: 10px 10px 10px;" class="p-5 rounded-lg"> 
			<form action="{{route('loginallusers')}}" method="POST" class="space-y-6">
				@csrf
	
				{{-- Login credentials error message --}}
				@if($errors->any())
					<div class="alert alert-danger">
						<ul>
						@foreach ($errors->all() as $index => $error)
						<div id="alert-{{ $index }}" class="flex items-center p-4 mb-4 mt-2 text-red-800 rounded-lg bg-red-100" role="alert">
							<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
								<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
							</svg>
							<span class="sr-only">Info</span>
							<div class="ms-3 text-sm font-bold">
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
	
				{{-- un authorized access error message --}}
				@if (request('error'))
				
				<div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-100 " role="alert">
					<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
					  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
					</svg>
					<span class="sr-only">Info</span>
					<div class="ms-3 text-sm font-bold">
						{{ request('error')  }}
					</div>
					<button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-2" aria-label="Close">
					  <span class="sr-only">Close</span>
					  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
					  </svg>
					</button>
				</div>
				
				@endif

				@if(session('error'))
				<div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-100 " role="alert">
					<svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
					  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
					</svg>
					<span class="sr-only">Info</span>
					<div class="ms-3 text-sm font-bold">
						{{ session('error') }}
					</div>
					<button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-2" aria-label="Close">
					  <span class="sr-only">Close</span>
					  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
					  </svg>
					</button>
				</div>
					
				@endif
			
	
				<div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Email
					</label> 
					<input type="email" id="email" name="email" value="{{ old('email') }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " required />
					{{-- <input type="email" name="email" value="{{ old('email') }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" > --}}
				</div>
	
				<div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Password
					</label>
					<input type="password" name="password" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " required value="">
				</div>
				<div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="role">
					  You are a
					</label>
					
						<div class="grid grid-cols-2">
							<label class="inline-flex ">
								<input type="radio" name="role" required class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:ring-yellow-300 dark:focus:ring-yellow-600 ease-linear transition-all duration-150" value="user">
								<span class="ml-2"> <strong>Customer</strong> </span>
							</label>
							<label class="inline-flex  ml-2 ">
								<input type="radio" name="role" required class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:ring-yellow-300 dark:focus:ring-yellow-600 ease-linear transition-all duration-150" value="manager">
								<span class="ml-2"> <strong> Manager</strong> </span>
							</label>
						</div>
						<div class="grid grid-cols-2 mt-4">
								<label class="inline-flex ">
									<input type="radio" name="role" required class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:ring-yellow-300 dark:focus:ring-yellow-600 ease-linear transition-all duration-150" value="gembusiness">
									<span class="ml-2"> <strong> Gem Business</strong></span>
								</label>
								<label class="inline-flex  ml-2">
									<input type="radio" name="role" required class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:ring-yellow-300 dark:focus:ring-yellow-600 ease-linear transition-all duration-150" value="leader">
									<span class="ml-2"><strong> Team Leader</strong></span>
								</label>
						</div>
					
				  </div>
				@if ($user)
				<button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded" disabled>Login</button>
	
					@else
					<button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">Login</button>
				@endif
				
				
		   
				<div style="width: 100%; display:flex; justify-content:center; margin-top: 20px">
					
					<div style="border: 1px solid;" class="bg-yellow-100 border border-blue-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
						<span class="block sm:inline">Don't have an account?</span>
						<a href="{{ asset('user/register') }}">
							<strong class="font-bold">REGISTER</strong>
						</a>
					</div>
					
				</div>
				
	
				
				
		   
			</form>
		</div>
	</div>
   
    

    



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
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>