<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1> -->
    <div class="alert alert-warning">
        <h4>Daftar Sekolah</h4>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <!-- <div class="col-xs-12 col-md-12"><br /></div>
    <div class="col-xs-12 col-md-7"> -->
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

    <!-- HTML Block untuk menampilkan peta -->
    <!-- <div class="col-xs-12 col-md-7"><br /></div> -->
    <div id="map" style="height:350px; width:580px;"></div>
    <script>
        /* Initial Map */
        var map = L.map('map').setView([-7.9, 110.45], 12); //lat, long, zoom

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
                            $("#feature-title").html("Close");
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
    <!-- </div> -->
    <!-- <div class="col-xs-12 col-md-5"><br><br><br>
    <ul class="list-group list-group">
        <li class="list-group-item bg-blue"><b>Proses Pembelajaran</b></li>
        <li class="list-group-item"><a class="text-warning">Rasio Siswa Rombel</a><span class="badge pull-right">15</span></li>
        <li class="list-group-item"><a class="text-warning">Rasio Siswa Ruang Kelas <font color="red">*</font></a><span class="badge pull-right">15</span></li>
        <li class="list-group-item"><a class="text-warning">Rasio Siswa Guru</a><span class="badge pull-right">0</span></li>
        <li class="list-group-item"><a class="text-warning">Persentase Guru Kualifikasi</a><span class="badge pull-right">0</span></li>
        <li class="list-group-item"><a class="text-warning">Persentase Guru Sertifikasi</a><span class="badge pull-right">0</span></li>
        <li class="list-group-item"><a class="text-warning">Persentase Guru PNS</a><span class="badge pull-right">0</span></li>
        <li class="list-group-item"><a class="text-warning">Persentase Ruang Kelas Layak</a><span class="badge pull-right">100</span></li>
    </ul> -->

    <!-- /.container-fluid -->



</div>
<!-- End of Main Content -->