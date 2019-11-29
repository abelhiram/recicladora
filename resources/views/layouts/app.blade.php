<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Anton|Varela+Round&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <link rel="stylesheet" href="{{asset('css/cs.css')}}">
    <link rel="stylesheet" href="{{asset('css/para.css')}}">
    <link href="https://www.script-tutorials.com/demos/391/css/bootstrap.min.css" rel="stylesheet">
    <style>


    html body{
      font-family: 'Varela Round', sans-serif;
    }
    
    h1{
      font-size:60px;
      font-family: 'Anton', sans-serif;
    }
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="flex-row-reverse">
          <a class="" href="#"><img src="{{asset('img/logo3.png')}}" style="width:60px;">
          <a class="" href="#"><img src="{{asset('img/logo1.png')}}" style="width:150px;">
        </a>
        </div>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav navbar-right">
        @guest
          <li><a href="{{url('/')}}">Inicio</a></li>
          
          <li><a href="{{url('/login')}}">Iniciar sesión</a></li>
          @if (Route::has('register'))
          <li><a href="{{url('/register')}}">Registrar</a></li>
          @endif
        @else
            <li><a href="{{url('/home')}}">Información</a></li>
            <li><a href="{{url('/inicio')}}">Control</a></li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
          
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  @yield('content')

    <!-- footer -->
    
    <footer>
    <div class="container" style="color:#ffff;">
      
      <div class="col-md-4">
        <div style="margin-left:10%; margin-top:20%;">
        <a class="" href="#"><img src="{{asset('img/logo3.png')}}" style="width:200px;margin-top:-25px;"></a>
        </div>
      </div>

      <div class="col-md-4">
        <div style="margin-left:10%; margin-top:20%;">
        
        </div>
      </div>
      <div class="col-md-4">
        <div style="margin-left:10%; margin-top:20%;">
        <a href="{{url('/aa')}}"><h1 style="color:white;font-size:30px;"><i>Quiénes somos</i></h1></a>
        <a href="{{url('/aa#objetivo')}}"><h1 style="color:white;font-size:20px;">Nuestro objetivo</h1></a>
        </div>
      </div>
      
    </div>
    <hr style="width:80%">
    <p class="text-right" style="color:#ffff; margin-right:10%;">Copyright &copy; RecycleNav 2019</p>
  </footer>
  
  <!-- /footer -->

  
</body>
  <script src="https://www.script-tutorials.com/demos/391/js/jquery-1.10.2.js"></script>
  <script src="https://www.script-tutorials.com/demos/391/js/bootstrap.min.js"></script>
  <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="https://www.script-tutorials.com/demos/391/js/main.js"></script>


</html>
