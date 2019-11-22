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
</style>
@section('content')

  <!-- first section - Home -->
  <div id="home" class="home" style="color:white;">
    <div class="text-vcenter">
      <h1>Recicladora</h1>
      <h2>Universidad Estatal de Sonora</h2>
      <a href="#about" style="background-color: transparent; color:white;" class="btn btn-default btn-lg">ÚNETE</a>
    </div>
  </div>
  <!-- /first section -->

  <!-- second section - About -->
  <div id="about" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="https://img.interempresas.net/fotos/1265947.jpeg" alt="" />
        </div>
        <div class="col-sm-6 text-center">
          <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet.</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum metus et ligula venenatis, at rhoncus nisi molestie. Pellentesque porttitor elit suscipit massa laoreet metus.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- /second section -->

  <!-- third section - Services -->
  <div id="services" class="pad-section">
    <div class="container">
      <h2 class="text-center">Our Services</h2> <hr />
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-cloud"> </i>
          <h4>Service 1</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
        <div class="col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-heart-empty"> </i>
          <h4>Service 2</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
        <div class="col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-globe"> </i>
          <h4>Service 3</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
        <div class="col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-leaf"> </i>
          <h4>Service 4</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- /third section -->

  <!-- fourth section - Information -->
  <div id="information" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Additional information</h2>
            </div>
            <div class="panel-body lead">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Additional information</h2>
            </div>
            <div class="panel-body lead">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /fourth section -->

  <!-- fifth section -->
  <div id="services" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>Parallax scrolling effect is in action</h3>
          <h4>The next is the address on Google maps</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- /fifth section -->

  <!-- google map -->
  <div class="header">
  <div class="overlay"></div>
  <video class="vid" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container ">
    <div class="d-flex  text-center align-items-center">
      <div id="amb" class="w-100 text-white">
        <h1 class="display-3 ">CUIDA EL AMBIENTE</h1>
        <h2 class="lead mb-6">MÁS TE VALE QUE LO HAGAS</h2>
      </div>
    </div>
  </div>
</div>
  <!-- /google map -->

    <!-- fifth section -->
    <div id="services" class="pad-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>Parallax scrolling effect is in action</h3>
          <h4>The next is the address on Google maps</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- /fifth section -->



  @endsection