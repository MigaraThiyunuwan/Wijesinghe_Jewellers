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

    <div style="margin-top: 70px; margin-bottom: 20px" class="text-center mb-5">
        <div class="text-center mt-5 mb-5">
            <h1 style="font-size: 36px; font-weight: 600; margin-bottom: 20px">Who We Are</h1>
            <p class="mb-3 who-we-are" >"Wijesinghe Jewellers" is renowned for its exquisite craftsmanship, 
                creating jewelry pieces that exude elegance and sophistication. With decades of experience, their skilled 
                artisans blend traditional techniques with contemporary designs, resulting in unique and timeless creations. 
                Committed to quality and customer satisfaction, they offer personalized services, ensuring each client receives 
                 memorable and luxurious shopping experience.
    
            For decades, "Wijesinghe Jewellers" has been synonymous with elegance and superior craftsmanship. Their artisans 
            expertly blend traditional techniques with contemporary designs, crafting timeless pieces that captivate. Committed 
            to excellence, they offer personalized services, ensuring each customer enjoys a memorable journey into luxury and 
            sophistication.</p>
        </div>
    </div>

    <section class=" py-8 antialiased  md:py-12">
		<div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="text-center mt-5 mb-5">
             <h1 style="font-size: 36px; font-weight: 600">New Arrivals</h1>
            </div>
		  <div class="mb-4 grid gap-4 sm:grid-cols-2  md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
            
			@foreach($itemList as $item)


			<div style="border: 2px solid rgb(150, 150, 150);" class="rounded-lg border bg-yellow-0 hover:bg-yellow-50 border-gray-900 bg-yellow-0 p-6 shadow-sm ">

			  <div style="" class="h-56 w-full">
				<a href="{{ route('shop.productDetails', $item->id) }}">
				  <img class="mx-auto h-full " src="{{ asset('storage/' . $item->image) }}" alt="" />
				  
				</a>
			  </div>
	  
			  <div class="p-3 rounded">
				
	  
				<a href="{{ route('shop.productDetails', $item->id) }}" class="text-lg font-semibold leading-tight text-gray-900 hover:underline ">{{$item->name}}</a>
	  
				<div class="mt-2 flex items-center gap-2">
				  
	  
				  <p class="text-sm font-medium text-gray-500">{{$orderItemObj->getSoldCount($item->id)}}</p>
				  <p class="text-sm font-medium text-gray-900">items sold</p>
				  @if ($item->quantity == 0)
                            {{-- <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 mt-2 rounded relative" role="alert">
                                <strong class="font-bold">Out of Stock!</strong>
                            </div> --}}
					{{-- <p class="text-sm font-bold text-red-900">Out of Stock</p> --}}
					<div id="alert" class="flex items-center pr-3 text-yellow-800  bg-red-400" role="alert">
						
						<div class="ms-3 text-sm font-medium">
							Out Of Stock
						</div>
						
					</div>
                   @endif
				  
				</div>
	  
				
	  
				<div class="mt-4 flex items-center justify-between gap-4">
				  <p class="text-md font-extrabold leading-tight text-gray-900 ">Rs {{$item->price}}</p>
					<a href="{{ route('shop.productDetails', $item->id) }}">
						<button type="button" class="inline-flex items-center rounded-lg bg-yellow-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 ">
						
							<svg class="-ms-2 me-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							Details
						</button>
					</a>
				</div>
			  </div>
			</div>
			


			@endforeach
		  </div>
		
		</div>
		
	</section>
        <div class="wide-img">
            <img style="width: 100%" class="width-full" src="{{ asset('images/wide.jpg') }}">
        </div>




        <div style="margin-top: 70px; margin-bottom: 20px" class="text-center mb-5">
            <div class="text-center mt-5 mb-5">
                <h1 style="font-size: 36px; font-weight: 600; margin-bottom: 20px">Customize your own jewellery</h1>
                <div  class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row home-customize">
                    <img src="{{ asset('images/home/img1.jpg') }}" alt="" style="width: 600px; height: 400px;" class="border border-gray-900 rounded-md p-2 inline-block">
                    <div class="flex-col justify-center  p-6 ">
                        
                        <p style="color: black; text-align: justify">
                            With our intuitive and easy-to-use customization tool, you have the freedom to design jewelry 
                            that truly embodies your unique taste and vision. Start by selecting from a wide range of 
                            high-quality metals, including gold, silver, platinum, and more. Then, explore our extensive 
                            collection of precious and semi-precious gemstones, handpicked for their beauty and brilliance. 
                            Whether you’re drawn to classic diamonds, vibrant sapphires, or the deep hues of emeralds, you’ll 
                            find the perfect stones to bring your design to life.
                            <br><br>
                            
                            Beyond materials, our customization tool allows you to personalize every detail of your piece, 
                            from intricate engravings to the finish and setting styles. Whether you’re crafting a delicate necklace,
                             an elegant ring, or an eye-catching bracelet, our bespoke service ensures that your creation will be 
                             a perfect reflection of your personality and style.
                             <br><br>
                            Whether you’re designing for a special occasion like a wedding or anniversary, selecting a thoughtful 
                             for a loved one, or treating yourself to something extraordinary, our process is as enjoyable as it is 
                             simple. Our expert jewelers will work meticulously to bring your vision to life, transforming your design 
                             into a stunning, one-of-a-kind masterpiece that’s made just for you.
                             <br><br>
                            </p>
                            @if ($user)
                                <a href="{{ route('user.customize') }}" class="bg-yellow-500 text-white py-4 px-4 rounded-md w-48">Customize Now</a>
                            @else
                            <a href="{{ route('userlogin') }}" class="bg-yellow-500 text-white py-4 px-4 rounded-md w-48">Login to Customize </a>
                            @endif
                        
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
