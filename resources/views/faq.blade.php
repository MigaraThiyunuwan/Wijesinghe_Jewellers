<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wijesinghe Jewellery</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('css/about.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    @php
        $user = session()->get('user');
        $manager = session()->get('manager');
        $leader = session()->get('leader');
        $gemBusiness = session()->get('gemBusiness');
    @endphp

</head>

<body>

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

    

    <div style="margin-top: 70px; margin-bottom: 20px" class="text-center mb-5">
        <div class="text-center mt-5 mb-5">
            <h1 style="font-size: 36px; font-weight: 600; margin-bottom: 20px">Frequently ask Questions</h1>
            <div id="accordion-open" data-accordion="open">
                <h2 id="accordion-open-heading-1">
                  <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
                    <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>How can I customize a piece of jewelry?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                  <div class="p-5 border border-b-0 border-gray-200">
                    <p class="mb-2 text-gray-500 ">You can customize a piece of jewelry by selecting the "Customize" option on the product page. You will be guided through a form where you can select materials, gemstones, design preferences, and other custom features. Once submitted, we will provide a cost estimate for your design.</p>
                   
                  </div>
                </div>
                <h2 id="accordion-open-heading-2">
                  <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                    <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>What types of jewelry can I customize?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                  <div class="p-5 border border-b-0 border-gray-200 ">
                    <p class="mb-2 text-gray-500 ">Our platform allows you to customize a wide range of jewelry, including necklaces, rings, earrings, and bracelets. You can choose from various materials, gemstones, and designs to create your unique piece.</p>
               
                  </div>
                </div>
                <h2 id="accordion-open-heading-3">
                  <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                    <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> How long does it take to create a custom piece of jewelry?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                  <div class="p-5 border border-t-0 border-gray-200 ">
                    <p class="mb-2 text-gray-500 ">The time to complete a custom jewelry piece depends on the complexity of the design and the availability of materials. Typically, it takes between 2 to 4 weeks, but we will keep you updated on the progress through your dashboard.</p>
                   
                    </ul>
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

                    <img src="{{ asset('images/logo_no_bg.png') }}" style="width: 200px; height: 200px; ">
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
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    
</body>
