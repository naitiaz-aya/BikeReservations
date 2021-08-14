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
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>   
    <style>
       body{
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            font-family:"Segoe UI" ;
            box-sizing: border-box;
            line-height: 1;
            background-color: #e2e8f0;
           }
           aside, section {
            display: block;
            }
            ol,
            ul {
            list-style: none;
            }
            table {
            border-collapse: collapse;
            border-spacing: 0;
            }
            a {
            color: inherit;
            text-decoration: none;
            }
            
            main.container {
                display: flex;
            height: 100%;
            justify-content: center;
            align-items: center;
            margin-left: 20%;
            max-width: 1520px;
            
            }
         
            h3 {
            font-size: 1.3rem;
            font-weight: 500;
            text-align: center;
            color: #0101E1;
            margin-bottom: 1rem;
            }
            aside {
                transition: 300ms;
                position: fixed;
                padding-top: 30px;
                height: 100%;
                background-color:#2E4DEC;   
                color: white;
                padding: 30px;
                width: 15%;
                z-index: 1;
            }
            .logo {
                margin: 0 auto;
                width: 100%;
            }
            aside .side-menu {
            position: relative;
            margin-top: 100px;
            }
            h2 {
                font-size: 1.1rem;
                line-height: 1.1;
                margin-left: 25px;
                align-self: center;
                font-weight: 500;
            }
            @media (max-width: 480px) {
                aside .side-menu {
                    right: 0;
                    left: 0;
                    margin-left: 0;
                }
            }
            
            .burger {
            display: none;
            cursor: pointer;
            position: absolute;
            top: 15px;
            left: 15px;
            }

            .burger div {
            width: 25px;
            height: 3px;
            background-color: #0101E1;
            margin: 5px;

            transition: all 0.3s ease;
            }
            .side-menu.side-active {
            transform: translateX(0%);
            }
            .aside-active {
            width: 100%;
            }
            .burger.toggle div {
            background-color: #EFF2FF;
            }
            .toggle .line1 {
            transform: rotate(-45deg) translate(-5px, 6px);
            }

            .toggle .line2 {
            opacity: 0;
            }

            .toggle .line3 {
            transform: rotate(45deg) translate(-5px, -6px);
            }

            .btn {
            background: #0fe430;
            color: white;
            padding: 10px 30px;
            font-weight: 500;
            border-radius: 5px;
            }
            
            section {
                transition: 300ms;
                margin-left: 45%;
                padding-left: 50px;
                margin-right: 90px;
                padding-top: 20px;
                background-color: #e2e8f0;
            }

            @media (max-width: 480px) {
                section {
                    padding-left: 0;
                    
                }
            }
            section .username {
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }

            section .username h3 {
            font-size: 1.2rem;
            font-weight: 500;
            margin-right: 10px;
            color: #0101E1;
            }

            section .username .avatar {
            width: 50px;
            height: 50px;
            }
            section .username .avatar img {
            width: 100%;
            height: 100%;
                object-fit: cover;
            border-radius: 50%;
            }
            section .reservation table {
            border-collapse: separate;
            margin-top: 10px;
            margin-left: 5%;
            width: 100%;
            text-align: center;
            border-spacing: 0 8px;
            border-radius: 8px;

            }
            
            section .reservation table .headtable{
                background-color: #0101E1;
                height: 60px;

            }
            section .reservation table .rtable{
                background-color: #fff;
                height: 60px;

            }

            section .reservation table th {
            color: #EFF2FF;
            }

            section .reservation table th,
            section .reservation table td {
            font-weight: 500;
            vertical-align: middle;
            padding: 10px 0;
            }


            section .reservation table th a,
            section .reservation table td a {
            display: block;
            }
            @media (max-width: 480px) {
                section .reservation table tr:not(:first-child) td {
                    padding: 20px 0;
                }
            }
            @media (max-width: 480px) {
            section .reservation table tr:not(:first-child) td:last-child {
                display: none;
            }
            }
            section .products table th {
            color: #0101E1;
            }
            section .reservation table tr:not(:first-child) td:last-child {
                background: #0101E1;
                display: flex;
                justify-content: center;
                align-items: center;
                justify-items: center;
                height: 60pxgi;
            }
            section .reservation table th:first-child,
            section .reservation table td:first-child {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            }
            @media (max-width: 480px) {
            section .reservation table th:nth-child(2),
            section .reservation table td:nth-child(2) {
                display: none;
            }
            }

            @media (max-width: 480px) {
            section .reservation table th:nth-child(3),
            section .reservation table td:nth-child(3) {
                display: none;
            }
            }

            @media (max-width: 480px) {
            section .reservation table th:nth-child(6),
            section .reservation table td:nth-child(6) {
                display: none;
            }
            }

            @media (max-width: 480px) {
            section .reservation table th:nth-child(7),
            section .reservation table td:nth-child(7) {
                display: none;
            }
            }
            @media (max-width: 480px) {
            section .reservation table th:nth-child(8),
            section .reservation table td:nth-child(8) {
                display: none;
            }
            }
            
            section .reservation table th:nth-last-child(2) > div,
            section .reservation table td:nth-last-child(2) > div {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            }

            section .reservation table th:last-child,
            section .reservation table td:last-child {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            }
                        @media screen and (max-width: 480px) {
                body {
                    overflow-x: hidden;
                }
                aside {
                    width: 0%;
                    padding: 0;
                }
                .sidebar .logo {
                    visibility: hidden;
                }

                .side-menu {
                    position: fixed;
                    
                    overflow: hidden;
                    height: 100vh;
                    top: 0;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    
                    width: 100%;
                    transform: translateX(-100%);
                    transition: transform 0.5s ease-out;
                }

                    .burger {
                        display: block;
                        cursor: pointer;
                        color: white;
                }
                }


    </style>
