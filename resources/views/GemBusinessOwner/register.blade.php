<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Jiwesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
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
                    <li>

                        <a href="{{ asset('user/register') }}"> 
                            <button class="bg-yellow-500 active:bg-yellow-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                              Register as a customer
                            </button>
                        </a>

                    </li>
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

<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
    <div class="rounded-t bg-yellow-100 mb-0 px-6 py-6">
      <div class="text-center ">
        <h6 class="text-blueGray-700 text-xl font-bold">
          Gem Business Registration
        </h6>
        
        


      </div>
    </div>
    <div class="formbg flex-auto px-4 lg:px-10 py-10 pt-0">

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

        

      <form action="{{route('gem.save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          Business Information
        </h6>
        <div class="flex flex-wrap">
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Market Name <span style="opacity: 0.4">(Ex- Vinil Manik)</span>
                  </label>
                  <input type="text" name="market_name"  class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 "  value="{{ old('market_name') }}">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Owner's Name <span style="color: red">*</span>
                  </label>
                  <input type="text" name="owner_name" required class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('owner_name') }}">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Jem and Jewellery Association Number <span style="color: red">*</span>
                  </label>
                  <input type="text" name="gem_asso_num" required class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 "  value="{{ old('gem_asso_num') }}">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Business Registration Number
                  </label>
                  <input type="text" name="business_num" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('business_num') }}">
                </div>
              </div>
        </div>

        {{-- <hr class="mt-6 border-b-1 border-blueGray-300">

        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          Contact Information
        </h6> --}}
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Address <span style="color: red">*</span>
                  </label>
                  <input type="address" required name="address" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('address') }}">
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Email <span style="color: red">*</span>
                  </label>
                  <input type="email" name="email" required class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 "  value="{{ old('email') }}">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Contact No <span style="color: red">*</span>
                  </label>
                  <input type="tel" name="contact_no" required class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('contact_no') }}">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Business Registration Certificate <span style="color: red">*</span>
                  </label>
                  <input type="file" name="certificate_image" required class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('certificate_image') }}">
                </div>
              </div>

        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
            Best Time to Talk
          </h6>
        <div class="flex flex-wrap">
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    From
                  </label>
                  <input type="time" name="time_from" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('start_time') }}">
                </div>
              </div>
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    To
                  </label>
                  <input type="time" name="time_to" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="{{ old('end_time') }}">
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
                  <input type="password" name="password" class="border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Confirm Password <span style="color: red">*</span>
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