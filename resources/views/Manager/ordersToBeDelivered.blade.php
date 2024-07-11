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
      $manager = session()->get('manager');
    @endphp
    @if (!$manager)
      @php
          $loginUrl = route('manager.login') . '?error=You need to login to access this page.';
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

    <div id="breadcrumbs" style="margin-top: 30px">
		<div class="container">
			<ul>
				<li><a href="{{route('manager.profile')}}">Manager</a></li>
				<li>Orders to be delivered</li>
			</ul>
		</div>
		<!-- / container -->
	</div>


<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

      <div class="h-full mb-10 md:ml">


       <!-- Order Table -->
@if(count($orderList) > 0)
<div class="mt-4 mx-4">
  
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="flex flex-wrap items-center px-4 py-2">
      <div class="md:col-span-2 xl:col-span-3">
        <h3 class="text-lg font-semibold">Orders to be delivered</h3> 
      </div>

     
    </div>
    
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th class="px-4 py-3">Reciever</th>
            <th class="px-4 py-3">Placed</th>
            <th class="px-4 py-3">Processed</th>
            <th class="px-4 py-3">Shipped</th>
            <th class="px-4 py-3">Out for Delivery</th>
            <th class="px-4 py-3">Delivered</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

          
      
          @foreach($orderList as $order)
          
          @if ($order->orderStatus == 'accept' && $order->delivered_at == null)
            
          
          <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
              <div class="flex items-center text-sm">
                {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                  <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div> --}}
                <div>
                  <p class="font-semibold">{{ $order->receiverName }}</p>
                  <p class="text-xs text-gray-600 dark:text-gray-400">{{ $order->deliveryAddress }} {{ $order->country }}</p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-sm">
              <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ">Order Placed</span>
              
            </td>
             {{-- PROCESSED --}}
            <td class="px-4 py-3 text-sm">
              @if ($order->shipped_at == null && $order->processed_at == null)
              <button data-modal-target="popup-modal100{{$order->id}}" data-modal-toggle="popup-modal100{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">Confirm Process</button>
              @elseif ($order->processed_at != null)

              <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ">Process Confirmed</span>
              @endif
              
            
            </td>

            {{-- Accept Modal --}}
          <div id="popup-modal100{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <form action="{{route('order.changecolumn')}}" method="POST">
              @csrf

            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal100{{$order->id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to confirm the process of this Order?</h3>
                        <input type="hidden" name="columnName" value="processed_at">
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <button type="submit" data-modal-hide="popup-modal100{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal100{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
            
            {{-- SHIPPED --}}

        <td class="px-4 py-3 text-sm">
          @if ($order->processed_at == null)
          <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ">Pending</span>
          
          @elseif ($order->processed_at != null && $order->shipped_at == null)
          <button data-modal-target="popup-modal200{{$order->id}}" data-modal-toggle="popup-modal200{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">Confirm Shipping</button>
          
          @elseif ($order->shipped_at != null)
          <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ">Shipping Confirmed</span>
          @endif
          
        
        </td>
          {{-- Accept Modal --}}
          <div id="popup-modal200{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <form action="{{route('order.changecolumn')}}" method="POST">
              @csrf

            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal200{{$order->id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to confirm the Shipping of this Order?</h3>
                        <input type="hidden" name="columnName" value="shipped_at">
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <button type="submit" data-modal-hide="popup-modal200{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal200{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                    </div>
                </div>
            </div>
            </form>
        </div>


        {{-- OUT FOR DELIVERY --}}


        <td class="px-4 py-3 text-sm">
          @if ($order->shipped_at == null)
          <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ">Pending</span>
          
          @elseif ($order->shipped_at != null && $order->out_at == null)
          <button data-modal-target="popup-modal300{{$order->id}}" data-modal-toggle="popup-modal300{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">Confirm Out</button>
          
          @elseif ($order->out_at != null)
          <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ">Out Confirmed</span>
          @endif
          
        
        </td>

          {{-- Accept Modal --}}
          <div id="popup-modal300{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <form action="{{route('order.changecolumn')}}" method="POST">
              @csrf

            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal300{{$order->id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to confirm the Out for the delivery of this Order?</h3>
                        <input type="hidden" name="columnName" value="out_at">
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <button type="submit" data-modal-hide="popup-modal300{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal300{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

        {{-- Confirm Delivery --}}

        <td class="px-4 py-3 text-sm">
          @if ($order->out_at == null)
          <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ">Pending</span>
          
          @elseif ($order->out_at != null && $order->delivered_at == null)
          <button data-modal-target="popup-modal400{{$order->id}}" data-modal-toggle="popup-modal400{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">Confirm Delivery</button>
          
          @elseif ($order->delivered_at != null)
          <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ">Delivery Confirmed</span>
          @endif
          
        
        </td>

        {{-- Accept Modal --}}
        <div id="popup-modal400{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <form action="{{route('order.changecolumn')}}" method="POST">
            @csrf

          <div class="relative p-4 w-full max-w-md max-h-full">
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal400{{$order->id}}">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
                  <div class="p-4 md:p-5 text-center">
                      <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                      </svg>
                      <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to confirm the the delivery of this Order?</h3>
                      <input type="hidden" name="columnName" value="delivered_at">
                      <input type="hidden" name="order_id" value="{{$order->id}}">
                      <button type="submit" data-modal-hide="popup-modal400{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                          Yes, I'm sure
                      </button>
                      <button data-modal-hide="popup-modal400{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                  </div>
              </div>
          </div>
          </form>
      </div>
        
        
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
<!-- ./order Table -->


















       
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
