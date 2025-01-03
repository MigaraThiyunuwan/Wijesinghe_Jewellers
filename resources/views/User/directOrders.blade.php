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
            $loginUrl = route('userlogin') . '?error=First You Need to Login to Your Account.';
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
    <div id="breadcrumbs" style="margin-top: 30px">
		<div class="container">
			<ul>
				<li><a href="{{route('user.profile')}}">Profile</a></li>
				<li>My Direct Orders</li>
			</ul>
		</div>
		<!-- / container -->
	</div>

    <main class="profile-page formbg">
        
        

        <div style="font-family:Novecentowide; "  class="container mb-4">
          
          @if(count($orderList)>0)
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
                          View 
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
                        <button data-modal-target="static-modal22{{$order->id}}" data-modal-toggle="static-modal22{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">View Order</button>
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $order->contact_no}}
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{-- {{ $order->transaction}} --}}
                        @if ($order->transaction == 'false')
                       {{-- <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Unsuccess</span> --}}
                       <form method="POST" action="{{route('order.retrypayment')}}">
                        @csrf

                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">Retry Payment</button>
                      </form>
                        @else
                        <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Success</span>
                        @endif
                        
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{-- {{ $order->orderStatus}} --}}
                        @if ($order->orderStatus == 'pending')
                        <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Pending</span>

                        @elseif ($order->orderStatus == 'accept')
                        <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Accepted</span>

                        @else

                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Rejected</span>

                        @endif
                      
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        
                        <button type="button" data-modal-target="timeline-modal{{ $order->id}}" data-modal-toggle="timeline-modal{{ $order->id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Delivery Status</button>
                      </th>
                  </tr>

                   {{-- View Order Model --}}
                   <div id="static-modal22{{$order->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow ">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                <h3 class="text-xl font-semibold text-gray-900 ">
                                    Order Details
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal22{{$order->id}}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                            <div style="display: flex; justify-content: center" >
                              <div class="w-full max-w-md p-4 bg-white  rounded-lg ">
                                <div class="flex items-center justify-between mb-4">
                                    <h5 class="text-xl font-bold leading-none text-gray-900">Items</h5>
                                    <a  class="text-sm font-medium text-black-600 ">
                                        Quantity
                                    </a>
                              </div>
                              @php
                                $orderItems = $orderItem->getOrderItems($order->id);
                              @endphp
                              <div class="flow-root">
                                    <ul role="list" class="divide-y divide-gray-200">
                                      @foreach($orderItems as $orderItemss)
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center"> 
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . $item->getItemDetails($orderItemss->item_id)->image) }}" alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0 ms-4">
                                                    <p class="text-sm font-medium text-gray-900 truncate">
                                                      {{($item->getItemDetails($orderItemss->item_id)->name)}}
                                                    </p>
                                                    {{-- <p class="text-sm text-gray-500 truncate">
                                                        email@windster.com
                                                    </p> --}}
                                                </div>
                                                <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                    {{$orderItemss->itemQuantity}}
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                              </div>
                            </div>
                          </div>
                            

                            </div>
                            <!-- Modal footer -->
                            <div style="display: flex; justify-content: center" class="p-4 md:p-5">
                              <div >
                                <button data-modal-hide="static-modal22{{$order->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">OK</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- View Order Model --}}  

                  <!-- Main modal -->
                  <div id="timeline-modal{{ $order->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow"
                  >
                                <!-- Modal header -->
                                <div  class="flex items-center justify-between p-4 md:p-5 border-b rounded-t  ">
                                    <h3 class="text-lg font-semibold text-gray-900 ">
                                        Delivery Process
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="timeline-modal{{ $order->id}}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <hr>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <ol  class="relative border-s border-gray-200  ms-3.5 mb-4 md:mb-5">                  
                                        <li @if ($order->delivered_at == null)
                                          style="opacity: 0.5"
                                          @endif class="mb-10 ms-8">            
                                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                                <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                            </span>
                                            
                                            <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 ">Your order delivered successfully @if ($order->delivered_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @else
                                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Pending</span>
                                            @endif</h3>
                                            <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->delivered_at}}</time>
                                            <time class="block mb-3 text-sm font-normal leading-none text-gray-500 ">The courier delivers the package to the customer's address.</time>
                                            
                                        </li>
                                        
                                        <li @if ($order->out_at == null)
                                          style="opacity: 0.5"
                                          @endif class="mb-10 ms-8">            
                                          <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                              <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                          </span>
                                          
                                          <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 ">Your Order is out for delivery @if ($order->out_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @else
                                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Pending</span>
                                            @endif </h3>
                                            <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->out_at}}</time>
                                          <time class="block mb-3 text-sm font-normal leading-none text-gray-500 ">Your order will be delivered at today</time>
                                          
                                        </li>

                                        <li @if ($order->shipped_at == null)
                                          style="opacity: 0.5"
                                          @endif class="mb-10 ms-8">            
                                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                                <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                            </span>
                                            
                                            <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 ">Your Order was shipped @if ($order->shipped_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @else
                                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Pending</span>
                                            @endif</h3>
                                            <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->shipped_at}}</time>
                                            <time class="block mb-3 text-sm font-normal leading-none text-gray-500 ">The package leaves the warehouse and is en route to the delivery team.</time>
                                            
                                        </li>

                                        <li @if ($order->processed_at == null)
                                          style="opacity: 0.5"
                                          @endif class="mb-10 ms-8">            
                                          <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                              <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                          </span>
                                          
                                          <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 ">Your Order is Processing 
                                            @if ($order->processed_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @else
                                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Pending</span>
                                            @endif
                                            
                                          </h3>
                                          <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->processed_at}}</time>
                                          <time class="block mb-3 text-sm font-normal leading-none text-gray-500 ">The items are picked from inventory, packed, and prepared for shipment.</time>
                                          
                                      </li>

                                      <li @if ($order->placed_at == null)
                                        style="opacity: 0.5"
                                        @endif class="mb-10 ms-8">            
                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                            <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                        </span>
                                        
                                        <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 ">Your Order Placed Successfully @if ($order->placed_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @endif </h3>
                                        <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->placed_at}} </time>
                                        <time class="block mb-3 text-sm font-normal leading-none text-gray-500 ">You placed an order on the online platform.</time>
                                        
                                    </li>
                                    </ol>
                                    
                                    <button data-modal-toggle="timeline-modal{{ $order->id}}" class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                    OK
                                    </button>
                                </div>
                            </div>
                    </div>
                  </div> 





                  @endforeach
 
                </tbody>
            </table>
          
            
            
        </div>
        @else

        <div style="justify-content: center; display: flex">
          <h1 style="font-size: 30px; font-weight: bold">You have not placed any order yet!</h1>
        </div>
        @endif

        
        
        </div>








        

        
    </main>





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
