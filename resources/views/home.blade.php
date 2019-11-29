@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
<style>
  #about{
    display: flex;
    align-items: center;
    justify-content: center;
   
  }
</style>



@section('content')

  <div id="about" class="pad-section">
      <div class="container">
          <div class="col-md-12">
              <div style="">
              <h1>Informe mensual de uso</h1>

              <p>Utilización de la máquina de reciclaje durante el año en curso (2019).</p>
              </div>
          </div>

          <div id="app" class="col-md-6">
              {!! $chart->container() !!}
          </div>
          
          <div style="height:100%;" class="col-md-6">
          <div class="col-md-6">
          <h1 style="font-size:40px; display:flex;">Has encendido la máquina de reciclaje un total de: {{$registros}} veces hoy</h1>
          </div>
          <div class="col-md-6">
          <img src="{{asset('img/reciclajed.png')}}" style="width:100%;">
          </div>
          </div>    
          
      </div>
  </div>

  <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
  {!! $chart->script() !!}

@endsection

