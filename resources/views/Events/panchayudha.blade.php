<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Wijesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
	
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
	@php
      $user = session()->get('user');
	  $manager = session()->get('manager');
	  $leader = session()->get('leader');
	  $gemBusiness = session()->get('gemBusiness');
    @endphp
    <style>
        .formbg1{
                background-color: rgba(255, 253, 242, 0.9);
                background-image: url('{{ asset('images/logo_no_bg.png') }}'); 
                background-repeat: no-repeat; 
                /* background-size: cover; */
                background-position: center;
                background-blend-mode: overlay;
                position: relative;
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

    <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl" >
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
                    <h1 style="font-size: 50px;">Panchayudha</h1>
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
                    '../images/shop/header1.jfif',
                    // 'images/about/img2.jpg',
                ],
                
            }))
        })
    </script>

<div id="body" class="formbg">


    @if (count($eventList) > 0)
        
        @foreach ($eventList as $event)
            <div class="item formbg1"  style="border: 2px solid rgb(223, 222, 222); margin-bottom: 20px; margin-right: 200px; margin-left: 200px; padding-left: 20px; padding-right: 20px; ">
                <div class="container">
                    
                    <div id="content" class="full">
                        <div style="display: flex;" class="product">
                            
                            <div style="width: 420px; height: 420px; margin-top: 40px; margin-right: 30px" >
                                <img src="{{ asset('storage/' . $event->image) }}" alt="">
        
                            </div>
                            <div style="padding-left: 50px; margin-top: 30px" class="details">
                                <h1>
                                    {{$event->name}}
                                </h1>
                                <h4>Rs.{{$event->price}}</h4>
                                <div class="entry">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    <div class="tabs">
                                        <div class="nav">
                                            <ul>
                                                <li style="height: 40px; justify-content: center; display: flex; padding-top: 5px; background-color: rgb(248, 244, 233)" class="active" onclick="changeTab('desc{{$event->id}}', this)"><strong>Description</strong></li>
                                                <li style="height: 40px; justify-content: center; display: flex; padding-top: 5px; background-color: rgb(248, 244, 233)" onclick="changeTab('spec{{$event->id}}', this)"><strong>Specification</strong></li>
                                                <li style="height: 40px; justify-content: center; display: flex; padding-top: 5px; background-color: rgb(248, 244, 233)" onclick="changeTab('ret{{$event->id}}', this)"><strong>Notes</strong></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content active" id="desc{{$event->id}}">
                                            <p>{{$event->description}} </p>
                                        </div>
                                        <div class="tab-content" id="spec{{$event->id}}">
                                            <p>{{$event->specification}} </p>
                                        </div>
                                        <div class="tab-content" id="ret{{$event->id}}">
                                            <p>
                                                {{$event->note}} 
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <script>
                                        function changeTab(tabId, clickedTab) {
                                            // Find the parent .tabs element
                                            var tabsContainer = clickedTab.closest('.tabs');
            
                                            // Hide all tab contents within this specific tabs container
                                            var tabContents = tabsContainer.querySelectorAll('.tab-content');
                                            tabContents.forEach(function(content) {
                                                content.classList.remove('active');
                                            });
            
                                            // Remove active class from all tabs within this specific tabs container
                                            var tabs = tabsContainer.querySelectorAll('.nav ul li');
                                            tabs.forEach(function(tab) {
                                                tab.classList.remove('active');
                                            });
            
                                            // Show the selected tab content
                                            tabsContainer.querySelector('#' + tabId).classList.add('active');
            
                                            // Add active class to the clicked tab
                                            clickedTab.classList.add('active');
                                        }
                                    </script>
                                </div>
                                <div style="display: flex; justify-content: flex-end" class="">
                                    {{-- <label><h1>Buy Now </h1></label> --}}
                                    {{-- <select><option>1</option></select> --}}
        
                                    @if ($user == null)
                                    <div style="display: flex; justify-content: flex-end">
                                        <div class="flex items-center bg-yellow-500 text-white text-sm font-bold px-4 py-3" role="alert">
                                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                            <p>You need to login your account to buy this item.</p>
                                        </div>
                                    </div>
                                    @else

                                    <form action="{{route('events.receiverdetails')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="event_id" value="{{$event->id}}">
                                        <input type="hidden" name="price" value="{{$event->price}}">
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <button type="submit" class="btn-grey">Buy Now</button>

                                    </form>
                                        {{-- <a class="btn-grey">Buy Now </a> --}}
                                        
        
                                    @endif
        
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / content -->
                </div>
            </div>
        @endforeach

        <div style="display: flex; justify-content: center" id="pagination-controls">
            <button class="btn-grey" id="prev-page">Previous</button>
            <span style="font-weight: bold; margin: 15px" id="current-page"></span>
            <button class="btn-grey" id="next-page">Next</button>
        </div>

	


    @endif
    
   
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.item');
        const itemsPerPage = 5;
        let currentPage = 1;

        function showPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            items.forEach((item, index) => {
                if (index >= start && index < end) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            document.getElementById('current-page').textContent = `Page ${currentPage} of ${Math.ceil(items.length / itemsPerPage)}`;
        }

        function nextPage() {
            if (currentPage * itemsPerPage < items.length) {
                currentPage++;
                showPage(currentPage);
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }

        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }

        document.getElementById('next-page').addEventListener('click', nextPage);
        document.getElementById('prev-page').addEventListener('click', prevPage);

        // Show the first page initially
        showPage(currentPage);
    });
</script>

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
	<script src="../js/plugins.js"></script>
	<script src="../js/main.js"></script>
</body>