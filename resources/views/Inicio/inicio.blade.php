@extends('layouts.app')
<style>
.vid{
  
}
#amb{
  background-color: white; opacity: 0.5;

  padding:20px;
  width:100%;

  text-align:center;
}
#amb h1{
  color:black;
}
#amb h2{
  color:black;
}
#about img{
  height:100%;
}
</style>
@section('content')
  <!-- video -->
  <div class="header">
    <div class="overlay"></div>
    <video class="vid2" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{asset('img/residuos.mp4')}}" type="video/mp4">
    </video>
    <div class="container ">
      <div class="d-flex  text-center align-items-center">
        <br><br><br>
          <img id="lo" src="{{asset('img/logo2.png')}}">
          <br><br>
          <a href="#about" style="background-color: transparent; color:white;" class="btn btn-default btn-lg">Descube más</a>
      </div>
    </div>
  </div>
  <!-- /video -->

  <!-- second section - About -->
  <div id="about" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1><i>¿Por qué reciclar el plástico?</i></h1>
          <h3>El reciclaje de plástico, como el de cualquier otro residuo o material, conlleva 
            una serie de beneficios ambientales, económicos y sociales tan importantes que hacen 
            del reciclaje una cuestión positiva. En el caso particular del plástico, nos encontramos 
            con dos motivos extra que hacen de su reciclaje algo muy necesario para la sostenibilidad 
            de nuestra sociedad:</h3>
        </div>
        
      </div>
    </div>
  </div>
  <!-- /second section -->


  <!-- fourth section - Information -->
  <div id="information" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6" >
          <div class="panel panel-default" >
            <div class="panel-heading">
              <h2 >Aumento exponencial del uso y consumo del plástico.</h2>
            </div>
            <div class="panel-body lead">
              <h3>Prácticamente vivimos en una sociedad donde el plástico 
                está presente en casi todos los sectores y que, de no hallar una solución, 
                puede convertirse en un grave problema.</h3>    
            </div>
          </div>
        </div>
        <div class="col-sm-6" >
          <div class="panel panel-default" >
            <div class="panel-heading">
              <h2 >El plástico es un residuo contaminante poco susceptible a degradarse.</h2>
            </div>
            <div class="panel-body lead" >
              <h3>El plástico es un residuo cuya asimilación por la naturaleza es complicada y 
                lenta, y este hecho junto con una producción de plásticos en aumento, da como 
                resultado encontrarnos con una cantidad de residuos considerable y difícil de manejar.</h3>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /fourth section -->


  <!-- third section - Services -->
  <div id="services" class="pad-section">
    <div class="container">
      <h2 class="text-center">Usos finales del plástico reciclado.</h2> <hr />
      <div class="row text-center">
     
      <div id="al" >
          <div class="col-sm-4">
            <img src="{{asset('img/pet.png')}}" style="width:100px;opacity:0.5">
            <h3>Plástico Pet.</h3>
            <h4 style="text-align:center;">Se recicla en partes de ropa y textil, alfombras, 
            lonas, hilos y cuerdas..</h4>
            
          </div>
          <div class="col-sm-4">
          <img src="{{asset('img/2.png')}}" style="width:100px;;opacity:0.5">
            <h3>Plástico Polietileno de alta densidad.</h3>
            <h4 style="text-align:center;">Se recicla en otros envases dedicado a detergentes, 
            champús, botellas para aceite u otros usos industriales, tubos y contenedores plásticos, 
            mesas y estructuras.</h4>
          </div>
          <div class="col-sm-4">
          <img src="{{asset('img/3.png')}}" style="width:100px;;opacity:0.5">
            <h3>Plástico Policloruro de Vinilo.</h3>
            <h4 style="text-align:center;">Se recicla en muebles para exteriores y otras estructuras 
            plásticas como armarios, tuberías de fontanería, vallas, parte de alfombras, equipo eléctrico 
            y conos.</h4>
          </div>
        </div>
        <div id="al" >
          <div class="col-sm-4">
          <img src="{{asset('img/4.png')}}" style="width:100px;;opacity:0.5">
            <h3>Plástico polietileno de baja densidad.</h3>
            <h4 style="text-align:center;">Se recicla en bolsas de basura, bolsas para residuos, 
            contenedores, tablones de plástico y fiml para uso agrícola.</h4>
          </div>
          <div class="col-sm-4">
          <img src="{{asset('img/5.png')}}" style="width:100px;;opacity:0.5">
            <h3>Plástico Polipropileno</h3>
            <h4 style="text-align:center;">Se recicla en cajas y envases para medicinas, para transporte, 
            en sillas de plástico y algunos muebles de jardín, cajas de batería, cables, escobas y cubos 
            de fregar, botes y algunas herramientas.</h4>
          </div>
          <div class="col-sm-4">
          <img src="{{asset('img/6.png')}}" style="width:100px;;opacity:0.5">
            <h3>Plástico poliestireno.</h3>
            <h4 style="text-align:center;">Se recicla en macetas de plástico, aislamientos térmicos, 
            termómetros, cubiertas, cubos de basura y algunos accesorios para oficinas.</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /third section -->
  <!-- video -->
  <div class="header">
    <div class="overlay"></div>
    <video class="vid" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{asset('img/limp.mp4')}}" type="video/mp4">
    </video>
    <div class="container ">
      <div class="d-flex  text-center align-items-center">
        <div id="amb" class="w-100 text-white">
          <h1 class="display-3 ">Reciclar es más que una acción, es el valor de la 
            responsabilidad por preservar los recursos naturales</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- /video -->




  @endsection