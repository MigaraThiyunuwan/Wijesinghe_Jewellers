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
        .hidden {
            display: none;
        }
      /* Custom style */
      .boldtext{
        font-weight: bold;
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
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll(".section");
        const links = document.querySelectorAll(".nav-link");

        // Show the inventory section by default
        document.getElementById("inventory").classList.remove("hidden");

        links.forEach(link => {
            link.addEventListener("click", function() {
                sections.forEach(section => section.classList.add("hidden"));
                document.getElementById(this.dataset.target).classList.remove("hidden");
            });
        });
    });
</script>
  
   
</head>
<body>
    <!-- Navigation bar -->
    <div class="fixed" style="background-color: white; width: 100%; z-index: 100;">
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
                <li><a href="{{ route('shop.necklaces') }}">Necklaces</a></li>
                <li><a href="{{ route('events.home') }}">Events</a></li>
                <li><a href="{{ route('aboutus') }}">About</a></li>
                <li><a href="{{ route('advertisement') }}">Advertisement</a></li>
                <li><a href="{{ route('contactus') }}">Contact Us</a></li>
            </div>
            <!-- / container -->
        </nav>
        <!-- / navigation -->
    </div>

   
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    
    <aside id="sidebar-multi-level-sidebar" style="margin-top: 70px" class="fixed top-20 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-white border-r border-gray-200">
            


            <ul class="space-y-2 font-medium">
                <li>
                    <div  data-target="inventory" class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group"  >
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                        </svg>
                        <span class="ms-3">Inventory</span>
                    </div>
                </li>
                {{-- <li>
                    <button type="button" class=" flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">E-commerce</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="nav-link flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Products</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Billing</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Invoice</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <div  data-target="useraccounts" class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group" >
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">User Accounts</span>
                    </div>
                </li>
                <li>
                    <div data-target="registeredcustomers"  class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 0 3 8.97v.03H1a1 1 0 0 0 0 2h2v4H1a1 1 0 0 0 0 2h2v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a2 2 0 0 0 2-2v-5a7.001 7.001 0 0 0-1.582-4.377ZM5 8.947c0-2.285 1.619-4.228 3.89-4.73H13c2.03 0 3.678 1.594 3.957 3.623H5v1.107H4v-1Zm9 5.053a1 1 0 1 0-2 0v1a1 1 0 1 0 2 0v-1Zm-6 0a1 1 0 1 0-2 0v1a1 1 0 1 0 2 0v-1Zm9-1h-1V9h1v4Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Registered Customers </span>
                    </div>
                </li>
                <li>
                    <div data-target="pendingrequests" class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 8h-2.293l.647-1.293a1 1 0 1 0-1.808-.894L13.293 8H6.707l-1.253-2.506a1 1 0 0 0-1.808.894L4.293 8H2a1 1 0 1 0 0 2h2.293l-.647 1.293a1 1 0 1 0 1.808.894L6.707 10h6.586l1.253 2.506a1 1 0 0 0 1.808-.894L15.707 10H18a1 1 0 1 0 0-2Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pending Requests</span>
                    </div>
                </li>
                <li>
                    <div data-target="pendingorders" class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3a1 1 0 0 1 1-1h2V1a1 1 0 1 1 2 0v1h2V1a1 1 0 1 1 2 0v1h2a1 1 0 0 1 1 1v2H4V3Zm10 2V4h-2v1a1 1 0 0 1-2 0V4H8v1a1 1 0 0 1-2 0V4H4v1h10Zm1 8a1 1 0 0 0-1 1v2H6v-2a1 1 0 1 0-2 0v2H3a2 2 0 0 1-2-2V8h18v6a2 2 0 0 1-2 2h-1v-2a1 1 0 0 0-1-1ZM2 7V6h16v1H2Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pending Orders</span>
                    </div>
                </li>
                <li>
                    <div data-target="orderstobedelivered" class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3a1 1 0 0 1 1-1h2V1a1 1 0 1 1 2 0v1h2V1a1 1 0 1 1 2 0v1h2a1 1 0 0 1 1 1v2H4V3Zm10 2V4h-2v1a1 1 0 0 1-2 0V4H8v1a1 1 0 0 1-2 0V4H4v1h10Zm1 8a1 1 0 0 0-1 1v2H6v-2a1 1 0 1 0-2 0v2H3a2 2 0 0 1-2-2V8h18v6a2 2 0 0 1-2 2h-1v-2a1 1 0 0 0-1-1ZM2 7V6h16v1H2Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Orders to be Delivered</span>
                    </div>
                </li>
                <li>
                    <div data-target="peningspecialorders" class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3a1 1 0 0 1 1-1h2V1a1 1 0 1 1 2 0v1h2V1a1 1 0 1 1 2 0v1h2a1 1 0 0 1 1 1v2H4V3Zm10 2V4h-2v1a1 1 0 0 1-2 0V4H8v1a1 1 0 0 1-2 0V4H4v1h10Zm1 8a1 1 0 0 0-1 1v2H6v-2a1 1 0 1 0-2 0v2H3a2 2 0 0 1-2-2V8h18v6a2 2 0 0 1-2 2h-1v-2a1 1 0 0 0-1-1ZM2 7V6h16v1H2Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pending Special Orders</span>
                    </div>
                </li>
                <li>
                    <div data-target="specialorderstobedelivered" class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3a1 1 0 0 1 1-1h2V1a1 1 0 1 1 2 0v1h2V1a1 1 0 1 1 2 0v1h2a1 1 0 0 1 1 1v2H4V3Zm10 2V4h-2v1a1 1 0 0 1-2 0V4H8v1a1 1 0 0 1-2 0V4H4v1h10Zm1 8a1 1 0 0 0-1 1v2H6v-2a1 1 0 1 0-2 0v2H3a2 2 0 0 1-2-2V8h18v6a2 2 0 0 1-2 2h-1v-2a1 1 0 0 0-1-1ZM2 7V6h16v1H2Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Special Orders To be delivered
                        </span>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    
 
 <div class="flex bg-gray-100 min-h-screen ">
  
    <div class="flex-grow text-gray-800">
      
      <main class="p-6 sm:p-10 space-y-6" style="margin-top: 150px; margin-left: 250px">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
          <div class="mr-6">
            <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
            <h2 class="text-gray-600 ml-0.5">Mobile UX/UI Design course</h2>
          </div>
          <div class="flex flex-wrap items-start justify-end -mb-3">
            <button class="inline-flex px-5 py-3 text-purple-600 hover:text-purple-700 focus:text-purple-700 hover:bg-purple-100 focus:bg-purple-100 border border-purple-600 rounded-md mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              Manage dashboard
            </button>
            <button class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Create new dashboard
            </button>
          </div>
        </div>
        <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div>
              <span class="block text-2xl font-bold">{{$userCount}}</span>
              <span class="block text-gray-500">Customers</span>
            </div>
          </div>
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
               
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                
            </div>
            <div>
              <span class="block text-2xl font-bold">Rs. {{$income}}</span>
              <span class="block text-gray-500">Sales</span>
            </div>
          </div>
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
              {{-- <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
              </svg> --}}
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
            </div>
            <div>
              <span class="inline-block text-2xl font-bold">{{$deliveredOrders}}</span>
              <span class="block text-gray-500">Orders</span>
            </div>
          </div>
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
              {{-- <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg> --}}
              
                <div width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"> <i class="fa-regular fa-gem fa-xl"></i></div>
              
            </div>
            <div>
              <span class="block text-2xl font-bold">{{$verifiedGemBusiness}}</span>
              <span class="block text-gray-500">Virified Gem Businesses</span>
            </div>
          </div>
        </section>




       <!-- inventory Section -->
    <div id="inventory" class="section hidden relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <div class="md:col-span-2 xl:col-span-3 mb-5">
            <h3 class="text-lg font-semibold">Inventory</h3> 
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Number of Models</th>
                    <th scope="col" class="px-6 py-3">View</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <td class="px-6 py-4">Necklace</td>
                    <td class="px-6 py-4">{{$item->getNumberOfItemsPerCategory('Necklace')}}</td>
                    <td class="px-6 py-4"><a href="{{ route('manager.necklace') }}" class="font-medium text-blue-600 hover:underline">View</a></td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <td class="px-6 py-4">Ear Ring</td>
                    <td class="px-6 py-4">{{$item->getNumberOfItemsPerCategory('Earring')}}</td>
                    <td class="px-6 py-4"><a href="{{ route('manager.earring') }}" class="font-medium text-blue-600 hover:underline">View</a></td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <td class="px-6 py-4">Ring</td>
                    <td class="px-6 py-4">{{$item->getNumberOfItemsPerCategory('Ring')}}</td>
                    <td class="px-6 py-4"><a href="{{ route('manager.ring') }}" class="font-medium text-blue-600 hover:underline">View</a></td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <td class="px-6 py-4">Bracelet</td>
                    <td class="px-6 py-4">{{$item->getNumberOfItemsPerCategory('Bracelet')}}</td>
                    <td class="px-6 py-4"><a href="{{ route('manager.bracelet') }}" class="font-medium text-blue-600 hover:underline">View</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- useraccounts Section -->
    <div id="useraccounts" class="section hidden relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <div class="md:col-span-2 xl:col-span-3 mb-5">
            <h3 class="text-lg font-semibold">User Accounts</h3> 
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">User Type</th>
                    <th scope="col" class="px-6 py-3">Number of Accounts</th>
                    <th scope="col" class="px-6 py-3">View</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    
                    <td class="px-6 py-4">Registered Customers</td>
                    <td class="px-6 py-4">{{$allUserCount}}</td>
                    <td class="px-6 py-4"><a href="{{ route('manager.users') }}" class="font-medium text-blue-600 hover:underline">VIEW</a></td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    
                    <td class="px-6 py-4">Verified Gem Business</td>
                    <td class="px-6 py-4">{{$verifiedGemBusiness}}</td>
                    <td class="px-6 py-4"><a href="{{ route('manager.gembusiness') }}" class="font-medium text-blue-600 hover:underline">VIEW</a></td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    
                    <td class="px-6 py-4">Team Leaders</td>
                    <td class="px-6 py-4">{{$leaderCount}}</td>
                    <td class="px-6 py-4"><a href="{{ route('manager.leaders') }}" class="font-medium text-blue-600 hover:underline">VIEW</a></td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    
                    <td class="px-6 py-4">Managers</td>
                    <td class="px-6 py-4">{{$manager->getmanagercount()}}</td>
                    <td class="px-6 py-4"><a href="{{ route('manager.managers') }}" class="font-medium text-blue-600 hover:underline">VIEW</a></td>
                </tr>
                
            </tbody>
        </table>
    </div>

    <!-- User Table -->
    @if(count($userList) > 0)
    <div id="registeredcustomers" class="section hidden relative  mt-4 mx-4">
      
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="flex flex-wrap items-center px-4 py-2">
          <div class="md:col-span-2 xl:col-span-3">
            <h3 class="text-lg font-semibold">Registered Customers</h3> 
          </div>

          <div class="relative w-full max-w-full flex-grow flex-1 text-right">
            <a href="{{ route('manager.users') }}"> <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
          </div>
        </div>
        
        <div class="w-full overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b ">
                <th class="px-4 py-3 boldtext">Name</th>
                <th class="px-4 py-3 boldtext">country</th>
                <th class="px-4 py-3 boldtext">contact No</th>
                <th class="px-4 py-3 boldtext">View Details</th>
                <th class="px-4 py-3 boldtext">Remove Customer</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y ">
              @php
                $userCount = 0;
              @endphp
              @foreach($userList as $user)
              @if ($userCount == 6)
                @break
              @endif
              @php
                $userCount = $userCount + 1;
              @endphp
              <tr class="bg-gray-50  hover:bg-gray-100">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div> --}}
                    <div>
                      <p class="font-semibold">{{ $user->first_name }}</p>
                      <p class="text-xs text-gray-600 dark:text-gray-400">{{ $user->last_name }}</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">{{$user->country}}</td>
                
                <td class="px-4 py-3 text-sm">{{$user->contact_no}}</td>

                <td class="px-4 py-3 text-xs">
                  <button data-modal-target="popup-modal1{{$user->id}}" data-modal-toggle="popup-modal1{{$user->id}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW</button>
                 
                </td>
                <td class="px-4 py-3 text-xs">
                  <button data-modal-target="popup-modal2{{$user->id}}" data-modal-toggle="popup-modal2{{$user->id}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">REMOVE</button>
        
                </td>
              </tr>

              {{-- view Modal --}}
              <div id="popup-modal1{{$user->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                

                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow ">
                      
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal1{{$user->id}}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5">
                            {{-- <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg> --}}
                            <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 ">User Details</h3>
                            <div class="grid gap-4 mb-4 grid-cols">
                              <div class="bg-white overflow-hidden shadow rounded-lg border">
                                
                                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                                    <dl class="sm:divide-y sm:divide-gray-200">
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Full name
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                              {{$user->first_name}} {{$user->last_name}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                          <dt class="text-sm font-medium text-gray-500">
                                              Username
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{$user->username}}
                                          </dd>
                                      </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Email address
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                              {{$user->email}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Phone number
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                              {{$user->contact_no}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">
                                                Address
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                              {{$user->address}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Country
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{$user->country}}
                                          </dd>
                                      </div>
                                    </dl>
                                </div>
                            </div>
                            </div>
                            
                            <button data-modal-hide="popup-modal1{{$user->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Close</button>
                        </div>
                    </div>
                </div>
                
            </div>

            {{-- remove Modal --}}
            <div id="popup-modal2{{$user->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <form action="{{route('manager.deleteuser')}}" method="POST">
                @csrf
              
              <div class="relative p-4 w-full max-w-md max-h-full">
                  <div class="relative bg-white rounded-lg shadow ">
                      <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal2{{$user->id}}">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                      <div class="p-4 md:p-5 text-center">
                          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: red"> Remove </span> this User?</h3>
                          <input type="hidden" name="user_id" value="{{$user->id}}">
                          <button type="submit" data-modal-hide="popup-modal2{{$user->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                              Yes, I'm sure
                          </button>
                          <button data-modal-hide="popup-modal2{{$user->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
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
    <p>No Registered Users found.</p>
    @endif
    <!-- ./users Table -->

    <!-- Business Table -->
    @if(count($unverifiedBusinesses) > 0)
    <div id="pendingrequests" class="section hidden relative mt-4 mx-4">
      
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="flex flex-wrap items-center px-4 py-2">
          <div class="md:col-span-2 xl:col-span-3">
            <h3 class="text-lg font-semibold">Pending Gem business registration requests</h3> 
          </div> 

          <div class="relative w-full max-w-full flex-grow flex-1 text-right">
            <a href="{{ route('manager.unverifiedgembusiness') }}"> <button class="bg-blue-500 text-white active:bg-blue-600  text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
          </div>
        </div>
        
        <div class="w-full overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b ">
                <th class="px-4 py-3 boldtext">Business</th>
                <th class="px-4 py-3 boldtext">Gem_Asso_num</th>
                <th class="px-4 py-3 boldtext">View Certificate</th>
                <th class="px-4 py-3 boldtext">Accept Request</th>
                <th class="px-4 py-3 boldtext">Reject Request</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 ">
              @foreach($unverifiedBusinesses as $business)

              <tr class="bg-gray-50   hover:bg-gray-100">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div> --}}
                    <div>
                      <p class="font-semibold">{{ $business->market_name }}</p>
                      <p class="text-xs text-gray-600 ">{{ $business->owner_name }}</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">{{$business->gem_asso_num}}</td>
                
                <td class="px-4 py-3 text-sm"><button data-modal-target="static-modal{{$business->id}}" data-modal-toggle="static-modal{{$business->id}}"  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW</button></td>
                
                <div id="static-modal{{$business->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative p-4 w-full max-w-2xl max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow ">
                          <!-- Modal header -->
                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                              <h3 class="text-xl font-semibold text-gray-900 ">
                                  Certificate Image
                              </h3>
                              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal{{$business->id}}">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                          </div>
                          <!-- Modal body -->
                          <div class="p-4 md:p-5 space-y-4">
                              
                            <img class="h-auto max-w-full" src="{{ asset('storage/' . $business->certificate_image) }}" alt="image description">

                          </div>
                          <!-- Modal footer -->
                          <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b ">
                              <button data-modal-hide="static-modal{{$business->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">OK</button>
                              
                          </div>
                      </div>
                  </div>
              </div>

                <td class="px-4 py-3 text-xs">
                  <button data-modal-target="popup-modal1{{$business->id}}" data-modal-toggle="popup-modal1{{$business->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">ACCEPT</button>

                </td>
                <td class="px-4 py-3 text-xs">
                  <button data-modal-target="popup-modal2{{$business->id}}" data-modal-toggle="popup-modal2{{$business->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">REJECT</button>
                  
                </td>
              </tr>

              {{-- Accept Modal --}}
              <div id="popup-modal1{{$business->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form action="{{route('manager.confirm',$business->id)}}" method="POST">
                  @method('PUT')
                  @csrf

                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow ">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal1{{$business->id}}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 ">Are you sure to <span style="color: green"> accept </span> this business?</h3>
                            <input type="hidden" name="decision" value="accepted">
                            <button type="submit" data-modal-hide="popup-modal1{{$business->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>
                            <button data-modal-hide="popup-modal1{{$business->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            {{-- Reject Modal --}}
            <div id="popup-modal2{{$business->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <form action="{{route('manager.confirm',$business->id)}}" method="POST">
                @method('PUT')
                @csrf
              
              <div class="relative p-4 w-full max-w-md max-h-full">
                  <div class="relative bg-white rounded-lg shadow ">
                      <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal2{{$business->id}}">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                      <div class="p-4 md:p-5 text-center">
                          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 ">Are you sure to <span style="color: red"> Reject </span> this business?</h3>
                          <input type="hidden" name="decision" value="reject">
                          <button type="submit" data-modal-hide="popup-modal2{{$business->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                              Yes, I'm sure
                          </button>
                          <button data-modal-hide="popup-modal2{{$business->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
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
    <p>No unverified businesses found.</p>
    @endif
    <!-- ./business Table -->
        
    <!-- Order Table -->
    @if(count($orderList) > 0)
    <div id="pendingorders" class="section hidden relative mt-4 mx-4">
      
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="flex flex-wrap items-center px-4 py-2">
          <div class="md:col-span-2 xl:col-span-3">
            <h3 class="text-lg font-semibold">Pending Orders</h3> 
          </div>

          <div class="relative w-full max-w-full flex-grow flex-1 text-right">
            <a href="{{ route('manager.pendingorders') }}"> <button class="bg-blue-500  text-white active:bg-blue-600   text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
          </div>
        </div>
        
        <div class="w-full overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b ">
                <th class="px-4 py-3 boldtext">Reciever</th>
                <th class="px-4 py-3 boldtext">Date</th>
                <th class="px-4 py-3 boldtext">View Order</th>
                <th class="px-4 py-3 boldtext">Accept Order</th>
                <th class="px-4 py-3 boldtext">Reject Order</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 ">

              @php
              $orderCount = 0;
              @endphp
        
              @foreach($orderList as $order)
              @if ($orderCount == 5)
                @break
              @endif
              @if ($order->orderStatus == 'pending')
                @php
                $orderCount = $orderCount + 1;
                @endphp
              @endif
             
              @if ($order->orderStatus == 'pending')
                
              
              <tr class="bg-gray-50  hover:bg-gray-100 ">
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
                <td class="px-4 py-3 text-sm">{{$order->created_at}}</td>
                
                <td class="px-4 py-3 text-sm"><button data-modal-target="static-modal22{{$order->id}}" data-modal-toggle="static-modal22{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW</button></td>
                
                <div id="static-modal22{{$order->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative p-4 w-full max-w-2xl max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white rounded-lg shadow ">
                          <!-- Modal header -->
                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                              <h3 class="text-xl font-semibold text-gray-900 ">
                                  Order Details 
                                  
                              </h3>
                              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="static-modal22{{$order->id}}">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                              
                          </div>
                          <!-- Modal body -->
                          <div class="p-4 md:p-5 space-y-4">
                            @if ($order->transaction == 'false')
                              <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Payment still not completed!</strong>
                              </div>
                            @else
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                              <strong class="font-bold">Payment successfully completed</strong>
                            </div>

                            @endif
                            

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
                                                  <img class="w-8 h-8 rounded-full" src="../images/shop/{{($item->getItemDetails($orderItemss->item_id)->image)}}" alt="Neil image">
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
                              <button data-modal-hide="static-modal22{{$order->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">OK</button>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>

                <td class="px-4 py-3 text-xs">
                  <button data-modal-target="popup-modal5{{$order->id}}" data-modal-toggle="popup-modal5{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">ACCEPT</button>
      
                </td>
                <td class="px-4 py-3 text-xs">
                  <button data-modal-target="popup-modal6{{$order->id}}" data-modal-toggle="popup-modal6{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">REJECT</button>
                  {{-- <button data-modal-target="popup-modal2{{$order->id}}" data-modal-toggle="popup-modal2{{$order->id}}"><span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full"> Reject </span> </button> --}}
                </td>
              </tr>

              {{-- Accept Modal --}}
              <div id="popup-modal5{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form action="{{route('order.changestatus')}}" method="POST">
                  @csrf

                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow ">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal5{{$order->id}}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 ">Are you sure to <span style="color: green"> accept </span> this Order?</h3>
                            <input type="hidden" name="status" value="accept">
                            <input type="hidden" name="order_id" value="{{$order->id}}">
                            <button type="submit" data-modal-hide="popup-modal5{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>
                            <button data-modal-hide="popup-modal5{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100  ">No, cancel</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            {{-- Reject Modal --}}
            <div id="popup-modal6{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <form action="{{route('order.changestatus')}}" method="POST">
                @csrf
              
              <div class="relative p-4 w-full max-w-md max-h-full">
                  <div class="relative bg-white rounded-lg shadow ">
                      <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal6{{$order->id}}">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                      <div class="p-4 md:p-5 text-center">
                          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 ">Are you sure to <span style="color: red"> Reject </span> this Order?</h3>
                          
                          <input type="hidden" name="status" value="reject">
                            <input type="hidden" name="order_id" value="{{$order->id}}">
                          <button type="submit" data-modal-hide="popup-modal6{{$order->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                              Yes, I'm sure
                          </button>
                          <button data-modal-hide="popup-modal6{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
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
    <!-- Order Table -->
@if(count($orderList) > 0)
<div id="orderstobedelivered" class="section hidden relative mt-4 mx-4">
  
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="flex flex-wrap items-center px-4 py-2">
      <div class="md:col-span-2 xl:col-span-3">
        <h3 class="text-lg font-semibold">Orders to be delivered</h3> 
      </div>

      <div class="relative w-full max-w-full flex-grow flex-1 text-right">
        <a href="{{ route('manager.orderstobedelivered') }}"> <button class="bg-blue-500  text-white active:bg-blue-600   text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
      </div>
    </div>
    
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
            <th class="px-4 py-3 boldtext">Reciever</th>
            <th class="px-4 py-3 boldtext">Placed</th>
            <th class="px-4 py-3 boldtext">Processed</th>
            <th class="px-4 py-3 boldtext">Shipped</th>
            <th class="px-4 py-3 boldtext">Out for Delivery</th>
            <th class="px-4 py-3 boldtext">Delivered</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y ">

          @php
          $orderCount = 0;
          @endphp
      
          @foreach($orderList as $order)
          @if ($orderCount == 6)
            @break
          @endif
          @if ($order->orderStatus == 'accept' && $order->delivered_at == null)
            @php
            $orderCount = $orderCount + 1;
            @endphp
          @endif
        
          @if ($order->orderStatus == 'accept' && $order->delivered_at == null)
            
          
          <tr class="bg-gray-50 hover:bg-gray-100 ">
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
              <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">ORDER PLACED</span>
              
            </td>
             {{-- PROCESSED --}}
            <td class="px-4 py-3 text-sm">
              @if ($order->shipped_at == null && $order->processed_at == null)
              <button data-modal-target="popup-modal100{{$order->id}}" data-modal-toggle="popup-modal100{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">CONFIRM</button>
              @elseif ($order->processed_at != null)

              <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">DONE</span>
              @endif
              
            
            </td>

            {{-- Accept Modal --}}
          <div id="popup-modal100{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <form action="{{route('order.changecolumn')}}" method="POST">
              @csrf

            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow ">
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
                        <button type="submit" data-modal-hide="popup-modal100{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal100{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
            
            {{-- SHIPPED --}}

        <td class="px-4 py-3 text-sm">
          @if ($order->processed_at == null)
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">PENDING</span>
          
          @elseif ($order->processed_at != null && $order->shipped_at == null)
          <button data-modal-target="popup-modal200{{$order->id}}" data-modal-toggle="popup-modal200{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">CONFIRM</button>
          
          @elseif ($order->shipped_at != null)
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">DONE</span>
          @endif
          
        
        </td>
          {{-- Accept Modal --}}
          <div id="popup-modal200{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <form action="{{route('order.changecolumn')}}" method="POST">
              @csrf

            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow ">
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
                        <button type="submit" data-modal-hide="popup-modal200{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal200{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
                    </div>
                </div>
            </div>
            </form>
        </div>


        {{-- OUT FOR DELIVERY --}}


        <td class="px-4 py-3 text-sm">
          @if ($order->shipped_at == null)
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">PENDING</span>
          
          @elseif ($order->shipped_at != null && $order->out_at == null)
          <button data-modal-target="popup-modal300{{$order->id}}" data-modal-toggle="popup-modal300{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">CONFIRM</button>
          
          @elseif ($order->out_at != null)
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">DONE</span>
          @endif
          
        
        </td>

          {{-- Accept Modal --}}
          <div id="popup-modal300{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <form action="{{route('order.changecolumn')}}" method="POST">
              @csrf

            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow ">
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
                        <button type="submit" data-modal-hide="popup-modal300{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal300{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

        {{-- Confirm Delivery --}}

        <td class="px-4 py-3 text-sm">
          @if ($order->out_at == null)
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">PENDING</span>
          
          @elseif ($order->out_at != null && $order->delivered_at == null)
          <button data-modal-target="popup-modal400{{$order->id}}" data-modal-toggle="popup-modal400{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">CONFIRM</button>
          
          @elseif ($order->delivered_at != null)
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">DONE</span>
          @endif
          
        
        </td>

        {{-- Accept Modal --}}
        <div id="popup-modal400{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <form action="{{route('order.changecolumn')}}" method="POST">
            @csrf

          <div class="relative p-4 w-full max-w-md max-h-full">
              <div class="relative bg-white rounded-lg shadow ">
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
                      <button type="submit" data-modal-hide="popup-modal400{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                          Yes, I'm sure
                      </button>
                      <button data-modal-hide="popup-modal400{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
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
<!-- Order Table -->
@if(count($eventOrderList) > 0)
<div id="peningspecialorders" class="section hidden relative mt-4 mx-4">
  
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="flex flex-wrap items-center px-4 py-2">
      <div class="md:col-span-2 xl:col-span-3">
        <h3 class="text-lg font-semibold">Pending Special Event Orders</h3> 
      </div>
      

      <div class="relative w-full max-w-full flex-grow flex-1 text-right">
        <a href="{{ route('manager.pendingeventorders') }}"> <button class="bg-blue-500 text-white active:bg-blue-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
      </div>
    </div>
    
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
            <th class="px-4 py-3 boldtext">Reciever</th>
            <th class="px-4 py-3 boldtext">Date</th>
            <th class="px-4 py-3 boldtext">View Order</th>
            <th class="px-4 py-3 boldtext">Confirm Order</th>
            <th class="px-4 py-3 boldtext">Reject Order</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y ">

          @php
          $orderCount = 0;
          @endphp
    
          @foreach($eventOrderList as $order)
          @if ($orderCount == 5)
            @break
          @endif
          @if ($order->status == 'pending')
            @php
            $orderCount = $orderCount + 1;
            @endphp
          @endif
         
          @if ($order->status == 'pending')
            
          
          <tr class="bg-gray-50  hover:bg-gray-100  text-gray-700 ">
            <td class="px-4 py-3">
              <div class="flex items-center text-sm">
                {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                  <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div> --}}
                <div>
                  <p class="font-semibold">{{ $order->receiverName }}</p>
                  <p class="text-xs text-gray-600 dark:text-gray-400">{{ $order->deliveryAddress }} </p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-sm">{{$order->created_at}}</td>
            
            <td class="px-4 py-3 text-sm"><button data-modal-target="static-modal2222{{$order->id}}" data-modal-toggle="static-modal2222{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW ORDER</button></td>
            
            <div id="static-modal2222{{$order->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-2xl max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow ">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                          <h3 class="text-xl font-semibold text-gray-900 ">
                              Order Details 
                              
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal2222{{$order->id}}">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                          
                      </div>
                      <!-- Modal body -->
                      <div class="p-4 md:p-5 space-y-4">
                        @if ($order->payment == 'pending')
                          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Payment still not completed!</strong>
                          </div>
                        @else
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">Payment successfully completed</strong>
                        </div>

                        @endif
                        
                        @php
                          $event = $eventObj->getEvent($order->event_id);
                        @endphp
                      <div style="display: flex; justify-content: center" >

                        <div class="w-full max-w-md p-4 bg-white  rounded-lg ">
                          
                         <figure class="max-w-lg">
                           <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $event->image) }}" alt="image description">
                           <figcaption class="mt-2 text-sm text-center text-gray-500 "><strong>Category:</strong> {{$event->category}}</figcaption>
                           <figcaption class="mt-2 text-sm text-center text-gray-500 "><strong>Item Name:</strong> {{$event->name}}</figcaption>
                         </figure>

                       
                        <div class="flow-root">


                              
                        </div>
                      </div>
                    </div>
                      

                      </div>
                      <!-- Modal footer -->
                      <div style="display: flex; justify-content: center" class="p-4 md:p-5">
                        <div >
                          <button data-modal-hide="static-modal2222{{$order->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">OK</button>
                        </div>
                      </div>
                  </div>
              </div>
          </div>

            <td class="px-4 py-3 text-xs">
              <button data-modal-target="popup-modal555{{$order->id}}" data-modal-toggle="popup-modal555{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">ACCEPT ORDER</button>
  
            </td>
            <td class="px-4 py-3 text-xs">
              <button data-modal-target="popup-modal666{{$order->id}}" data-modal-toggle="popup-modal666{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">REJECT ORDER</button>
              {{-- <button data-modal-target="popup-modal2{{$order->id}}" data-modal-toggle="popup-modal2{{$order->id}}"><span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full"> Reject </span> </button> --}}
            </td>
          </tr>

          {{-- Accept Modal --}}
          <div id="popup-modal555{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <form action="{{route('events.changestatus')}}" method="POST">
              @csrf

            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow ">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal555{{$order->id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: green"> accept </span> this Order?</h3>
                        <input type="hidden" name="status" value="accept">
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <button type="submit" data-modal-hide="popup-modal555{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal555{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

        {{-- Reject Modal --}}
        <div id="popup-modal666{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <form action="{{route('events.changestatus')}}" method="POST">
            @csrf
          
          <div class="relative p-4 w-full max-w-md max-h-full">
              <div class="relative bg-white rounded-lg shadow ">
                  <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal666{{$order->id}}">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
                  <div class="p-4 md:p-5 text-center">
                      <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                      </svg>
                      <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 ">Are you sure to <span style="color: red"> Reject </span> this Order?</h3>
                      
                      <input type="hidden" name="status" value="reject">
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                      <button type="submit" data-modal-hide="popup-modal666{{$order->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                          Yes, I'm sure
                      </button>
                      <button data-modal-hide="popup-modal666{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
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
<!-- Order Table -->
@if(count($eventOrderList) > 0)
<div id="specialorderstobedelivered" class="section hidden relative mt-4 mx-4">
  
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="flex flex-wrap items-center px-4 py-2">
      <div class="md:col-span-2 xl:col-span-3">
        <h3 class="text-lg font-semibold">Special Event Orders To be delivered</h3> 
      </div>
      

      <div class="relative w-full max-w-full flex-grow flex-1 text-right">
        <a href="{{ route('manager.specialorderstobedelivered') }}"> <button class="bg-blue-500  text-white active:bg-blue-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
      </div>
    </div>
    
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b ">
            <th class="px-4 py-3 boldtext">Reciever</th>
            <th class="px-4 py-3 boldtext">Date</th>
            <th class="px-4 py-3 boldtext">View Order</th>
            <th class="px-4 py-3 boldtext">Confirm Delivery</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y">

          @php
          $orderCount = 0;
          @endphp
    
          @foreach($eventOrderList as $order)
          @if ($orderCount == 5)
            @break
          @endif
          @if ($order->status == 'accept')
            @php
            $orderCount = $orderCount + 1;
            @endphp
          @endif
         
          @if ($order->status == 'accept')
            
          
          <tr class="bg-gray-50  hover:bg-gray-100  text-gray-700">
            <td class="px-4 py-3">
              <div class="flex items-center text-sm">
                {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                  <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div> --}}
                <div>
                  <p class="font-semibold">{{ $order->receiverName }}</p>
                  <p class="text-xs text-gray-600 dark:text-gray-400">{{ $order->deliveryAddress }} </p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-sm">{{$order->created_at}}</td>
            
            <td class="px-4 py-3 text-sm"><button data-modal-target="static-modal2222{{$order->id}}" data-modal-toggle="static-modal2222{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW ORDER</button></td>
            
            <div id="static-modal2222{{$order->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-2xl max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow ">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                          <h3 class="text-xl font-semibold text-gray-900 ">
                              Order Details 
                              
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal2222{{$order->id}}">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                          
                      </div>
                      <!-- Modal body -->
                      <div class="p-4 md:p-5 space-y-4">
                        @if ($order->payment == 'pending')
                          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Payment still not completed!</strong>
                          </div>
                        @else
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">Payment successfully completed</strong>
                        </div>

                        @endif
                        
                        @php
                          $event = $eventObj->getEvent($order->event_id);
                        @endphp
                      <div style="display: flex; justify-content: center" >

                        <div class="w-full max-w-md p-4 bg-white  rounded-lg ">
                          
                         <figure class="max-w-lg">
                           <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $event->image) }}" alt="image description">
                           <figcaption class="mt-2 text-sm text-center text-gray-500 "><strong>Category:</strong> {{$event->category}}</figcaption>
                           <figcaption class="mt-2 text-sm text-center text-gray-500 "><strong>Item Name:</strong> {{$event->name}}</figcaption>
                         </figure>

                       
                        <div class="flow-root">


                              
                        </div>
                      </div>
                    </div>
                      

                      </div>
                      <!-- Modal footer -->
                      <div style="display: flex; justify-content: center" class="p-4 md:p-5">
                        <div >
                          <button data-modal-hide="static-modal2222{{$order->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">OK</button>
                        </div>
                      </div>
                  </div>
              </div>
          </div>

            <td class="px-4 py-3 text-xs">
              <button data-modal-target="popup-modal555{{$order->id}}" data-modal-toggle="popup-modal555{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">CONFIRM DELIVERY</button>
  
            </td>
            
          </tr>

          {{-- Accept Modal --}}
          <div id="popup-modal555{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <form action="{{route('events.changestatus')}}" method="POST">
              @csrf

            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow ">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal555{{$order->id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 ">Are you sure to <span style="color: green"> accept </span> this Order?</h3>
                        <input type="hidden" name="status" value="accept">
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <button type="submit" data-modal-hide="popup-modal555{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal555{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">No, cancel</button>
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
























        <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6">
          <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">
            <div class="px-6 py-5 font-semibold border-b border-gray-100">The number of applied and left students per month</div>
            <div class="p-4 flex-grow">
              <div class="flex items-center justify-center h-full px-4 py-16 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">Chart</div>
            </div>
          </div>
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
              </svg>
            </div>
            <div>
              <span class="block text-2xl font-bold">25</span>
              <span class="block text-gray-500">Lections left</span>
            </div>
          </div>
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <span class="block text-2xl font-bold">139</span>
              <span class="block text-gray-500">Hours spent on lections</span>
            </div>
          </div>
          <div class="row-span-3 bg-white shadow rounded-lg">
            <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
              <span>Students by average mark</span>
              <button type="button" class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600" id="options-menu" aria-haspopup="true" aria-expanded="true">
                Descending
                <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
            </div>
            <div class="overflow-y-auto" style="max-height: 24rem;">
              <ul class="p-6 space-y-6">
                <li class="flex items-center">
                  <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/women/82.jpg" alt="Annette Watson profile picture">
                  </div>
                  <span class="text-gray-600">Annette Watson</span>
                  <span class="ml-auto font-semibold">9.3</span>
                </li>
                <li class="flex items-center">
                  <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/men/81.jpg" alt="Calvin Steward profile picture">
                  </div>
                  <span class="text-gray-600">Calvin Steward</span>
                  <span class="ml-auto font-semibold">8.9</span>
                </li>
                <li class="flex items-center">
                  <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/men/80.jpg" alt="Ralph Richards profile picture">
                  </div>
                  <span class="text-gray-600">Ralph Richards</span>
                  <span class="ml-auto font-semibold">8.7</span>
                </li>
                <li class="flex items-center">
                  <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/men/79.jpg" alt="Bernard Murphy profile picture">
                  </div>
                  <span class="text-gray-600">Bernard Murphy</span>
                  <span class="ml-auto font-semibold">8.2</span>
                </li>
                <li class="flex items-center">
                  <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/women/78.jpg" alt="Arlene Robertson profile picture">
                  </div>
                  <span class="text-gray-600">Arlene Robertson</span>
                  <span class="ml-auto font-semibold">8.2</span>
                </li>
                <li class="flex items-center">
                  <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/women/77.jpg" alt="Jane Lane profile picture">
                  </div>
                  <span class="text-gray-600">Jane Lane</span>
                  <span class="ml-auto font-semibold">8.1</span>
                </li>
                <li class="flex items-center">
                  <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Pat Mckinney profile picture">
                  </div>
                  <span class="text-gray-600">Pat Mckinney</span>
                  <span class="ml-auto font-semibold">7.9</span>
                </li>
                <li class="flex items-center">
                  <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Norman Walters profile picture">
                  </div>
                  <span class="text-gray-600">Norman Walters</span>
                  <span class="ml-auto font-semibold">7.7</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="flex flex-col row-span-3 bg-white shadow rounded-lg">
            <div class="px-6 py-5 font-semibold border-b border-gray-100">Students by type of studying</div>
            <div class="p-4 flex-grow">
              <div class="flex items-center justify-center h-full px-4 py-24 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">Chart</div>
            </div>
          </div>
        </section>
        
      </main>
    </div>
