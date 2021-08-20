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
        body {
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
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
            transition: all 0.3s ease-out;
        }

        .start-header.scroll-on {
            box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
            padding: 10px 0;
            transition: all 0.3s ease-out;
        }

        .start-header.scroll-on .navbar-brand img {
            height: 20px;
            transition: all 0.3s ease-out;
        }

        .navigation-wrap {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: all 0.3s ease-out;
        }

        .navbar {
            padding: 0;
        }

        .navbar-brand img {
            height: 28px;
            width: auto;
            display: block;
            transition: all 0.3s ease-out;
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
        .navbar-light .navbar-toggler-icon:before {
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

        .navbar-light .navbar-toggler-icon:after {
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

        .nav-link {
            color: #212121 !important;
            font-weight: 500;
            transition: all 200ms linear;
        }

        .nav-item:hover .nav-link {
            color: #0101E1 !important;
        }

        .nav-link {
            position: relative;
            padding: 0 !important;
            display: inline-block;
        }

        .nav-item:after {
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

        .nav-item:hover:after {
            bottom: 0;
            opacity: 1;
        }

        .nav-item.active:hover:after {
            opacity: 0;
        }

        .nav-item {
            position: relative;
            transition: all 200ms linear;
            margin-left: 15px;
        }

        main {
            margin-top: 45px;
        }

        a {
            text-decoration: none !important
        }

        .card-product-list,
        .card-product-grid {
            margin-bottom: 0
        }

        .card {
            width: 500px;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 23px;
            margin-top: 50px
        }

        .card-product-grid:hover {
            -webkit-box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
            box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
            -webkit-transition: .3s;
            transition: .3s
        }

        .card-product-grid .img-wrap {
            border-radius: 0.2rem 0.2rem 0 0;
            height: 220px
        }

        .card .img-wrap {
            overflow: hidden
        }

        .card-lg .img-wrap {
            height: 280px
        }

        .card-product-grid .img-wrap {
            border-radius: 0.2rem 0.2rem 0 0;
            height: 275px;
            padding: 16px
        }

        [class*='card-product'] .img-wrap img {
            height: 100%;
            max-width: 100%;
            width: auto;
            display: inline-block;
            -o-object-fit: cover;
            object-fit: cover
        }

        .img-wrap {
            text-align: center;
            display: block
        }

        .card-product-grid .info-wrap {
            overflow: hidden;
            padding: 18px 20px
        }

        [class*='card-product'] a.title {
            color: #212529;
            display: block
        }

        .rating-stars {
            display: inline-block;
            vertical-align: middle;
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
            white-space: nowrap;
            clear: both
        }

        .rating-stars li.stars-active {
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden
        }

        .rating-stars li {
            display: block;
            text-overflow: clip;
            white-space: nowrap;
            z-index: 1
        }

        .card-product-grid .bottom-wrap {
            padding: 18px;
            border-top: 1px solid #e4e4e4
        }

        .bottom-wrap-payment {
            padding: 0px;
            border-top: 1px solid #e4e4e4
        }

        .rated {
            font-size: 10px;
            color: #b3b4b6
        }

        .btn {
            display: inline-block;
            font-weight: 600;
            color: #343a40;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.45rem 0.85rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.2rem
        }

        .crd {
            width: 50%;
        }

        @media (max-width: 480px) {
            .crd {
                width: 100%;
            }
        }

        .btn-primary {
            color: #fff;
            background-color: #3167eb;
            border-color: #3167eb
        }

        .h2 {
            color: #0101E1;
            font-size: 35px;
            margin-top: 20px;
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
                                            <a class="nav-link" href="/reserve">Reserve</a>
                                        </li>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link" href="/myreservation">My reservation</a>
                                        </li>
                                        @endif
                                        @endauth

                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    </ul>
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                            <a class="nav-link ms-auto" href="{{ route('profile')}}"><i class='bx bx-face'></i> Hi, {{ Auth::user()->name }}</a>
                                        </li>
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
            <h1 class="h2 row justify-content-center"> Your reservations </h1>
            @foreach ($reservations as $reservation)

            <div class="container crd d-flex justify-content-center">
                <figure class="card card-product-grid card-lg">
                    <figcaption class="info-wrap">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-9 col-xs-9">
                                <h3 class="title" data-abc="true"><a href="{{ route('showReservation', ['id' => $reservation->id])}}"><b>Reservation: {{$reservation->id}}</b></a></h3>
                                <p class="rated"> {{$reservation->user->name}}</p>
                            </div>

                        </div>
                    </figcaption>
                    <div class="bottom-wrap-payment">
                        <figcaption class="info-wrap">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"> {{$reservation->dt_start}}</a>
                                    <p class="rated">{{$reservation->time_res}} hour</p>
                                </div>

                            </div>
                        </figcaption>
                    </div>
                    <div class="btns ">

                        <div class="bottom-wrap d-flex justify-content-start"> <a href="#" class="btn  float-right" data-abc="true"> </a>

                            <div class="price-wrap d-flex ">
                                <form action="{{ route( 'deleteReservation', ['id' => $reservation->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger float-left" data-abc="true" value="{{$reservation->id}}"> Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>


            @endforeach
        </main>
    </div>
</body>

</html>