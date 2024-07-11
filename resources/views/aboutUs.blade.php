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
        $gemBusiness = session()->get('gemBusiness');
        $leader = session()->get('leader');
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
					<li><a href="{{ route('user.profile')  }}"><span class="ico-account"></span>Hello, {{$user->username}}</a></li>
					@endif
					@if ($manager)
					<li><a href="{{ route('manager.profile')  }}"><span class="ico-account"></span>Hello, {{$manager->username}}</a></li>
					@endif
					@if ($leader)
					<li><a href="{{ route('leader.profile') }}"><span class="ico-account"></span>Hello, {{$leader->first_name}}</a></li>
					@endif
					@if ($gemBusiness)
					<li><a href="{{ route('gem.profile') }}"><span class="ico-account"></span>Hello, {{$gemBusiness->owner_name}}</a></li>
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

    <div style="background-color:#fffbfb; align-items: auto; padding-top: 70px" id="venue">
        <div class="container">
            <div class="row animate-in-down">
                <div class="p-4 col-md-6 align-self-center text-color">
                    <h2 style="color: goldenrod; font-size: 30px; text-align: center;">All About Our Company</h2>
                    <p class="my-4" style="text-align: center">"Wijesinghe Jewellers" is renowned for its exquisite craftsmanship, creating jewelry pieces that exude 
                        elegance and sophistication. With decades of experience, their skilled artisans blend traditional techniques with contemporary designs, resulting 
                        in unique and timeless creations. Committed to quality and customer satisfaction, they offer personalized services, ensuring each client receives a
                         memorable and luxurious shopping experience.</p>
                    <p class="my-4" style="text-align: center">For decades, "Wijesinghe Jewellers" has been synonymous with elegance and superior craftsmanship. 
                        Their artisans expertly blend traditional techniques with contemporary designs, crafting timeless pieces that captivate. Committed to excellence, 
                        they offer personalized services, ensuring each customer enjoys a memorable journey into luxury and sophistication.</p>
                    
                </div>
                <div class="p-0 col-md-6">
                    <div>
                        <div> <img class="d-block img-fluid w-100" src="images/about/img2.jpg"
                                style="height: 400px; margin-top: 0px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
        <div style="background-color:#fffbfb; align-items: auto; margin-bottom: 0px" id="venue">
            <div class="container">
                <div class="row animate-in-down">
                    <div class="p-0 col-md-6">
                        <div>
                            <div> <img class="d-block img-fluid w-100" src="images/about/img3.jpg"
                                    style="height: 400px; margin-top: 0px;">
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
                                    style="height: 400px; margin-top: 0px;">
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
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
