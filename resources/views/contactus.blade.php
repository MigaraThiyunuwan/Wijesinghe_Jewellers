<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    @php
        $manager = session()->get('manager');
        $user = session()->get('user');
        $gemBusiness = session()->get('gemBusiness');
        $leader = session()->get('leader');
    @endphp
    <title>Wijesinghe Jewellers</title>

    <style>
        .mapborder{
            border: 2px solid;
            border-style: ridge;
            padding: 0px
        }

        @media only screen and (max-width: 767px) {
			.mapborder{
				display: none;
			}
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

            <li><a href="{{ route('shop.bracelet') }}">Bracelet</a></li>
          <li><a href="{{ route('shop.earrings') }}">Earrings</a></li>
          <li><a href="{{ route('shop.rings') }}">Rings</a></li>
			    <li><a href="{{ route('shop.necklaces') }}">necklaces</a></li>
          <li><a href="{{ route('events.home') }}">Events</a></li>
          <li><a href="{{ route('aboutus') }}">About</a></li>
          <li><a href="{{ route('advertisement') }}">Advertisement</a></li>
          <li><a href="{{ route('contactus') }}">Contact Us</a></li>
        </div>
    </nav>

    <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl"
        style="height: 450px;">
        <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">

        </div>

        <template x-for="(image) in images">
            <figure class="h-96" x-transition:enter="transition transform duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
                <img :src="image" alt="Image"
                    class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
                <figcaption
                    class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
                    <h1 style="font-size: 50px;">Contact Us</h1>
                    Where Elegance Meets Excellence: Discover Your Timeless Beauty Here.
                </figcaption>
            </figure>
        </template>

    </article>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('slider', () => ({
                currentIndex: 1,
                images: [
                    'images/contact/img1.jpg',
                ],

            }))
        })
    </script>
    <br>
    <div style="border: 1px solid; font-family:Novecentowide"  class="mb-5 mt-5 bg-yellow-50 grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32"  >
		<div class="mr-5"> 
			<div class="py-6 md:py-0 md:px-6">
                <h1 class="text-4xl" style="color: goldenrod">Get in touch</h1>
                <p class="pt-2 pb-4">Fill in the form to start a conversation</p>
                <div class="space-y-4">
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 sm:mr-6">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>No 89 Main Street, Mawanella 71500</span>
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 sm:mr-6">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span> 077 192 2433</span>
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 sm:mr-6">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <span>jewellerswijesinghe@gmail.com</span>
                    </p>
                </div>
            </div>
            <div   class="mapborder mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15831.621466835917!2d80.4456764!3d7.2516106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3153f4623446d%3A0x4e8724b2b8e5157c!2sWijesinghe%20Jewellers%20Mawanella%20-%20Gold%20jewellery%20in%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1723357449153!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
		</div>
		<div style="border: 1px solid; box-shadow: 10px 10px 10px;" class="p-5 rounded-lg"> 
			<form action="{{route('loginallusers')}}" method="POST" class="space-y-6">
				@csrf
	
				{{-- Login credentials error message --}}
				@if ($errors->any())
					<div>
						<ul>
							@foreach ($errors->all() as $error)
							<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
								<strong class="font-bold">{{ $error }}</strong>
							</div>
								
							@endforeach
						</ul>
					</div>
				@endif
	
				{{-- un authorized access error message --}}
				@if (request('error'))
				
				<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
					<strong class="font-bold">{{ request('error')  }}</strong>
				</div>
				@endif
			
	
				<div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Name
					</label> 
					<input type="text" id="name" name="name"  class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " required />
					{{-- <input type="email" name="email" value="{{ old('email') }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" > --}}
				</div>
	
				<div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Email
					</label>
					<input type="email" name="email" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " required >
				</div>
				<div class="relative w-full mb-3">
					<label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
					  Message
					</label>
					<textarea type="text" name="message" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " rows="4"> </textarea>
				</div>
				
					<button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">Send Message</button>
				
				
				
		   
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
</body>
</html>
