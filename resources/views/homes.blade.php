<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>COVID Bali</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('css/img/favicon.png')}}" rel="icon">
  <link href="{{asset('css/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> -->

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

  <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <!-- Leaflet (JS/CSS) -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://pendataan.baliprov.go.id/assets/frontend/map/MarkerCluster.css" />
  <link rel="stylesheet" href="https://pendataan.baliprov.go.id/assets/frontend/map/MarkerCluster.Default.css" />
  <!-- Leaflet-KMZ -->
  <script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>



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
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/data-kabupaten">Input Data</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="/peta">Peta</a>
          </li>
          

          <!-- <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span> -->
      </button>
    </div>
  </nav>

<div class="container">
<div class="row pt-2">
  <div class="col-12">
    <br>
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
  </div>
</div>
<hr>
<div class="row mt-3">
  <div class="col-12">
    <h3>Tanggal {{$tanggalSekarang}}</h3>
  </div>
</div>
            <div class ="row">

              <div class="icon-box section-b2">
                <div class="icon-box-icon">

                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Positif</h4>
                  </div>
                  <div class="icon-box-content">
                      <h2>{{$totalPositif[0]->positif}}  Orang</h2>
                  </div>
                </div>
              </div>
                      
              <div class="icon-box section-b2">
                <div class="icon-box-icon">

                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Sembuh</h4>
                  </div>
                  <div class="icon-box-content">
                      <h2>{{$totalSembuh[0]->sembuh}}  Orang</h2>
                  </div>
                </div>
              </div>

              <div class="icon-box section-b2">
                <div class="icon-box-icon">

                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Dirawat</h4>
                  </div>
                  <div class="icon-box-content">
                      <h2>{{$totalDirawat[0]->dirawat}}  Orang</h2>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">

                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Meninggal</h4>
                  </div>
                  <div class="icon-box-content">
                      <h2>{{$totalMeninggal[0]->meninggal}}  Orang</h2>
                  </div>
                </div>
              </div>

            </div>

      
<!-- Small boxes (Stat box) -->
<div class="row mt-2">
  <div class="col-12">
    <div class="card card-blue">
      <div class="card-header">
        <h3 class="card-title">Peta Penyebaran Covid Provinsi Bali <strong>{{$tanggalSekarang}}</strong></h3>
      </div>
      
      <div class="card-body no-padding p-0">
        <div class="row">
          <div class="col-12">
            <div class="pad">
              <div id="map" style="height: 500px"></div>
            </div>
          </div>
        </div>

      </div>
      
      <div class="card-footer" style="background: white">
        <div class="row">
          <div class="col-6">
            <p>Color Start:</p>
            <input type="color" value="#E5000D" class="form-control" id="colorStart">
          </div>
          <div class="col-6">
            <p>Color End:</p>
            <input type="color" value="#FFFFFF" class="form-control" id="colorEnd">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12">
            <button class="btn btn-primary form-control" id="btnGenerateColor">Generate Color</button>
          </div>

        </div>
      </div>
    </div>
    
  </div>
</div>


