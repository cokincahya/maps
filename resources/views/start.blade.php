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


 <!--  Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('css/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  
  <link href="{{asset('css/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


  <link href="{{asset('css/css/style1.css')}}" rel="stylesheet">

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
      <a class="navbar-brand text-brand" href="/ ">COVID<span class="color-b"> Bali</span></a>
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
            <a class="nav-link" href="/peta">Peta</a>
          </li>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{asset('css/img/slide-dpan.jpg')}})">
        <div class="display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
        
        <div class="col-md-3">
          <div class="card card-stats h-200" style="background-image: radial-gradient(at top left, #f1766d 50%, #f44336 70%);transition-property: `0.90%;opacity: 0.90;">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon text-white">
                Positif
              </div>
            </div>
            <div class="card-body">
              <p class="text-right  text-white">Jumlah</p>
              <h1 class="card-title  text-white">{{$positif[0]->sembuh}} <small>Org</small></h1>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats h-200" style="background-image:  radial-gradient(at top left, #f3b254 50%, #fa9c21 70%);transition-property: `0.90%;opacity: 0.90;">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
              Dalam Perawatan
              </div>
            </div>
            <div class="card-body">
              <p class="text-right text-white">Jumlah</p>
              <h1 class="card-title text-white">{{$rawat[0]->rawat}} <small>Org</small></h1>
            </div> 
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats h-200" style="background-image:  radial-gradient(at top left, #8ee091 50%, #63b266 70%);transition-property: `0.90%;opacity: 0.90;">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                Sembuh
              </div>
            </div>
            <div class="card-body">
              <p class="text-right text-white">Jumlah</p>
              <h1 class="card-title text-white">{{$sembuh[0]->sembuh}} <small>Org</small></h1>
            </div> 
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats h-200" style="background-image:  radial-gradient(at top left, #e4dcdc 50%, #a1a1a1 70%);transition-property: `0.90%;opacity: 0.90;">
            <div class="card-header card-header-default card-header-icon">
              <div class="card-icon">
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
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                   <div class="row mt-4 mb-4">
                    <h1 class="intro-title mb-1">
                     <br>  Data Persebaran   
                    <span class= "color-b">COVID</span>
                    Bali   
                  </h1>
                      <p class="intro-subtitle intro-price">
                      <a href="/data"><span class="price-a">Lihat Data Covid</span></a>

                  </h1>
                      <p class="intro-subtitle intro-price">
                      <a href="/peta"><span class="price-a">Lihat Peta Covid</span></a>
                    </p>
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
