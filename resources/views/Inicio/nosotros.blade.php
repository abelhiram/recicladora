@extends('layouts.app')
@section('content')
<img src="{{asset('img/hojas.jpg')}}" style="width:100%;height;50%;">
<div class="container pad-section" style="">
    <div class="col-md-12">
        <div style="">
            <h4>¿QUIÉNES SOMOS?</h4>
        </div>
        <hr style="margin:20px;">
    </div>

    <div class="col-md-8">
        <div style="">
        <h1>Lo que ofrecemos</h1>

        <p id="objetivo" style="text-align:justify;font-size:20px;">
        Una alternativa para la renovación de recursos no biodegradables y una nueva
        mentalidad enfocada en el cuidado de nuestro entorno.
        </p>
        </div>
    </div>

    

    <div class="col-md-8">
        <div style="">
        <h1  style="font-size:40px">Objetivo general</h1>

        <p style="text-align:justify;font-size:20px;">
        El objetivo general de nuestro prototipo, es el triturado, lavado, 
        secado, fundición y la creación de productos sustentables y/o ecológicos 
        para la comunidad en general.
        </p>
        </div>
    </div>
    
    <div id="objetivo-especifico" class="col-md-8">
        <div style="">
        <h1 style="font-size:40px">Objetivo específico</h1>
        <p style="text-align:justify;font-size:20px;">
        Crear tecnología sustentable, generar un impacto positivo en el mundo real y 
        en la manera en que la sociedad observa su medio ambiente y los recursos naturales 
        de los que se aprovecha. Este objetivo conlleva un gran desafío, tomamos la tarea
        de crear un modelo sustentable, con lo cual ayudamos a la comunidad a desarrollar 
        ideas de renovación de recursos reciclables.</p>
        </div>
    </div>
    <div class="col-md-4">
    
    </div>
    <div class="col-md-12">
    <img src="{{asset('img/objetivo4.jpg')}}" alt="">
    </div>
  
    
</div>
@endsection