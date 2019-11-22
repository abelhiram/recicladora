@extends('layouts.app')
<style>
#about {
  display: flex;
  align-items: center;
  justify-content: center;
  height:100%;
}
</style>
@section('content')
<div id="about" class="pad-section">

    <img id="myImage" src="https://www.w3schools.com/js/pic_bulboff.gif" style="width: 100px">

</div>
@endsection
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('30999e9a628bc76b1d4a', {
      cluster: 'us2',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      var txt = JSON.stringify(data);
      var obj = JSON.parse(txt);
      if(obj.message==1){
        
        document.getElementById('myImage').src='https://www.w3schools.com/js/pic_bulbon.gif'
      }
      if(obj.message==2){
        
        document.getElementById('myImage').src='https://www.w3schools.com/js/pic_bulboff.gif'
      }
      //var xmlHttp = new XMLHttpRequest();
      //xmlHttp.open( "GET", 'http://192.168.137.62/on', false ); // false for synchronous request
      //xmlHttp.send( null );
      //return xmlHttp.responseText; 
    });
  </script>

