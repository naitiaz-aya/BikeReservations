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
  margin: 0;
  box-sizing: border-box;
  font-family: "VT323", monospace;
  color: #1f1f1f;
}

.block {
  padding: 20px 10px;
}

.bold {
  font-weight: bold;
}

.center {
  text-align: center;
}

.receipt {
  width: 300px;
  height: 100%;
  background: #fff;
  margin: 0 auto;
  box-shadow: 5px 5px 19px #ccc;
  padding: 10px;
}

.logo {
  text-align: center;
  padding: 20px;
}



.address {
  text-align: center;
  margin-bottom: 10px;
}

.transactionDetails {
  display: flex;
  justify-content: space-between;
  margin: 0 10px 10px;
}
.transactionDetails .detail {
  text-transform: uppercase;
}

.centerItem {
  display: flex;
  justify-content: center;
  margin-bottom: 8px;
}



.paymentDetails {
  display: flex;
  justify-content: space-between;
  margin: 0 auto;
  width: 150px;
}

.creditDetails {
  margin: 10px auto;
  width: 230px;
  font-size: 14px;
  text-transform: uppercase;
}



.returnPolicy {
  margin: 10px 20px;
  width: 220px;
  display: flex;
  justify-content: space-between;
}


.tripSummary {
  margin: auto;
  width: 255px;
}
.tripSummary .item {
  display: flex;
  justify-content: space-between;
  margin: auto;
  width: 220px;
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
           

        <div id="showScroll" class="container block">
	<div class="receipt">
		<h1 class="logo">SOTRAYA</h1>
		<div class="address">
    {{$reservation->city}}
		</div>
		<div class="transactionDetails">
			<div class="detail">Reservation N°{{$reservation->id}}</div>
			<div class="detail">User ID: {{$reservation->user_id}}</div>
		</div>
		
		<!-- <div class="centerItem bold">
			<div class="item">ExtraCare Card #: *********1875</div>
		</div> -->
		
		
		<div class="paymentDetails bold">
			<div class="detail">TOTAL</div>
			<div class="detail">{{$reservation->price}} $</div>
		</div>
		<div class="paymentDetails">
			<div class="detail">Payment: {{$reservation->payment}}</div>
			
		</div>
		
		<div class="creditDetails">
			<p><b>Name: </b> {{$reservation->user->name}}</br>
          <b>Email: </b> {{$reservation->user->email}}</br>
          <b>Phone: </b> +{{$reservation->user->phone}}</br>
          <b>Start: </b> {{$reservation->dt_start}}</br>
          <b>Time: </b> {{$reservation->time_res}} h</br>
          <b>City: </b> {{$reservation->city}}</br>
          <b>Street: </b> {{$reservation->street}}</br>
     </p>
		</div>

		<div class="paymentDetails">
			<div class="detail">CHANGE</div>
			<div class="detail">.00</div>
		</div>
		
	
		<div class="returnPolicy">
			<div class="detail"></div>
			
		</div>
		<div class="tripSummary">
			<div class="bold">{{$reservation->created_at}}</div>
			
			
		</div>









        
        </main>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
