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
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;     
            /* background-color: #EFF2FF;     */
           }
            :root{
            --main-bg-color: #005A8D;
            --main-text-color: #fffff;
            --second-text-color: #EFF2FF;  
            --second-bg-color: #022E57;  
            }
            .primary-text{
            color: var(--main-text-color);
            }
            .second-text{
            color: var(--second-text-color);
            }
            .primary-bg{
            color: var(--main-bg-color);
            }
            .second-bg{
            color: var(--second-bg-color);
            }
            .rounded-full{
            border-radius :100%;
            }
            .wrapper {
            overflow-x: hidden;
            }
            .sidebar{
                background: #022E57;
            }
            .sidebar{
                min-height: 100vh;
                margin-left: -15rem;
                transition: margin 0.25s ease-out;
            }
            .sidebar-heading{
            padding: 0.875rem 1.25rem ;
            font-size: 1.2rem;
            }
            .list-group{
            width: 15rem; 
            }
            .page-content-wrapper{
            min-width: 85%;
            }
            .wrapper .toggled{
            margin-left: 0;
            }
            .menu-toggle{
            cursor: pointer;
            }
            .list-group-item{
            border: none;
            padding: 20px 30px;
            }
            
            .btn-home{
                color:#EFF2FF;
            }
            @media (min-width: 768px) {
                .sidebar{
                    margin-left: 0;
                    
                }
                .page-content-wrapper{
                    min-width: 0;
                    width: 100%;
                }
                .wrapper .toggled{
                    margin-left: -15rem;
                }
            
            }

    </style>
</head>
<body>
    <div id="app">
     

        <main>

          <div class="d-flex wrapper" id="wrapper">
            <!-- Sidebar-->

            <div class="sidebar  primary-bg" id="sidebar">

                  <div class="sidebar-heading text-center py-2 primary-text fs-4 fw-bold text-uppercase border-bottom">
                  <a href="/home"><button class="btn btn-home"> <box-icon name='cycling' ></box-icon>    SOTRAYA</button></a> 
                  </div>

                  <div class="list-group list-group-flush my-3">

                  <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text fw-bold ">
                  <box-icon name='dashboard' type='solid'  ></box-icon> Dashboard
                  </a>
                  <a href="/users" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                  <box-icon name='user'  ></box-icon> Users
                  </a>
                  <a href="/statistics" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                  <box-icon name='bar-chart'  ></box-icon> Statistic
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
                                <box-icon name='exit' type='solid'  ></box-icon>{{ __('Logout') }}
                                </a> 

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                  

                  </div>
            </div>
             <!--  End Sidebar-->

             <div class="page-content-wrapper">
               <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-2 px-4">
                 <div class="d-flex align-items-center">
                    <i class="bx bx-align-right menu-toggle"id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                 </div>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav ms-2 mb-lg-0">
                     <li class="nav-item">
                       <a href="{{ route('profile')}}" class="nav-link  second-text ms-auto fw-bold" id="navbar" 
                       d aria-expanded="false">
                       <i class='bx bx-face' ></i>Hi, {{ Auth::user()->name }}
                      </a>
                     
                     
                     </li>
                   </ul>
                 </div>

              </nav>


                <div class="container-fluid px-4">
                  
                    <div class="row justify-content-center">
          
          
          
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center ">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-success text-uppercase  mb-1">
                                                        Reserved bikes</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$statistics['reserva']}}</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center ">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-success text-uppercase  mb-1">
                                                        All users </div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$statistics['users']}}</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
          
                              
          
                                    <div class="col-xl-3 col-md-5 mb-4">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                            Total of bikes </div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
          
                    <div class="container justify-content-center align-items-center">
                              
          
          
                              <div class="row">
                              
                                
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                              <thead>
                                                                  <tr>
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
                                                              </thead>
                                                              
                                                              <tbody>
                                                              @foreach ($reservations as $reservation)
                                                                  <tr>
                                                                      <td>{{$reservation->id}}</td>
                                                                      <td>{{$reservation->user->name}}</td>
                                                                      <td>{{$reservation->dt_start}}</td>
                                                                      <td>{{$reservation->time_res}}H</td>
                                                                      <td>{{$reservation->city}}</td>
                                                                      <td>{{$reservation->street}}</td>
                                                                      <td>{{$reservation->payment}}</td>
                                                                      <td>{{$reservation->price}}$</td>
                                                                      <td><a href="{{ route('showReservation', ['id' => $reservation->id])}}">view</a></td>
                                                                  </tr>
                                                              @endforeach
                                                              </tbody>
                                                          </table>
          
                            </div>
                    </div>
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
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")

        toggleButton.onclick = function () {
            el.classList.toggle("toggled")
        }
    </script>
  </body>
</html>