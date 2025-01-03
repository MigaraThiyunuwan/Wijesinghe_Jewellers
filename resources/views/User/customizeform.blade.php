<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title>Wijesinghe Jewellery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    @php
      $user = session()->get('user');
    @endphp

    <style>
        .hidden { display: none; }
        .formbg{
        background-color: rgba(255, 253, 242, 0.96);
        background-image: url('{{ asset('images/logo_no_bg.png') }}'); 
        background-repeat: no-repeat; 
        background-size: cover;
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
					<li><a href="{{ asset('user/profile') }}"><span class="ico-account"></span>Hello, {{$user->username}}</a></li>
					@endif
                    @if ($user)
                    <li><a href="{{ route('logout') }}"><span class="ico-signout"></span>Logout</a></li>

                    @else
                        <li><a href="{{ asset('user/login') }}"><span class="ico-signout"></span>Login</a></li>
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


    <!-- component -->

    

    <section class=" py-1 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
        <div style="border: 1px solid; box-shadow: 10px 10px 10px" class="formbg relative flex flex-col min-w-0 break-words w-full mb-6  bg-blueGray-100 border-0">
          <div class="rounded-t bg-yellow-100 mb-0 px-6 py-6">
            <div class="text-center flex justify-between">
              <h6 class="text-blueGray-700 text-xl font-bold">
                Jewellery Customization
              </h6>
      
            </div>
          </div>
          <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $index => $error)
                  <div style="font-family:Novecentowide"  id="alert-{{ $index }}" class="flex items-center p-4 mb-4 mt-2 text-red-800 rounded-lg bg-red-100" role="alert">
                      <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                      </svg>
                      <span class="sr-only">Info</span>
                      <div class="ms-3 text-sm font-medium">
                          {{ $error }}
                      </div>
                      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-{{ $index }}" aria-label="Close">
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
      
              {{-- Show Registration Success Messsage --}}
              @if (session('unsuccess'))
              <div style="display: flex; justify-content: center">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          
                  <strong class="font-bold">{{ session('unsuccess') }}</strong>
                  
                </div>
              </div>
            @endif
            {{-- Show Registration Success Messsage End --}}
      
              
      
            <form action="{{route('user.makerequest')}}" method="POST">
              @csrf
              <div id="phase1">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                        Category Selection
                    </h6>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="category">
                                    Category
                                </label>
                                <select id="category" name="category" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " >
                                   
                                    <option value="necklace">Necklace</option>
                                    <option value="ring">Ring</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="category">
                                    Gender
                                </label>
                                <select id="gender" name="gender" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 ">
                                   
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div style="width: 100%; display:flex; justify-content:center">
                            <button type="button" onclick="togglePhase2Sections()" style="width: 200px" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded">
                                Next
                            </button>
                        </div>
                    </div>
              </div>
               <div id="phase2" class="hidden"> {{-- class="hidden" --}}
                    
                    <div id="phase2a" class="hidden"> {{--  class="hidden" --}}
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Necklce Information
                        </h6>
                        <div class="flex flex-wrap">
                            

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" >
                                            Choose Necklace Style
                                        </label>
                                        
                                        <div class="flex items-center space-x-28 necklace-cus">
                                            <label  class="cursor-pointer relative"> 
                                                <input type="radio" name="necklace_style" value="box"  />
                                                <img style="width: 500px; height: 200px;" src="{{ asset('images/customize/box_chain.jpg') }}" alt="Necklace Option 1" class="w-24 h-24 object-cover rounded-full border border-gray-300">
                                                <div style="display: flex; justify-content: center; margin-top: 10px; font-weight: bold">box chain</div>
                                            </label>
                                            <label class="cursor-pointer relative">
                                                <input type="radio" name="necklace_style" value="figaro" />
                                                <img style="width: 500px; height: 200px;" src="{{ asset('images/customize/figaro_chain.jpg') }}" alt="Necklace Option 2" class="w-24 h-24 object-cover rounded-full border border-gray-300">
                                                <div style="display: flex; justify-content: center; margin-top: 10px; font-weight: bold">Figaro Chain</div>
                                            </label>
                                            <label class="cursor-pointer relative">
                                                <input type="radio" name="necklace_style" value="snake" />
                                                <img style="width: 500px; height: 200px;" src="{{ asset('images/customize/snake_chain.jpg') }}" alt="Necklace Option 3" class="w-24 h-24 object-cover rounded-full border border-gray-300">
                                                <div style="display: flex; justify-content: center; margin-top: 10px; font-weight: bold">Snake Chain</div>
                                            </label>
                                            <label class="cursor-pointer relative">
                                                <input type="radio" name="necklace_style" value="rope"  />
                                                <img style="width: 500px; height: 200px;" src="{{ asset('images/customize/rope_chain.jpg') }}" alt="Necklace Option 4" class="w-24 h-24 object-cover rounded-full border border-gray-300">
                                                <div style="display: flex; justify-content: center; margin-top: 10px; font-weight: bold">Rope Chain</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div  class="flex flex-wrap mt-12">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                    Material 
                                                </label>
                                                <select name="necklace_material" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 ">
                                                    @foreach ($materialList as $material)
                                                        <option value="{{$material->id}}">{{$material->name}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                          </div>
                                          <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Length in centimeter
                                              </label>
                                              <input type="number" step="0.01" name="necklace_length" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="">
                                            </div>
                                          </div>
                                    </div>

                                    <div  class="flex flex-wrap mt-12">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                  Weight in Pavan
                                                </label>
                                                <input type="number" step="0.01" name="necklace_weight" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="">
                                              </div>
                                          </div>
                                          <div class="w-full lg:w-3/12 px-4">
                                            <div class="relative w-full mb-3">
                                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Convert gram into pavan here 
                                              </label>
                                              <input type="number" step="0.01" id="gram"  onchange="convertGramToPavan1(this.value)" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="">
                                            </div>
                                          </div> 
                                          <div class="w-full lg:w-3/12 px-4">
                                            <div class="relative w-full mb-3">
                                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Convert gram into pavan
                                              </label>
                                              <input type="number"  step="0.01" value="" id="pavan1"  disabled class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " >
                                            </div>
                                          </div>

                                          <script>
                                            function convertGramToPavan1(grams) {
                                                const pavanInput = document.getElementById('pavan1');
                                                if (!isNaN(grams) && grams !== '') {
                                                    const pavanValue = (grams / 8).toFixed(2); // 1 pavan = 8 grams
                                                    pavanInput.value = pavanValue;
                                                } else {
                                                    pavanInput.value = '';
                                                }
                                            }
                                        </script>
                                    </div>
                                   
                                </div>
                                
                        </div>
                    </div>


                    <div id="phase2b" class="hidden"> {{--  class="hidden" --}}
                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Ring Information
                                </h6>
                    
                                <div class="flex flex-wrap">
                            

                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" >
                                                Choose Ring Style
                                            </label>
                                            
                                            <div class="flex items-center space-x-28 necklace-cus">
                                                <label  class="cursor-pointer relative"> 
                                                    <input type="radio" name="ring_style" value="bypass"  />
                                                    <img style="width: 500px; height: 200px;" src="{{ asset('images/customize/bypass_ring.png') }}" alt="Necklace Option 1" class="w-24 h-24 object-cover rounded-full border border-gray-300">
                                                    <div style="display: flex; justify-content: center; margin-top: 10px; font-weight: bold">Bypass Ring</div>
                                                </label>
                                                <label class="cursor-pointer relative">
                                                    <input type="radio" name="ring_style" value="wrap" />
                                                    <img style="width: 500px; height: 200px;" src="{{ asset('images/customize/wrap_ring.png') }}" alt="Necklace Option 2" class="w-24 h-24 object-cover rounded-full border border-gray-300">
                                                    <div style="display: flex; justify-content: center; margin-top: 10px; font-weight: bold">Wrap Ring</div>
                                                </label>
                                                <label class="cursor-pointer relative">
                                                    <input type="radio" name="ring_style" value="band" />
                                                    <img style="width: 500px; height: 200px;" src="{{ asset('images/customize/band_ring.png') }}" alt="Necklace Option 3" class="w-24 h-24 object-cover rounded-full border border-gray-300">
                                                    <div style="display: flex; justify-content: center; margin-top: 10px; font-weight: bold">Band Ring</div>
                                                </label>
                                                <label class="cursor-pointer relative">
                                                    <input type="radio" name="ring_style" value="disconnect"  />
                                                    <img style="width: 500px; height: 200px;" src="{{ asset('images/customize/disconnect_ring.png') }}" alt="Necklace Option 4" class="w-24 h-24 object-cover rounded-full border border-gray-300">
                                                    <div style="display: flex; justify-content: center; margin-top: 10px; font-weight: bold">Disconnect Ring</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div  class="flex flex-wrap mt-12">
                                            <div class="w-full lg:w-6/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        Material 
                                                    </label>
                                                    <select name="ring_material" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 ">
                                                        @foreach ($materialList as $material)
                                                        <option value="{{$material->id}}">{{$material->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                    Circumference in milimeter  
                                                  </label>
                                                  
                                                  <input type="number" step="0.01" min="0" name="ring_circumference" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="">
                                                </div>
                                              </div>
                                              <div class="w-full lg:w-2/12 px-4">
                                                <div class="relative w-full mt-5">
                                                  <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="bg-yellow-500 text-white active:bg-yellow-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                                                                    How to Find Circumference
                                                                                </button>
                                                  
                                                </div>
                                              </div>
                                              <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow ">
                                                        <!-- Modal header -->
                                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                            <h3 class="text-xl font-semibold text-gray-900 ">
                                                                How to find Circumference at home
                                                            </h3>
                                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="p-4 md:p-5 space-y-4">
                                                            
                                                          <img class="h-auto max-w-full" src="{{ asset('images/customize/circumference.png') }}" alt="image description">
                            
                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                            <button data-modal-hide="static-modal" type="button" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">OK</button>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div  class="flex flex-wrap mt-12">
                                            <div class="w-full lg:w-6/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                      Weight in Pavan
                                                    </label>
                                                    <input type="number" step="0.01" name="ring_weight" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="">
                                                  </div>
                                              </div>
                                              <div class="w-full lg:w-3/12 px-4">
                                                <div class="relative w-full mb-3">
                                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                    enter gram value to get pavan value 
                                                  </label>
                                                  <input type="number" step="0.01" id="gram"  onchange="convertGramToPavan(this.value)" class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " value="">
                                                </div>
                                              </div> 
                                              <div class="w-full lg:w-3/12 px-4">
                                                <div class="relative w-full mb-3">
                                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                     pavan value
                                                  </label>
                                                  <input type="number"  step="0.01" value="" id="pavan2"  disabled class="border border-gray-400 text-gray-900 text-sm  focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 " >
                                                </div>
                                              </div>
    
                                              <script>
                                                function convertGramToPavan(grams) {
                                                    const pavanInput = document.getElementById('pavan2');
                                                    if (!isNaN(grams) && grams !== '') {
                                                        const pavanValue = (grams / 8).toFixed(2); // 1 pavan = 8 grams
                                                        pavanInput.value = pavanValue;
                                                    } else {
                                                        pavanInput.value = '';
                                                    }
                                                }
                                            </script>
                                        </div>
                                       
                                    </div>
                                    
                            </div>
                            <hr class="mt-6 border-b-1 border-blueGray-300">
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                if you need to add gems to your ring select follow gem information
                            </h6>
                            <button data-modal-target="static-modal2" data-modal-toggle="static-modal2" class="bg-yellow-500 text-white active:bg-yellow-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                View Gem size chart
                              </button>
                              <div id="static-modal2" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow ">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 ">
                                                Gemstone Size chart
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal2">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            
                                          <img class="h-auto max-w-full" src="{{ asset('images/customize/gem_size_chart.png') }}" alt="image description">
            
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="static-modal2" type="button" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">OK</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="flex flex-wrap mt-12">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            GEM 1 type
                                        </label>
                                        <select name="ring_gem1_type" >
                                            <option value="no">I don't need Gem 1</option>
                                            @foreach ($gemTypeList as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                  </div>
                                  <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            GEM 1 size
                                        </label>
                                        <select name="ring_gem1_size" >
                                            <option value="no">I don't need Gem 1</option>
                                            @foreach ($gemSizeList as $size)
                                                <option value="{{$size->id}}">Size {{$size->size}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </div>
                                  <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            GEM 2 type
                                        </label>
                                        <select name="ring_gem2_type" >
                                            <option value="no">I don't need Gem 2</option>
                                            @foreach ($gemTypeList as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </div>

                                  <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            GEM 2 size
                                        </label>
                                        <select name="ring_gem2_size" >
                                            <option value="no">I don't need Gem 2</option>
                                            @foreach ($gemSizeList as $size)
                                                <option value="{{$size->id}}">Size {{$size->size}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </div>
                                  <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            GEM 3 type
                                        </label>
                                        <select name="ring_gem3_type" >
                                            <option value="no">I don't need Gem 3</option>
                                            @foreach ($gemTypeList as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </div>

                                  <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            GEM 3 size
                                        </label>
                                        <select name="ring_gem3_size" >
                                            <option value="no">I don't need Gem 3</option>
                                            @foreach ($gemSizeList as $size)
                                                <option value="{{$size->id}}">Size {{$size->size}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </div>
                                  
                                  
                            </div>
                    </div>
                        <input type="hidden" name="user_id" value="{{$user->id}}">
              
                        <div class="flex flex-wrap">
                            <div style="width: 100%; display:flex; justify-content:center">
                                <button type="submit" style="width: 200px" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 border border-yellow-700 rounded" type="button">
                                    Submit
                                </button>
                                
                            </div>
                        </div>
              </div>
      
              
            </form>
          </div>
        </div>
      
      </div>
      </section>

<script>
    function togglePhase2Sections() {
        var category = document.getElementById('category').value;
        var phase2a = document.getElementById('phase2a');
        var phase2b = document.getElementById('phase2b');

        if (category === 'necklace') {
            phase2a.classList.remove('hidden');
            phase2b.classList.add('hidden');
        } else if (category === 'ring') {
            phase2b.classList.remove('hidden');
            phase2a.classList.add('hidden');
        }

        document.getElementById('phase1').classList.add('hidden');
        document.getElementById('phase2').classList.remove('hidden');
    }
</script>


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