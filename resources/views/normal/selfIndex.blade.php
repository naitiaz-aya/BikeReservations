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
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'SOTRAYA') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @auth
                            @if(Auth::user()->role == 'admin')
                            <h5><a href="/users"class="justify-content-center" >Users</a></h5>
                            <h5><a href="/dashboard"class="justify-content-center" >Dashboard</a></h5>                         
                            @endif
                    @endauth
                    <a href="{{ route('profile')}}" class="nav-link  second-text fw-bold" id="navbar" 
                       d aria-expanded="false">
                       <i class='bx bx-face' ></i>Hi, {{ Auth::user()->name }}
                      </a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                            

                            <div class="menu menu-right" aria-labelledby="">
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
                </div>
            </div>
        </nav>

        <main class="py-4">
        @foreach ($reservations as $reservation)
        <div class="container">
            <div class="card mt-5 border-5 pt-2 active pb-0 px-3">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-12 ">
                            <h4 class="card-title "><a href="{{ route('showReservation', ['id' => $reservation->id])}}"><b>Reservation: {{$reservation->id}}</b></a></h4>
                        </div>
                        <div class="col">
                            <h6 class="card-subtitle mb-2 text-muted">
                                <p class="card-text text-muted "> {{$reservation->dt_start}}</p>
                                <p class="card-text text-muted "> {{$reservation->time_res}} hour</p>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white px-0 ">
                    <div class="row">
                        
                        <div class="col-md-auto ">
                            <ul class="list-inline">
                                <li class="list-inline-item"> {{$reservation->user->name}}</li>
                            </ul>
                        
                        <form action="{{ route( 'deleteReservation', ['id' => $reservation->id])}}" method="POST">
                            @csrf
                                @method('DELETE')
                            <button type="submit" name="submit" value="{{$reservation->id}}" rel="tooltip" class="btn btn-danger btn-icon btn-sm">
                            <box-icon name='x-circle'></box-icon></box-icon>
                            </button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>


                @endforeach
        </main>
    </div>
</body>
</html>
