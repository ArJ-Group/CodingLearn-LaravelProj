<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Askbootstrap">
   <meta name="author" content="Askbootstrap">
   <title>CODING LEARN APPLICATION </title>
   <!-- Favicon Icon -->
   <link rel="icon" type="image/png" href="a/images/logo.png">
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
      <a class="navbar-brand mr-1" href="index.html">
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
         <!--<li class="nav-item mx-1">
            <a class="nav-link" href="upload.html">
               <i class="fas fa-plus-circle fa-fw"></i>
               Upload Video
            </a>
         </li> -->
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
      <a class="dropdown-item" href="../RegLog/sessionLogout.php" data-toggle="modal" data-target="#logoutModal"><i
         class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
      </div>
   </li>
</ul>
</nav>
<div id="wrapper">
   <!-- Sidebar -->
   <ul class="sidebar navbar-nav">
      <li class="nav-item active">
         <a class="nav-link" href="Home.html">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
         </a>
      </li>


      <li class="nav-item">
         <a class="nav-link" href="../film-page/video-page.html">
            <i class="fas fa-fw fa-video"></i>
            <span>Upcoming Movie Trailer</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cloud-upload-alt"></i>
            <span>Download Video</span>
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
      <a class="nav-link" href="about.html">
         <i class="fas fa-fw fa-history"></i>
         <span> About Us</span>
      </a>
   </li>


