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
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @php
      $user = session()->get('user');
    @endphp
    @if (!$user)
      @php
          $loginUrl = route('user.login') . '?error=You need to login to access this page.';
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
					
          @if ($user)
					<li><a href="{{ asset('user/profile') }}"><span class="ico-account"></span>Hello, {{$user->username}}</a></li>
					@endif
                    @if ($user)
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

    <div id="breadcrumbs" style="margin-top: 30px">
		<div class="container">
			<ul>
				<li><a href="{{route('user.profile')}}">Profile</a></li>
				<li>My Customization Requests</li>
			</ul>
		</div>
		<!-- / container -->
	</div>


<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

      <div class="h-full   mb-10 md:ml">


        <!-- User Table -->
        @if(count($customizeOrderList) > 0)
        <div class="mt-4 mx-4">
          
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="flex flex-wrap items-center px-4 py-2">
              <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Pending Customization Requests</h3> 
              </div>

             
            </div>
            
            <div class="w-full overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3"> <strong>Status </strong> </th>
                    <th class="px-4 py-3"> <strong>Details </strong> </th>
                    <th class="px-4 py-3"><strong>Total Bill </strong></th>
                    <th class="px-4 py-3"><strong>Transaction </strong></th>
                    <th class="px-4 py-3"><strong>Chat </strong></th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                 
                  @foreach($customizeOrderList as $order)
                  @php
                    $request = $customizerequest->getCustomReq($order->cus_req_id);
                  @endphp
                  @if ($order->status == 'pending')
               
                  
                  <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                   
                    <td class="px-4 py-3 text-sm">{{$order->status}}</td>
                    <td class="px-4 py-3 text-sm"><button data-modal-target="popup-modal11{{$order->id}}" data-modal-toggle="popup-modal11{{$order->id}}"  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">View Details</button></td>
                    
                     {{-- view Modal --}}
                  <div id="popup-modal11{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    

                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal11{{$order->id}}">
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
                                
                                <button data-modal-hide="popup-modal11{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                    <td class="px-4 py-3 text-sm">
                        @if ($order->totalBill == 0.00)
                            pending
                        @else
                            {{$order->totalBill}}
                        @endif
                    </td>
                    
                    <td class="px-4 py-3 text-sm">
                        @if ($order->transaction == 'pending')
                            pending
                        @else
                            success
                        @endif
                    </td>

                    
                    <td class="px-4 py-3 text-xs">
                     <a href="{{route('user.mychat',$order->cus_req_id)}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">Chat</a>
                      
                    </td>
                  </tr>

                  @endif

                  @endforeach
                  
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        @else
        <p>No orders found.</p>
        @endif
        <!-- ./ custom orders Table -->



       
      </div>


      <div class="h-full   mb-10 md:ml">


        <!-- User Table -->
        @if(count($customizeOrderList) > 0)
        <div class="mt-4 mx-4">
          
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="flex flex-wrap items-center px-4 py-2">
              <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Accepted Customization Requests</h3> 
              </div>

             
            </div>
            
            <div class="w-full overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3"> <strong>Status </strong> </th>
                    <th class="px-4 py-3"> <strong>Details </strong> </th>
                    <th class="px-4 py-3"><strong>Total Bill </strong></th>
                    <th class="px-4 py-3"><strong>Transaction </strong></th>
                    <th class="px-4 py-3"><strong>3D Model </strong></th>
                    <th class="px-4 py-3"><strong>Chat </strong></th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                 
                  @foreach($customizeOrderList as $order)
                  @php
                    $request = $customizerequest->getCustomReq($order->cus_req_id);
                  @endphp
                  @if ($order->status == 'accept')
               
                  
                  <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                   
                    <td class="px-4 py-3 text-sm">{{$order->status}}</td>
                    <td class="px-4 py-3 text-sm"><button data-modal-target="popup-modal11{{$order->id}}" data-modal-toggle="popup-modal11{{$order->id}}"  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">View Details</button></td>
                    
                     {{-- view Modal --}}
                  <div id="popup-modal11{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    

                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal11{{$order->id}}">
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
                                
                                <button data-modal-hide="popup-modal11{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                    <td class="px-4 py-3 text-sm">
                        @if ($order->totalBill == 0.00)
                            pending
                        @else
                            {{$order->totalBill}}
                        @endif
                    </td>
                    
                    <td class="px-4 py-3 text-sm">
                        @if ($order->transaction == 'pending')
                        <button data-modal-target="popup-modal{{$order->id}}" data-modal-toggle="popup-modal{{$order->id}}"  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">Make Payment</button>

                        @elseif ($order->transaction == 'success')
                        <button  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">Success</button>

                        @else
                        <button data-modal-target="popup-modal11{{$order->id}}" data-modal-toggle="popup-modal11{{$order->id}}"  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">Retry</button>
                        @endif
                    </td>

                    <div id="popup-modal{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                      <div class="relative p-4 w-full max-w-md max-h-full">
                          <div class="relative bg-white rounded-lg shadow">
                              <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal{{$order->id}}">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                              <div class="p-4 md:p-5 text-center">
                                  <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                  </svg>

                                  @php
                                    session(['myorder' => $order]);
                                  @endphp

                                  <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to pay <br> Rs. {{$order->totalBill}} Now?</h3>
                                  <form id="payhereForm" method="post" action="http://localhost/WijesingheJewellery/">  
                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                    <input type="hidden" name="amount" value="{{$order->totalBill}}">  
                                    <input type="hidden" name="first_name" value="{{$user->first_name}}">
                                    <input type="hidden" name="last_name" value="{{$user->last_name}}">
                                    <input type="hidden" name="email" value="{{$user->email}}">
                                    <input type="hidden" name="phone" value="{{$user->contact_no}}">
                                    <input type="hidden" name="address" value="{{$user->address}}">
                                    <input type="hidden" name="city" value="{{$user->city}}">
                                    <input type="hidden" name="country" value="{{$user->country}}"> 
                                    <button type="submit" data-modal-hide="popup-modal{{$order->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                      Yes, I'm sure
                                  </button> 
                                </form> 
                                  
                                  <button data-modal-hide="popup-modal{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                                      No, cancel
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                    

                    <td class="px-4 py-3 text-xs">
                      <a href="{{route('user.mychat',$order->cus_req_id)}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">3D Model</a>
                       
                     </td>
                    
                    <td class="px-4 py-3 text-xs">
                     <a href="{{route('user.mychat',$order->cus_req_id)}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">Chat</a>
                      
                    </td>
                  </tr>

                  @endif

                  @endforeach
                  
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        @else
        <p>No orders found.</p>
        @endif
        <!-- ./ custom orders Table -->



       
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
</html>