</head>
<body>
    <div id="app">
     

     
      <aside class="sidebar">
      <div class="logo">
      
                  <a href="/home"> <h1>SOTRAYA</h1></a> 
                  
      </div>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <div class="side-menu">
      <a href="/dashboard" >
                  <box-icon name='dashboard' type='solid' color="#EFF2FF" ></box-icon><h2>Dashboard</h2>
       </a>
       <a href="/users" >
                  <box-icon name='user' color="#EFF2FF" ></box-icon> <h2>Users</h2>
        </a>
       <a href="/statistics" >
                  <box-icon name='bar-chart' color="#EFF2FF" ></box-icon> <h2>Statistic</h2>
      </a>
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
                            

                            <div class="menu menu-right" aria-labelledby="navbar">
                                <a  href="{{ route('logout') }}">
                                <box-icon name='exit' type='solid' color="#EFF2FF" ></box-icon>{{ __('Logout') }}
                                </a> 

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
       
      </div>
    </aside>
    <section class="container">
      <div class="username">
      <a href="{{ route('profile')}}" class="nav-link  second-text ms-auto fw-bold" id="navbar" 
                       d aria-expanded="false">
                      <h3> <i class='bx bx-face' ></i>Hi, {{ Auth::user()->name }}</h3>
                      </a>
        <div class="avatar">
          <img src="https://resolution-conflits.protegez-vous.ca/wp-content/uploads/2020/05/testimony.png" alt="Avatar" />
        </div>
      </div>
      
      <div class="reservation">
        <table>
          <tr class="headtable">
            <th>Id</th>
            <th>Name</th>
            <th>D.T Start </th>
            <th>Time</th>
            <th>City</th>
            <th>Street</th>
            <th>Payment</th>
            <th>Price</th>
            <th>View</th>
          </tr>
          @foreach ($reservations as $reservation)
            <tr class="rtable">
                <td>#{{$reservation->id}}</td>
                <td>{{$reservation->user->name}}</td>
                <td>{{$reservation->dt_start}}</td>
                <td>{{$reservation->time_res}}H</td>
                <td>{{$reservation->city}}</td>
                <td>{{$reservation->street}}</td>
                <td>{{$reservation->payment}}</td>
                <td>{{$reservation->price}}$</td>
                <td><a href="{{ route('showReservation', ['id' => $reservation->id])}}"><box-icon name='show' color='#fff' ></box-icon></a></td>
            </tr>
            @endforeach
          
        </table>
      </div>
    </section>
          
              
          </main>
    </div>
      <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function navSlide() {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".side-menu");
  const aside = document.querySelector("aside");

  burger.addEventListener("click", () => {
    //Toggle Nav
    nav.classList.toggle("side-active");

    aside.classList.toggle("aside-active");
    //Burger Animation
    burger.classList.toggle("toggle");
  });
}

navSlide();

    </script>
  </body>
</html>