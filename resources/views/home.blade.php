@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

@section('content')

  <div id="about" class="pad-section">
    <div class="container">
      <div id="app" class="col-sm-6">
          {!! $chart->container() !!}
      </div>
      <div id="" class="col-sm-6">
          {!! $chart2->container() !!}
      </div>
      <div id="" class="col-sm-6">
          {!! $chart3->container() !!}
      </div>
      <div id="" class="col-sm-6">
          {!! $chart4->container() !!}
      </div>
    </div>
  </div>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
  {!! $chart->script() !!}
  {!! $chart2->script() !!}
  {!! $chart3->script() !!}
  {!! $chart4->script() !!}
@endsection

