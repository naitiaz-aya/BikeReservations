<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SOTRAYA') }}</title>

    <!-- Scripts -->
    <script src="{{  asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/reservation.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        main {
            margin-top: 100px;
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

        .contact-form {
            background: #fff;
            margin-bottom: 5%;
            width: 30%;
            border-radius: 1rem;
        }

        .contact-form .form-control {
            border-radius: 1rem;
        }


        .contact-form form .row {
            margin-bottom: -7%;
        }

        .contact-form h3 {
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }

        .contact-form .btn {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }

        .btn {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .h2 {
            color: #0101E1;
            font-size: 35px;
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

        <main>
            <div class="container contact-form">
                <form action="{{ route ('updateReservation', ['id' => $reservation])}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">


                    <div class="row p-5 shadow rounded">
                        <h2 class="h2">Edit Your Reservation </h2>

                        <div class="col-lg-11 mx-auto ">




                            <div class="form-group ">
                                <label for="dt_start">Choose a Date:</label>
                                <input type="datetime-local" name="dt_start" id="dt_start" class="form-control" placeholder="start" value="" />
                            </div>
                            <div class="form-group">
                                <label for="time_res">How long:</label>
                                <select name="time_res" id="time_res" onchange="calculateAmount(this.value)" required class="form-control">
                                    <option value="" disabled selected>-- How long --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city">Choose a city:</label>
                                <select name="city" id="city" onchange="populate(this.id,'street')" class="form-control">
                                    <option value="" disabled selected>-- Choose a city --</option>
                                    <option value="Marrakech">Marrakech</option>
                                    <option value="Casablanca">Casablanca</option>
                                    <option value="Rabat">Rabat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="street">Choose a street:</label>
                                <select name="street" id="street" class="form-control">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="payment">Paymentent:</label>
                                <select name="payment" id="payment" class="form-control">
                                    <option value="Onspot">Onspot</option>
                                    <option value="Online">Online</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Text</label>
                                <input type="text" min="0" name="price" id="price" class="form-control" readonly />
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary mt-2" value="Reserve" />
                            </div>

                        </div>

                    </div>






        </main>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function populate(city, street) {

            var city = document.getElementById(city);
            var street = document.getElementById(street);

            street.innerHTML = "";

            if (city.value == "Marrakech") {

                var optionArray = ['Gueliz|Gueliz', 'Mhamid|Mhamid', 'Daoudiat|Daoudiat', 'Massira|Massira'];

            }
            if (city.value == "Casablanca") {

                var optionArray = ['Borgone|Borgone', 'Maarif|Maarif', 'Sidi Maarouf|Sidi Maarouf', 'Qods|Qods'];

            }
            if (city.value == "Rabat") {

                var optionArray = ['Hay Riad|Hay Riad', 'Agdal|Agdal', 'Al irfan|Al irfan'];

            }

            for (var option in optionArray) {

                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML = pair[1];
                street.options.add(newoption);

            }

        }




        function calculateAmount(time) {

            var priceTopay = time * 4;
            var lastPrice = document.getElementById('price');
            lastPrice.value = priceTopay;
        }
    </script>
</body>

</html>