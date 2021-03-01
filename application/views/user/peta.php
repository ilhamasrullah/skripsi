<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Metadata -->
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="unsorry">
  <meta name="description" content="leafletjs marker with google maps directions">

  <!-- Judul pada tab browser -->
  <title>Leaflet Marker Directions</title>

  <!-- Leaflet CSS Library -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css">
  <!-- Geolocation CSS Library -->
  <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
  <!-- Bootstap CSS Library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- Font Awesome CSS Library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="assets/css/gh-fork-ribbon.css">

  <link rel="icon" type="image/x-icon" href="https://unsorry.net/assets-date/images/favicon.png">

  <!-- Style untuk tampilan peta fullscreen -->
  <style>
    html,
    body,
    #map {
      height: 350px;
      /* width: 480px; */
      margin: 0px;
    }

    #subtitle {
      font-size: 10px;
    }
  </style>
</head>

<body>
  <!-- Leaflet JavaScript Library -->
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <!-- Geolocation Javascript Library -->
  <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
  <script src="assets/js/locateControl.js"></script>
  <!-- Bootstrap JavaScript Library -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Feature Modal -->
  <div class="modal fade" id="directionsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button class="close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="feature-title"></h4>
        </div>
        <div class="modal-body" id="feature-info"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="github-fork-ribbon-wrapper right">
      <div class="github-fork-ribbon">
        <a href="https://github.com/anshori/leafletjs-marker-gmaps-directions">Fork me on GitHub</a>
      </div>
    </div> -->

  <!-- HTML Block untuk menampilkan peta -->
  <div id="map"></div>

  <script>
    /* Initial Map */
    var map = L.map('map').setView([-7.9, 110.45], 10); //lat, long, zoom

    /* Tile Basemap */
    var basemap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | <a href="http://www.unsorry.net" target="_blank">unsorry@2020</a>'

      // | <a href="https://github.com/anshori/leafletjs-marker-gmaps-directions" target="_blank">Fork me on GitHub</a>
    });
    basemap.addTo(map); //Memanggil basemap untuk ditampilkan ketika halaman dipanggil

    /* GeoJSON Point */
    var lokasiuniversitas = L.geoJson(null, {
      /* Popup & Tooltip */
      onEachFeature: function(feature, layer) {
        if (feature.properties) {
          /* Variabel untuk memanggil atribut dari data geojson */
          var content = feature.properties.label + "<br>" +
            "<font id='subtitle'>" + feature.properties.city + "</font><br><hr>" +
            "<a href='https://www.google.com/maps/dir/?api=1&destination=" + feature.geometry.coordinates[1] + "," + feature.geometry.coordinates[0] + "' target='_blank' class='btn btn-info' title='Klik untuk menuju lokasi'>Rute dari lokasi Anda</a>";
          layer.on({
            click: function(e) { //Fungsi ketika icon simbol di-klik
              $("#feature-title").html("Info");
              $("#feature-info").html(content);
              $("#directionsModal").modal("show");
            },
            mouseover: function(e) { //Fungsi ketike kursor berada di atas marker
              lokasiuniversitas.bindTooltip(feature.properties.label);
            }
          });
        }
      }
    });
    $.getJSON("assets/data/universitas.geojson", function(data) {
      lokasiuniversitas.addData(data);
      map.addLayer(lokasiuniversitas);
      map.fitBounds(lokasiuniversitas.getBounds());
    });

    /* Control Locate */
    locateControl.addTo(map);
  </script>
</body>

</html>