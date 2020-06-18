<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID Bali</title>
  <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

   <link href="{{asset('css/img/favicon.png')}}" rel="icon">
  <link href="{{asset('css/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
<!-- Bootstrap CSS File -->
  <link href="{{asset('css/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('css/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
   <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> -->
  <link href="{{asset('css/css/style.css')}}" rel="stylesheet">

 <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Leaflet (JS/CSS) -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://pendataan.baliprov.go.id/assets/frontend/map/MarkerCluster.css" />
  <link rel="stylesheet" href="https://pendataan.baliprov.go.id/assets/frontend/map/MarkerCluster.Default.css" />
  <!-- Leaflet-KMZ -->
  <script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <style>
    html,
    body,
    #map {
        height: 400px;
        width: 100%;
        padding: 0;
    }
</style>
</head>
<body>

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="/ ">COVID<span class="color-b">  Bali</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          
         
          <li class="nav-item">
            <a class="nav-link" href="/data">Input Data</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="/peta ">Peta</a>
          </li>

      </button>
    </div>
  </nav>

<div class="container-fluid">
  <br>
  <br>

    <h4 >Data Sebaran Kasus Covid-19 Bali</h4>
    <hr>

   <div class="row">
    <div class="col-md-12 col-md-offset-1">
      <div class="card">
        <div class="card-body">
          <div class="row">

    
      <div class="col-md-4">
    <br>

    <h5>Cari tanggal</h5>
    <form action="/search" method="POST">
      
      {{ csrf_field() }}
      <br>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
        <input id="tanggalSearch" type="date" @if(isset($tanggal)) value="{{$tanggal}}" @endif name="tanggal"
          class="form-control" required>
        <span class="input-group-btn">
          <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <br>
  
    <div class="row mt-2">
      <div class="col-6">
        
          <div class="card card-stats h-200" style="background-image: radial-gradient(at top left, #1177BB 50%, #1177BB 70%)">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon text-white">
                Positif
              </div>
            </div>
            <div class="card-body">
              <p class="text-right  text-white">Jumlah</p>
              <h1 class="card-title  text-white">{{$positif[0]->positif}} <small>Org</small></h1>
            </div>
          </div>
          <br>
          <div class="card card-stats h-200" style="background-image: radial-gradient(at top left, #1177BB 50%, #1177BB 70%)">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon text-white">
              Dalam Perawatan
              </div>
            </div>
            <div class="card-body">
              <p class="text-right text-white">Jumlah</p>
              <h1 class="card-title text-white">{{$rawat[0]->rawat}} <small>Org</small></h1>
            </div> 
          </div>
        
        
      </div>

      
      <div class="col-6">
          <div class="card card-stats h-200" style="background-image: radial-gradient(at top left, #1177BB 50%, #1177BB 70%)">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon text-white">
                Sembuh
              </div>
            </div>
            <div class="card-body">
              <p class="text-right text-white">Jumlah</p>
              <h1 class="card-title text-white">{{$sembuh[0]->sembuh}} <small>Org</small></h1>
             
          </div>
        </div>
        <br>
          <div class="card card-stats h-200" style="background-image: radial-gradient(at top left, #1177BB 50%, #1177BB 70%)">
            <div class="card-header card-header-default card-header-icon">
              <div class="card-icon text-white">
                Meninggal
              </div>
            </div>
            <div class="card-body">
              <p class="text-right text-white">Jumlah</p>
              <h1 class="card-title text-white">{{$meninggal[0]->meninggal}} <small>Org</small></h1>
            </div> 
          </div>
        </div>
      </div>
    
   </div>   
  <hr>
      
      <div class="col-md-8">
        <div class="card card-blue">
          <div class="card-header">
              <h5 class="card-title">Peta Penyebaran Covid Provinsi Bali <strong>{{$tanggalSekarang}}</strong></h5>
              <div id="map" style="width: 100%;height: 600px; position: relative;"></div>
            </div>
              
            </div>
          </div>
        </div>
      </div>
  </div>
 </div>
 </div>
 </div>
 </div>
</div>

</div>
<div class="container-fluid">
  <hr>
