<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<body>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.9.8/TimelineMax.min.js" 
    integrity="sha512-cbZLjSq1K1fCOw6FBlYXpPByQAQXVpSqTFzIs4hZr+ZCvYLe/WdeA/Ta6UM4uj25OOEvcyNqosHfqdoO4D2Qhg==" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.9.8/TweenMax.min.js" 
integrity="sha512-TKkmXp8l3dx7NJfhDhbRnFQRS8rY4FtdH1kz/pEk6dvh8YSJ5kdOBp9KZVosTX8aPZ5t2/lNMFIIztPLWhgtsA==" crossorigin="anonymous">
</script>
    


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/2c00d2d1dd.js"
      crossorigin="anonymous"
    ></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    
</head>
    
      

                         <div id="app">
    <header>
    <a href="{{ url('/') }}" class="header-brand">SkinView</a>
    
    <nav>
    <ul>
      <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ route('profile') }}">{{ __('Profile') }}</a></li>
        
       <!-- <li><a href="">Review</a></li>   /!-->
        <li><a href="{{ route('post.create') }}">{{ __('Create Review') }}</a></li>
        @guest
         @if (Route::has('login'))
         <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
         @endif
         @if (Route::has('register'))
         <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
         @endif

         
                         @else
        
                            
 <li><a class="" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                     </a></li>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
                     </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
</header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="mid">
    
    <li1><a href="https://www.facebook.com/"> <img src= "{{ url('images/Fb.png')  }}"  </a> </li>
    <li1><a href="https://www.instagram.com/"> <img src= "{{ url('images/IG.png')  }}"  </a> </li>
    <li1><a href="https://twitter.com/"> <img src= "{{ url('images/TW.png')  }}"  </a> </li>
</div>

<div class="bottom">
<a href="{{ url('/') }}"> <img src= "{{ url('images/logo.png')  }}"  </a> 

</div>
</body>


<br><br><br>
<footer>
       Copyright 2020 Skinview
       </footer>
</html>

