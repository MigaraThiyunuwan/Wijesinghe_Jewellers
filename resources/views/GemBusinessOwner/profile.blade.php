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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @php
      $gemBusiness = session()->get('gemBusiness');
    @endphp
    @if (!$gemBusiness)
      @php
          $loginUrl = route('userlogin') . '?error=You need to login to access this page.';
          header("Location: $loginUrl");
          exit();
      @endphp
    @endif

    
    <title>Wijesinghe jewelry</title>

    <style>
      /* Custom style */
      
      .hidden {
            display: none;
        }

        .active {
            background-color: #cccccc; /* Change this to the desired active color */
        }
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
    <div class="fixed" style="background-color: white; width: 100%; z-index: 100;">
    <header id="header">
		<div class="container">
			<a href="/" id="logo" title="Wijesinghe Jewellers">Wijesinghe Jewellers</a>
			<div class="right-links">
				<ul>
					
          @if ($gemBusiness)
					<li><a href="{{ asset('gem/profile') }}"><span class="ico-account"></span>Hello, {{$gemBusiness->owner_name}}</a></li>
					@endif
                    @if ($gemBusiness)
                    <li><a href="{{ route('logout') }}"><span class="ico-signout"></span>Logout</a></li>

                    @else
                        <li><a href="{{ asset('gem/login') }}"><span class="ico-signout"></span>Login</a></li>
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
    </div>
	<!-- / navigation -->

    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    
    <aside id="sidebar-multi-level-sidebar" style="margin-top: 70px" class="fixed top-20 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-white border-r border-gray-200">
          
          <div
            class="flex flex-col items-center bg-yellow-100 border border-gray-200 mb-5  w-full py-6 px-4 rounded-lg"
          >
            <div class="h-20 w-20 rounded-full border overflow-hidden">
              <img
                src="{{ asset('images/profile/user_default.png') }}"
                alt="Avatar"
                class="h-full w-full"
              />
            </div>
            <ul  class="text-sm mt-1 text-gray-500">
              <li style="display: flex; justify-content: center; font-family:Novecentowide"><strong >@ {{$gemBusiness->owner_name}} </strong> </li>
              {{-- <li>NIC:  </li>
              <li>Contact: {{$manager->contact_no}} </li> --}}
            </ul>
            <div class="flex justify-center mb-2 mt-2">
                @if ($gemBusiness->verified == "false")
                <span class="bg-yellow-200 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded white:bg-yellow-900 dark:text-yellow-500"><i class="fa-regular fa-clock"></i> Verification Pending</span>

                @elseif ($gemBusiness->verified == "rejected")
                <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded white:bg-red-900 dark:text-red-500"><i class="fa-regular fa-circle-xmark"></i> Verification Rejected</span>
                @else
                
                  <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded white:bg-blue-900 dark:text-blue-700">Verified</span>
                  <span class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full white:bg-gray-700 dark:text-blue-400">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill="currentColor" d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z"/>
                    <path fill="#fff" d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z"/>
                    </svg>
                    <span class="sr-only">Icon description</span>
                  </span>
                @endif
                

              </div>
            <p style="font-size: 12px">{{$gemBusiness->email}} </p>
            <p style="font-size: 12px">{{$gemBusiness->contact_no}} </p>
            <p style="font-size: 12px">{{$gemBusiness->address}}</p>
            <p style="font-size: 12px; margin-top: 15px; text-align: justify">from: {{$gemBusiness->time_from}} to {{$gemBusiness->time_to}} </p>
            
            {{-- <div class="text-sm font-semibold mt-2">{{$manager->username}}</div>
            <div class="text-xs text-gray-500">{{$manager->nic}}</div>
            <div class="text-xs text-gray-500">{{$manager->contact_no}}</div> --}}
            
          </div>


        </div>
    </aside>
    
 
 <div  class="flex formbg min-h-screen">
  
    <div class="flex-grow text-gray-900">
      
      <main class="p-6 sm:p-10 space-y-6" style="margin-top: 150px; margin-left: 250px">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
          <div style="display: flex" class="mr-6">
            <h1 class="text-4xl font-semibold mb-2">{{$gemBusiness->market_name}}</h1>
            {{-- <h2 class="text-gray-600 ml-0.5">nic: {{$manager->nic}} | Contact: {{$manager->contact_no}}</h2> --}}
            <a class="ml-3" href="{{route('gem.edit')}}">
            <button class="inline-flex px-5 py-3 text-yellow-600 hover:text-yellow-700 focus:text-yellow-700 hover:bg-yellow-100 focus:bg-yellow-100 border border-yellow-600 rounded-md mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 ">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              {{-- Edit Profile --}}
            </button>
            </a>
          </div>
          <div class="flex flex-wrap items-start justify-end -mb-3">
            @if (session('success'))

            <div id="alert-3"  style="font-family:Novecentowide; " class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-100 " role="alert">
              <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
              </div>
              <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
              </button>
            </div>
        @endif
            @if ($gemBusiness->verified == 'accepted')
            <a href="{{route('gem.add')}}">
            <button class="inline-flex px-5 py-3 text-white bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-700 rounded-md ml-6 mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Post Advertisement
            </button>
            </a>
            @endif

          </div>
          
        </div>
        