<div class="row mt-2">
  <div class="col-12">
    <div class="card card-maroon">
      <div class="card-header">
        <h3 class="card-title">Covid-19 Provinsi Bali <strong>{{$tanggalSekarang}}</strong></h3>
      </div id ="exampe_wrapper">
      <div class="card-body">
      <div class="table-responsive">
          <table id="example" class="table table-hover text-nowrap" >
                  
                    <thead>
                        <tr>
                          <th rowspan=2 style="text-align: center">No</th>
                          <th rowspan=2>Kabupaten</th>
                          <th rowspan=2>Kecamatan</th>
                          <th rowspan=2>Kelurahan</th>
                          <th rowspan=2>Level</th>
                          <th colspan=5 style="text-align: center">Penyebaran</th>
                          <th colspan=4 style="text-align: center">Kondisi</th>
                        </tr>
                        <tr>
                          <th>PP-LN</th>
                          <th>PP-DN</th>
                          <th>TL</th>
                          <th>Lainnya</th>
                          <th>Total</th>
                          <th>Perawatan</th>
                          <th>Sembuh Covid</th>
                          <th>Meninggal</th>
                          <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->kabupaten }}</td>
                        <td>{{ $item->kecamatan }}</td>
                        <td>{{ $item->kelurahan }}</td>
                        <td>{{ $item->level }}</td>
                        <td>{{ $item->tl }}</td>
                        <td>{{ $item->ppln }}</td>
                        <td>{{ $item->ppdn }}</td>
                        <td>{{ $item->lainnya }}</td>
                        <td>{{ $item->total }}</td>                        
                        <td>{{ $item->rawat }}</td>
                        <td>{{ $item->sembuh }}</td>
                        <td>{{ $item->meninggal }}</td>
                        <td>{{ $item->total }}</td>
                        </tr>
                        @endforeach
         </tbody>
        </table>
      </div>
    </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
</div>
    </div>
