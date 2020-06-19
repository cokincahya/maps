<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID Bali</title>
  <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

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

  <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

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
      <a class="navbar-brand text-brand" >COVID<span class="color-b">  Bali</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          
          
          <li class="nav-item">
            <a class="nav-link active" href="/data">Input Data</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/">Peta</a>
          </li>

      </button>
    </div>
  </nav>

<div class="container mt-4">

  <div class="row pt-2">
      <div class="col-md-12">
        <div class="card-header">
            <div class="card-body">
              <h3 class="card-title">Tambah Data</h3>
              <hr>
              <form action="/data" method="POST">
                @csrf
  

                <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                            <input type="date" name="tgl_data" class="form-control" required>
                        </div>
                    </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kabupaten</label>
                  <select class="form-control" name="kabupaten" >
                    <option value="">Pilih Kabupaten</option>
                    <!-- <option value ="">Pilih Kabupaten</option> -->
                    @foreach ($kabupaten as $item)
                        <option value="{{$item->id}}">{{$item->kabupaten}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kecamatan</label>
                  <select class="form-control" id="carikecamatan" name="kecamatan" >
                    <option value="">Pilih Kecamatan</option>
                    @foreach ($kecamatan as $item)
                        <option value="{{$item->id}}">{{$item->kecamatan}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kelurahan</label>
                  <select class="form-control" id="carikelurahan" name="kelurahan" >
                    <option value="">Pilih Kelurahan</option>
                    @foreach ($kelurahan as $item)
                        <option value="{{$item->id}}">{{$item->kelurahan}}</option>
                    @endforeach                    
                  
                  </select>
                </div> 

<!--                 <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control" style="width: 100%;" name="kecamatan" id="selectKecamatan" required>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kelurahan</label>
                        <select class="form-control" style="width: 100%;" name="kelurahan" id="selectKelurahan" required>
                        </select>
                    </div> --> 
                <div class="form-group">
                    <label for="exampleFormControlInput1">Level</label>
                    <input type="number" class="form-control" name="level" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah PP-LN</label>
                    <input type="number" class="form-control" name="ppln" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah PP-DN</label>
                    <input type="number" class="form-control" name="rawat" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah TL</label>
                    <input type="number" class="form-control" name="tl" placeholder="">
                </div> 
                 <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Lainnya</label>
                    <input type="number" class="form-control" name="lainnya" placeholder="">
                </div>                              
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Sembuh</label>
                    <input type="number" class="form-control" name="sembuh" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Dalam Perawatan</label>
                    <input type="number" class="form-control" name="rawat" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Meninggal</label>
                    <input type="number" class="form-control" name="meninggal" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
      </div>
      
  </div>
  <hr>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Penyebaran</h5>
                        <div class="card-body">
                           <div class="table-responsive">
                            <table id="example" class="table table-hover text-nowrap" >
                    <!-- /.card-header -->
<!--       <div class="card-body">
        <div class="row mt-2"> -->
          
          
<!--           <div class="col-md-6">
            <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label>    
            <span class="input-group-btn">
                <span class="input-group-btn">

                  <button class="btn btn-default" type="submit" href="/cari" method="GET"></i>Search</button>
                </span>
              </span>        
            </div>
          </div> -->

       <!--  <table class="table table-hover text-nowrap"> -->
                    <thead class="thead">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kabupaten</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kelurahan</th>
                        <th scope="col" style="text-align: left">Total</th>
                        <th scope="col" style="text-align: left">Sembuh</th>                     
                        <th scope="col" style="text-align: left">Dirawat</th>
                        <th scope="col" style="text-align: left">Meninggal</th>
                        <th scope="col" style="text-align: left">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($test as $item)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->kabupaten }}</td>
                        <td>{{ $item->kecamatan }}</td>
                        <td>{{ $item->kelurahan }}</td>
                        <td style="text-align: left" >{{ $item->total }}</td>
                        <td style="text-align: left">{{ $item->sembuh }}</td>
                        <td style="text-align: left">{{ $item->rawat }}</td>
                        <td style="text-align: left">{{ $item->meninggal }}</td>
                        <td>
                          <form action="/data/{{$item->id_kelurahan}}" method="GET">
                            <button class="btn-btn-info" type="submit">
                                Detail
                            </button>
                        </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
          </div>
        </div>
                </div>
              </div> 
        </div>
    </div>
</div>
<!--  -->
<script src="https://pendataan.baliprov.go.id/assets/frontend/map/leaflet.markercluster-src.js"></script>
<script type="text/javascript" class="init">
  
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  
</script>


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
</body>
</html>
