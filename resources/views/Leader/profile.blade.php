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
    <script src="https://kit.fontawesome.com/0008de2df6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @php
      $leader = session()->get('leader');
    @endphp
    @if (!$leader)
      @php
          $loginUrl = route('userlogin') . '?error=You need to login to access this page.';
          header("Location: $loginUrl");
          exit();
      @endphp
    @endif

    
    <title>Wijesinghe jewelry</title>

    <style>
      /* Custom style */
      .header-right {
          width: calc(100% - 3.5rem);
      }
      .sidebar:hover {
          width: 16rem;
      }
      @media only screen and (min-width: 768px) {
          .header-right {
              width: calc(100% - 16rem);
          }        
      }
  
      /* Light theme colors */
      .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
          border-color: rgba(107, 114, 128);
      }
      .dark .dark\:bg-gray-50 {
          background-color: rgba(249, 250, 251);
      }
      .dark .dark\:bg-gray-100 {
          background-color: rgba(243, 244, 246);
      }
      .dark .dark\:bg-gray-600 {
          background-color: rgb(252, 252, 252);
      }
      /* main background */
      .dark .dark\:bg-gray-700 {
          background-color: rgb(255, 255, 255);
      }
      /* main background */
      .dark .dark\:bg-gray-800 {
          background-color: rgb(241, 241, 241);
      }
      /* side bar background */
      .dark .dark\:bg-gray-900 {
          background-color: rgb(209, 206, 206);
      }
      .dark .dark\:bg-red-700 {
          background-color: rgba(239, 68, 68);
      }
      .dark .dark\:bg-green-700 {
          background-color: rgba(16, 185, 129);
      }
      .dark .dark\:hover\:bg-gray-200:hover {
          background-color: rgb(231, 228, 228);
      }
      .dark .dark\:hover\:bg-gray-600:hover {
          background-color: rgb(179, 175, 175);
      }
      .dark .dark\:hover\:bg-gray-700:hover {
          background-color: rgb(187, 187, 187);
      }
      .dark .dark\:hover\:bg-gray-900:hover {
          background-color: rgb(192, 192, 192);
      }
      .dark .dark\:border-gray-100 {
          border-color: rgb(0, 0, 0);
      }
      .dark .dark\:border-gray-400 {
          border-color: rgba(107, 114, 128);
      }
      .dark .dark\:border-gray-500 {
          border-color: rgb(10, 10, 10);
      }
      .dark .dark\:border-gray-600 {
          border-color: rgb(0, 0, 0);
      }
      .dark .dark\:border-gray-700 {
          border-color: rgb(0, 0, 0);
      }
      .dark .dark\:border-gray-900 {
          border-color: rgb(0, 0, 0);
      }
      .dark .dark\:hover\:border-gray-800:hover {
          border-color: rgb(0, 0, 0);
      }
      .dark .dark\:text-white {
          color: rgb(221, 212, 212);
      }
      .dark .dark\:text-gray-50 {
          color: rgb(34, 34, 34);
      }
      .dark .dark\:text-gray-100 {
          color: rgb(14, 14, 14);
      }
      .dark .dark\:text-gray-200 {
          color: rgb(48, 48, 48);
      }
      .dark .dark\:text-gray-400 {
          color: rgb(71, 71, 71);
      }
      .dark .dark\:text-gray-500 {
          color: rgba(107, 114, 128);
      }
      .dark .dark\:text-gray-700 {
          color: rgba(55, 65, 81);
      }
      .dark .dark\:text-gray-800 {
          color: rgba(31, 41, 55);
      }
      .dark .dark\:text-red-100 {
          color: rgb(83, 83, 83);
      }
      .dark .dark\:text-green-100 {
          color: rgb(85, 85, 85);
      }
      .dark .dark\:text-blue-400 {
          color: rgba(96, 165, 250);
      }
      .dark .group:hover .dark\:group-hover\:text-gray-500 {
          color: rgba(107, 114, 128);
      }
      .dark .group:focus .dark\:group-focus\:text-gray-700 {
          color: rgba(55, 65, 81);
      }
      .dark .dark\:hover\:text-gray-100:hover {
          color: rgb(102, 102, 102);
      }
      .dark .dark\:hover\:text-blue-500:hover {
          color: rgba(59, 130, 246);
      }
  
      /* Text color adjustments for light theme */
      .dark .dark\:text-white {
          color: rgb(36, 36, 36); /* Adjusted for light theme */
      }
  </style>
  
  
  
   
