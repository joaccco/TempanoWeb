@extends('layouts.app')
@section('content')
<head>
  {{-- Map --}}
  <link rel="stylesheet" href="/path/to/leaflet.css" />
  <script src="node_modules/leaflet/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

  {{-- CSS Map --}}
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
  integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
  crossorigin=""/>
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
  integrity="sha256-o9N1jGDZrf5tS       +Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
  crossorigin=""></script>
</head>
<body>
  
  <h1 class="h-18 ml-5 px-12 rounded-md bg-gradient-to-t text-black">Hielos TEMPANO</h1>
  <h1 class="h-18 ml-5 px-5 font-extrabold rounded-md bg-gradient-to-t text-black">Puntos de venta</h1>
    <div id="map">
      <style>
        #map { 
            width: 100%;
            height: 680px;
            box-shadow: 5px 5px 5px rgb(46, 16, 16);
         }
      </style>
      <script class="h-full w-full object-cover object-center">
          //Cree el mapa 
          var map = L.map('map').
             setView([41.66, -4.72],15);
          
          //Config del Mapa y Derechos de Autor
          L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>', 
              maxZoom: 18 }).
              addTo(map);

          L.control.scale().addTo(map);

          //Cree dos marcadores en el mapa
          L.marker([-27.476613, -58.83161],{draggable: true}).addTo(map);
          var marker = L.marker([-27.468607, -58.84346]).
          addTo(map);


          //Cree dos Circulos en el mapa
          var circle = L.circle([-27.478507, -58.84346], {
            color: 'blue',
            fillColor: '#r03',
            fillOpacity: 0.5,
            radius: 200
          }).addTo(map);

          var circle = L.circle([-27.468607, -58.84346], {
            color: 'green',
            fillColor: '#t03',
            fillOpacity: 0.2,
            radius: 200
          }).addTo(map);
      

          //Cree una PopUp
          var popup = L.popup()
            .setLatLng([-27.458907, -58.84346])
            .setContent("Ola vendo yelo frio mi gente.")
            .openOn(map);

          //Cree una PopUp Pero mas Fachera
          var popup = L.popup();
          function onMapClick(e) { popup
            .setLatLng(e.latlng)
            .setContent("Estas en la direccion: " + e.latlng.toString())
            .openOn(map);
          } map.on('click', onMapClick);

          //Tooltip
          marker.bindTooltip("Depot").openTooltip();
          var tooltip = L.tooltip()
            .setLatLng(latlng)
            .setContent('Hello world!<br />This is a nice tooltip.')
            .addTo(map);         
            
      </script>
     </div>
</body>
@endsection