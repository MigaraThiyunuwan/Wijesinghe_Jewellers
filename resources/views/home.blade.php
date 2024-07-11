<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wijesinghe Jewellery</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
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

    <div id="slider">
        <ul>
            <li style="background-image: url(images/0.jpg)">
                <h3>Make your life better</h3>
                <h2>Genuine diamonds</h2>
                <a href="#" class="btn-more">Read more</a>
            </li>
            <li class="purple" style="background-image: url(images/01.jpg)">
                <h3>She will say “yes”</h3>
                <h2>engagement ring</h2>
                <a href="#" class="btn-more">Read more</a>
            </li>
            <li class="yellow" style="background-image: url(images/02.jpg)">
                <h3>You deserve to be beauty</h3>
                <h2>golden bracelets</h2>
                <a href="#" class="btn-more">Read more</a>
            </li>
        </ul>
    </div>


    <section class="p-4 lg:p-8 dark:bg-gray-100 dark:text-gray-800">
        <div class="container mx-auto space-y-12">
            <div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row">
                <img src="{{ asset('images/girl1.jpg') }}" alt="" class="h-80 dark:bg-gray-500 aspect-video">
                <div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-50">
                    <span class="text-xs uppercase dark:text-gray-600">Beauty & Elegance in Every Creation</span>
                    <h3 class="text-3xl font-bold">Craft Your Dream Creations Today!</h3>
                    <p class="my-6 dark:text-gray-600">With our easy-to-use customization tool, you can select your
                        preferred metals, gemstones, and intricate details to create a one-of-a-kind masterpiece.
                        Whether it's for a special occasion, a gift, or a treat for yourself, our bespoke service
                        ensures
                        that your jewelry will be a perfect reflection of your style and personality.</p>
                    <button class="bg-yellow-500 text-white py-2 px-4 rounded-md w-48">Customize Now</button>
                </div>
            </div>
            <div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row-reverse">
                <img src="{{ asset('images/girl2.jpg') }}" alt="" class="h-80 dark:bg-gray-500 aspect-video">
                <div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-50">
                    <span class="text-xs uppercase dark:text-gray-600">Finest Gold Jewelry Collection</span>
                    <h3 class="text-3xl font-bold">Explore Our Elegance Designs</h3>
                    <p class="my-6 dark:text-gray-600">At Wijesinghe Jewellery Manufacturing Shop,
                        we pride ourselves on offering a diverse array of exquisite, one-of-a-kind jewelry
                        pieces. Our collection features meticulously crafted designs that cater to every
                        style and occasion. Customers are welcome to visit our shop to browse and purchase
                        these exceptional creations in person. Whether you’re searching for a timeless classic
                        or a contemporary masterpiece, our expertly designed jewelry is ready for you to
                        discover. Come and explore our unique designs, and find the perfect piece that speaks
                        to your individuality today!

                    </p>
                    <button class="bg-yellow-500 text-white py-2 px-4 rounded-md w-48">Shop Now</button>
                </div>
            </div>

        </div>

        <div class="space-y-12 py-12">
            <h2 class="text-5xl font-bold text-center">Our Gallery</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1">
                <div class="overflow-hidden rounded-md shadow-sm">
                    <img src="{{ asset('images/home/img1.jpg') }}" alt="Jewelry 1" class="h-80 w-full object-cover">
                </div>
                <div class="overflow-hidden rounded-md shadow-sm">
                    <img src="{{ asset('images/home/img2.jpg') }}" alt="Jewelry 2" class="h-80 w-full object-cover">
                </div>
                <div class="overflow-hidden rounded-md shadow-sm">
                    <img src="{{ asset('images/home/img3.jpg') }}" alt="Jewelry 3" class="h-80 w-full object-cover">
                </div>
                <div class="overflow-hidden rounded-md shadow-sm">
                    <img src="{{ asset('images/home/img4.jpg') }}" alt="Jewelry 4" class="h-80 w-full object-cover">
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1">
                <div class="overflow-hidden rounded-md shadow-sm">
                    <img src="{{ asset('images/home/img1.jpg') }}" alt="Jewelry 1" class="h-80 w-full object-cover">
                </div>
                <div class="overflow-hidden rounded-md shadow-sm">
                    <img src="{{ asset('images/home/img2.jpg') }}" alt="Jewelry 2" class="h-80 w-full object-cover">
                </div>
                <div class="overflow-hidden rounded-md shadow-sm">
                    <img src="{{ asset('images/home/img3.jpg') }}" alt="Jewelry 3" class="h-80 w-full object-cover">
                </div>
                <div class="overflow-hidden rounded-md shadow-sm">
                    <img src="{{ asset('images/home/img4.jpg') }}" alt="Jewelry 4" class="h-80 w-full object-cover">
                </div>
            </div>
        </div>

    </div>
    </section>




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
</body>
