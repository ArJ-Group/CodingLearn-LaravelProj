<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>CODING LEARN APPLICATION </title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--enable mobile device-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--fontawesome css-->
   <link rel="stylesheet" href="a/css/font-awesome.min.css">
   <!--bootstrap css-->
   <link rel="stylesheet" href="a/css/bootstrap.min.css">
   <!--animate css-->
   <link rel="stylesheet" href="a/css/animate-wow.css">
   <!--main css-->
   <link rel="stylesheet" href="a/css/style.css">
   <link rel="stylesheet" href="a/css/bootstrap-select.min.css">
   <link rel="stylesheet" href="a/css/slick.min.css">
   <!--responsive css-->
   <link rel="stylesheet" href="a/css/responsive.css">
</head>

<body>
   <header id="header" class="top-head">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-12 left-rs">
                  <div class="navbar-header">
                     <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                     <a href="{{url('index')}}" class="navbar-brand"><img src="a/images/logo.png" alt="" /></a>
                  </div>
                  <form class="navbar-form navbar-left web-sh">
                     <div class="form">
                        <input type="text" class="form-control" placeholder="Search for Code">
                     </div>
                  </form>
               </div>
               <div class="col-md-8 col-sm-12">
                  <div class="right-nav">

                     <div class="login-sr">
                        <div class="login-signup">
                           <ul class="navbar-nav ml-auto">
                              <li class="nav-item dropdown">

                                 <a id="navbarDropdown" class="right-arrow pull-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="caret"></span>
                                    {{ Auth::user()->name }}
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{url('home')}}"> Profile</a>
                                    <a href="{{url('mahasiswa')}}"> College Data</a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       @csrf
                                    </form>
                                    

                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>

                     <div class="help-r hidden-xs">
                        <div class="help-box">
                           <ul>
                              <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Material</span> <img alt="" /> </a> </li>
                              <li> <a href="#"><img class="h-i" src="a/images/help-icon.png" alt="" /> Examples </a> </li>
                           </ul>
                        </div>
                     </div>
                     <div class="nav-b hidden-xs">
                        <div class="nav-box">
                           <ul>
                              <li><a href="{{ url('Home.Home') }}">Tutorial</a></li>
                              <li><a href="{{ route('forum_main')}}">Forum Discussion</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/.container-fluid -->
      </nav>
   </header>
   <!-- Modal -->
   <div class="modal fade lug" id="myModal" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Choose</h4>
            </div>
            <div class="modal-body">
               <ul>
                  <li><a href="{{url('view_apps')}}"><img src="a/images/help-icon.png" alt="" /> Book</a></li>
                  <li><a href="{{url('view_apps')}}"><img src="a/images/help-icon.png" alt="" /> Jobsheet </a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div id="sidebar" class="top-nav">
      <ul id="sidebar-nav" class="sidebar-nav">
         <li><a href="profile.html">Help</a></li>
         <li><a href="howitworks.html">How it works</a></li>
         <li><a href="#">chamb for Business</a></li>
      </ul>
   </div>
   <div class="page-content-product">
      <div class="main-product">
         <div class="container">
            <div class="row clearfix">
               <div class="find-box">
                  <h1>Find your Code Programming<br>Get Easy For Learn Programming</h1>
                  <h4>It has been easier.</h4>
                  <div class="product-sh">
                     <div class="col-sm-6">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row clearfix">
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('htm')}}">
                     <div class="box-img">
                        <h4>HTML</h4>
                        <img src="a/images/a.png" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('java')}}">
                     <div class="box-img">
                        <h4>JAVA</h4>
                        <img src="a/images/b.png" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('cs')}}">
                     <div class="box-img">
                        <h4>CSS</h4>
                        <img src="a/images/c.png" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('sql')}}">
                     <div class="box-img">
                        <h4>SQL</h4>
                        <img src="a/images/d.png" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('j')}}">
                     <div class="box-img">
                        <h4>JS</h4>
                        <img src="a/images/e.png" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('php')}}">
                     <div class="box-img">
                        <h4>PHP</h4>
                        <img src="a/images/f.png" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('ph')}}">
                     <div class="box-img">
                        <h4>PYTHON</h4>
                        <img src="a/images/g.png" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('cplus')}}">
                     <div class="box-img">
                        <h4>C++</h4>
                        <img src="a/images/h.png" alt="" />
                     </div>
                  </a>
               </div>
               <div class="categories_link">
                  <a href="#">Browse all categories here</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="cat-main-box">
      <div class="container">
         <div class="row panel-row">
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="a/images/xpann-icon.jpg" class="icon-small" alt="">
                     <h4>Read Code</h4>
                     <p>Grow easily with CLA. Create free account.
                        We help expanding your business easily.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="a/images/create-icon.jpg" class="icon-small" alt="">
                     <h4>Learn Code</h4>
                     <p>Grow easily with CLA. Create free account.
                        We help expanding your business easily.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="a/images/get-icon.jpg" class="icon-small" alt="">
                     <h4>Apply Code</h4>
                     <p>Grow easily with CLA. Create free account.
                        We help expanding your business easily.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="products_exciting_box">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="exciting_box f_pd">
                  <img src="a/images/exciting_img-01.jpg" class="icon-small" alt="" />
                  <h4>Explore <strong>exciting</strong> and exotic code
                     tailored to you.
                  </h4>
                  <p>L
                  </p>
               </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
               <div class="exciting_box l_pd">
                  <img src="a/images/exciting_img-02.jpg" class="icon-small" alt="" />
                  <h4><strong>Apply your own on</strong> CLA and grow your mind.</h4>
                  <p>L
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="start-free-box">
      <div class="container">
         <div class="row">
            <div class="container">
               <div class="main-start-box">
                  <div class="free-box-a clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="left-a-f">
                           <h3>A platform built for scale & expansion. Start for free.</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="right-a-f">
                           <p>Over the comming years, way thet business through the web
                              works will change at agreat - and chamb is the
                              gamebreaker.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="main-start-box">
               <div class="bg_img_left"><img src="a/images/bg_img1.png" alt="#" /></div>
               <div class="container">
                  <div class="buyer-box clearfix">
                     <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="left-buyer">
                           <img class="img-responsive" src="a/images/creat_pro.png" alt="#" />
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="right-buyer">
                           <h4>buyer</h4>
                           <h2>Empower your factory<br>
                              <span>With a new lead Channel</span>
                           </h2>
                           <p>Never worry about sales or income ftom outbound
                              channels. with chamb your store is directly
                              connected to thousands of interested in your
                              products.
                           </p>
                           <a href="#">Create a buyer account</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="bg_img_right"><img src="a/images/bg_img1.png" alt="#" /></div>
            <div class="main-start-box">
               <div class="container">
                  <div class="supplier clearfix">
                     <div class="col-md-5 col-sm-6">
                        <div class="left-supplier">
                           <h4>supplier</h4>
                           <h2>Grow your store <br><span>With a new sales channel</span></h2>
                           <p>Never worry about sales or income ftom outbound
                              channels. with chamb your store is directly
                              connected to thousands of interested in your
                              products.
                           </p>
                           .
                           <a href="#">Create a supplier account</a>
                        </div>
                     </div>
                     <div class="col-md-7 col-sm-6">
                        <div class="right-supplier">
                           <img class="img-responsive" src="a/images/supplier-pc-img.png" alt="#" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="products">
      <div class="main-products">
         <h2>OUR CODE ON CODING LEARN APPLICATION</h2>
         <div class="product-slidr">
            <div class="slider">
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="a/images/d.png" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>C PROFRAMMING</h4>
                              <p>By <span>Beko</span> under <span>Lights</span></p>
                           </div>
                           <a href="#">VIEW</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                           <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="a/images/e.png" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>JS PROGRAMMING</h4>
                              <p>By <span>Beko</span> under <span>Lights</span></p>
                           </div>
                           <a href="#">VIEW</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                           <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="a/images/f.png" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>PHP PROGRAMMING</h4>
                              <p>By <span>Beko</span> under <span>Lights</span></p>
                           </div>
                           <a href="#">VIEW</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                           <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="a/images/g.png" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>PYTHON PROGRAM</h4>
                              <p>By <span>Beko</span> under <span>Lights</span></p>
                           </div>
                           <a href="#">VIEW</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                           <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="a/images/a.png" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>HTML PROGRAMMING</h4>
                              <p>By <span>Beko</span> under <span>Lights</span></p>
                           </div>
                           <a href="#">VIEW</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                           <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="a/images/b.png" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>JAVA PROGRAMMING</h4>
                              <p>By <span>Beko</span> under <span>Lights</span></p>
                           </div>
                           <a href="#">VIEW</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                           <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="a/images/c.png" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>CSS PROGRAMMING</h4>
                              <p>By <span>Beko</span> under <span>Lights</span></p>
                           </div>
                           <a href="#">VIEW</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                           <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <footer>
      <div class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <p><img width="90" src="a/images/logo.png" alt="#" style="margin-top: -5px;" /> Copyright © 2021 Coding Learn Applicaation</p>
               </div>
               <div class="col-md-4">
                  <ul class="list-inline socials">
                     <li>
                        <a href="">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                     </li>
                  </ul>

               </div>
            </div>
         </div>
      </div>




   </footer>
   <!--main js-->
   <script src="a/js/jquery-1.12.4.min.js"></script>
   <!--bootstrap js-->
   <script src="a/js/bootstrap.min.js"></script>
   <script src="a/js/bootstrap-select.min.js"></script>
   <script src="a/js/slick.min.js"></script>
   <script src="a/js/wow.min.js"></script>
   <!--custom js-->
   <script src="a/js/custom.js"></script>
</body>

</html>