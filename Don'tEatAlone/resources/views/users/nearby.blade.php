@extends('users.layouts.layout')
@section('title')
partener nearby
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">Partner nearby </span>
                    <div class="clear-fix" > </div>
                </div>


                <div class="clear-fix" > </div>
            </div>
            <div class="portlet-body">

            <button  onclick="geoFindMe()" class='btn btn-circle green btn-block ' style="width: 15%"> findPartner</button>

            <br>

                            <div id="out" style="width:100%;height:500px"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>

function geoFindMe() {



  var output = document.getElementById("out");

  if (!navigator.geolocation){
    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {

    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;



        var myCenter = new google.maps.LatLng(latitude,longitude);
        var mapCanvas = document.getElementById("out");
        var mapOptions = {center: myCenter, zoom: 14};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);

        // Zoom to 9 when clicking on marker
        google.maps.event.addListener(marker,'click',function() {
          map.setZoom(9);
          map.setCenter(marker.getPosition());
        });
      }

  function error() {
    output.innerHTML = "Unable to retrieve your location";
  }

  output.innerHTML = "<p>Locating…</p>";

  navigator.geolocation.getCurrentPosition(success, error);
}

    
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAJVHAeGF_MOUx2-a_3npawLs7ruuaevE&callback=myMap"></script>
@endsection