<hr>     
      
<div  style="font-family:Novecentowide" class="section relative mt-4 mx-4">
      <!-- ADvertisement Table -->
      @if(count($myAddList) > 0)
      <div style="font-family:Novecentowide; " class="mt-4 mx-4">
        
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div style="justify-content: space-between; display: flex">
                <h1 style="font-size: 30px; font-weight: bold">My Advertisements</h1>
                
              </div>
          
          <div  class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-lg text-gray-700 uppercase ">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr >
                  <th scope="col" class="px-6 py-3">Add ID</th>
                  <th scope="col" class="px-6 py-3">Title</th>
                  <th scope="col" class="px-6 py-3">Price</th>
                  <th scope="col" class="px-6 py-3">Details</th>
                  <th scope="col" class="px-6 py-3">View Gem Image</th>
                  <th scope="col" class="px-6 py-3">Remove</th>
                </tr>
              </thead>
              <tbody >
                @php
                $orderCount1 = 0;
              @endphp
              
              @foreach($myAddList as $add)

              @if ($orderCount1 == 8)
                @break
              @endif
              @php
                $orderCount1 = $orderCount1 + 1;
              @endphp

                <tr class="odd:bg-white even:bg-gray-50 border-b ">
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-sm">
                    <div class="flex items-center text-sm">
                      {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div> --}}
                      <div>
                        <p class="font-semibold">{{ $add->id }}</p>
                        {{-- <p class="text-xs text-gray-600 ">{{ $add->owner_name }}</p> --}}
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-sm">{{$add->title}}</td>
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-sm">{{$add->price}}</td>
                  <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <button data-modal-target="popup-modal1{{$add->id}}" data-modal-toggle="popup-modal1{{$add->id}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">View Details</button>
                  </td>

                  {{-- view Modal --}}
                <div id="popup-modal1{{$add->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  

                  <div style="margin-top: 50px" class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-lg shadow ">
                        
                          <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal1{{$add->id}}">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                          <div class="p-4 md:p-5">
                              {{-- <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                              </svg> --}}
                              <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 ">Advertisement Details</h3>
                              <div class="grid gap-4 mb-4 grid-cols">
                                <div class="bg-white overflow-hidden shadow rounded-lg border">
                                  
                                  <div class="border-t border-gray-200 px-4 py-5 sm:p-0 formbg">
                                      <dl class="sm:divide-y sm:divide-gray-200">
                                          <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                  Title
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$add->title}}
                                              </dd>
                                          </div>
                                          <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Price
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                              {{$add->price}}
                                            </dd>
                                        </div>
                                          <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                Shape
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$add->shape}}
                                              </dd>
                                          </div>
                                          <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                  Carat
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$add->carat}}
                                              </dd>
                                          </div>
                                          <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                Width
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$add->width}}
                                              </dd>
                                          </div>
                                          <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">
                                              Length
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                              {{$add->length}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                          <dt class="text-sm font-medium text-gray-500">
                                            description
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{$add->description}}
                                          </dd>
                                      </div>
                                      </dl>
                                  </div>
                              </div>
                              </div>
                              <div class="text-center">
                              <button data-modal-hide="popup-modal1{{$add->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-yellow-900 focus:outline-none bg-yellow-100 rounded-lg border border-yellow-200 hover:bg-yellow-200 hover:text-yellow-700 focus:z-10 focus:ring-4 focus:ring-yellow-100 ">Close</button>
                              </div>
                            </div>
                      </div>
                  </div>
                </div>
                  
                  <td class="px-4 py-3 text-sm"><button data-modal-target="static-modal{{$add->id}}" data-modal-toggle="static-modal{{$add->id}}"  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">View Image</button></td>
                  
                  <div id="static-modal{{$add->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div style="margin-top: 150px"  class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow ">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Advertisement Image
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="static-modal{{$add->id}}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div style="display: flex; justify-content: center" class="p-4 md:p-5 space-y-4">
                                
                              <img style="width: 500px; height: 500px" src="{{ asset('storage/' . $add->image) }}" alt="image description">

                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b ">
                                <button data-modal-hide="static-modal{{$add->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">OK</button>
                                
                            </div>
                        </div>
                    </div>
                </div>

                  
                  <td class="px-4 py-3 text-xs">
                    <button data-modal-target="popup-modal2{{$add->id}}" data-modal-toggle="popup-modal2{{$add->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">Remove</button>
                    
                  </td>
                </tr>

              {{-- Delete Modal --}}
              <div id="popup-modal2{{$add->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form action="{{route('gem.delete')}}" method="POST">
                  @csrf
                
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow ">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal2{{$add->id}}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 ">Are you sure to <span style="color: red"> Remove </span> this Advertisement?</h3>
                            <input type="hidden" name="id" value="{{$add->id}}">
                            <button type="submit" data-modal-hide="popup-modal2{{$add->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>
                            <button data-modal-hide="popup-modal2{{$add->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
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
      <p>No Advertisements found.</p>
      @endif


   
</div>

      </main>
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
 


    
	<!-- / footer -->
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
  
</body>
</html>
