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

        .bg {
            background: url(imgs/), no-repeat;
            background-size: cover;
            object-fit: cover;
            width: 100%;
            filter: brightness(30%);
            height: calc(100vh - 80px);

        }

        .header-content {
            width: 100%;
            display: flex;
            color: black;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        .text {
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            margin: 0px auto;
            text-align: center;

        }

        .text h1 {

            font-size: 80px;

        }

        .text h2 {
            font-size: 15px;
        }


        .text button {
            margin-top: 20px;
            padding: 15px 20px;
            width: 200px;
            border-radius: 50px;
            outline: none;
            border: none;
            color: #ffffff;
            background-color: #0101E1;
            font-size: 20px;
            font-weight: bold;
            font-family: poppins;
        }

        /* -----------------first section---------------------- */


        .content-1 {
            width: 100%;
            display: flex;
            justify-content: center;

        }

        .culom {
            z-index: 3;
            margin-top: -40px;
            width: 20%;
            height: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .icon-sec1 {
            margin-top: 20px;
            width: 50%;
            border-radius: 10px;
            filter: brightness(70%);
        }

        .culom h3 {
            margin-top: 30px;
        }

        .culom p {
            text-align: center;
            margin: 0px 30px;
            font-size: 10px;
            margin-top: 20px;
        }

        .c1,
        .c3 {
            background-color: #E6EAFF;

        }

        .c2,
        .c4 {
            background-color: #C2CAEF;
        }

        /* -----------------seconde section----------------------*/

        .content-2 {
            background-color: #C2CAEF;
            width: 100%;

            margin-top: 100px;
            margin-bottom: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;

        }

        .content-2-1 {

            width: 40%;
            height: 80%;
            margin: 10px 10px;

        }

        .content-2-1 img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: brightness(70%);
        }

        .content-2-2 {
            width: 40%;
            height: 80%;
            margin: 10px 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .content-2-2 p {
            margin-top: 20px;
            line-height: 30px;
            text-align: justify;


        }





        /* -----------------Third section----------------------*/

        .content-3 {
            height: 500px;
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;



        }

        .bg-cc {
            background-image: url('https://cloudfront-eu-central-1.images.arcpublishing.com/liberation/35HGMF5DAR54HYP7HSV5Y2KB4U.jpg');
            width: 100%;
            filter: brightness(30%);
            height: 100%;
            background-size: cover;
            background-position: center;
            position: relative;



        }


        .item1 {
            margin-top: 70px;
            padding: 10px;
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .item1 h2 {
            font-size: 40px;
            color: #ffffff;
            font-weight: normal;

        }

        .item1 h5 {
            font-size: 16px;
            color: #ffffff;
            font-weight: 300;

        }

        /* -----------------Section 4 ----------------------*/

        .content-4 {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 50px;

        }

        .cols {
            z-index: 3;
            margin-top: -300px;
            margin-left: 10px;
            margin-right: 10px;
            width: 12%;
            height: 350px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgb(245, 245, 245);
            transition: 0.5s;

        }

        .cols:hover {
            background-color: #0101E1;
            color: #ffffff;


        }

        .cols:hover .line {
            background-color: #ffffff;
        }



        .icon-sec4 {
            width: 30%;
            margin-top: 60px;
        }

        .cols h2 {
            margin-top: 40px;
            font-size: 18px;

        }

        .cols p {
            text-align: center;
            margin: 0px 30px;
            font-size: 10px;
            margin-top: 20px;


        }

        .line {
            margin-top: 20px;
            width: 15%;
            height: 1%;
            background-color: #0101E1;
        }

        /* -----------------Footer----------------------*/

        footer {
            padding: 5%;
            background-color: rgb(17, 17, 17);
        }

        .footer {
            margin: 0 auto;
            width: 90%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .links {
            display: block;
        }

        .icons {

            align-items: flex-end;
            display: flex;
            gap: 10px;
            flex-direction: column;

        }

        .icons img {

            width: 30px;
        }

        .first {
            text-align: left;

            color: rgb(255, 255, 255);
        }

        .footer-content p {
            padding-bottom: 10px;
            color: #e2e8f0;
        }

        .footer .links {
            margin-bottom: 10px;
        }

        .footer .first .links a {
            display: block;
            padding: 5px 0px;
        }

        .copyright {
            margin-top: 30px;
            opacity: 70%;
            font-size: 20px;
            text-align: center;
            color: #e2e8f0;
        }

        /*============content-title=====================*/

        .content-title {
            width: 100%;
            display: flex;
            height: 200px;
            background-color: rgb(235, 235, 235);
            justify-content: center;
            flex-direction: column;
            align-items: center;

        }

        .content-title h1 {
            font-size: 40px;
            font-weight: normal;
        }

        .content-title h5 {
            font-size: 16px;
            font-weight: 300;
            color: rgb(0, 0, 0);

        }

        @media screen and (max-width: 952px) {

            /* -------------------- section 1 responsive----------------------*/
            .content-1 {
                flex-direction: column;
                align-items: center;

            }

            .culom {
                width: 80%;
                margin-top: -60px;
                height: 300px;
            }

            .icon-sec1 {
                margin-top: 20px;
                width: 40%;
            }

            /* -------------------- section 2 responsive----------------------*/
            .content-2 {
                flex-direction: column;

            }

            .content-2-1 {
                width: 100%;

            }

            .content-2-2 {
                width: 100%;
                justify-content: center;
                align-items: center;
                text-align: center;
                padding: 10px;

            }

            /* -------------------- section 4 responsive----------------------*/

            .content-4 {
                flex-direction: column;
                align-items: center;
                margin-bottom: 30px;
            }

            .icon-sec4 {
                width: 10%;
                margin-top: 60px;
            }

            .cols {
                margin-top: -200px;
                width: 60%;
                height: 250px;
                margin-bottom: 260px;
            }

            .cols h2 {
                margin-top: 30px;
            }

            .line {
                margin-top: 10px;
            }

            footer {
                padding: 5%;
                background-color: rgb(17, 17, 17);
            }

            .footer {
                margin: 0 auto;
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .links {
                display: block;
            }

            .icons {
                order: 2;
                align-items: flex-end;
                display: flex;
                gap: 10px;
                flex-direction: column;

            }

            .footer-content {
                order: 3;
            }

            .icons img {

                width: 30px;
            }

            .first {
                text-align: left;

                color: rgb(255, 255, 255);
            }

            .footer-content p {
                padding-bottom: 20px;
            }

            .footer .links {
                margin-bottom: 10px;
            }

            .footer .first .links a {
                display: block;
                padding: 5px 0px;
            }

            .copyright {
                opacity: 70%;
                font-size: 20px;
                text-align: center;
            }


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
            <div class="header-content">
                <img src="https://ellesfontduvelo.com/wp-content/uploads/2014/06/service-velo-libre-service.jpg" alt="back" class="bg">
                <div class="text">
                    <h1>SOTRAYA</h1>
                    <h2>Moove freely
                    </h2>
                    @auth
                    @if(Auth::user()->role == 'normal')
                    <a href="/reserve"><button type="button">Resrve Now</button></a>
                    @endif
                    @endauth
                </div>
            </div>

            <!--------------------------- Section 1 ----------------------->
            <section class="content-1">
                <div class="culom c1">
                    <img src="https://www.easyrequest.fr/image/bureau-salle-reservation-formulaire.jpg" alt="resrve" class="icon-sec1">
                    <h3>Reserve</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus condimentum nisi.</p>
                </div>
                <div class="culom c2">
                    <img src="https://img.phonandroid.com/2019/07/google-maps-velos-libre-service-2.jpg" alt="" class="icon-sec1">
                    <h3>Rent</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus condimentum nisi.</p>
                </div>
                <div class="culom c3">
                    <img src="https://assets.materialup.com/uploads/c238c631-7a61-4d41-8c97-9b72daedc046/preview.jpg" alt="" class="icon-sec1">
                    <h3>Take</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus condimentum nisi.</p>
                </div>
                <div class="culom c4">
                    <img src="https://media.istockphoto.com/vectors/bike-sharing-or-rental-concept-online-bicycle-rent-service-hand-with-vector-id1180642944?k=6&m=1180642944&s=170667a&w=0&h=c9TnhSWsSToNr2gX7IWFRRbfeqPOWtNx4iuWVHXp55Y=" alt="" class="icon-sec1">
                    <h3>Return</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus condimentum nisi.</p>
                </div>

            </section>
            <!---------------------------Section 2 -------------------->
            <section class="content-2">
                <div class="content-2-1">
                    <img src="https://o1.ldh.be/image/thumb/59a5423dcd70d65d25ab6c3f.jpg" alt="img">
                </div>

                <div class="content-2-2">
                    <h2>We are Trusted Name in bike free service
                    </h2>
                    <h6> Used by thousands of People Every Month!
                    </h6>
                    <p> Sotraya is aliquip exd ea consequat duis lorem ipsum MotorLand is aliquip exd ea consequat duis lorem ipsum dolor sit amet consectetur dipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation. Slamco laboris nisi ut aliquip ex ea comdo cons equat uis aute irure dolor easprehen derit.
                    </p>
                </div>

            </section>
            <!---------------------------Section 3-------------------->
            <section class="content-3">
                <div class="bg-cc"></div>
                <div class="item1">
                    <h2>Our Dealerships </h2>
                    <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis rerum quo inventore dignissimos numquam aperiam.
                    </h5>
                </div>
            </section>
            <!---------------------------Section 4-------------------->
            <section class="content-4">

                <div class="cols">
                    <img src="https://bfdigital.org/uploads/topics/15987019697981.png" alt="" class="icon-sec4">
                    <h2>Dealership </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus condimentum.</p>
                    <div class="line"></div>
                </div>
                <div class="cols">
                    <img src="https://www.actuia.com/wp-content/uploads/2019/07/%C3%A9cole-simplon.png" alt="" class="icon-sec4">
                    <h2>Dealership </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus condimentum.</p>
                    <div class="line"></div>
                </div>
                <div class="cols">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/1c/OCP_Group.svg" alt="" class="icon-sec4">
                    <h2>Dealership </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus condimentum.</p>
                    <div class="line"></div>
                </div>

            </section>

            <footer>
                <div class="footer">
                    <div class="first">
                        <ul class="links">
                            <a href="{ url('/home') }}">Home</a>
                            @auth
                            @if(Auth::user()->role == 'admin')
                            <a href="/users">Users</a>
                            <a href="/dashboard">Dashboard</a>
                            @endif
                            @endauth
                            @auth
                            @if(Auth::user()->role == 'normal')
                            <a href="/reserve">Reserve</a>
                            <a href="/myreservation">My reservation</a>
                            @endif
                            @endauth
                        </ul>
                    </div>
                    <div class="footer-content">
                        <p>contact@sotraya.com</p>
                        <p>+2123423423</p>
                        <p> Marrakech Morocco</p>

                    </div>
                    <div class="icons">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/600px-Instagram_icon.png">
                        <img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1024px-Facebook_Logo_%282019%29.png">
                        <img src="https://image.flaticon.com/icons/png/512/174/174857.png">
                    </div>
                </div>
                <div class="copyright">
                    <p> © 2021 Aya Nait-Ïaz, Inc. All rights reserved. </p>
                </div>
            </footer>


        </main>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>