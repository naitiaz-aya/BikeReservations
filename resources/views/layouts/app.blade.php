<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SOTRAYA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>   
    <style>
         body{
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;    
        }
        main{
            margin-top: 70px;
        }
        a {
            color: inherit;
            text-decoration: none;
            }
        .start-header {
            opacity: 1;
            transform: translateY(0);
            padding: 20px 0;
            box-shadow: 0 10px 30px 0 rgba(138, 155, 165, 0.15);
            transition : all 0.3s ease-out;
        }
        .start-header.scroll-on {
            box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
            padding: 10px 0;
            transition : all 0.3s ease-out;
        }
        .start-header.scroll-on .navbar-brand img{
            height: 20px;
            transition : all 0.3s ease-out;
        }
        .navigation-wrap{
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            transition : all 0.3s ease-out;
        }
        .navbar{
            padding: 0;
        }
        .navbar-brand img{
            height: 28px;
            width: auto;
            display: block;
            transition : all 0.3s ease-out;
        }
        .navbar-toggler {
            float: right;
            border: none;
            padding-right: 0;
        }
        .navbar-toggler:active,
        .navbar-toggler:focus {
            outline: none;
        }
        .navbar-light .navbar-toggler-icon {
            width: 24px;
            height: 17px;
            background-image: none;
            position: relative;
            border-bottom: 1px solid #000;
            transition: all 300ms linear;
        }
        .navbar-light .navbar-toggler-icon:after, 
        .navbar-light .navbar-toggler-icon:before{
            width: 24px;
            position: absolute;
            height: 1px;
            background-color: #000;
            top: 0;
            left: 0;
            content: '';
            z-index: 2;
            transition: all 300ms linear;
        }
        .navbar-light .navbar-toggler-icon:after{
            top: 8px;
        }
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
            transform: rotate(45deg);
        }
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
            transform: translateY(8px) rotate(-45deg);
        }
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
            border-color: transparent;
        }
        .nav-link{
            color: #212121 !important;
            font-weight: 500;
            transition: all 200ms linear;
        }
        .nav-item:hover .nav-link{
            color: #0101E1 !important;
        }
        
        .nav-link {
            position: relative;
            padding: 0 !important;
            display: inline-block;
        }
        .nav-item:after{
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            content: '';
            background-color: #0101E1;
            opacity: 0;
            transition: all 200ms linear;
        }
        .nav-item:hover:after{
            bottom: 0;
            opacity: 1;
        }
        .nav-item.active:hover:after{
            opacity: 0;
        }
        .nav-item{
            position: relative;
            transition: all 200ms linear;
            margin-left: 15px;
        }
        .login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://acad.xlri.ac.in/evening/images/login.svg');
  background-size: cover;
  background-position: center center;
}
     
    </style>
</head>
<body>
    <div id="app">
    <header class="main-header">
        <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">
                        
                            <a class="navbar-brand" href="{{ url('/home') }}" target="_blank"><img src="https://www.seekpng.com/png/full/28-287336_welcome-road-bike-vector-png.png" alt="logo"></a>	
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-3 py-md-0">
                                    
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                    </li>
                                    @auth
                                        @if(Auth::user()->role == 'admin')
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                                <a class="nav-link" href="/users">Users</a>
                                            </li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="/dashboard">Dashboard</a>
                                            </li>
                                        @endif
                                    @endauth
                                    @auth
                                        @if(Auth::user()->role == 'normal')
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                                <a class="nav-link" href="/reserve" >Reserve</a>
                                            </li>
                                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="/myreservation">My reservation</a>
                                            </li>
                                        @endif
                                    @endauth
                                    
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    </ul>
                                            <ul class="navbar-nav ms-auto">
                                                
                                            <!-- Authentication Links -->
                                            @guest
                                                @if (Route::has('login'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                @endif

                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                            <li class="nav-item " onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                
                                                <div class="menu menu-right">
                                                    <a class="item" href="{{ route('logout') }}">
                                                        {{ __('Logout') }}
                                                    </a> 

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                            @endguest
                                        </ul>
                                    </li>
                                
                            </div>
                            
                        </nav>		
                    </div>
                </div>
            </div>
        </div>
    </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
