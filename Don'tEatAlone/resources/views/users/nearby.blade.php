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
                </div>
                <div id="map" style="width:100%;height:500px"></div>
            </div>
            <div class="portlet-body">
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script>

    function myMap() {
      var myCenter = new google.maps.LatLng(31.1285463,30.646245999999998);
      var mapCanvas = document.getElementById("map");
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
    
    
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAJVHAeGF_MOUx2-a_3npawLs7ruuaevE&callback=myMap"></script>
@endsection