</head>
<body>
    <header id="header">
		<div class="container">
			<a href="/" id="logo" title="Wijesinghe Jewellers">Wijesinghe Jewellers</a>
			<div class="right-links">
				<ul>
					
          @if ($leader)
					<li><a href="{{ route('leader.profile') }}"><span class="ico-account"></span>Hello, {{$leader->first_name}}</a></li>
					@endif
                    @if ($leader)
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
                     
                      <a href="{{ route('leader.edit') }}"> <button class="bg-yellow-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                        Edit Profile
                        </button>
                      </a>
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4 lg:order-1">
                    <div class="flex justify-center py-4 lg:pt-4 pt-8">
                      
                      {{-- <div class="mr-4 p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">23</span><span class="text-sm text-blueGray-400">Pending Orders</span>
                      </div>
                      <div class="mr-4 p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">23</span><span class="text-sm text-blueGray-400">Unverified Business</span>
                      </div>
                      <div class="lg:mr-4 p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">23</span><span class="text-sm text-blueGray-400">Order to be delivered</span>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="text-center mt-12">

                  {{-- <img class="h-auto max-w-full" src="{{ asset('storage/uploads/2.jpg') }}" alt="image description"> --}}

                  <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                    {{$leader->first_name}} {{$leader->last_name}} 
                  </h3>
                  <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                    <i class="fa-solid fa-id-badge"></i>
                    {{-- <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i> --}}
                    {{$leader->nic}}
                  </div>
                  <div class="mb-2 text-blueGray-600 mt-10">
                    <i class="fas fa-location-dot mr-2 text-lg text-blueGray-400"></i>{{$leader->address}}
                  </div>
                  <div class="mb-2 text-blueGray-600">
                    <i class="fas fa-phone-volume mr-2 text-lg text-blueGray-400"></i>{{$leader->contact_no}}
                  </div>
                  
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

                  @if (session('leaderSuccess'))
                      
                      <div style="display: flex; justify-content: center">
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                  
                          <strong class="font-bold">{{ session('leaderSuccess') }}</strong>
                          
                        </div>
                      </div>
                  @endif

                  @if (session('leaderError'))
                      
                      <div style="display: flex; justify-content: center">
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                  
                          <strong class="font-bold">{{ session('leaderError') }}</strong>
                          
                        </div>
                      </div>
                  @endif

                </div>
                <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                  <div class="flex flex-wrap justify-center">
                    <div class="w-full lg:w-9/12 px-4">
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
        </section>
    </main>

    <div x-data="setup()" :class="{ 'dark': isDark }">
      <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
  
      <div class="h-full mb-10 md:ml">
  
  
          <!-- Business Table -->
        @if(count($requests) > 0)
        <div class="mt-4 mx-4">
          
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="flex flex-wrap items-center px-4 py-2">
              <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Pending customization requests</h3> 
              </div>
  
              
            </div>
            
            <div class="w-full overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3"><strong>ID</strong></th>
                    <th class="px-4 py-3"><strong>Details</strong></th>
                    <th class="px-4 py-3"><strong>Chat</strong></th>
                    <th class="px-4 py-3"><strong>Accept</strong></th>
                    <th class="px-4 py-3"><strong>Reject</strong></th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @foreach($requests as $request)
  
                  <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                          <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                          <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                        </div> --}}
                        <div>
                          <p class="font-semibold">{{ $request->id }}</p>
                          
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm"><button data-modal-target="popup-modal11{{$request->id}}" data-modal-toggle="popup-modal11{{$request->id}}"  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">View Details</button></td>
                    
                    {{-- view Modal --}}
                  <div id="popup-modal11{{$request->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    

                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal11{{$request->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 ">
                                {{-- <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg> --}}
                                <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Request Details</h3>
                                <div class="grid gap-4 mb-4 grid-cols">
                                  <div class="bg-white overflow-hidden shadow rounded-lg border">
                                    
                                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                                        <dl class="sm:divide-y sm:divide-gray-200">
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Category
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  @if ($request->style == 'rope' || $request->style == 'box' || $request->style == 'snake' || $request->style == 'figaro')
                                                    Necklace
                                                    @if ($request->gender == 'male')
                                                    For Men
                                                    @else
                                                    For Women
                                                    @endif
                                                  @else
                                                  Ring 
                                                    @if ($request->gender == 'male')
                                                    For Men
                                                    @else
                                                    For Women
                                                    @endif
                                                  @endif
                                                
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                Style
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$request->style}}
                                              </dd>
                                          </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Material
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  {{$request->material}}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Weight
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  {{$request->weight}} pavan
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                  @if (
                                                    $request->style == 'rope' || 
                                                    $request->style == 'box' || 
                                                    $request->style == 'snake' || 
                                                    $request->style == 'figaro'
                                                  )
                                                    Length
                                                  @else
                                                  Circumference
                                                    
                                                  @endif
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  @if (
                                                    $request->style == 'rope' || 
                                                    $request->style == 'box' || 
                                                    $request->style == 'snake' || 
                                                    $request->style == 'figaro'
                                                  )
                                                    {{$request->measurement}} cm
                                                  @else
                                                  {{$request->measurement}} mm
                                                    
                                                  @endif
                                                </dd>
                                            </div>
                                            @if ($request->gemdetails != 'No Gems')
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                Gem Details
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$request->gemdetails}}
                                              </dd>
                                          </div>
                                            @endif

                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                Estimation
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                Rs. {{$request->estimation}}
                                              </dd>
                                          </div>
                                            
                                        </dl>
                                    </div>
                                </div>
                                </div>
                                
                                <button data-modal-hide="popup-modal11{{$request->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</button>
                            </div>
                        </div>
                    </div>
                    
                </div>




                    {{-- <td class="px-4 py-3 text-sm"><button   type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Chat</button></td> --}}
                    <td class="px-4 py-3 text-sm"> <a href="{{route('leader.mychat',$request->id)}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">Chat</a></td>
                    
  
                    <td class="px-4 py-3 text-xs">
                      <button data-modal-target="popup-modal1{{$request->id}}" data-modal-toggle="popup-modal1{{$request->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">Accept Request</button>
  
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <button data-modal-target="popup-modal2{{$request->id}}" data-modal-toggle="popup-modal2{{$request->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">Reject Request</button>
                      
                    </td>
                  </tr>
  
                  {{-- Accept Modal --}}
                  <div id="popup-modal1{{$request->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <form action="{{route('leader.changestatus')}}" method="POST">
                      @csrf
  
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal1{{$request->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                              
                                <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Enter the total bill and <span style="color: green"> accept </span> this request?</h3>
                                <input type="hidden" name="status" value="accept">
                                <div class="mb-4">
                                  <label for="bill" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Bill</label>
                                  <input type="number" name="totalBill" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required />
                                </div>
                                <input type="hidden" name="cus_req_id" value="{{$request->id}}">
                                <button type="submit" data-modal-hide="popup-modal1{{$request->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Accept
                                </button>
                                <button data-modal-hide="popup-modal1{{$request->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
  
                {{-- Reject Modal --}}
                <div id="popup-modal2{{$request->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <form action="{{route('leader.changestatus')}}" method="POST">
                    @csrf
                  
                  <div class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal2{{$request->id}}">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                          <div class="p-4 md:p-5 text-center">
                              <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                              </svg>
                              <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: red"> Reject </span> this request?</h3>
                              <input type="hidden" name="status" value="reject">
                              <input type="hidden" name="cus_req_id" value="{{$request->id}}">
                              <button type="submit" data-modal-hide="popup-modal2{{$request->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                  Yes, I'm sure
                              </button>
                              <button data-modal-hide="popup-modal2{{$request->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                          </div>
                      </div>
                  </div>
                  </form>
              </div>
                
  
                  @endforeach
                  
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        @else
        <p>No Pending customization requests found.</p>
        @endif
        <!-- ./business Table -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
        </div>



      <div class="h-full mb-10 md:ml">
  
  
          <!-- Business Table -->
        @if(count($orders) > 0)
        <div class="mt-4 mx-4">
          
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="flex flex-wrap items-center px-4 py-2">
              <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Accepted Customization Orders</h3> 
              </div>
  
              
            </div>
            
            <div class="w-full overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3"> <strong>ID</strong> </th>
                    <th class="px-4 py-3"><strong>Details</strong> </th>
                    <th class="px-4 py-3"><strong>Chat</strong> </th>
                    <th class="px-4 py-3"><strong>Transaction</strong></th>
                    <th class="px-4 py-3"><strong>3D Model</strong></th>
                    <th class="px-4 py-3"><strong>Current Status</strong></th>
                    <th class="px-4 py-3"><strong>Change Status</strong></th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @foreach($orders as $order)
                  @php
                    $customizeRequest = $customizeRequest->getCustomReq($order->cus_req_id);
                  @endphp
                  <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                          <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                          <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                        </div> --}}
                        <div>
                          <p class="font-semibold">{{ $order->id }}</p>
                          
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm"><button data-modal-target="popup-modal111{{$order->id}}" data-modal-toggle="popup-modal111{{$order->id}}"  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">View Details</button></td>
                    
                    {{-- view Modal --}}
                    <div id="popup-modal111{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    

                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal111{{$order->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 ">
                                {{-- <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg> --}}
                                <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Request Details</h3>
                                <div class="grid gap-4 mb-4 grid-cols">
                                  <div class="bg-white overflow-hidden shadow rounded-lg border">
                                    
                                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                                        <dl class="sm:divide-y sm:divide-gray-200">
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Category
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  @if ($customizeRequest->style == 'rope' || $customizeRequest->style == 'box' || $customizeRequest->style == 'snake' || $customizeRequest->style == 'figaro')
                                                    Necklace
                                                    @if ($customizeRequest->gender == 'male')
                                                    For Men
                                                    @else
                                                    For Women
                                                    @endif
                                                  @else
                                                  Ring 
                                                    @if ($customizeRequest->gender == 'male')
                                                    For Men
                                                    @else
                                                    For Women
                                                    @endif
                                                  @endif
                                                
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                Style
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$customizeRequest->style}}
                                              </dd>
                                          </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Material
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  {{$customizeRequest->material}}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Weight
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  {{$customizeRequest->weight}} pavan
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                  @if (
                                                    $customizeRequest->style == 'rope' || 
                                                    $customizeRequest->style == 'box' || 
                                                    $customizeRequest->style == 'snake' || 
                                                    $customizeRequest->style == 'figaro'
                                                  )
                                                    Length
                                                  @else
                                                  Circumference
                                                    
                                                  @endif
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  @if (
                                                    $customizeRequest->style == 'rope' || 
                                                    $customizeRequest->style == 'box' || 
                                                    $customizeRequest->style == 'snake' || 
                                                    $customizeRequest->style == 'figaro'
                                                  )
                                                    {{$customizeRequest->measurement}} cm
                                                  @else
                                                  {{$customizeRequest->measurement}} mm
                                                    
                                                  @endif
                                                </dd>
                                            </div>
                                            @if ($customizeRequest->gemdetails != 'No Gems')
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                Gem Details
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$customizeRequest->gemdetails}}
                                              </dd>
                                          </div>
                                            @endif

                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                Total Bill
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                Rs. {{$order->totalBill}}
                                              </dd>
                                          </div>
                                            
                                        </dl>
                                    </div>
                                </div>
                                </div>
                                
                                <button data-modal-hide="popup-modal111{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</button>
                            </div>
                        </div>
                    </div>
                    
                </div>




                    {{-- <td class="px-4 py-3 text-sm"><button   type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Chat</button></td> --}}
                    <td class="px-4 py-3 text-sm"> <a href="{{route('leader.mychat',$order->cus_req_id)}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">Chat</a></td>
                    
                    <td class="px-4 py-3 text-xs">
                      @if ($order->transaction == 'pending')
                      <button class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">{{$order->transaction}}</button>
                      @elseif ($order->transaction == 'success')
                      <button class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">{{$order->transaction}}</button>
                      @else
                      <button class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">{{$order->transaction}}</button>

                      @endif
                      
  
                    </td>
  
                    <td class="px-4 py-3 text-xs">
                      <button data-modal-target="popup-modal1{{$order->id}}" data-modal-toggle="popup-modal1{{$order->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Upload Model</button>
                      <button data-modal-target="popup-modal123{{$order->id}}" data-modal-toggle="popup-modal123{{$order->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Upload Texture</button>
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <button class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">{{$order->status}}</button>
                      
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <button data-modal-target="authentication-modal{{$order->id}}" data-modal-toggle="authentication-modal{{$order->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Change Status</button>
                      
                    </td>
                    <!-- Change Status modal -->
                    <div id="authentication-modal{{$order->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                      <div class="relative p-4 w-full max-w-md max-h-full">
                          <!-- Modal content -->
                          <div class="relative bg-white rounded-lg shadow">
                              <!-- Modal header -->
                              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                                  <h3 class="text-xl font-semibold text-gray-900">
                                     Change Status
                                  </h3>
                                  <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal{{$order->id}}">
                                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                      </svg>
                                      <span class="sr-only">Close modal</span>
                                  </button>
                              </div>
                              <!-- Modal body -->
                              <div class="p-4 md:p-5">
                                <form class="space-y-4" action="{{ route('leader.changestatus') }}" method="post">
                                  @csrf
                                  <div class="mb-3">
                                      <label for="status" class="block mb-2 text-sm font-medium text-gray-900">New Status</label>
                                      {{-- <select name="status" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                          <option value="no" disabled selected>Select status</option>
                                          <option value="design">DESIGNING</option>
                                          <option value="cad">CAD DESIGNING</option>
                                          <option value="wax">WAXING</option>
                                          <option value="cast">CASTING</option>
                                          <option value="sold">SOLDERING</option>
                                          <option value="sort">GEM SOURCING AND SORTING</option>
                                          <option value="stone">STONE SETTING</option>
                                          <option value="polish">POLISHING</option>
                                          <option value="quality">QUALITY CONTROL</option>
                                      </select> --}}


                                    <div style="display: flex">
                                      <input class="block mb-2 mr-2 text-sm font-medium text-gray-900" type="radio" id="design" name="status" value="design">
                                      <label class="block mb-2 text-sm font-medium text-gray-900" for="design">DESIGNING</label>
                                    </div>
                                    <div style="display: flex">
                                        <input class="block mb-2  mr-2 text-sm font-medium text-gray-900" type="radio" id="cad" name="status" value="cad">
                                        <label class="block mb-2 text-sm font-medium text-gray-900" for="cad">CAD DESIGNING</label>
                                    </div>
                                    <div style="display: flex">
                                        <input class="block mb-2 mr-2 text-sm font-medium text-gray-900" type="radio" id="wax" name="status" value="wax">
                                        <label class="block mb-2 text-sm font-medium text-gray-900" for="wax">WAXING</label>
                                    </div>
                                    <div style="display: flex">
                                        <input class="block mb-2 mr-2 text-sm font-medium text-gray-900" type="radio" id="cast" name="status" value="cast">
                                        <label class="block mb-2 text-sm font-medium text-gray-900" for="cast">CASTING</label>
                                    </div>
                                    <div style="display: flex">
                                        <input class="block mb-2 mr-2 text-sm font-medium text-gray-900" type="radio" id="sold" name="status" value="sold">
                                        <label class="block mb-2 text-sm font-medium text-gray-900" for="sold">SOLDERING</label>
                                    </div>
                                    <div style="display: flex">
                                        <input class="block mb-2 mr-2 text-sm font-medium text-gray-900" type="radio" id="sort" name="status" value="sort">
                                        <label class="block mb-2 text-sm font-medium text-gray-900" for="sort">GEM SOURCING AND SORTING</label>
                                    </div>
                                    <div style="display: flex">
                                        <input class="block mb-2 mr-2 text-sm font-medium text-gray-900" type="radio" id="stone" name="status" value="stone">
                                        <label class="block mb-2 text-sm font-medium text-gray-900" for="stone">STONE SETTING</label>
                                    </div>
                                    <div style="display: flex">
                                        <input class="block mb-2 mr-2 text-sm font-medium text-gray-900" type="radio" id="polish" name="status" value="polish">
                                        <label class="block mb-2 text-sm font-medium text-gray-900" for="polish">POLISHING</label>
                                    </div>
                                    <div style="display: flex">
                                        <input class="block mb-2 mr-2 text-sm font-medium text-gray-900" type="radio" id="quality" name="status" value="quality">
                                        <label class="block mb-2 text-sm font-medium text-gray-900" for="quality">QUALITY CONTROL</label>
                                    </div>
                                    
                                    
                                  </div>
                                  <input type="hidden" name="totalBill" value="0" />
                                  <input type="hidden" name="cus_req_id" value="{{ $order->cus_req_id }}">
                                  <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Change The Status</button>
                              </form>
                              
                              </div>

                             
                          </div>
                      </div>
                    </div>
                  </tr>

                  

  
                  {{-- upload model Modal --}}
                  <div id="popup-modal1{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <form action="{{route('leader.uploadmodel')}}" method="POST" enctype="multipart/form-data">
                      @csrf
  
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal1{{$order->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                              
                                <h3 style="font-weight: bold" class="mb-5 mt-4 text-lg font-normal text-gray-500 dark:text-gray-400">Select the Folder wich contain the 3D model and Upload</h3>
                                <input type="hidden" name="status" value="accept">
                                <div class="mb-4">
                                  <label for="folder1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Model Folder</label>
                                  <input type="file" name="folder1[]" webkitdirectory directory multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required />
                                </div>
                                {{-- <div class="mb-4">
                                  <label for="folder2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Textures Folder</label>
                                  <input type="file" name="folder2[]" webkitdirectory directory multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required />
                                </div> --}}
                                <input type="hidden" name="cus_req_id" value="{{$order->id}}">
                                <button type="submit" data-modal-hide="popup-modal1{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Upload
                                </button>
                                <button data-modal-hide="popup-modal1{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                {{-- texture Modal --}}
                <div id="popup-modal123{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <form action="{{route('leader.uploadtexture')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal123{{$order->id}}">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                          <div class="p-4 md:p-5 text-center">
                            
                              <h3 style="font-weight: bold" class="mb-5 mt-4 text-lg font-normal text-gray-500 dark:text-gray-400">Select the Folder wich contain the 3D model and Upload</h3>
                              <input type="hidden" name="status" value="accept">
                              {{-- <div class="mb-4">
                                <label for="folder1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Model Folder</label>
                                <input type="file" name="folder1[]" webkitdirectory directory multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required />
                              </div> --}}
                              <div class="mb-4">
                                <label for="folder2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Textures Folder</label>
                                <input type="file" name="images[]" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required />
                              </div>
                              <input type="hidden" name="cus_req_id" value="{{$order->id}}">
                              <button type="submit" data-modal-hide="popup-modal123{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                  Upload
                              </button>
                              <button data-modal-hide="popup-modal123{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                          </div>
                      </div>
                  </div>
                  </form>
              </div>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        @else
        <p>Accepted Customization Orders found.</p>
        @endif
        <!-- ./business Table -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
      
          
      
          
      
         
        </div>
      </div>
    </div>  

    

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
      }
    }
  </script>


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
</html>
