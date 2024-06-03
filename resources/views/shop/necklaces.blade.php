<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Jiwesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('css/about.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
	@php
      $user = session()->get('user');
	  $manager = session()->get('manager');
    @endphp

<style>
    #content .products .row {
        display: flex;
        flex-wrap: wrap;
    }
    #content .products .row article {
        flex: 1 0 20%; /* Five articles per row (20% each) */
        box-sizing: border-box;
        padding: 10px; /* Optional: Add some padding */
        border: 1px solid black; /* Add black border */
    }
    #content .products .row article img {
        width: 100%;
        height: auto;
    }
    /* Optional: Add some styles to ensure it looks good */
    #content .products {
        margin: 0 auto;
        max-width: 1200px; /* Adjust as needed */
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
					@if ($manager)
					<li><a href="{{ asset('manager/profile') }}"><span class="ico-account"></span>Hello, {{$manager->username}}</a></li>
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
			<div class="trigger"></div>
			<ul>
				<li><a href="products.html">New collection</a></li>
				<li><a href="{{ route('shop.necklaces') }}">necklaces</a></li>
				<li><a href="products.html">earrings</a></li>
				<li><a href="{{ route('events.home') }}">Events</a></li>
				<li><a href="{{ route('aboutus') }}">About</a></li>
				<li><a href="products.html">Promotions</a></li>
			</ul>
		</div>
		<!-- / container -->
	</nav>
	<!-- / navigation -->
    
    <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl" style="margin-bottom: 30px">
        <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
            
        </div>

        <template x-for="(image) in images">
            <figure class="h-96" 
                x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <img :src="image" alt="Image"
                    class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
                <figcaption
                    class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
                    <h1 style="font-size: 50px;">Necklaces</h1>
                    Where Elegance Meets Excellence: Discover Your Timeless Beauty Here.
                </figcaption>
            </figure>
        </template>
       
    </article>

    <div id="breadcrumbs" style="margin-top: -30px">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Necklaces</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
    
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('slider', () => ({
                currentIndex: 1,
                images: [
                    '../images/shop/header1.jfif',
                    // 'images/about/img2.jpg',
                ],
                
            }))
        })
    </script>

<div id="body">
    
    <!-- / container -->
    <div id="content" style="margin: 20px">
        <section class="products">
            <div class="row">
                <article>
                    <a href="product.html"><img src="../images/12.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$990.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/12.jpg" alt=""></a>
                    <h3><a href="product.html">cupidatat non proident</a></h3>
                    <h4><a href="product.html">$1 200.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/13.jpg" alt=""></a>
                    <h3><a href="product.html">Duis aute irure</a></h3>
                    <h4><a href="product.html">$2 650.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/14.jpg" alt=""></a>
                    <h3><a href="product.html">magna aliqua</a></h3>
                    <h4><a href="product.html">$3 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/15.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$1 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/15.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$1 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/15.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$1 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                
                <article>
                    <a href="product.html"><img src="../images/15.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$1 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/15.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$1 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/15.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$1 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/15.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$1 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="../images/15.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$1 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <!-- Add more articles here -->
            </div>
        </section>
    </div>
</div>
<!-- / body -->

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