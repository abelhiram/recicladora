@extends('layouts.app')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('css/cs.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  
    <style>
    html { height: 100% }
    body {
      background: rgba(250,250,250,1);
    }
    
    .body {
        width:100%;
        background: url("{{asset('img/fondo2.jpeg')}}") ; 
        background-size: cover;

    }
    .frase{
        color:black;
        background-color: white; opacity: 0.5;
        padding:30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top:130px;
        text-align:justify ;
        width:100%;

    }
    .frase h1{
        font-size:30px;
    }
    </style>
@section('content')

    <!--div class="col-md-12" style="height:100%;">
        <div class="col-md-6" >
        <p style="font-size:30px;margin-top:100px;">Inicia sesión para obtener un análisis detallado del reciclaje</p>
        <div>
            <img src="{{asset('img/captura.png')}}" alt="">
        </div>
        </div-->
        
        <div class="col-md-6"></div>
    </div>
    <div class="body">
  <div class="container">
  
  <div class="row" style="margin-top:5%; margin-bottom:10%;">
    
    <div class="col-md-5">
        <div class="login">
        
        <h1 style="font-size:35px;">Iniciar sesión</h1>

        <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <input id="email" type="text" placeholder="Phone number, username, or email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check"><br>
                    <input style="margin-left:30%;" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label style="" class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        
        
                           
        <button type="submit" style="width:80%; margin-left:10%;" class="btn btn-primary btn-block">
            {{ __('Login') }}
        </button>

        
                            
                      
        <br>

        </form>

        <div class="divider"><b>O</b></div>

        <div class="fbwrapper"><div class="fb">Regístrate, es gratis <a href="{{ route('register') }}">Registrarse</a></div></div>

        <div class="forgotwrapper" style="margin-left:-10%;"><div class="forgot">@if (Route::has('password.request'))
            <a class="btn btn-link" style="" href="{{ route('password.request') }}">
                {{ __('¿Olvidaste tu contraseña?') }}
            </a>
        @endif</div></div>

        <br>
        </div>
        <div class="infobox">
        </div>
    </div>
    <div class="col-md-7">
    <div class="frase">
    <h1><i>"Lo que hacemos con los bosques del mundo, no es más que un reflejo de lo nos estamos haciendo los unos a los otros"</i> - Mahatma Gandhi.</h1>
    </div>
      </div>
</div>
</div>
</div>
@endsection