<div class="row mt-2">
  <div class="col-12">

    <div class="card card-maroon">
      <div class="card-header">
        <h3 class="card-title">Covid-19 Provinsi Bali <strong>{{$tanggalSekarang}}</strong></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Kabupaten</th>
              <th>Positif</th>
              <th>Meninggal</th>
              <th>Sembuh</th>
              <th>Dirawat</th>
              {{-- <th>Tanggal</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{ucfirst($item->kabupaten)}}</td>
              <td>{{$item->positif}}</td>
              <td>{{$item->meninggal}}</td>
              <td>{{$item->sembuh}}</td>
              <td>{{$item->dirawat}}</td>
              {{-- <td>{{$item->tanggal}}</td> --}}
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

<script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
<script src="https://pendataan.baliprov.go.id/assets/frontend/map/leaflet.markercluster-src.js"></script>
<script src="http://leaflet.github.io/Leaflet.label/leaflet.label.js" charset="utf-8"></script>
<script type="text/javascript" class="init">
  
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  
</script>
<script>
  $(document).ready(function () {
    var dataMap=null;
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
    console.log(dataMap);

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
    console.log(dataPos);
    
    $('#btnGenerateColor').on('click',function(e){
      var colorStart = $('#colorStart').val();
      var colorEnd = $('#colorEnd').val();
      $.ajax({
        async:false,
        url:'/create-pallete',
        type:'get',
        dataType:'json',
        data:{start: colorStart, end:colorEnd},
        success: function(response){
          colorMap = response;
          setMapColor();
        }
      });
      
    });

    var map = L.map('map');
    map.setView(new L.LatLng(-8.374187,115.172922), 10);

    var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
      maxZoom: 17,
      attribution: 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
      opacity: 0.90
    });

    OpenTopoMap.addTo(map);
    setMapColor();
    // define variables
    var lastLayer;
    var defStyle = {opacity:'1',color:'#000000',fillOpacity:'0',fillColor:'#CCCCCC'};
    var selStyle = {color:'#0000FF',opacity:'1',fillColor:'#00FF00',fillOpacity:'1'};
    
    function setMapColor(){
      var markerIcon = L.icon({
        iconUrl: '/mar.png',
        iconSize: [40, 40],
      });
      var BADUNG,BULELENG,BANGLI,DENPASAR,GIANYAR,JEMBRANA,KARANGASEM,KLUNGKUNG,TABANAN;
      dataPos.forEach(function(value,index){
        var colorKab = dataPos[index].kabupaten.toUpperCase();
        console.log(colorKab);
        if(colorKab == "BADUNG"){
          BADUNG = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="BANGLI"){
          BANGLI = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        } else if(colorKab=="BULELENG"){
          BULELENG = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="DENPASAR"){
          DENPASAR = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="GIANYAR"){
          GIANYAR = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab =="JEMBRANA"){
          JEMBRANA = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="KARANGASEM"){
          KARANGASEM = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab=="KLUNGKUNG"){
          KLUNGKUNG = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }else if(colorKab =="TABANAN"){
          TABANAN = {opacity:'1',color:'#000',fillOpacity:'1',fillColor: '#'+colorMap[index]};
        }

      });

    // Instantiate KMZ parser (async)
    var kmzParser = new L.KMZParser({
        onKMZLoaded: function (layer, name) {
          control.addOverlay(layer, name);
          var markers = L.markerClusterGroup();
          var layers = layer.getLayers()[0].getLayers();

            // fetching sub layer
          layers.forEach(function(layer, index){
          
          var kab  = layer.feature.properties.NAME_2;
          kab = kab.toUpperCase();
          var prov = layer.feature.properties.NAME_1;
          
          //
          if(!Array.isArray(dataMap) || !dataMap.length == 0 ){
            // set sub layer default style positif covid
            if(kab == 'BADUNG'){
              layer.setStyle(BADUNG);
            }else if(kab == 'BANGLI'){
              layer.setStyle(BANGLI);
            }else if(kab == 'BULELENG'){
              layer.setStyle(BULELENG);
            }else if(kab == 'DENPASAR'){
              layer.setStyle(DENPASAR);
            }else if(kab == 'GIANYAR'){
              layer.setStyle(GIANYAR);
            }else if(kab == 'JEMBRANA'){
              layer.setStyle(JEMBRANA);
            }else if(kab == 'KARANGASEM'){
              layer.setStyle(KARANGASEM);
            }else if(kab == 'KLUNGKUNG'){
              layer.setStyle(KLUNGKUNG);
            }else if(kab == 'TABANAN'){
              layer.setStyle(TABANAN);
            } 


            
            // peparing data format
            var data = '<table width="300">';
                data +='  <tr>';
                data +='    <th colspan="2">Keterangan</th>';
                data +='  </tr>';
              
              
              data +='  <tr>';
              data +='    <td>Kabupaten</td>';
              data +='    <td>: '+kab+'</td>';
              data +='  </tr>';              

              
              data +='  <tr style="color:red">';
              data +='    <td>Positif</td>';
              data +='    <td>: '+dataMap[index].positif+'</td>';
              data +='  </tr>';
              

              data +='  <tr style="color:green">';
              data +='    <td>Sembuh</td>';
              data +='    <td>: '+dataMap[index].sembuh+'</td>';
              data +='  </tr>'; 

              data +='  <tr style="color:black">';
              data +='    <td>Meninggal</td>';
              data +='    <td>: '+dataMap[index].meninggal+'</td>';
              data +='  </tr>';

          
              data +='  <tr style="color:blue">';
              data +='    <td>Dalam Perawatan</td>';
              data +='    <td>: '+dataMap[index].rawat+'</td>';
              data +='  </tr>';               
              
              
            data +='</table>';
    
            if(kab == 'BANGLI'){
              markers.addLayer( 
                L.marker([-8.254251, 115.366936] ,{
                  icon: markerIcon
                }).bindPopup(data).addTo(map)
              );
            }
            else if(kab == 'GIANYAR'){
              markers.addLayer( 
                L.marker([-8.422739, 115.255700] ,{
                  icon: markerIcon
                }).bindPopup(data).addTo(map)
              );

            }else if(kab == 'KLUNGKUNG'){
              markers.addLayer( 
                L.marker([-8.487338, 115.380029] ,{
                  icon: markerIcon
                }).bindPopup(data).addTo(map)
              );

            }else{
              markers.addLayer( 
                L.marker(layer.getBounds().getCenter(),{
                  icon: markerIcon
                }).bindPopup(data).addTo(map)
              );
            }

          }else{
            var data = "Tidak ada Data pada tanggal tersebut"
            layer.setStyle(defStyle);
          }
          layer.bindPopup(data);
        });
        map.addLayer(markers);
        layer.addTo(map);
        }
    });
  
    // Add remote KMZ files as layers (NB if they are 3rd-party servers, they MUST have CORS enabled)
    kmzParser.load('bali-kabupaten.kmz');
    // kmzParser.load('https://raruto.github.io/leaflet-kmz/examples/globe.kmz');

    var control = L.control.layers(null, null, {
        collapsed: false
    }).addTo(map);
    $('.leaflet-control-layers').hide();
    }
  });
</script>


</div>
</div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                

            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('css/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('css/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('css/lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('css/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('css/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('css/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('css/lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('css/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('css/js/main.js')}}"></script>
<!-- <link href="{{asset('css/css/style.css')}}" rel="stylesheet"> -->
</body>
</html>
