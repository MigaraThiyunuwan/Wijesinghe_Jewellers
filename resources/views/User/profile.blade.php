<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('css/profile.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/0008de2df6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    @php
      $user = session()->get('user');
    @endphp
    
    @if (!$user)
        @php
            $loginUrl = route('user.login') . '?error=First You Need to Login to Your Account.';
            header("Location: $loginUrl");
            exit();
        @endphp
    @endif

    
    <title>Wijesinghe jewelry</title>
   
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
                    @if ($user)
                    <li><a href="{{ route('logout') }}"><span class="ico-signout"></span>Logout</a></li>

                    @else
                        <li><a href="{{ asset('user/login') }}"><span class="ico-signout"></span>Login</a></li>
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

    <main class="profile-page">
        <section class="relative block h-500-px">
          <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
                  background-image: url('https://www.bhimagold.com/_next/image?url=https%3A%2F%2Fd1bpnn2a5id540.cloudfront.net%2F1653277918007%2F15b535e0-d50a-11ed-a6b7-2909c1103121.jpg&w=1680&q=75');
                ">
            <span id="blackOverlay" class="w-full h-full absolute opacity-20 bg-black"></span>
          </div>
          {{-- <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" >
              <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
          </div> --}}
        </section>
        <section class="relative py-16 bg-white-200">
          <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
              <div class="px-6">
                <div class="flex flex-wrap justify-center">
                  <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                    <div class="relative">
                      <img alt="..." src="{{ asset('images/profile/user_default.png') }}" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                    <div class="py-6 px-3 mt-32 sm:mt-0">
                      <a href="{{ asset('user/edit') }}"> <button class="bg-yellow-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                        Edit
                      </button>
                    </a>
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4 lg:order-1">
                    <div class="flex justify-center py-4 lg:pt-4 pt-8">
                      <div class="mr-4 p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">22</span><span class="text-sm text-blueGray-400">Friends</span>
                      </div>
                      <div class="mr-4 p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">10</span><span class="text-sm text-blueGray-400">Photos</span>
                      </div>
                      <div class="lg:mr-4 p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">89</span><span class="text-sm text-blueGray-400">Comments</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center mt-12">

                  {{-- Show Registration Success Messsage --}}
                  @if (session('success'))
                    <div style="display: flex; justify-content: center">
                      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                
                        <strong class="font-bold">{{ session('success') }}</strong>
                        
                      </div>
                    </div>
                  @endif
                  {{-- Show Registration Success Messsage End --}}
             
                  <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                    {{ $user['first_name'] }} {{ $user['last_name'] }}
                  </h3>
                  <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                    <i class="fa-solid fa-globe"></i>
                    {{-- <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i> --}}
                    {{ $user['city'] }}, {{ $user['country'] }}
                  </div>
                  <div class="mb-2 text-blueGray-600 mt-10">
                    <i class="fas fa-location-dot mr-2 text-lg text-blueGray-400"></i>{{ $user['address'] }}
                  </div>
                  <div class="mb-2 text-blueGray-600">
                    <i class="fas fa-phone-volume mr-2 text-lg text-blueGray-400"></i>{{ $user['contact_no'] }}
                  </div>
                </div>
                <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                  <div class="flex flex-wrap justify-center">
                    <div class="w-full lg:w-9/12 px-4">
                      <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                        {{ $user['about'] }}
                      </p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
        </section>

        <div class="container mb-4">
          
          @if($orderList)
          <div style="justify-content: center; display: flex">
            <h1 style="font-size: 30px; font-weight: bold">My Orders</h1>
          </div>
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Reciver 
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Contact
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Transaction
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                          Delivery Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($orderList as $order)
                    
                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $order->created_at}}
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $order->receiverName}}
                        <p style="font-weight: 400">{{ $order->deliveryAddress}}</p>
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $order->contact_no}}
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{-- {{ $order->transaction}} --}}
                        @if ($order->transaction == 'false')
                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Unsuccess</span>
                        @else
                        <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Success</span>
                        @endif
                        
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{-- {{ $order->orderStatus}} --}}
                        @if ($order->orderStatus == 'pending')
                        <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Pending</span>

                        @elseif ($order->orderStatus == 'accepted')
                        <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Accepted</span>

                        @else

                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Rejected</span>

                        @endif
                      
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        
                        <button type="button" data-modal-target="timeline-modal" data-modal-toggle="timeline-modal"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delivery Status</button>
                      </th>
                  </tr>
                  @endforeach
                    
                    
                </tbody>
            </table>
          
            
            
        </div>
        @else

    <h1>No orders</h1>
        @endif

        
        
        </div>

        
    </main>





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
					<p>Diana’s Jewelry INC.<br>54233 Avenue Street<br>New York</p>
					<p><span class="ico ico-em"></span><a href="#">contact@dianasjewelry.com</a></p>
					<p><span class="ico ico-ph"></span>(590) 423 446 924</p>
				</div>
				<div class="col newsletter">
					<h3>Join our newsletter</h3>
					<p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium.</p>
					<form action="#">
						<input type="text" placeholder="Your email address...">
						<button type="submit"></button>
					</form>
				</div>
			</div>
			<p class="copy">Copyright 2013 Jewelry. All rights reserved.</p>
		</div>
	</footer>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>