</ul>
<div id="content-wrapper">
   <div class="container-fluid pb-0">
      <div class="top-mobile-search">
         <div class="row">
            <div class="col-md-12">
               <form class="mobile-search">
                  <div class="input-group">
                     <input type="text" placeholder="Search for..." class="form-control">
                     <div class="input-group-append">
                        <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="top-category section-padding mb-4">
         <div class="row">
            <div class="col-md-12">
               <div class="main-title">
                  <div class="btn-group float-right right-action">
                     <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">
                     <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                     <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                     <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Rekomendasi</a>
                     <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                     Close</a>
                  </div>
               </div>
               <h6>Code List</h6>
            </div>
         </div>
         <div class="col-md-12">
            <div class="owl-carousel owl-carousel-category">
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/a.png" alt="">
                        <h6>HTML</h6>

                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/b.png" alt="">
                        <h6>Java</h6>
                        
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/c.png" alt="">
                        <h6>CSS</h6>

                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/d.png" alt="">
                        <h6>SQL </h6>

                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/e.png" alt="">
                        <h6>JS</h6>

                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/f.png" alt="">
                        <h6>PHP</h6>

                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/g.png" alt="">
                        <h6>Phyton</h6>

                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/h.png" alt="">
                        <h6>C++</h6>
                        
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/11.png" alt="">
                        <h6>C</h6>

                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/CS.png" alt="">
                        <h6>C#</h6>

                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="category-item">
                     <a href="#">
                        <img class="img-fluid" src="a/images/flutt.png" alt="">
                        <h6>Flutter</h6>       
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <hr>
   <div class="video-block section-padding">
      <div class="row">
         <div class="col-md-12">
            <div class="main-title">
               <div class="btn-group float-right right-action">
                  <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                  Close</a>
               </div>
            </div>
            <h6>Featured Videos</h6>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3 ">
         <div class="video-card">
            <div class=" video-card-image">
               <a class="play-icon" href="../film-page/Film1.html"><i class="fas fa-play-circle"></i></a>
               <a href="../film-page/Film1.html"><img class="img-fluid" src="../img/film1.jpg" alt=""></a>
               <div class="time">60:00</div>
            </div>
            <div class="video-card-body">
               <div class="video-title">
                  <a href="../film-page/Film1.html">Spongebob The Movie 2020 </a>
               </div>
               <div class="video-page text-success">
                  Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
                  data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
               </div>
               <div class="video-view">
                  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
         <div class="video-card">
            <div class="video-card-image">
               <a class="play-icon" href="../film-page/Film2.html"><i class="fas fa-play-circle"></i></a>
               <a href="../film-page/Film2.html"><img class="img-fluid" src="../img/film2.jpg" alt=""></a>
               <div class="time">60:00</div>
            </div>
            <div class="video-card-body">
               <div class="video-title">
                  <a href="../film-page/Film2.html">Avenger Infinity War</a>
               </div>
               <div class="video-page text-success">
                  Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
                  data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
               </div>
               <div class="video-view">
                  111.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
         <div class="video-card">
            <div class="video-card-image">
               <a class="play-icon" href="../film-page/Film3.html"><i class="fas fa-play-circle"></i></a>
               <a href="../film-page/Film3.html"><img class="img-fluid" src="../img/film3.jpg" alt=""></a>
               <div class="time">60:00</div>
            </div>
            <div class="video-card-body">
               <div class="video-title">
                  <a href="../film-page/Film3.html">Frozen II</a>
               </div>
               <div class="video-page text-success">
                  Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
                  data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                  <div class="video-view">
                     1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
         <div class="video-card">
            <div class="video-card-image">
               <a class="play-icon" href="../film-page/Film4.html"><i class="fas fa-play-circle"></i></a>
               <a href="../film-page/Film4.html"><img class="img-fluid" src="../img/film4.jpeg" alt=""></a>
               <div class="time">60:00</div>
            </div>
            <div class="video-card-body">
               <div class="video-title">
                  <a href="../film-page/Film4.html">Maleficent: Mistress of Evil</a>
               </div>
               <div class="video-page text-success">
                  Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
                  data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
               </div>
               <div class="video-view">
                  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
         <div class="video-card">
            <div class="video-card-image ">
               <a class="play-icon" href="../film-page/video-page.html"><i class="fas fa-play-circle"></i></a>
               <a href="../film-page/video-page.html"><img class="img-fluid" src="../img/film5.jpg" alt=""></a>
               <div class="time">00:00</div>
            </div>
            <div class="video-card-body">
               <div class="video-title">
                  <a href="video-page.html">Minion Holiday Special 2020</a>
               </div>
               <div class="video-page text-danger">
                  Cooming Soon Trailer Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
                  data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
               </div>
               <div class="video-view">
                  0 views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
         <div class="video-card">
            <div class="video-card-image">
               <a class="play-icon" href="../film-page/film6.html"><i class="fas fa-play-circle"></i></a>
               <a href="../film-page/film6.html"><img class="img-fluid" src="../img/film6.jpg" alt=""></a>
               <div class="time">60:00</div>
            </div>
            <div class="video-card-body">
               <div class="video-title">
                  <a href="../film-page/Film6.html">Superman Red Son 2020</a>
               </div>
               <div class="video-page text-success">
                  Web-Rip Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
                  data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
               </div>
               <div class="video-view">
                  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
         <div class="video-card">
            <div class="video-card-image">
               <a class="play-icon" href="../film-page/Film7.html"><i class="fas fa-play-circle"></i></a>
               <a href="../film-page/Film7.html"><img class="img-fluid" src="../img/film7.jpg" alt=""></a>
               <div class="time">60:00</div>
            </div>
            <div class="video-card-body">
               <div class="video-title">
                  <a href="../film-page/Film7.html">The Dawn 2019</a>
               </div>
               <div class="video-page text-success">
                  Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
                  data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
               </div>
               <div class="video-view">
                  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
         <div class="video-card">
            <div class="video-card-image">
               <a class="play-icon" href="../film-page/Film8.html"><i class="fas fa-play-circle"></i></a>
               <a href="../film-page/Film8.html"><img class="img-fluid" src="../img/film8.jpg" alt=""></a>
               <div class="time">60:00</div>
            </div>
            <div class="video-card-body">
               <div class="video-title">
                  <a href="../film-page/Film8.html">Clownery 2020</a>
               </div>
               <div class="video-page text-success">
                  Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#"
                  data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
               </div>
               <div class="video-view">
                  1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<hr class="mt-0">
<div class="video-block section-padding">
   <div class="row">
      <div class="col-md-12">
         <div class="main-title">
            <div class="btn-group float-right right-action">
               <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
               Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
               <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
               <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
               <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
               Close</a>
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
            <p class="mt-1 mb-0"><strong class="text-dark">CODING LEARN APPLICATION </strong>.
               <br>
               <small class="mt-0 mb-0"><a class="text-primary" target="_blank"
                  href="https://www.polinema.ac.id/">By Politeknik Negeri Malang</a>
               </small>
            </p>
         </div>
         <div class="col-lg-6 col-sm-6 text-right">
            <div class="app">
               <a href="#"><img alt="" src="../img/googleplay.png"></a>
               <a href="#"><img alt="" src="../img/apps.png"></a>
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