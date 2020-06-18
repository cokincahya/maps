<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>COVID Bali</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

  <!-- Favicons -->
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

  <!-- Main Stylesheet File -->
   <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> -->
  <link href="{{asset('css/css/style.css')}}" rel="stylesheet">

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
            <a class="nav-link" href="/">Peta</a>
          </li>

      </button>
    </div>
  </nav>


<br>
<br>
<div class="container">
    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Edit Data Penyebaran Covid </h5>
                <form action="/data/{{$data->id}}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah PP-LN</label>
                    <input type="number" class="form-control" name="ppln" placeholder="{{$data->ppln}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah PP-DN</label>
                    <input type="number" class="form-control" name="rawat" placeholder="{{$data->ppdn}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah TL</label>
                    <input type="number" class="form-control" name="tl" placeholder="{{$data->tl}}">
                </div> 
                 <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Lainnya</label>
                    <input type="number" class="form-control" name="lainnya" placeholder="{{$data->lainnya}}">
                </div>                              
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Sembuh</label>
                <input type="number" class="form-control" name="sembuh" value="{{$data->sembuh}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah dalam Perawatan</label>
                    <input type="number" class="form-control" name="rawat" value="{{$data->rawat}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Meninggal</label>
                    <input type="number" class="form-control" name="meninggal" value="{{$data->meninggal}}">
                </div>
                
                <input type="submit" value="submit" class="btn btn-primary">    
              </form>
                </div>
              </div> 
        </div>
    </div>
</div>
</body>
</html>
