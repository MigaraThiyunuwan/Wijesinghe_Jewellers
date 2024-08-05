<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Wijesinghe Jewellers</title>

		{{-- <link rel="stylesheet" href="public/index.css"> --}}

    <script async src="https://unpkg.com/es-module-shims@1.6.3/dist/es-module-shims.js"></script>
    <script type="importmap">
      {
        "imports": {
          "three": "https://unpkg.com/three@v0.163.0/build/three.module.js",
          "three/addons/": "https://unpkg.com/three@v0.163.0/examples/jsm/"
        }
      }

    </script>
    <link rel="stylesheet" media="all" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    @php
        $user = session()->get('user');
        $manager = session()->get('manager');
        $leader = session()->get('leader');
        $gemBusiness = session()->get('gemBusiness');
    @endphp
    {{-- @php
      $user = session()->get('user');
    @endphp
    @if (!$user)
      @php
          $loginUrl = route('userlogin') . '?error=You need to login to access this page.';
          header("Location: $loginUrl");
          exit();
      @endphp
    @endif --}}
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
    <div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5); display: flex; align-items: center; justify-content: center;" style="display: flex; justify-content:center" id="progress-container">
      {{-- <div id="progress">Engaging Hyperdrive...</div> --}}
      
        <div id="progress" role="status">
            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
        
    </div>
    
      <script type="module" src="{{ asset('js/model.js') }}"></script>

    
    
    
	</body>
</html>