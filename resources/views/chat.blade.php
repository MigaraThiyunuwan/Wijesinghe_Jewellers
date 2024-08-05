<head>
  <meta charset="utf-8">
  <title>Wijesinghe Jewellery</title>
  <meta name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/0008de2df6.js" crossorigin="anonymous"></script>
  @php
      $user = session()->get('user');
      $manager = session()->get('manager');
      $leader = session()->get('leader');
      $gemBusiness = session()->get('gemBusiness');
  @endphp
</head>

<header id="header">
  <div class="container">
      <a href="/" id="logo" title="Wijesinghe Jewellers">Wijesinghe Jewellers</a>
      <div class="right-links">
          <ul>
              @if ($user)
                  <li><a href="{{ route('user.profile') }}"><span class="ico-account"></span>Hello,
                          {{ $user->username }}</a></li>
              @endif
              @if ($manager)
                  <li><a href="{{ route('manager.profile') }}"><span class="ico-account"></span>Hello,
                          {{ $manager->username }}</a></li>
              @endif
              @if ($leader)
                  <li><a href="{{ route('leader.profile') }}"><span class="ico-account"></span>Hello,
                          {{ $leader->first_name }}</a></li>
              @endif
              @if ($gemBusiness)
                  <li><a href="{{ route('gem.profile') }}"><span class="ico-account"></span>Hello,
                          {{ $gemBusiness->owner_name }}</a></li>
              @endif



              @if ($user || $manager || $leader || $gemBusiness)
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



<div id="messages" class="flex h-screen antialiased text-gray-800">
    <div class="flex flex-row h-full w-full overflow-x-hidden">
      <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">
        <div class="flex flex-row items-center justify-center h-12 w-full">
          <div
            class="flex items-center justify-center rounded-2xl text-indigo-700 bg-indigo-100 h-10 w-10"
          >
            <svg
              class="w-6 h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"
              ></path>
            </svg>
          </div>
          <div class="ml-2 font-bold text-2xl">QuickChat</div>
        </div>
        <div
          class="flex flex-col items-center bg-indigo-100 border border-gray-200 mt-4 w-full py-6 px-4 rounded-lg"
        >
          <div class="h-20 w-20 rounded-full border overflow-hidden">
            <img
              src="https://avatars3.githubusercontent.com/u/2763884?s=128"
              alt="Avatar"
              class="h-full w-full"
            />
          </div>
          <div class="text-sm font-semibold mt-2">Aminos Co.</div>
          <div class="text-xs text-gray-500">Lead UI/UX Designer</div>
          <div class="flex flex-row items-center mt-3">
            <div
              class="flex flex-col justify-center h-4 w-8 bg-indigo-500 rounded-full"
            >
              <div class="h-3 w-3 bg-white rounded-full self-end mr-1"></div>
            </div>
            <div class="leading-none ml-1 text-xs">Active</div>
          </div>
        </div>
        <div class="flex flex-col mt-8">
          <div class="flex flex-row items-center justify-between text-xs">
            <span class="font-bold">Active Conversations</span>
            <span
              class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full"
              >4</span
            >
          </div>
          <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
            <button
              class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
            >
              <div
                class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full"
              >
                H
              </div>
              <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
            </button>
            <button
              class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
            >
              <div
                class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full"
              >
                M
              </div>
              <div class="ml-2 text-sm font-semibold">Marta Curtis</div>
              <div
                class="flex items-center justify-center ml-auto text-xs text-white bg-red-500 h-4 w-4 rounded leading-none"
              >
                2
              </div>
            </button>
            <button
              class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
            >
              <div
                class="flex items-center justify-center h-8 w-8 bg-orange-200 rounded-full"
              >
                P
              </div>
              <div class="ml-2 text-sm font-semibold">Philip Tucker</div>
            </button>
            <button
              class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
            >
              <div
                class="flex items-center justify-center h-8 w-8 bg-pink-200 rounded-full"
              >
                C
              </div>
              <div class="ml-2 text-sm font-semibold">Christine Reid</div>
            </button>
            <button
              class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
            >
              <div
                class="flex items-center justify-center h-8 w-8 bg-purple-200 rounded-full"
              >
                J
              </div>
              <div class="ml-2 text-sm font-semibold">Jerry Guzman</div>
            </button>
          </div>
          <div class="flex flex-row items-center justify-between text-xs mt-6">
            <span class="font-bold">Archivied</span>
            <span
              class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full"
              >7</span
            >
          </div>
          <div class="flex flex-col space-y-1 mt-4 -mx-2">
            <button
              class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
            >
              <div
                class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full"
              >
                H
              </div>
              <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
            </button>
          </div>
        </div>
      </div>
      <div class="flex flex-col flex-auto h-full p-6">
        <div
          class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4"
        >
        @include('messages')
          
          <div
            class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4"
          >
            <div>

              {{-- image upload --}}
              <button
                class="flex items-center justify-center text-gray-400 hover:text-gray-600"
              >
              <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"
                  ></path>
                </svg>
                
              </button>
            </div>
            <div class="flex-grow ml-4">
              <div class="relative w-full">
                <input
                  type="text"
                  class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10"
                />
                <button
                  class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600"
                >
                
                  
                </button>
              </div>
            </div>
            <div class="ml-4">
              <button
                class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0"
              >
                <span>Send</span>
                <span class="ml-2">
                  <svg
                    class="w-4 h-4 transform rotate-45 -mt-px"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                    ></path>
                  </svg>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

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

                <img src="{{ asset('images/logo_no_bg.png') }}" style="width: 200px; height: 200px; ">
            </div>
        </div>
        <p class="copy">Copyright 2024 wijesinghe Jewellers. All rights reserved.</p>
    </div>
    <!-- / container -->
</footer>
<!-- / footer -->


<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")
</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>