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
           body{
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;    
        }
        .contact-form{
            background: #fff;
            margin-bottom: 5%;
            width: 30%;
        }
        .contact-form .form-control{
            border-radius:10px;
        }

        
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
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
        .btn
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>

    </styl>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
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

        <main>
            <div class="container contact-form">
          <form action="{{ route ('storReservation')}}" method="post">
            {{ csrf_field() }}


            <div class="row p-5 shadow rounded">
              <h1>Reserve Now</h1>
              <div class="col-lg-11 mx-auto " id="reservation">
                          
                            
                            
                            <div class="form-group">
                            <label for="dt_start">Choose a Date:</label>
                                <input type="datetime-local" name="dt_start" id="dt_start" class="form-control" placeholder="start" value="" />
                            </div>
                            <div class="form-group">
                            <label for="time_res">How long:</label>
                                <select name="time_res" id="time_res" onchange="calculateAmount(this.value)" required class="form-control" >
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
                                <select name="city" id="city" onchange="populate(this.id,'street')"  class="form-control" >
                                      <option value="" disabled selected>-- Choose a city --</option>
                                      <option value="Marrakech">Marrakech</option>
                                      <option value="Casablanca">Casablanca</option>
                                      <option value="Rabat">Rabat</option>
                                </select>
                            </div>
                            <div class="form-group">
                              <label for="street">Choose a street:</label>
                                <select name="street" id="street"  class="form-control" >
                                  </select>
                            </div>
                            <div class="form-group">
                             <label for="payment">Paymentent:</label>
                                <select name="payment" id="payment"  class="form-control" >
                                  <option value="Onspot">Onspot</option>
                                  <option value="Online">Online</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="price">Price</label>
                                <input type="text" min="0" name="price" id="price" class="form-control"  readonly/>
                            </div>
                          
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-success mt-2" value="Reserve" />
                            </div>
                         
                        </div>
                        
                    </div>

          </form>


        
        
        </main>
    </div>
      <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
      
      function populate(city,street){

        var city = document.getElementById(city);
        var street = document.getElementById(street);

        street.innerHTML= "";
        
        if(city.value == "Marrakech"){

          var  optionArray = ['Gueliz|Gueliz','Mhamid|Mhamid','Daoudiat|Daoudiat','Massira|Massira'];

        }
        if(city.value == "Casablanca"){

          var  optionArray = ['Borgone|Borgone','Maarif|Maarif','Sidi Maarouf|Sidi Maarouf','Qods|Qods'];

        }
        if(city.value == "Rabat"){

          var  optionArray = ['Hay Riad|Hay Riad','Agdal|Agdal','Al irfan|Al irfan'];

        }

        for(var option in optionArray){

          var pair = optionArray[option].split("|");
          var newoption = document.createElement("option");

          newoption.value = pair[0];
          newoption.innerHTML = pair[1];
          street.options.add(newoption);

        }

      }
      
      
     

      function  calculateAmount(time) {
        
        var priceTopay = time * 4;
        var lastPrice = document.getElementById('price');
        lastPrice.value = priceTopay ;
      }

                          
    </script>
  </body>
</html>