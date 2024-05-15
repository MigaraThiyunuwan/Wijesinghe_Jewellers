<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('css/about.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    @php
      $manager = session()->get('manager');
        $user = session()->get('user');
        $manager = session()->get('manager');
    @endphp
    <title>Wijesinghe Jewellers</title>
</head>

<body>
    <header id="header">
        <div class="container">
            <a href="/" id="logo" title="Wijesinghe Jewellers">Wijesinghe Jewellers</a>
            <div class="right-links">
                <ul>
                    @if ($user)
                        <li><a href="{{ asset('user/profile') }}"><span class="ico-account"></span>Hello,
                                {{ $user->username }}</a></li>
                    @endif
                    @if ($manager)
                        <li><a href="{{ asset('manager/profile') }}"><span class="ico-account"></span>Hello,
                                {{ $manager->username }}</a></li>
                    @endif

                    @if ($user || $manager)
                        <li><a href="{{ route('logout') }}"><span class="ico-signout"></span>Logout</a></li>
                    @else
                        <li><a href="{{ route('user.login') }}"><span class="ico-signout"></span>Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- / container -->
    </header>
    <!-- / header -->

    <nav id="menu">
        <div class="container">

            <ul>
                <li><a href="products.html">New collection</a></li>
                <li><a href="{{ route('shop.necklaces') }}">necklaces</a></li>
                <li><a href="products.html">earrings</a></li>
                <li><a href="products.html">Rings</a></li>
                <li><a href="{{ route('aboutus') }}">About</a></li>
                <li><a href="products.html">Promotions</a></li>
            </ul>
        </div>
    </nav>

    <!-- component -->


    <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl"
        style="height: 450px;">
        <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
            
        </div>

        <template x-for="(image) in images">
            <figure class="h-96" x-transition:enter="transition transform duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
                <img :src="image" alt="Image"
                    class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
                <figcaption
                    class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
                    <h1 style="font-size: 50px;">About Us</h1>
                    Where Elegance Meets Excellence: Discover Your Timeless Beauty Here.
                </figcaption>
            </figure>
        </template>
       
    </article>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('slider', () => ({
                currentIndex: 1,
                images: [
                    'images/about/img1.jpg',
                    // 'images/about/img2.jpg',
                ],
                
            }))
        })
    </script>

    <div class="py-5" style="background-color:#fffbfb; align-items: auto" id="venue">
        <div class="container">
            <div class="row animate-in-down">
                <div class="p-4 col-md-6 align-self-center text-color">
                    <h2 style="color: goldenrod; font-size: 30px; text-align: center;">All About Our Company</h2>
                    <p class="my-4" style="text-align: center">Wijesinghe Jewellers" is a renowned name in the world
                        of exquisite jewelry craftsmanship, specializing in creating timeless pieces that reflect
                        elegance, beauty, and sophistication. With a legacy of craftsmanship spanning decades, we take
                        pride in our commitment to quality, precision, and innovation.</p>
                    <p class="my-4" style="text-align: center">At Wijesinghe Jewellers, every piece of jewelry is
                        meticulously crafted by skilled artisans, blending traditional techniques with modern designs to
                        create unique masterpieces. Our collections showcase a blend of classic and contemporary styles,
                        catering to the diverse tastes of our discerning clientele.</p>
                    <p class="my-4" style="text-align: center">Our dedication to excellence extends beyond the
                        creation of jewelry. We prioritize customer satisfaction, offering personalized services to
                        ensure a seamless and memorable shopping experience. Whether it's a special occasion, a
                        meaningful gift, or a self-indulgent treat, Wijesinghe Jewellers is your trusted destination for
                        luxury jewelry that embodies timeless beauty and exceptional craftsmanship.</p>
                </div>
                <div class="p-0 col-md-6">
                    <div>
                        <div> <img class="d-block img-fluid w-100" src="images/about/img2.jpg"
                                style="height: 400px; margin-top: 40px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div>
        <div style="background-color:#fffbfb; align-items: auto; margin-bottom: 0px" id="venue">
            <div class="container">
                <div class="row animate-in-down">
                    <div class="p-0 col-md-6">
                        <div>
                            <div> <img class="d-block img-fluid w-100" src="images/about/img3.jpg"
                                    style="height: 400px; margin-top: 40px;">
                            </div>
                        </div>
                    </div>
                    <div class="p-4 col-md-6 align-self-center text-color">
                        <h2 style="color: goldenrod; font-size: 30px; text-align: center;">Our Vision</h2>
                        <p class="my-4" style="text-align: center">At Wijesinghe Jewellery, our vision is to establish
                            ourselves as a globally recognized brand synonymous with unparalleled craftsmanship,
                            exquisite designs, and timeless elegance. We aspire to set new standards in the jewellery
                            industry by continuously innovating, embracing sustainable practices, and creating memorable
                            experiences for our customers. Our vision extends beyond mere transactions; we aim to foster
                            lasting relationships built on trust, integrity, and a shared passion for beauty and
                            craftsmanship.</p>
                    </div>

                </div>
            </div>
        </div>


        <div style="background-color:#fffbfb; align-items: auto" id="venue">
            <div class="container">
                <div class="row animate-in-down">
                    <div class="p-4 col-md-6 align-self-center text-color">
                        <h2 style="color: goldenrod; font-size: 30px; text-align: center;">Our Mission</h2>
                        <p class="my-4" style="text-align: center">Our mission at Wijesinghe Jewellery is to craft
                            extraordinary pieces that transcend trends and time, embodying the unique stories and
                            aspirations of our discerning clientele. We are committed to meticulous attention to
                            detail, sourcing the finest materials ethically, and employing skilled artisans who
                            imbue each creation with artistry and precision. Our dedication to excellence extends
                            to every facet of our operations, from designing and manufacturing to customer service
                            and community engagement. We strive to enrich lives by offering not just jewellery, but
                            cherished heirlooms that symbolize love, celebration, and the essence of life's most
                            precious moments.</p>

                    </div>
                    <div class="p-0 col-md-6">
                        <div>
                            <div> <img class="d-block img-fluid w-100" src="images/about/img4.jpg"
                                    style="height: 400px; margin-top: 40px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <br>
    <footer id="footer">
        <div class="container">
            <div class="cols">
                <div class="col">
                    <h3>Frequently Asked Questions</h3>
                    <ul>
                        <li><a href="#">Fusce eget dolor adipiscing </a></li>
                        <li><a href="#">Posuere nisl eu venenatis gravida</a></li>
                        <li><a href="#">Morbi dictum ligula mattis</a></li>
                        <li><a href="#">Etiam diam vel dolor luctus dapibus</a></li>
                        <li><a href="#">Vestibulum ultrices magna </a></li>
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
                    <p>Diana’s Jewelry INC.<br>54233 Avenue Street<br>New York</p>
                    <p><span class="ico ico-em"></span><a href="#">contact@dianasjewelry.com</a></p>
                    <p><span class="ico ico-ph"></span>(590) 423 446 924</p>
                </div>
                <div class="col newsletter">
                    <h3>Join our newsletter</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium.</p>
                    <form action="#">
                        <input type="text" placeholder="Your email address...">
                        <button type="submit"></button>
                    </form>
                </div>
            </div>
            <p class="copy">Copyright 2013 Jewelry. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
