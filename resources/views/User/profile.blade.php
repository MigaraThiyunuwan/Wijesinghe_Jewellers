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
        .hidden {
            display: none;
        }

        .active {
            background-color: #cccccc; /* Change this to the desired active color */
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
    // document.addEventListener("DOMContentLoaded", function() {
    //     const sections = document.querySelectorAll(".section");
    //     const links = document.querySelectorAll(".nav-link");

    //     // Show the inventory section by default
    //     document.getElementById("inventory").classList.remove("hidden");

    //     links.forEach(link => {
    //         link.addEventListener("click", function() {
    //             sections.forEach(section => section.classList.add("hidden"));
    //             document.getElementById(this.dataset.target).classList.remove("hidden");
    //         });
    //     });
    // });

    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll(".section");
        const links = document.querySelectorAll(".nav-link");

        // Show the inventory section by default and set the active link
        document.getElementById("inventory").classList.remove("hidden");
        document.querySelector('[data-target="inventory"]').classList.add("active");

        links.forEach(link => {
            link.addEventListener("click", function() {
                sections.forEach(section => section.classList.add("hidden"));
                links.forEach(link => link.classList.remove("active"));

                document.getElementById(this.dataset.target).classList.remove("hidden");
                this.classList.add("active");
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
                        @if ($user)
                        <li><a href="{{ asset('user/profile') }}"><span class="ico-account"></span>Hello, {{$user->username}}</a></li>
                        @endif
                        @if ($user)
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
              <li style="display: flex; justify-content: center; font-family:Novecentowide"><strong >@ {{$user->username}} </strong> </li>
              {{-- <li>NIC:  </li>
              <li>Contact: {{$manager->contact_no}} </li> --}}
            </ul>
            <p style="font-size: 12px">{{$user->email}} </p>
            <p style="font-size: 12px">{{$user->contact_no}} </p>
            <p style="font-size: 12px">{{$user->address}}</p>
            <p style="font-size: 12px; margin-top: 15px; text-align: justify">{{$user->about}} </p>
            
            {{-- <div class="text-sm font-semibold mt-2">{{$manager->username}}</div>
            <div class="text-xs text-gray-500">{{$manager->nic}}</div>
            <div class="text-xs text-gray-500">{{$manager->contact_no}}</div> --}}
            
          </div>


            <ul class="space-y-2 font-medium">
                <li>
                    <div  data-target="inventory" class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group"  >
                        <svg style="width: 25px; height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <span>My Special Orders</span>
                    </div>
                </li>
                <hr>
                
                
                <li>
                    <div data-target="orderstobedelivered" class="nav-link flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg style="width: 25px; height: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M234.5 5.7c13.9-5 29.1-5 43.1 0l192 68.6C495 83.4 512 107.5 512 134.6l0 242.9c0 27-17 51.2-42.5 60.3l-192 68.6c-13.9 5-29.1 5-43.1 0l-192-68.6C17 428.6 0 404.5 0 377.4L0 134.6c0-27 17-51.2 42.5-60.3l192-68.6zM256 66L82.3 128 256 190l173.7-62L256 66zm32 368.6l160-57.1 0-188L288 246.6l0 188z"/></svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">My Orders</span>
                    </div>
                </li>
                
            </ul>
        </div>
    </aside>
    
 
 <div class="flex bg-gray-100 min-h-screen ">
  
    <div class="flex-grow text-gray-900">
      
      <main class="p-6 sm:p-10 space-y-6" style="margin-top: 150px; margin-left: 250px">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
          <div style="display: flex" class="mr-6">
            <h1 class="text-4xl font-semibold mb-2">{{$user->first_name}} {{$user->last_name}}</h1>
            {{-- <h2 class="text-gray-600 ml-0.5">nic: {{$manager->nic}} | Contact: {{$manager->contact_no}}</h2> --}}
            <a class="ml-3" href="{{ route('user.edit') }}">
            <button class="inline-flex px-5 py-3 text-yellow-600 hover:text-yellow-700 focus:text-yellow-700 hover:bg-yellow-100 focus:bg-yellow-100 border border-yellow-600 rounded-md mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 ">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              {{-- Edit Profile --}}
            </button>
            </a>
          </div>
          <div class="flex flex-wrap items-start justify-end -mb-3">
          

            @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            {{-- <li>{{$error}}</li> --}}
                            <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 " role="alert">
                              <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                              </svg>
                              <span class="sr-only">Info</span>
                              <div class="ms-3 text-sm font-medium">
                                {{$error}}
                              </div>
                              <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-2" aria-label="Close">
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

                  @if (session('success'))

                      <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 " role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                          {{ session('success') }}
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-3" aria-label="Close">
                          <span class="sr-only">Close</span>
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                        </button>
                      </div>
                  @endif

                

                  {{-- @if (session('managerError'))

                    <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 " role="alert">
                      <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                      </svg>
                      <span class="sr-only">Info</span>
                      <div class="ms-3 text-sm font-medium">
                        {{ session('managerError') }}
                      </div>
                      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-2" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                      </button>
                    </div>
                     
                  @endif --}}
            
            

            {{-- <button class="inline-flex px-5 py-3 text-purple-600 hover:text-purple-700 focus:text-purple-700 hover:bg-purple-100 focus:bg-purple-100 border border-purple-600 rounded-md mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
              </svg>
              Manage dashboard
            </button> --}}

            <a href="{{ route('user.customize') }}">
            <button class="inline-flex px-5 py-3 text-white bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-700 rounded-md ml-6 mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Customize Jewellery
            </button>
            </a>

            <a href="{{ route('user.mycustomize') }}">
            <button class="inline-flex px-5 py-3 text-white bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-700 rounded-md ml-6 mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              My Customizations
            </button>
            </a>

          </div>
          
        </div>
        

<hr>
        
          {{-- <div class="flex items-center p-8 ">
            <button class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Add Manager 
            </button>
          </div>
          <div class="flex items-center p-8 ">
            <button class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Add Manager 
            </button>
          </div>
          <div class="flex items-center p-8 ">
            <button class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Add Manager 
            </button>
          </div>
          <div class="flex items-center p-8 ">
            <button class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Add Manager 
            </button>
          </div> --}}
      
<div id="inventory" style="font-family:Novecentowide" class="section hidden relative mt-4 mx-4">
    @if(count($eventOrderList)>0)
          <div style="justify-content: space-between; display: flex">
            <h1 style="font-size: 30px; font-weight: bold">My Special Orders</h1>
            <a href="{{ route('user.eventorders') }}"> <button class="bg-yellow-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
              See All orders
            </button>
          </a>
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
                  @php
                    $orderCount1 = 0;
                  @endphp
                  
                  @foreach($eventOrderList as $order)

                  @if ($orderCount1 == 5)
                    @break
                  @endif
                  @php
                    $orderCount1 = $orderCount1 + 1;
                  @endphp
                    
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
                        @if ($order->payment == 'pending')
                        

                        <form method="POST" action="{{route('events.retrypayment')}}">
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
                        @if ($order->status == 'pending')
                        <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Pending</span>

                        @elseif ($order->status == 'accept')
                        <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Accepted</span>

                        @else

                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Rejected</span>

                        @endif
                      
                      </th>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        
                        <button type="button" data-modal-target="timeline-modal{{ $order->id}}" data-modal-toggle="timeline-modal{{ $order->id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Delivery Status</button>
                      </th>
                  </tr>
                  





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

{{-- my order --}}
          <div id="orderstobedelivered" style="font-family:Novecentowide" class="section hidden">
          @if(count($orderList)>0)
          
          <div style="justify-content: space-between; display: flex">
            <h1 style="font-size: 30px; font-weight: bold">My Orders</h1>
            <a href="{{ route('user.directorders') }}"> <button class="bg-yellow-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
              See All orders
            </button>
          </a>
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
                  @php
                    $orderCount = 0;
                  @endphp
                  
                  @foreach($orderList as $order)

                  @if ($orderCount == 5)
                    @break
                  @endif
                  @php
                    $orderCount = $orderCount + 1;
                  @endphp
                    
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

                  <!-- Main modal -->
                  <div style="margin-top: 80px" id="timeline-modal{{ $order->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div  class="relative bg-white rounded-lg shadow"
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
                                <div  class="p-4 md:p-5">
                                    <ol  class="relative border-s border-gray-200  ms-3.5 mb-4 md:mb-5">                  
                                        <li @if ($order->delivered_at == null)
                                          style="opacity: 0.5"
                                          @endif class="mb-10 ms-8">            
                                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                                <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                            </span>
                                            
                                            <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 " style="font-size: 15px"  >Your order delivered successfully @if ($order->delivered_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @else
                                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Pending</span>
                                            @endif</h3>
                                            <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->delivered_at}}</time>
                                            <time class="block mb-3 text-sm font-normal leading-none text-gray-500 "style="font-size: 10px"  >The courier delivers the package to the customer's address.</time>
                                            
                                        </li>
                                        
                                        <li @if ($order->out_at == null)
                                          style="opacity: 0.5"
                                          @endif class="mb-10 ms-8">            
                                          <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                              <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                          </span>
                                          
                                          <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 " style="font-size: 15px"  >Your Order is out for delivery @if ($order->out_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @else
                                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Pending</span>
                                            @endif </h3>
                                            <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->out_at}}</time>
                                          <time class="block mb-3 text-sm font-normal leading-none text-gray-500 " style="font-size: 10px"  >Your order will be delivered at today</time>
                                          
                                        </li>

                                        <li @if ($order->shipped_at == null)
                                          style="opacity: 0.5"
                                          @endif class="mb-10 ms-8">            
                                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                                <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                            </span>
                                            
                                            <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 " style="font-size: 15px"  >Your Order was shipped @if ($order->shipped_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @else
                                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Pending</span>
                                            @endif</h3>
                                            <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->shipped_at}}</time>
                                            <time class="block mb-3 text-sm font-normal leading-none text-gray-500 " style="font-size: 10px"  >The package leaves the warehouse and is en route to the delivery team.</time>
                                            
                                        </li>

                                        <li @if ($order->processed_at == null)
                                          style="opacity: 0.5"
                                          @endif class="mb-10 ms-8">            
                                          <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                              <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                          </span>
                                          
                                          <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 " style="font-size: 15px"  >Your Order is Processing 
                                            @if ($order->processed_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @else
                                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Pending</span>
                                            @endif
                                            
                                          </h3>
                                          <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->processed_at}}</time>
                                          <time class="block mb-3 text-sm font-normal leading-none text-gray-500 " style="font-size: 10px"  >The items are picked from inventory, packed, and prepared for shipment.</time>
                                          
                                      </li>

                                      <li @if ($order->placed_at == null)
                                        style="opacity: 0.5"
                                        @endif class="mb-10 ms-8">            
                                        <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white ">
                                            <svg class="w-2.5 h-2.5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path fill="currentColor" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z"/></svg>
                                        </span>
                                        
                                        <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 " style="font-size: 15px"  >Your Order Placed Successfully @if ($order->placed_at != null)
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded  ms-3">Done</span>
                                            @endif </h3>
                                        <time style="font-weight: bold" class="block mb-3 text-sm font-normal leading-none text-gray-500 ">{{$order->placed_at}} </time>
                                        <time class="block mb-3 text-sm font-normal leading-none text-gray-500 " style="font-size: 10px"  >You placed an order on the online platform.</time>
                                        
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
    </div>
</div>
 




  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
 


    {{-- <footer style="z-index: 1000" id="footer">
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
	</footer> --}}
	<!-- / footer -->
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
  
</body>
</html>
