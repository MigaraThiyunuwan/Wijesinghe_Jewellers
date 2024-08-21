<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Wijesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    @php
    $manager = session()->get('manager');
  @endphp
  @if (!$manager)
    @php
        $loginUrl = route('manager.login') . '?error=You need to login to access this page.';
        header("Location: $loginUrl");
        exit();
    @endphp
  @endif
  <style>
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
<body>

    <header id="header">
		<div class="container">
			<a href="/" id="logo" title="Wijesinghe Jewellers">Wijesinghe Jewellers</a>
			<div class="right-links">
				<ul>
					
					
          @if ($manager)
					<li><a href="{{ asset('manager/profile') }}"><span class="ico-account"></span>Hello, {{$manager->username}}</a></li>
					@endif
                    @if ($manager)
                    <li><a href="{{ route('logout') }}"><span class="ico-signout"></span>Logout</a></li>

                    @else
                        <li><a href="{{ asset('manager/login') }}"><span class="ico-signout"></span>Login</a></li>
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


    <!-- component -->

    

<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div style="border: 1px solid; box-shadow: 10px 10px 10px" class="formbg relative flex flex-col min-w-0 break-words w-full mb-6 bg-blueGray-100 border-0">
    <div class="rounded-t bg-yellow-100 mb-0 px-6 py-6">
      <div class="text-center ">
        <h6 class="text-blueGray-700 text-xl font-bold">
          Manager Registration
        </h6>
        
      </div>
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

      @if($errors->any())
      <div style="font-family:Novecentowide; " class="alert alert-danger">
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

        

      <form action="{{route('manager.save')}}" method="POST">
        @csrf
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          Manager Information
        </h6>
        <div class="flex flex-wrap">
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    First Name
                  </label>
                  <input type="text" name="first_name" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 "  value="{{ old('first_name') }}">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Last Name
                  </label>
                  <input type="text" name="last_name" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('last_name') }}">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Username
                  </label>
                  <input type="text" name="username" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 "  value="{{ old('username') }}">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    NIC No
                  </label>
                  <input type="text" name="nic" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('nic') }}">
                </div>
              </div>
          
          
          
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          Contact Information
        </h6>
        <div class="flex flex-wrap">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Address
                  </label>
                  <input type="text" name="address" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('address') }}">
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Email
                  </label>
                  <input type="email" name="email" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 "  value="{{ old('email') }}">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Mobile No
                  </label>
                  <input type="tel" name="contact_no" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('contact_no') }}">
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
                    Password
                  </label>
                  <input type="password" name="password" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Confirm Password
                  </label>
                  <input type="password" name="password_confirmation" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="">
                </div>
              </div>
         
          
        </div>

        <div class="flex flex-wrap">
          

            <div style="width: 100%; display:flex; justify-content:center; margin-top: 20px">
                <button type="submit" style="width: 200px" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded" type="button">
                    Register
                </button>
                
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