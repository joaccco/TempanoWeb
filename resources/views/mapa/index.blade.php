@extends('layouts.app')
@section('content')
  <div>
    <h1 class="justify-center font-extrabold bg-gradient-to-t text-black">Puntos de venta</h1>
  
    <div id="map">
      <style>
        #map { 
            width: 100%;
            height: 550px;
            z-index: -1000;
            box-shadow: 5px 5px 5px rgb(46, 16, 16);
           

         }
      </style>
      <script class="">
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
  </div>
@endsection