</div>
<script src="https://pendataan.baliprov.go.id/assets/frontend/map/leaflet.markercluster-src.js"></script>
<script type="text/javascript" class="init">
  
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  
</script>
<script>
  
  $(document).ready(function () {
    var dataMap=null;
    var dataPos=null;
    var colorMap=[
      "e5000d",
      "e71925",
      "ea333d",
      "ec4c55",
      "ef666d",
      "f27f68",
      "f4999e",
      "f7b2b6",
      "f9ccce"
    ];
    var tanggal = $('#tanggalSearch').val();
    console.log(tanggal);
    $.ajax({
      async:false,
      url:'getData',
      type:'get',
      dataType:'json',
      data:{date: tanggal},
      success: function(response){
        dataMap = response;
      }
    });

    $.ajax({
      async:false,
      url:'getPositif',
      type:'get',
      dataType:'json',
      data:{date: tanggal},
      success: function(response){
        dataPos = response;
      }
    });

    var map = L.map('map');
    map.setView(new L.LatLng(-8.374187,115.172922), 10);
  
    var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
      maxZoom: 17,
      attribution: 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
      opacity: 0.90
    });
    OpenTopoMap.addTo(map);
    var defStyle = {opacity:'1',color:'#000000',fillOpacity:'0',fillColor:'#CCCCCC'};
    setMapAttr();
    // var m = L.marker([-8.500410, 115.195839]).bindLabel('A sweet static label!', { noHide: true })
    //  .addTo(map)
    //  .showLabel();

    function setMapAttr(){
      var markerIcon = L.icon({
        iconUrl: 'mar.png',
        iconSize: [40, 40],
      });
      
      var kmzParser = new L.KMZParser({
          
          onKMZLoaded: function (kmz_layer, name) {
            
              control.addOverlay(kmz_layer, name);
              var markers = L.markerClusterGroup();
              var layers = kmz_layer.getLayers()[0].getLayers();
              console.log(layers[0]);
              layers.forEach(function(layer, index){
                var kab  = layer.feature.properties.NAME_2;
                var kec =  layer.feature.properties.NAME_3;
                var kel = layer.feature.properties.NAME_4;
                var data;
              
                var STYLE = {opacity:'1',color:'#000',fillOpacity:'1'};
                var HIJAU_MUDA = {opacity:'1',color:'#000',fillOpacity:'1', fillColor:'#79E68A'};
                var HIJAU_TUA = {opacity:'1',color:'#000',fillOpacity:'1', fillColor:'#157F25'};
                var KUNING = {opacity:'1',color:'#000',fillOpacity:'1', fillColor:'#FCFC4A'};
                var MERAH_MUDA = {opacity:'1',color:'#000',fillOpacity:'1', fillColor:'#F58FA1'};
                var MERAH_TUA = {opacity:'1',color:'#000',fillOpacity:'1', fillColor:'#8A0A21'};
                if(!Array.isArray(dataMap) || !dataMap.length == 0){
                // set sub layer default style positif covid
                  // var STYLE = {opacity:'1',color:'#000',fillOpacity:'1',fillColor:'#'+colorMap[index]}; 
                  // layer.setStyle(STYLE);
                    var searchResult = dataMap.filter(function(it){
                      return it.kecamatan.replace(/\s/g,'').toLowerCase() === kec.replace(/\s/g,'').toLowerCase() &&
                              it.kelurahan.replace(/\s/g,'').toLowerCase() === kel.replace(/\s/g,'').toLowerCase();
                    });
                    if(!Array.isArray(searchResult) || !searchResult.length ==0){
                      var item = searchResult[0];
                      if(item.positif == 0 ){
                        layer.setStyle(HIJAU_MUDA);  
                      }else if(item.rawat == 0 && item.positif>0 && item.sembuh >= 0 && item.meninggal >=0){
                        layer.setStyle(HIJAU_TUA);
                      }else if(item.ppln ==1 && item.rawat == 1 && item.positif == 1 && item.tl==0 || item.ppdn ==1 && item.rawat == 1 && item.positif == 1 && item.tl==0){
                        layer.setStyle(KUNING);
                      }else if((item.ppln >1 && item.rawat <= item.ppln && item.sembuh <= item.ppln && item.tl == 0) || (item.ppdn >1 && item.rawat <= item.ppdn && item.sembuh <= item.ppdn && item.tl == 0)  ){
                        layer.setStyle(MERAH_MUDA);
                      }else{
                        layer.setStyle(MERAH_TUA);
                      }
                      data = '<table width="300">';
                      data +='  <tr>';
                      data +='    <th colspan="2">Keterangan</th>';
                      data +='  </tr>';
                    
                      data +='  <tr>';
                      data +='    <td>Kabupaten</td>';
                      data +='    <td>: '+kab+'</td>';
                      data +='  </tr>';              
      
                      data +='  <tr >';
                      data +='    <td>Kecamatan</td>';
                      data +='    <td>: '+kec+'</td>';
                      data +='  </tr>';

                      data +='  <tr>';
                      data +='    <td>Kelurahan</td>';
                      data +='    <td>: '+kel+'</td>';
                      data +='  </tr>';

                      data +='  <tr>';
                      data +='    <td>Level</td>';
                      data +='    <td>: '+item.level+'</td>';
                      data +='  </tr>';

                      data +='  <tr style="color:green">';
                      data +='    <td>Sembuh</td>';
                      data +='    <td>: '+item.sembuh+'</td>';
                      data +='  </tr>';

                      data +='  <tr style="color:blue">';
                      data +='    <td>Dalam Perawatan</td>';
                      data +='    <td>: '+item.rawat+'</td>';
                      data +='  </tr>';

                      data +='  <tr style="color:red">';
                      data +='    <td>Meninggal</td>';
                      data +='    <td>: '+item.meninggal+'</td>';
                      data +='  </tr>';
                    }else{
                      console.log(kel.replace(/\s/g,'').toLowerCase());
                      console.log(kec.replace(/\s/g,'').toLowerCase());
                      data = '<table width="300">';
                      data +='  <tr>';
                      data +='    <th colspan="2">Keterangan</th>';
                      data +='  </tr>';
                    
                      data +='  <tr>';
                      data +='    <td>Kabupaten</td>';
                      data +='    <td>: '+kab+'</td>';
                      data +='  </tr>';              
      
                      data +='  <tr style="color:red">';
                      data +='    <td>Kecamatan</td>';
                      data +='    <td>: '+kec+'</td>';
                      data +='  </tr>';

                      data +='  <tr style="color:red">';
                      data +='    <td>Kelurahan</td>';
                      data +='    <td>: '+kel+'</td>';
                      data +='  </tr>';
                    }
                    
                }else{
                  data = '<table width="300">';
                      data +='  <tr>';
                      data +='    <th colspan="2">Keterangan</th>';
                      data +='  </tr>';
                    
                      data +='  <tr>';
                      data +='    <td>Kabupaten</td>';
                      data +='    <td>: '+kab+'</td>';
                      data +='  </tr>';              
      
                      data +='  <tr style="color:black">';
                      data +='    <td>Kecamatan</td>';
                      data +='    <td>: '+kec+'</td>';
                      data +='  </tr>';

                      data +='  <tr style="color:black">';
                      data +='    <td>Kelurahan</td>';
                      data +='    <td>: '+kel+'</td>';
                      data +='  </tr>';

                      data +='  <tr style="color:black">';
                      data +='    <td>Tidak ada data</td>';
                      data +='  </tr>';
                  layer.setStyle(defStyle);
                }
                layer.bindPopup(data);
                // markers.addLayer(L.marker(getRandomLatLng(map)));
                markers.addLayer( 
                  L.marker(layer.getBounds().getCenter(),{
                    icon: markerIcon
                  }).bindPopup(data)
                );
              });
              map.addLayer(markers);
              kmz_layer.addTo(map);
          }
      });
      kmzParser.load('bali-kelurahan.kmz');
      var control = L.control.layers(null, null, {
          collapsed: true
      }).addTo(map);
      $('.leaflet-control-layers').hide();

    }
  });

</script>


</body>
</html>