</div>
 


<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white ">

     
    
      
    
      <div class="h-full mb-10 md:ml">

    
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
          <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div class="text-right text-black" >
              <p class="text-2xl">{{$userCount}}</p>
              <p>Users</p>
            </div>
          </div>
          <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
            </div>
            <div class="text-right text-black" >
              <p class="text-2xl">{{$deliveredOrders}}</p>
              <p>Orders</p>
            </div>
          </div>
          <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
            <div class="text-right text-black" >
              <p class="text-2xl">Rs. {{$income}}</p>
              <p>Sales</p>
            </div>
          </div>
          <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <div width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"> <i class="fa-regular fa-gem fa-xl"></i></div>
            </div>
            
            
            <div class="text-right text-black">
              <p class="text-2xl">{{$verifiedGemBusiness}}</p> 
              <p>Gem Businesses</p>
            </div>
          </div>
        </div>
        <!-- ./Statistics Cards -->

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
          <button data-modal-target="crud-modal" data-modal-toggle="crud-modal">
            <div style="display: flex; justify-content: center" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
              {{-- <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </div> --}}
              <div class="text-black" >
                <p class="text-2xl">ADD NEW ITEMS</p>
                {{-- <p>Add New Items</p> --}}
              </div>
            </div>
          </button>


          <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Add New Item
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <form class="p-4 md:p-5" action="{{route('shop.save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="10000.00" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                              <label for="customize" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customize</label>
                              
                              <div class="flex items-center mb-2">
                                <input type="radio" name="customize" id="true-option" value="true" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                <label for="true-option" class="ml-2 text-sm font-medium text-gray-900 dark:text-white">True</label>
                              </div>
                            
                              <div class="flex items-center">
                                <input type="radio" name="customize" id="false-option" value="false" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                <label for="false-option" class="ml-2 text-sm font-medium text-gray-900 dark:text-white">False</label>
                              </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                              <label for="item_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                              <input type="file" name="image" id="item_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                          </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="Necklace">Necklace</option>
                                    <option value="Earring">Earring</option>
                                    <option value="Ring">Ring</option>
                                    <option value="Bracelet">Bracelet</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here" required></textarea>                    
                            </div>
                            <div class="col-span-2">
                              <label for="specification" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Specification</label>
                              <textarea id="specification" name="specification" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product specification here" required></textarea>                    
                            </div>
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                          </svg>
                          Add new product
                        </button>
                  </form>
                </div>
            </div>
          </div>

          <button data-modal-target="crud-modal1" data-modal-toggle="crud-modal1">
            <div style="display: flex; justify-content: center" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
              {{-- <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </div> --}}
              <div class="text-black" >
                <p class="text-2xl">CHANGE MATERIAL PRICE</p>
                {{-- <p>Add New Items</p> --}}
              </div>
            </div>
          </button>

          <div id="crud-modal1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                          Change Material Price
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal1">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <form class="p-4 md:p-5" action="{{route('manager.changematerialprice')}}" method="POST">
                        @csrf
                      <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="material" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Material</label>
                                <select id="material" name="material" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                  @foreach ($materialList as $material)
                                  <option value="{{$material->name}}">{{$material->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                           
                            <div class="col-span-2">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Price</label>
                                <input type="number" min="0" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="10000.00" required="">
                            </div>
                            
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                          </svg>
                          Update New Price
                        </button>
                  </form>
                </div>
            </div>
          </div>




          <button data-modal-target="crud-modal2" data-modal-toggle="crud-modal2">
            <div style="display: flex; justify-content: center" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
              {{-- <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </div> --}}
              <div class="text-black" >
                <p class="text-2xl">CHANGE GEM PRICE</p>
                {{-- <p>Add New Items</p> --}}
              </div>
            </div>
          </button>

          <div id="crud-modal2" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                          Change Gem Price
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal2">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <form class="p-4 md:p-5" action="{{route('manager.changecusgemprice')}}" method="POST">
                        @csrf
                      <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="GEM" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Gem</label>
                                <select id="material" name="gem_type_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                  @foreach ($gemList as $gem)
                                  <option value="{{$gem->id}}">{{$gem->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                           
                            <div class="col-span-2">
                                <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Size</label>
                                <select id="size" name="gem_size_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                  @foreach ($gemSizeList as $size)
                                  <option value="{{$size->id}}">{{$size->size}}</option>
                                  @endforeach
                              </select>
                            </div>

                            <div class="col-span-2">
                              <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Price</label>
                              <input type="number" min="0" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="10000.00" required="">
                          </div>
                            
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                          </svg>
                          Update New Price
                        </button>
                  </form>
                </div>
            </div>
          </div>



          <button data-modal-target="crud-modal3" data-modal-toggle="crud-modal3">
            <div style="display: flex; justify-content: center" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
              {{-- <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </div> --}}
              <div class="text-black" >
                <p class="text-2xl">ADD NEW EVENT ITEM</p>
                {{-- <p>Add New Items</p> --}}
              </div>
            </div>
          </button>

          <div id="crud-modal3" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                          ADD NEW EVENT ITEM
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal3">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <form class="p-4 md:p-5" action="{{route('events.save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="10000.00" required="">
                            </div>
                            
                            <div class="col-span-2 sm:col-span-1">
                              <label for="item_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                              <input type="file" name="image" id="item_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                          </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="Wedding">Wedding</option>
                                    <option value="Apala">Apala</option>
                                    <option value="Panchayudha">Panchayudha</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here" required></textarea>                    
                            </div>
                            <div class="col-span-2">
                              <label for="specification" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Specification</label>
                              <textarea id="specification" name="specification" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product specification here" required></textarea>                    
                            </div>
                            <div class="col-span-2">
                              <label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Note</label>
                              <textarea id="note" name="note" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product Notes here" required></textarea>                    
                            </div>
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                          </svg>
                          Add new Item
                        </button>
                  </form>
                </div>
            </div>
          </div>
        </div>
        <!-- ./Statistics Cards -->
    
        <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
    
          <!-- Social Traffic -->
          <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
              <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Inventory</h3>
                </div>
                
              </div>
              <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left ">Category</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Number Of Models</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left boldtext">Necklace</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 boldtext">{{$item->getNumberOfItemsPerCategory('Necklace')}}</td>
                      <td style="width: 200px" class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <a href="{{ route('manager.necklace') }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW NECKLACES</a>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left boldtext">Ear Ring</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 boldtext">{{$item->getNumberOfItemsPerCategory('Earring')}}</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <a href="{{ route('manager.earring') }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW EAR RINGS</a>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left boldtext">Ring</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 boldtext">{{$item->getNumberOfItemsPerCategory('Ring')}}</td>
                      <td  class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <a  href="{{ route('manager.ring') }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW RINGS</a>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left boldtext">Bracelet</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 boldtext">{{$item->getNumberOfItemsPerCategory('Bracelet')}}</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <a href="{{route('manager.bracelet')}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW BRACELETS</a>
                      </td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          
                      
          <!-- ./Social Traffic -->


          <!-- User Management  -->
          <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
              <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">User Accounts</h3>
                </div>
                
              </div>
              <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Type</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Number Of Accounts</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left boldtext">Registered Customers</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 boldtext">{{$allUserCount}}</td>
                      <td style="width: 200px" class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <a href="{{ route('manager.users') }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW CUSTOMERS</a>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left boldtext">Verified Gem Business </th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 boldtext">{{$verifiedGemBusiness}}</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <a href="{{ route('manager.gembusiness') }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW GEM BUSINESS</a>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left boldtext">Team Leaders</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 boldtext">{{$leaderCount}}</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <a href="{{ route('manager.leaders') }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW LEADERS</a>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left boldtext">Managers</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 boldtext">{{$manager->getmanagercount()}}</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <a href="{{ route('manager.managers') }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW MANAGERS</a>
                      </td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          
                      
          <!-- ./User Management -->
    
          
        {{-- </div> --}}


        <!-- User Table -->
        @if(count($userList) > 0)
        <div class="mt-4 mx-4">
          
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="flex flex-wrap items-center px-4 py-2">
              <div class="md:col-span-2 xl:col-span-3">
                <h3 class="text-lg font-semibold">Registered Customers</h3> 
              </div>

              <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                <a href="{{ route('manager.users') }}"> <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
              </div>
            </div>
            
            <div class="w-full overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3 boldtext">Name</th>
                    <th class="px-4 py-3 boldtext">country</th>
                    <th class="px-4 py-3 boldtext">contact No</th>
                    <th class="px-4 py-3 boldtext">View Details</th>
                    <th class="px-4 py-3 boldtext">Remove Customer</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @php
                    $userCount = 0;
                  @endphp
                  @foreach($userList as $user)
                  @if ($userCount == 6)
                    @break
                  @endif
                  @php
                    $userCount = $userCount + 1;
                  @endphp
                  <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                          <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                          <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                        </div> --}}
                        <div>
                          <p class="font-semibold">{{ $user->first_name }}</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">{{ $user->last_name }}</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">{{$user->country}}</td>
                    
                    <td class="px-4 py-3 text-sm">{{$user->contact_no}}</td>

                    <td class="px-4 py-3 text-xs">
                      <button data-modal-target="popup-modal1{{$user->id}}" data-modal-toggle="popup-modal1{{$user->id}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW</button>
                     
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <button data-modal-target="popup-modal2{{$user->id}}" data-modal-toggle="popup-modal2{{$user->id}}"  class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">REMOVE</button>
            
                    </td>
                  </tr>

                  {{-- view Modal --}}
                  <div id="popup-modal1{{$user->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    

                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal1{{$user->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5">
                                {{-- <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg> --}}
                                <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">User Details</h3>
                                <div class="grid gap-4 mb-4 grid-cols">
                                  <div class="bg-white overflow-hidden shadow rounded-lg border">
                                    
                                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                                        <dl class="sm:divide-y sm:divide-gray-200">
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Full name
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  {{$user->first_name}} {{$user->last_name}}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                  Username
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$user->username}}
                                              </dd>
                                          </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Email address
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  {{$user->email}}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Phone number
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  {{$user->contact_no}}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Address
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                  {{$user->address}}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                              <dt class="text-sm font-medium text-gray-500">
                                                Country
                                              </dt>
                                              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{$user->country}}
                                              </dd>
                                          </div>
                                        </dl>
                                    </div>
                                </div>
                                </div>
                                
                                <button data-modal-hide="popup-modal1{{$user->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</button>
                            </div>
                        </div>
                    </div>
                    
                </div>

                {{-- remove Modal --}}
                <div id="popup-modal2{{$user->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <form action="{{route('manager.deleteuser')}}" method="POST">
                    @csrf
                  
                  <div class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal2{{$user->id}}">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                          <div class="p-4 md:p-5 text-center">
                              <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                              </svg>
                              <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: red"> Remove </span> this User?</h3>
                              <input type="hidden" name="user_id" value="{{$user->id}}">
                              <button type="submit" data-modal-hide="popup-modal2{{$user->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                  Yes, I'm sure
                              </button>
                              <button data-modal-hide="popup-modal2{{$user->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
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
        <p>No Registered Users found.</p>
        @endif
        <!-- ./users Table -->

      <!-- Business Table -->
      @if(count($unverifiedBusinesses) > 0)
      <div class="mt-4 mx-4">
        
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
          <div class="flex flex-wrap items-center px-4 py-2">
            <div class="md:col-span-2 xl:col-span-3">
              <h3 class="text-lg font-semibold">Pending Gem business registration requests</h3> 
            </div> 

            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
              <a href="{{ route('manager.unverifiedgembusiness') }}"> <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
            </div>
          </div>
          
          <div class="w-full overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-3 boldtext">Business</th>
                  <th class="px-4 py-3 boldtext">Gem_Asso_num</th>
                  <th class="px-4 py-3 boldtext">View Certificate</th>
                  <th class="px-4 py-3 boldtext">Accept Request</th>
                  <th class="px-4 py-3 boldtext">Reject Request</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach($unverifiedBusinesses as $business)

                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                  <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                      {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div> --}}
                      <div>
                        <p class="font-semibold">{{ $business->market_name }}</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">{{ $business->owner_name }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-sm">{{$business->gem_asso_num}}</td>
                  
                  <td class="px-4 py-3 text-sm"><button data-modal-target="static-modal{{$business->id}}" data-modal-toggle="static-modal{{$business->id}}"  type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW</button></td>
                  
                  <div id="static-modal{{$business->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Certificate Image
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal{{$business->id}}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                
                              <img class="h-auto max-w-full" src="{{ asset('storage/' . $business->certificate_image) }}" alt="image description">

                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="static-modal{{$business->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">OK</button>
                                
                            </div>
                        </div>
                    </div>
                </div>

                  <td class="px-4 py-3 text-xs">
                    <button data-modal-target="popup-modal1{{$business->id}}" data-modal-toggle="popup-modal1{{$business->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">ACCEPT</button>

                  </td>
                  <td class="px-4 py-3 text-xs">
                    <button data-modal-target="popup-modal2{{$business->id}}" data-modal-toggle="popup-modal2{{$business->id}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">REJECT</button>
                    
                  </td>
                </tr>

                {{-- Accept Modal --}}
                <div id="popup-modal1{{$business->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <form action="{{route('manager.confirm',$business->id)}}" method="POST">
                    @method('PUT')
                    @csrf

                  <div class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal1{{$business->id}}">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                          <div class="p-4 md:p-5 text-center">
                              <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                              </svg>
                              <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: green"> accept </span> this business?</h3>
                              <input type="hidden" name="decision" value="accepted">
                              <button type="submit" data-modal-hide="popup-modal1{{$business->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                  Yes, I'm sure
                              </button>
                              <button data-modal-hide="popup-modal1{{$business->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                          </div>
                      </div>
                  </div>
                  </form>
              </div>

              {{-- Reject Modal --}}
              <div id="popup-modal2{{$business->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form action="{{route('manager.confirm',$business->id)}}" method="POST">
                  @method('PUT')
                  @csrf
                
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal2{{$business->id}}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: red"> Reject </span> this business?</h3>
                            <input type="hidden" name="decision" value="reject">
                            <button type="submit" data-modal-hide="popup-modal2{{$business->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>
                            <button data-modal-hide="popup-modal2{{$business->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
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
      <p>No unverified businesses found.</p>
      @endif
      <!-- ./business Table -->



      <!-- Order Table -->
      @if(count($orderList) > 0)
      <div class="mt-4 mx-4">
        
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
          <div class="flex flex-wrap items-center px-4 py-2">
            <div class="md:col-span-2 xl:col-span-3">
              <h3 class="text-lg font-semibold">Pending Orders</h3> 
            </div>

            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
              <a href="{{ route('manager.pendingorders') }}"> <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
            </div>
          </div>
          
          <div class="w-full overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-3 boldtext">Reciever</th>
                  <th class="px-4 py-3 boldtext">Date</th>
                  <th class="px-4 py-3 boldtext">View Order</th>
                  <th class="px-4 py-3 boldtext">Accept Order</th>
                  <th class="px-4 py-3 boldtext">Reject Order</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                @php
                $orderCount = 0;
                @endphp
          
                @foreach($orderList as $order)
                @if ($orderCount == 5)
                  @break
                @endif
                @if ($order->orderStatus == 'pending')
                  @php
                  $orderCount = $orderCount + 1;
                  @endphp
                @endif
               
                @if ($order->orderStatus == 'pending')
                  
                
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
                  <td class="px-4 py-3 text-sm">{{$order->created_at}}</td>
                  
                  <td class="px-4 py-3 text-sm"><button data-modal-target="static-modal22{{$order->id}}" data-modal-toggle="static-modal22{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW</button></td>
                  
                  <div id="static-modal22{{$order->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
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
                              @if ($order->transaction == 'false')
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                  <strong class="font-bold">Payment still not completed!</strong>
                                </div>
                              @else
                              <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Payment successfully completed</strong>
                              </div>

                              @endif
                              

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
                                                    <img class="w-8 h-8 rounded-full" src="../images/shop/{{($item->getItemDetails($orderItemss->item_id)->image)}}" alt="Neil image">
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

                  <td class="px-4 py-3 text-xs">
                    <button data-modal-target="popup-modal5{{$order->id}}" data-modal-toggle="popup-modal5{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">ACCEPT</button>
        
                  </td>
                  <td class="px-4 py-3 text-xs">
                    <button data-modal-target="popup-modal6{{$order->id}}" data-modal-toggle="popup-modal6{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">REJECT</button>
                    {{-- <button data-modal-target="popup-modal2{{$order->id}}" data-modal-toggle="popup-modal2{{$order->id}}"><span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full"> Reject </span> </button> --}}
                  </td>
                </tr>

                {{-- Accept Modal --}}
                <div id="popup-modal5{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <form action="{{route('order.changestatus')}}" method="POST">
                    @csrf

                  <div class="relative p-4 w-full max-w-md max-h-full">
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                          <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal5{{$order->id}}">
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                              </svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                          <div class="p-4 md:p-5 text-center">
                              <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                              </svg>
                              <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: green"> accept </span> this Order?</h3>
                              <input type="hidden" name="status" value="accept">
                              <input type="hidden" name="order_id" value="{{$order->id}}">
                              <button type="submit" data-modal-hide="popup-modal5{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                  Yes, I'm sure
                              </button>
                              <button data-modal-hide="popup-modal5{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                          </div>
                      </div>
                  </div>
                  </form>
              </div>

              {{-- Reject Modal --}}
              <div id="popup-modal6{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <form action="{{route('order.changestatus')}}" method="POST">
                  @csrf
                
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal6{{$order->id}}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: red"> Reject </span> this Order?</h3>
                            
                            <input type="hidden" name="status" value="reject">
                              <input type="hidden" name="order_id" value="{{$order->id}}">
                            <button type="submit" data-modal-hide="popup-modal6{{$order->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>
                            <button data-modal-hide="popup-modal6{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
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


<!-- Order Table -->
@if(count($orderList) > 0)
<div class="mt-4 mx-4">
  
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="flex flex-wrap items-center px-4 py-2">
      <div class="md:col-span-2 xl:col-span-3">
        <h3 class="text-lg font-semibold">Orders to be delivered</h3> 
      </div>

      <div class="relative w-full max-w-full flex-grow flex-1 text-right">
        <a href="{{ route('manager.orderstobedelivered') }}"> <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
      </div>
    </div>
    
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th class="px-4 py-3 boldtext">Reciever</th>
            <th class="px-4 py-3 boldtext">Placed</th>
            <th class="px-4 py-3 boldtext">Processed</th>
            <th class="px-4 py-3 boldtext">Shipped</th>
            <th class="px-4 py-3 boldtext">Out for Delivery</th>
            <th class="px-4 py-3 boldtext">Delivered</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

          @php
          $orderCount = 0;
          @endphp
      
          @foreach($orderList as $order)
          @if ($orderCount == 6)
            @break
          @endif
          @if ($order->orderStatus == 'accept' && $order->delivered_at == null)
            @php
            $orderCount = $orderCount + 1;
            @endphp
          @endif
        
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
              <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">ORDER PLACED</span>
              
            </td>
             {{-- PROCESSED --}}
            <td class="px-4 py-3 text-sm">
              @if ($order->shipped_at == null && $order->processed_at == null)
              <button data-modal-target="popup-modal100{{$order->id}}" data-modal-toggle="popup-modal100{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">CONFIRM</button>
              @elseif ($order->processed_at != null)

              <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">DONE</span>
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
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">PENDING</span>
          
          @elseif ($order->processed_at != null && $order->shipped_at == null)
          <button data-modal-target="popup-modal200{{$order->id}}" data-modal-toggle="popup-modal200{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">CONFIRM</button>
          
          @elseif ($order->shipped_at != null)
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">DONE</span>
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
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">PENDING</span>
          
          @elseif ($order->shipped_at != null && $order->out_at == null)
          <button data-modal-target="popup-modal300{{$order->id}}" data-modal-toggle="popup-modal300{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">CONFIRM</button>
          
          @elseif ($order->out_at != null)
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">DONE</span>
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
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">PENDING</span>
          
          @elseif ($order->out_at != null && $order->delivered_at == null)
          <button data-modal-target="popup-modal400{{$order->id}}" data-modal-toggle="popup-modal400{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">CONFIRM</button>
          
          @elseif ($order->delivered_at != null)
          <span class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">DONE</span>
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

 <!-- Order Table -->
 @if(count($eventOrderList) > 0)
 <div class="mt-4 mx-4">
   
   <div class="w-full overflow-hidden rounded-lg shadow-xs">
     <div class="flex flex-wrap items-center px-4 py-2">
       <div class="md:col-span-2 xl:col-span-3">
         <h3 class="text-lg font-semibold">Pending Special Event Orders</h3> 
       </div>
       

       <div class="relative w-full max-w-full flex-grow flex-1 text-right">
         <a href="{{ route('manager.pendingeventorders') }}"> <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
       </div>
     </div>
     
     <div class="w-full overflow-x-auto">
       <table class="w-full">
         <thead>
           <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3 boldtext">Reciever</th>
             <th class="px-4 py-3 boldtext">Date</th>
             <th class="px-4 py-3 boldtext">View Order</th>
             <th class="px-4 py-3 boldtext">Confirm Order</th>
             <th class="px-4 py-3 boldtext">Reject Order</th>
           </tr>
         </thead>
         <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

           @php
           $orderCount = 0;
           @endphp
     
           @foreach($eventOrderList as $order)
           @if ($orderCount == 5)
             @break
           @endif
           @if ($order->status == 'pending')
             @php
             $orderCount = $orderCount + 1;
             @endphp
           @endif
          
           @if ($order->status == 'pending')
             
           
           <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
             <td class="px-4 py-3">
               <div class="flex items-center text-sm">
                 {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                   <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                   <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                 </div> --}}
                 <div>
                   <p class="font-semibold">{{ $order->receiverName }}</p>
                   <p class="text-xs text-gray-600 dark:text-gray-400">{{ $order->deliveryAddress }} </p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">{{$order->created_at}}</td>
             
             <td class="px-4 py-3 text-sm"><button data-modal-target="static-modal2222{{$order->id}}" data-modal-toggle="static-modal2222{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW ORDER</button></td>
             
             <div id="static-modal2222{{$order->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
               <div class="relative p-4 w-full max-w-2xl max-h-full">
                   <!-- Modal content -->
                   <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                       <!-- Modal header -->
                       <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                           <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                               Order Details 
                               
                           </h3>
                           <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal2222{{$order->id}}">
                               <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                               </svg>
                               <span class="sr-only">Close modal</span>
                           </button>
                           
                       </div>
                       <!-- Modal body -->
                       <div class="p-4 md:p-5 space-y-4">
                         @if ($order->payment == 'pending')
                           <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                             <strong class="font-bold">Payment still not completed!</strong>
                           </div>
                         @else
                         <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                           <strong class="font-bold">Payment successfully completed</strong>
                         </div>

                         @endif
                         
                         @php
                           $event = $eventObj->getEvent($order->event_id);
                         @endphp
                       <div style="display: flex; justify-content: center" >

                         <div class="w-full max-w-md p-4 bg-white  rounded-lg ">
                           
                          <figure class="max-w-lg">
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $event->image) }}" alt="image description">
                            <figcaption class="mt-2 text-sm text-center text-gray-500 "><strong>Category:</strong> {{$event->category}}</figcaption>
                            <figcaption class="mt-2 text-sm text-center text-gray-500 "><strong>Item Name:</strong> {{$event->name}}</figcaption>
                          </figure>

                        
                         <div class="flow-root">


                               
                         </div>
                       </div>
                     </div>
                       

                       </div>
                       <!-- Modal footer -->
                       <div style="display: flex; justify-content: center" class="p-4 md:p-5">
                         <div >
                           <button data-modal-hide="static-modal2222{{$order->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">OK</button>
                         </div>
                       </div>
                   </div>
               </div>
           </div>

             <td class="px-4 py-3 text-xs">
               <button data-modal-target="popup-modal555{{$order->id}}" data-modal-toggle="popup-modal555{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">ACCEPT ORDER</button>
   
             </td>
             <td class="px-4 py-3 text-xs">
               <button data-modal-target="popup-modal666{{$order->id}}" data-modal-toggle="popup-modal666{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">REJECT ORDER</button>
               {{-- <button data-modal-target="popup-modal2{{$order->id}}" data-modal-toggle="popup-modal2{{$order->id}}"><span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full"> Reject </span> </button> --}}
             </td>
           </tr>

           {{-- Accept Modal --}}
           <div id="popup-modal555{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
             <form action="{{route('events.changestatus')}}" method="POST">
               @csrf

             <div class="relative p-4 w-full max-w-md max-h-full">
                 <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                     <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal555{{$order->id}}">
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                         </svg>
                         <span class="sr-only">Close modal</span>
                     </button>
                     <div class="p-4 md:p-5 text-center">
                         <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                         </svg>
                         <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: green"> accept </span> this Order?</h3>
                         <input type="hidden" name="status" value="accept">
                         <input type="hidden" name="order_id" value="{{$order->id}}">
                         <button type="submit" data-modal-hide="popup-modal555{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                             Yes, I'm sure
                         </button>
                         <button data-modal-hide="popup-modal555{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                     </div>
                 </div>
             </div>
             </form>
         </div>

         {{-- Reject Modal --}}
         <div id="popup-modal666{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
           <form action="{{route('events.changestatus')}}" method="POST">
             @csrf
           
           <div class="relative p-4 w-full max-w-md max-h-full">
               <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                   <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal666{{$order->id}}">
                       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                       </svg>
                       <span class="sr-only">Close modal</span>
                   </button>
                   <div class="p-4 md:p-5 text-center">
                       <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                       </svg>
                       <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: red"> Reject </span> this Order?</h3>
                       
                       <input type="hidden" name="status" value="reject">
                         <input type="hidden" name="order_id" value="{{$order->id}}">
                       <button type="submit" data-modal-hide="popup-modal666{{$order->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                           Yes, I'm sure
                       </button>
                       <button data-modal-hide="popup-modal666{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
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


 <!-- Order Table -->
 @if(count($eventOrderList) > 0)
 <div class="mt-4 mx-4">
   
   <div class="w-full overflow-hidden rounded-lg shadow-xs">
     <div class="flex flex-wrap items-center px-4 py-2">
       <div class="md:col-span-2 xl:col-span-3">
         <h3 class="text-lg font-semibold">Special Event Orders To be delivered</h3> 
       </div>
       

       <div class="relative w-full max-w-full flex-grow flex-1 text-right">
         <a href="{{ route('manager.specialorderstobedelivered') }}"> <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button></a>
       </div>
     </div>
     
     <div class="w-full overflow-x-auto">
       <table class="w-full">
         <thead>
           <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
             <th class="px-4 py-3 boldtext">Reciever</th>
             <th class="px-4 py-3 boldtext">Date</th>
             <th class="px-4 py-3 boldtext">View Order</th>
             <th class="px-4 py-3 boldtext">Confirm Delivery</th>
           </tr>
         </thead>
         <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

           @php
           $orderCount = 0;
           @endphp
     
           @foreach($eventOrderList as $order)
           @if ($orderCount == 5)
             @break
           @endif
           @if ($order->status == 'accept')
             @php
             $orderCount = $orderCount + 1;
             @endphp
           @endif
          
           @if ($order->status == 'accept')
             
           
           <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
             <td class="px-4 py-3">
               <div class="flex items-center text-sm">
                 {{-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                   <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                   <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                 </div> --}}
                 <div>
                   <p class="font-semibold">{{ $order->receiverName }}</p>
                   <p class="text-xs text-gray-600 dark:text-gray-400">{{ $order->deliveryAddress }} </p>
                 </div>
               </div>
             </td>
             <td class="px-4 py-3 text-sm">{{$order->created_at}}</td>
             
             <td class="px-4 py-3 text-sm"><button data-modal-target="static-modal2222{{$order->id}}" data-modal-toggle="static-modal2222{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">VIEW ORDER</button></td>
             
             <div id="static-modal2222{{$order->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
               <div class="relative p-4 w-full max-w-2xl max-h-full">
                   <!-- Modal content -->
                   <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                       <!-- Modal header -->
                       <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                           <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                               Order Details 
                               
                           </h3>
                           <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal2222{{$order->id}}">
                               <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                               </svg>
                               <span class="sr-only">Close modal</span>
                           </button>
                           
                       </div>
                       <!-- Modal body -->
                       <div class="p-4 md:p-5 space-y-4">
                         @if ($order->payment == 'pending')
                           <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                             <strong class="font-bold">Payment still not completed!</strong>
                           </div>
                         @else
                         <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                           <strong class="font-bold">Payment successfully completed</strong>
                         </div>

                         @endif
                         
                         @php
                           $event = $eventObj->getEvent($order->event_id);
                         @endphp
                       <div style="display: flex; justify-content: center" >

                         <div class="w-full max-w-md p-4 bg-white  rounded-lg ">
                           
                          <figure class="max-w-lg">
                            <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $event->image) }}" alt="image description">
                            <figcaption class="mt-2 text-sm text-center text-gray-500 "><strong>Category:</strong> {{$event->category}}</figcaption>
                            <figcaption class="mt-2 text-sm text-center text-gray-500 "><strong>Item Name:</strong> {{$event->name}}</figcaption>
                          </figure>

                        
                         <div class="flow-root">


                               
                         </div>
                       </div>
                     </div>
                       

                       </div>
                       <!-- Modal footer -->
                       <div style="display: flex; justify-content: center" class="p-4 md:p-5">
                         <div >
                           <button data-modal-hide="static-modal2222{{$order->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">OK</button>
                         </div>
                       </div>
                   </div>
               </div>
           </div>

             <td class="px-4 py-3 text-xs">
               <button data-modal-target="popup-modal555{{$order->id}}" data-modal-toggle="popup-modal555{{$order->id}}" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 ">CONFIRM DELIVERY</button>
   
             </td>
             
           </tr>

           {{-- Accept Modal --}}
           <div id="popup-modal555{{$order->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
             <form action="{{route('events.changestatus')}}" method="POST">
               @csrf

             <div class="relative p-4 w-full max-w-md max-h-full">
                 <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                     <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal555{{$order->id}}">
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                         </svg>
                         <span class="sr-only">Close modal</span>
                     </button>
                     <div class="p-4 md:p-5 text-center">
                         <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                         </svg>
                         <h3 style="font-weight: bold" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to <span style="color: green"> accept </span> this Order?</h3>
                         <input type="hidden" name="status" value="accept">
                         <input type="hidden" name="order_id" value="{{$order->id}}">
                         <button type="submit" data-modal-hide="popup-modal555{{$order->id}}" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                             Yes, I'm sure
                         </button>
                         <button data-modal-hide="popup-modal555{{$order->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
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


    <footer style="z-index: 1000" id="footer">
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
