<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="Askbootstrap">
 <meta name="author" content="Askbootstrap">
 <title>CODING LEARN APPLICATION</title>
 <!-- Favicon Icon -->
 <link rel="icon" type="image/png" href="a/img/icon.png">
 <!-- Bootstrap core CSS-->
 <link href="a/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <!-- Custom fonts for this template-->
 <link href="a/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <!-- Custom styles for this template-->
 <link href="a/css/osahan.css" rel="stylesheet">
 <!-- Owl Carousel -->
 <link rel="stylesheet" href="a/owl-carousel/owl.carousel.css">
 <link rel="stylesheet" href="a/owl-carousel/owl.theme.css">
</head>

<body id="page-top">
 <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
  &nbsp;&nbsp;
  <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
   <i class="fas fa-bars"></i>
 </button> &nbsp;&nbsp;
 <a class="navbar-brand mr-1" href="../Home/Home-User.html">
   <div class="logo">
    <img src="a/images/logo.png" style="height: 50px;width: 100px;margin-left: 30px">
  </div>
</a>
<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
 <div class="input-group">
  <input type="text" class="form-control" placeholder="Search for...">
  <div class="input-group-append">
   <button class="btn btn-light" type="button">
    <i class="fas fa-search"></i>
  </button>
</div>
</div>
</form>
<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
 <li class="nav-item mx-1">
  <a class="nav-link" href="#">
   <i class="fas fa-plus-circle fa-fw"></i>
   Upload Video
 </a>
</li>
<li class="nav-item dropdown no-arrow mx-1">
  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-bell fa-fw"></i>
  <span class="badge badge-danger">9+</span>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
</div>
</li>
<li class="nav-item dropdown no-arrow mx-1">
 <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
 aria-haspopup="true" aria-expanded="false">
 <i class="fas fa-envelope fa-fw"></i>
 <span class="badge badge-success">7</span>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
 <div class="dropdown-divider"></div>
 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
</div>
</li>
<li class="nav-item dropdown no-arrow osahan-right-navbar-user">
  <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button"
  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img alt="Avatar" src="../img/icon2.png">
  Admin
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
  <a class="dropdown-item" href="../DLL/account.html"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My
  Account</a>
  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-video"></i> &nbsp;
  Subscriptions</a>
  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i
   class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
 </div>
</li>
</ul>
</nav>

<div id="wrapper">
   <!-- Sidebar -->
   <ul class="sidebar navbar-nav">
      <li class="nav-item ">
         <a class="nav-link" href="../Home/Home-User.html">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item active">
     <a class="nav-link active" href="video-page.html">
        <i class="fas fa-fw fa-video"></i>
        <span>Upcoming Movie Trailer</span>
    </a>
</li>
<li class="nav-item">
 <a class="nav-link" href="#  ">
    <i class="fas fa-fw fa-cloud-upload-alt"></i>
    <span>Upload Video</span>
</a>
</li>
<li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
 aria-expanded="false">
 <i class="fas fa-fw fa-folder"></i>
 <span>Pages</span>
</a>
      <div class="dropdown-menu">
         <h6 class="dropdown-header">Login Screens:</h6>
         <a class="dropdown-item" href="../RegLog/login.html">Login</a>
         <a class="dropdown-item" href="../RegLog/register.html">Register</a>
         <a class="dropdown-item" href="#">Forgot Password</a>
         <div class="dropdown-divider"></div>
         <h6 class="dropdown-header">Other Pages:</h6>
         <a class="dropdown-item" href="../jadwal/jadwal.php">Cooming Soon Movie</a>
         <a class="dropdown-item" href="../DLL/404.html">404 Page</a>
         <a class="dropdown-item" href="../DLL/blank.html">Blank Page</a>

      </div>
   </li>
<li class="nav-item">
  <a class="nav-link" href="../DLL/about.html">
     <i class="fas fa-fw fa-history"></i>
     <span> About Us</span>
 </a>
</li>
</ul>

<div id="content-wrapper">
 <div class="container-fluid pb-0">
  <div class="video-block section-padding">
   <div class="row">
    <div class="col-md-8">
     <div class="single-video-left">
      <div class="single-video">
       <video width="100%" height="315%" src="a/vid/java.m4v" frameborder="5" controls></video>
     </div>
     <div class="single-video-title box mb-3">
       <h2><a href="#">JAVA </a><span title="" data-placement="top"
        data-toggle="tooltip" data-original-title="Verified"><i
        class="fas fa-check-circle text-success"></i></span></h2>

      </div>
      <div class="single-video-info-content box mb-3">
        <h6>Diterbitkan</h6>
        <p>2021</p>
        <h6>Genre </h6>
        <p>Learn</p>
        <h6>Synopsis</h6>
        <p>Bagi Anda yang belum tahu, HTML adalah kepanjangan dari Hypertext Markup Language. Perlu diketahui bawah HTML bukan termasuk bahasa pemrograman, melainkan HTML adalah markup standart yang digunakan dalam menampilkan halaman website. Jadi dengan HTML tidak memiliki kemampuan untuk membuat website yang dinamis, perlu mengkombinasikan dengan bahasa pemrograman web lain.
          Menurut sejarahnya, HTML pertama kali diperkenalkan pada tahun 1990-an. Tim Berners-Lee pada tahun 1989 menciptakan HTML sederhana namun sangat efektif untuk pengkodean dokumen elektronik. Web browser pada zaman itu digunakan untuk membuka dokumen-dokumen dengan format HTML. Pada saat tahun 90-an inilah yang menjadi sejarah lahirnya HTML sehingga dinamakan HTML versi 1.0.</p>
        <h6>Kualitas</h6>
        <p>Blueray</p>
        <h6>Diterbitkan</h6>
        <p>CODING LEARN APPLICATION </p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="single-video-right">
     <div class="row">
      <div class="col-md-12">
       <div class="adblock">
        <div class="a/img">
         Google AdSense<br>
         336 x 280
       </div>
     </div>
     <div class="main-title">
      <div class="btn-group float-right right-action">
       <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
       Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
     </a>
     <div class="dropdown-menu dropdown-menu-right">
       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
       Rated</a>
       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
       Viewed</a>
       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
       &nbsp; Close</a>
     </div>
   </div>
   <h6>Movie Selection</h6>
 </div>
