<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID Bali</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="{{asset('css/img/favicon.png')}}" rel="icon">
  <link href="{{asset('css/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('css/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('css/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <link href="{{asset('css/css/style.css')}}" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" class="init">
	
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    
        </script>

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
            <a class="nav-link active" href="/data">Input Data</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/peta">Peta</a>
          </li>

      </button>
    </div>
  </nav>



<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Data Penyebaran Kabupaten {{$data[0]['kabupaten']}}, Kecamatan {{$data[0]['kecamatan']}}, Kelurahan {{$data[0]['kelurahan']}}</h5>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead style="text-align: center">
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
                    <tbody style="text-align: center">
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
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="/data/{{$item->id}}/edit" method="GET">
                                    <button class="btn btn-success" type="submit">
                                        Edit
                                    </button>
                                </form>
                                <form action="/data/{{$item->id}}/" method="POST">
                                    @method("DELETE")
                                    @csrf
                                    <button class="btn btn-efault" type="submit">
                                        Delete
                                    </button>

                                </form>
                              </div>
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
</body>
</html>