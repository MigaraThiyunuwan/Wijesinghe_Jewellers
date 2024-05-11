<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="all" href="{{ asset('css/profile.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Wijesinghe jewelry</title>
</head>
<body>
    <header id="header">
		<div class="container">
			<a href="index.html" id="logo" title="Wijesinghe jewelry">Wijesinghe jewelry</a>
			<div class="right-links">
				<ul>
					<li><a href="cart.html"><span class="ico-products"></span>3 products, $4 500.00</a></li>
					<li><a href="#"><span class="ico-account"></span>Account</a></li>
					<li><a href="#"><span class="ico-signout"></span>Sign out</a></li>
				</ul>
			</div>
		</div>
	</header>
    <nav id="menu">
		<div class="container">
			<div class="trigger"></div>
			<ul>
				<li><a href="products.html">New collection</a></li>
				<li><a href="products.html">necklaces</a></li>
				<li><a href="products.html">earrings</a></li>
				<li><a href="products.html">Rings</a></li>
				<li><a href="products.html">Gift cards</a></li>
				<li><a href="products.html">Promotions</a></li>
			</ul>
		</div>
	</nav>

    {{-- Body --}}
    <div class="h-full p-3 space-y-2 w-60 dark:bg-yellow-50 dark:text-gray-800" style="margin-left: 40px; margin-top: 30px;">
        <div class="flex items-center p-2 space-x-4">
            <img src="https://source.unsplash.com/100x100/?portrait" alt="" class="w-12 h-12 rounded-full dark:bg-gray-500">
            <div>
                <h2 class="text-lg font-semibold">Leroy Jenkins</h2>
                <span class="flex items-center space-x-1">
                    <a rel="noopener noreferrer" href="#" class="text-xs hover:underline dark:text-gray-600">View profile</a>
                </span>
            </div>
        </div>
        <div class="divide-y dark:divide-gray-300">
            <ul class="pt-2 pb-4 space-y-1 text-sm">
                <li class="dark:bg-gray-100 dark:text-gray-900">
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current dark:text-gray-600">
                            <path d="M68.983,382.642l171.35,98.928a32.082,32.082,0,0,0,32,0l171.352-98.929a32.093,32.093,0,0,0,16-27.713V157.071a32.092,32.092,0,0,0-16-27.713L272.334,30.429a32.086,32.086,0,0,0-32,0L68.983,129.358a32.09,32.09,0,0,0-16,27.713V354.929A32.09,32.09,0,0,0,68.983,382.642ZM272.333,67.38l155.351,89.691V334.449L272.333,246.642ZM256.282,274.327l157.155,88.828-157.1,90.7L99.179,363.125ZM84.983,157.071,240.333,67.38v179.2L84.983,334.39Z"></path>
                        </svg>
                        <span>My Account</span>
                    </a>
                </li>
                <li>
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current dark:text-gray-600">
                            <path d="M448.205,392.507c30.519-27.2,47.8-63.455,47.8-101.078,0-39.984-18.718-77.378-52.707-105.3C410.218,158.963,366.432,144,320,144s-90.218,14.963-123.293,42.131C162.718,214.051,144,251.445,144,291.429s18.718,77.378,52.707,105.3c33.075,27.168,76.861,42.13,123.293,42.13,6.187,0,12.412-.273,18.585-.816l10.546,9.141A199.849,199.849,0,0,0,480,496h16V461.943l-4.686-4.685A199.17,199.17,0,0,1,448.205,392.507ZM370.089,423l-21.161-18.341-7.056.865A180.275,180.275,0,0,1,320,406.857c-79.4,0-144-51.781-144-115.428S240.6,176,320,176s144,51.781,144,115.429c0,31.71-15.82,61.314-44.546,83.358l-9.215,7.071,4.252,12.035a231.287,231.287,0,0,0,37.882,67.817A167.839,167.839,0,0,1,370.089,423Z"></path>
                            <path d="M60.185,317.476a220.491,220.491,0,0,0,34.808-63.023l4.22-11.975-9.207-7.066C62.918,214.626,48,186.728,48,156.857,48,96.833,109.009,48,184,48c55.168,0,102.767,26.43,124.077,64.3,3.957-.192,7.931-.3,11.923-.3q12.027,0,23.834,1.167c-8.235-21.335-22.537-40.811-42.2-56.961C270.072,30.279,228.3,16,184,16S97.928,30.279,66.364,56.206C33.886,82.885,16,118.63,16,156.857c0,35.8,16.352,70.295,45.25,96.243a188.4,188.4,0,0,1-40.563,60.729L16,318.515V352H32a190.643,190.643,0,0,0,85.231-20.125,157.3,157.3,0,0,1-5.071-33.645A158.729,158.729,0,0,1,60.185,317.476Z"></path>
                        </svg>
                        <span>Chat</span>
                    </a>
                </li>
                <li>
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current dark:text-gray-600">
                            <path d="M203.247,386.414,208,381.185V355.4L130.125,191H93.875L16,355.4v27.042l4.234,4.595a124.347,124.347,0,0,0,91.224,39.982h.42A124.343,124.343,0,0,0,203.247,386.414ZM176,368.608a90.924,90.924,0,0,1-64.231,26.413h-.33A90.907,90.907,0,0,1,48,369.667V362.6l64-135.112L176,362.6Z"></path>
                            <path d="M418.125,191h-36.25L304,355.4v27.042l4.234,4.595a124.347,124.347,0,0,0,91.224,39.982h.42a124.343,124.343,0,0,0,91.369-40.607L496,381.185V355.4ZM464,368.608a90.924,90.924,0,0,1-64.231,26.413h-.33A90.907,90.907,0,0,1,336,369.667V362.6l64-135.112L464,362.6Z"></path>
                            <path d="M272,196.659A56.223,56.223,0,0,0,309.659,159H416V127H309.659a55.991,55.991,0,0,0-107.318,0H96v32H202.341A56.223,56.223,0,0,0,240,196.659V463H136v32H376V463H272ZM232,143a24,24,0,1,1,24,24A24,24,0,0,1,232,143Z"></path>
                        </svg>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current dark:text-gray-600">
                            <path d="M453.122,79.012a128,128,0,0,0-181.087.068l-15.511,15.7L241.142,79.114l-.1-.1a128,128,0,0,0-181.02,0l-6.91,6.91a128,128,0,0,0,0,181.019L235.485,449.314l20.595,21.578.491-.492.533.533L276.4,450.574,460.032,266.94a128.147,128.147,0,0,0,0-181.019ZM437.4,244.313,256.571,425.146,75.738,244.313a96,96,0,0,1,0-135.764l6.911-6.91a96,96,0,0,1,135.713-.051l38.093,38.787,38.274-38.736a96,96,0,0,1,135.765,0l6.91,6.909A96.11,96.11,0,0,1,437.4,244.313Z"></path>
                        </svg>
                        <span>Wishlist</span>
                    </a>
                </li>
            </ul>
            <ul class="pt-4 pb-2 space-y-1 text-sm">
                <li>
                    <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current dark:text-gray-600">
                            <path d="M440,424V88H352V13.005L88,58.522V424H16v32h86.9L352,490.358V120h56V456h88V424ZM320,453.642,120,426.056V85.478L320,51Z"></path>
                            <rect width="32" height="64" x="256" y="232"></rect>
                        </svg>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 class="sr-only">Products</h2>

          <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            <div>
            <a href="#" class="group">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="images/profile/img2.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
            </a>
            <h3 class="mt-4 text-s text-gray-700">Design Customization</h3>
              <span>Make every occasion unforgettable with our Special Event customization service.</span>
          </div>
            <div>
            <a href="#" class="group">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="images/profile/img1.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
            </a>
            <h3 class="mt-4 text-s text-gray-700">Manufacturing Progress</h3>
              <span>Make every occasion unforgettable with our Special Event customization service.</span>
          </div>
            <div>
            <a href="#" class="group">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="images/profile/img3.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
            </a>
            <h3 class="mt-4 text-s text-gray-700">Special Events</h3>
                <span>Make every occasion unforgettable with our Special Event customization service.</span>
            </div>
            <div>
            <a href="#" class="group">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="images/profile/img4.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
            </a>
            <h3 class="mt-4 text-s text-gray-700">Delivery Tracking</h3>
            <span>Experience the peace of mind that comes with our Delivery Tracking Service.</span>
            </div>
            <!-- More products... -->
          </div>
        </div>
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