</div>
<div class="col-md-12">
  <div class="video-card video-card-list">
   <div class="video-card-image">
    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
    <a href="video-page.html"><img class="../img-fluid" src="a/images/a.png" alt=""></a>
    <div class="time">00:00</div>
  </div>
  <div class="video-title">
    <a href="{{url('fl.Film1')}}">HTML</a>
  </div>

  <div class="video-page text-danger">
    Trailer Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
    data-original-title="Cooming Soon"><i class="fas fa-frown text-danger"></i></a>
  </div>
  <div class="video-view">
    1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
  </div>
</div>

<div class="video-card video-card-list">
 <div class="video-card-image">
  <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
  <a href="#"><img class="../img-fluid" src="a/images/c.png" alt=""></a>
  <div class="time">60:00</div>
</div>

<div class="video-title">
  <a href="{{url('fl.Film3')}}">CSS</a>
</div>
<div class="video-page text-success">
  Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
  data-original-title="Verified"><i
  class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
</div>
</div>

<div class="video-card video-card-list">
 <div class="video-card-image">
  <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
  <a href="#"><img class="../img-fluid" src="a/images/d.png" alt=""></a>
  <div class="time">60:00</div>
</div>

<div class="video-title">
  <a href="{{url('fl.Film4')}}">SQL</a>
</div>
<div class="video-page text-success">
  Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
  data-original-title="Verified"><i
  class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
</div>
</div>

<div class="video-card video-card-list">
 <div class="video-card-image">
  <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
  <a href="#"><img class="../img-fluid" src="a/images/e.png" alt=""></a>
  <div class="time">60:00</div>
</div>

<div class="video-title">
  <a href="{{url('fl.Film5')}}">JS</a>
</div>
<div class="video-page text-success">
  Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
  data-original-title="Verified"><i
  class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
</div>
</div>
<div class="video-card video-card-list">
 <div class="video-card-image">
  <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
  <a href="#"><img class="../img-fluid" src="a/images/f.png" alt=""></a>
  <div class="time">60:00</div>
</div>

<div class="video-title">
  <a href="{{url('fl.Film6')}}">PHP</a>
</div>
<div class="video-page text-success">
  Web-Rip Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
  data-original-title="Verified"><i
  class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
</div>
</div>
<div class="video-card video-card-list">
 <div class="video-card-image">
  <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
  <a href="#"><img class="../img-fluid" src="a/images/g.png" alt=""></a>
  <div class="time">60:00</div>
</div>

<div class="video-title">
  <a href="{{url('fl.Film7')}}">PHYTON</a>
</div>
<div class="video-page text-success">
 Blueray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
 data-original-title="Verified"><i
 class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
 1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
</div>
</div>

<div class="video-card video-card-list">
  <div class="video-card-image">
   <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
   <a href="#"><img class="../img-fluid" src="a/images/h.png" alt=""></a>
   <div class="time">60:00</div>
 </div>

 <div class="video-title">
   <a href="{{url('fl.Film8')}}">C++</a>
 </div>
 <div class="video-page text-success">
  Blueray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
  data-original-title="Verified"><i
  class="fas fa-check-circle text-success"></i></a>
</div>
<div class="video-view">
  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
</div>
</div>
</div>
<div class="adblock mt-0">
  <div class="../img">
   Google AdSense<br>
   336 x 280
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
<!-- /.container-fluid -->
<!-- Sticky Footer -->
<footer class="sticky-footer" >
 <div class="container" >
  <div class="row no-gutters" >
   <div class="col-lg-6 col-sm-6" >
    <p class="mt-1 mb-0"><strong class="text-dark">Copyright By ArJ Movie 2020</strong>.
     <br>
     <small class="mt-0 mb-0"><a class="text-primary" target="_blank"
      href="https://www.polinema.ac.id/">By Politeknik Negeri Malang</a>
    </small>
  </p>
</div>
<div class="col-lg-6 col-sm-6 text-right">
  <div class="app">
   <a href="#"><img alt="" src="a/img/googleplay.png"></a>
   <a href="#"><img alt="" src="a/img/apps.png"></a>
 </div>
</div>
</div>
</div>
</footer>
</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
 <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
 <div class="modal-content">
  <div class="modal-header">
   <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.
</div>
<div class="modal-footer">
 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
 <a class="btn btn-primary" href="../RegLog/sessionLogout.php">Logout</a>
</div>
</div>
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="a/jquery/jquery.min.js"></script>
<script src="a/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="a/jquery-easing/jquery.easing.min.js"></script>
<!-- Owl Carousel -->
<script src="a/owl-carousel/owl.carousel.js"></script>
<!-- Custom scripts for all pages-->
<script src="a/js/custom1.js"></script>
</body>

</html>