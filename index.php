<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Web API IMdb</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <style>
    .ig-thumbnail {
      width: 140px;
      height: 140px;
      float: center;
      overflow: hidden;
    }
  </style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Web API</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Kelompok</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Cari Film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Our Studio!</div>
        <div class="intro-heading text-uppercase">Tugas Cloud Computing</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Mulai</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Kelompok</h2>
          <h3 class="section-subheading text-muted">Job desc kelompok Cloud Computing.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4 col-sm-4">
          <span class="fa-stack fa-4x">
            <img src="img\pw.jpg" alt="" class="rounded-circle ig-thumbnail">
          </span>
          <h4 class="service-heading">Rizki Putra Wicaksono</h4>
          <h6 class="service-heading">201653108</h6>
          <p class="text-muted">Programmer | Pembuat Laporan.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <span class="fa-stack fa-4x">
            <img src="img\rat.jpeg" alt="" class="rounded-circle ig-thumbnail">
          </span>
          <h4 class="service-heading">Ratih Zulia Pratiwi</h4>
          <h6 class="service-heading">201653104</h6>
          <p class="text-muted">Pembuat Laporan.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <span class="fa-stack fa-4x">
            <img src="img\gel.jpg" alt="" class="rounded-circle ig-thumbnail">
          </span>
          <h4 class="service-heading">Gilang Ramadhan</h4>
          <h6 class="service-heading">201653095</h6>
          <p class="text-muted">Pembuat Laporan.</p>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-5 col-sm-5 offset-1">
          <span class="fa-stack fa-4x">
            <img src="img\yyn.png" alt="" class="rounded-circle ig-thumbnail">
          </span>
          <h4 class="service-heading">Naning Yuyun</h4>
          <h6 class="service-heading">201653107</h6>
          <p class="text-muted">Pembuat Laporan.</p>
        </div>
        <div class="col-md-5 col-sm-5">
          <span class="fa-stack fa-4x">
            <img src="img\and.jpg" alt="" class="rounded-circle ig-thumbnail">
          </span>
          <h4 class="service-heading">Ahmad Andi Saputro</h4>
          <h6 class="service-heading">201653130</h6>
          <p class="text-muted">Pembuat Laporan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" id="xa">Searching Film</h2>
          <h3 class="section-subheading text-muted" id="sw">Cari Film apapun.</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 ">
          <div class="input-group mb-3" id="x">
            <input type="text" class="form-control" placeholder="Cari Film" id="search-input">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="jajal">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" id="movie-list">
      </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Tentang IMdb.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 offset-1">
          <p>OMdb API adalah Api yang dimiliki oleh IMdb untuk menyambungkan atau mencari data film dari IMdb ke Website yang kita buat melalui Webservice</p>
        </div>
        <div class="col-lg-5 o">
          <center>
            <h1> AJAX </h1>
          </center>
          <code> $.ajax({ </code><br />
          <code> url: 'http://omdbapi.com',</code><br />
          <code>type: 'get',</code> <br />
          <code>dataType: 'json',</code> <br />
          <code> data: {</code><br />
          <code>'apikey': 'dca61bcc', //API KEY dari OMDBAPI</code> <br />
          <code>'s': $('#search-input').val() //id dari inputan</code> <br />
          <code>},</code> <br />
          <code>success: function (result) {</code> <br>
          <code>....</code> <br />
          <code>....</code> <br />
          <code>})</code>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->


  <!-- Clients -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" style="width:75px" src="img/logos/umk.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/si.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->


  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <span class="copyright">Copyright &copy; Cloud Computing Website 2019</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Bootstrap core JavaScript -->

  <script async='async' type='text/javascript' src='jsapi/script.js'></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>