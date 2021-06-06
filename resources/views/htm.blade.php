<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>CODING LEARN APPLICATION</title>
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
   <link rel="stylesheet" href="a/css/jquery-ui.css">
   <!--responsive css-->
   <link rel="stylesheet" href="a/css/responsive.css">
   <link rel="stylesheet" type="text/css" href="{!! asset('landing/css/style2.css') !!}">
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
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       @csrf
                                    </form>
                                    <a href="{{url('mahasiswa')}}"> College Data</a>
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
                              <li><a href="howitworks.html">Tutorial</a></li>
                              <li><a href="productpage.html">References</a></li>
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
               <h4 class="modal-title">Change</h4>
            </div>
            <div class="modal-body">
               <ul>
                  <li><a href="#"><img src="a/images/flag-up-1.png" alt="" /> United States</a></li>
                  <li><a href="#"><img src="a/images/flag-up-2.png" alt="" /> France </a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div id="sidebar" class="top-nav">
      <ul id="sidebar-nav" class="sidebar-nav">
         <li><a href="#">Help</a></li>
         <li><a href="#">How it works</a></li>
         <li><a href="#">Chamb for Business</a></li>
      </ul>
   </div>
   <div class="furniture-box">
      <div class="terms-title">
         <div class="container">
            <div class="row">
               <ol class="breadcrumb">
                  <li><a href="{{url('index')}}">Back</a></li>
                  <li class="active">Coding Learn Application</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="furniture-box">
      <div class="container">
         <div class="row">
            <div class="furniture-main">
               <h2>Coding Learn Application</h2>
               <div class="col-md-3 col-sm-4">
                  <div class="furniture-left">
                     <h3>CLA</h3>
                     <div class="by-box">
                        <h5>By Percentage</h5>
                        <p>
                           <input id="example2" type="range" min="0" max="100" step="10" onchange="textbox2.value = example2.value" />
                           <input id="textbox2" type="text" />
                        </p>
                     </div>
                     <div class="by-com">
                        <h5>By Code</h5>
                        <div class="list-b">
                           <div id="boxscroll">
                              <div class="form-check">
                                 <input id="checkbox1" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox1">
                                    A
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox2" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox2">
                                    B
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox3" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox3">
                                    C
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox4" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox4">
                                    D
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox5" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox5">
                                    E
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox6" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox6">
                                    F
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox7" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox7">
                                    G
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox8" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox8">
                                    H
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox9" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox9">
                                    I
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox10" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox10">
                                    J
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox11" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox11">
                                    K
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox12" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox12">
                                    L
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input id="checkbox13" class="filled-in chk-col-blue" type="checkbox">
                                 <label for="checkbox13">
                                    M
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="left-list-f">
                        <div class="panel-group" id="accordion">
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                                    <div class="right-arrow pull-right"><span class="caret"></span></div>
                                    <a href="#">Sort by</a>
                                 </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse">
                                 <div class="panel-body">Lorem ipsum dolor sit amet,</div>
                              </div>
                           </div>
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
                                    <div class="right-arrow pull-right"><span class="caret"></span></div>
                                    <a href="#">Ships from(country)</a>
                                 </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse">
                                 <div class="panel-body">Lorem ipsum dolor sit amet,</div>
                              </div>
                           </div>
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
                                    <div class="right-arrow pull-right"><span class="caret"></span></div>
                                    <a href="#">Style</a>
                                 </h4>
                              </div>
                              <div id="collapse3" class="panel-collapse collapse">
                                 <div class="panel-body">Lorem ipsum dolor sit amet,</div>
                              </div>
                           </div>
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="panel-title expand">
                                    <div class="right-arrow pull-right"><span class="caret"></span></div>
                                    <a href="#">Pattern type</a>
                                 </h4>
                              </div>
                              <div id="collapse4" class="panel-collapse collapse">
                                 <div class="panel-body">Lorem ipsum dolor sit amet,</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-8">
                  <div class="furniture-middle">
                     <div class="big-box">
                        <div class="big-img-box">
                           <img src="a/images/a.png" alt="#" />
                        </div>
                        <div class="big-dit-b clearfix">
                           <div class="col-md-6">
                              <div class="left-big">
                                 <h3>Code Of CLA,Coding Learn Application</h3>
                                 <p>By <span>Group 2</span> TI <span>2H</span></p>
                                 <div class="prod-btn">
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>

                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="right-big-b">
                                 <div class="tight-btn-b clearfix">
                                    <a class="view-btn" href="#">View</a>

                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row cat-pd">
                        <div class="col-md-6 col-sm-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img src="a/images/cooming-pc.png" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Exercise</h4>
                                    <p>By <span>Group</span> 2 <span>TI 2H</span></p>
                                 </div>
                                 <a href="#" tabindex="0">Exercise</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>

                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img src="a/images/cooming-pc.png" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Tutorial</h4>
                                    <p>By <span>Group</span> 2 <span>TI 2H</span></p>
                                 </div>
                                 <a href="#" tabindex="0">Tutorial</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>

                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Video -->
                     <div class="basic-3 ">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-12">
                                 <h2 style="padding-right: 600px;">Check out the video</h2>

                                 <!-- Video Preview -->
                                 <div class="image-container">
                                    <div class="video-wrapper">
                                       <a class="popup-youtube" href="#" data-effect="fadeIn">
                                          <img class="img-fluid" src="landing/images/video-preview.svg" alt="alternative">
                                          <span class="video-play-button">
                                             <span></span>
                                          </span>
                                       </a>
                                    </div> <!-- end of video-wrapper -->
                                 </div> <!-- end of image-container -->
                                 <!-- end of video preview -->
                              </div> <!-- end of col -->
                           </div> <!-- end of row -->
                        </div> <!-- end of container -->
                     </div> <!-- end of basic-3 -->
                     <!-- end of video -->


                     <div class="col-md-6 col-sm-6">
                        <div class="small-box-c">
                           <div class="small-img-b">
                              <img src="a/images/about-icon-2.png" alt="#" />
                           </div>
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4> Forum Discussion</h4>
                                 <p>By <span>Group</span> 2 <span>TI 2H</span></p>
                              </div>
                              <a href="#" tabindex="0">GO</a>
                           </div>
                           <div class="prod-btn">
                              <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                              <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 hidden-xs">
               <div class="furniture-right">
                  <h3>Subcategories</h3>
                  <div class="right-list-f">
                     <ul>
                        <li><a href="{{url('html.welcomehtml')}}"><img width="32" src="a/images/a.png" alt="" /> Learn HTML</a></li>
                        <li><a href="{{url('html.htmlapi')}}"><img width="32" src="a/images/a.png" alt="#" /> Learn Bootstrap</a></li>
                        <li><a href="{{url('html.htmlexamp')}}"><img width="32" src="a/images/a.png" alt="" /> Learn Colors</a></li>
                        <li><a href="{{url('html.htmlform')}}"><img width="32" src="a/images/a.png" alt="" /> Learn Icons</a></li>
                        <li><a href="{{url('html.htmlgrapic')}}"><img width="32" src="a/images/a.png" alt="" /> Learn Graphics</a></li>
                        <li><a href="{{url('html.htmlmedia')}}"><img width="32" src="a/images/a.png" alt="" /> Learn How To</a></li>
                        <li><a href="{{url('html.htmlreferences')}}"><img width="32" src="a/images/a.png" alt="" /> Learn Sass</a></li>
                        <li><a href="{{url('Run')}}"><img width="32" src="a/images/a.png" alt="" /> Compiler</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="loding-box">
               <a href="#">
                  <div class="sk-wave">
                     <div class="sk-rect sk-rect1"></div>
                     <div class="sk-rect sk-rect2"></div>
                     <div class="sk-rect sk-rect3"></div>
                     <div class="sk-rect sk-rect4"></div>
                     <div class="sk-rect sk-rect5"></div>
                  </div>
                  <span>Loding ...</span>
               </a>
            </div>
         </div>
      </div>
   </div>
   </div>
   <footer>
      <div class="main-footer">
         <div class="container">
            <div class="row">
               <div class="footer-top clearfix">
                  <div class="col-md-2 col-sm-6">
                     <h2>Start a free
                        account today
                     </h2>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-box">
                        <input type="text" placeholder="Enter yopur e-mail" />
                        <button>Continue</button>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="help-box-f">
                        <h4>Question? Call us on 12 34 56 78 for help</h4>
                        <p>Easy setup - no payment fees - up to 100 products for free</p>
                     </div>
                  </div>
               </div>
               <div class="footer-link-box clearfix">
                  <div class="col-md-6 col-sm-6">
                     <div class="left-f-box">
                        <div class="col-sm-4">
                           <h2>SELL ON chamb</h2>
                           <ul>
                              <li><a href="#">Create account</a></li>
                              <li><a href="howitworks.html">How it works suppliers</a></li>
                              <li><a href="pricing.html">Pricing</a></li>
                              <li><a href="#">FAQ for Suppliers</a></li>
                           </ul>
                        </div>
                        <div class="col-sm-4">
                           <h2>BUY ON chamb</h2>
                           <ul>
                              <li><a href="#">Create account</a></li>
                              <li><a href="#">How it works buyers</a></li>
                              <li><a href="#">Categories</a></li>
                              <li><a href="#">FAQ for buyers</a></li>
                           </ul>
                        </div>
                        <div class="col-sm-4">
                           <h2>COMPANY</h2>
                           <ul>
                              <li><a href="about-us.html">About chamb</a></li>
                              <li><a href="#">Contact us</a></li>
                              <li><a href="#">Press</a></li>
                              <li><a href="#">Careers</a></li>
                              <li><a href="#">Terms of use</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="right-f-box">
                        <h2>INDUSTRIES</h2>
                        <ul class="col-sm-4">
                           <li><a href="#">Textiles</a></li>
                           <li><a href="#">Furniture</a></li>
                           <li><a href="#">Leather</a></li>
                           <li><a href="#">Agriculture</a></li>
                           <li><a href="#">Food & drinks</a></li>
                        </ul>
                        <ul class="col-sm-4">
                           <li><a href="#">Office</a></li>
                           <li><a href="#">Decoratives</a></li>
                           <li><a href="#">Electronics</a></li>
                           <li><a href="#">Machines</a></li>
                           <li><a href="#">Building</a></li>
                        </ul>
                        <ul class="col-sm-4">
                           <li><a href="#">Cosmetics</a></li>
                           <li><a href="#">Health</a></li>
                           <li><a href="#">Jewelry</a></li>
                           <li><a href="#">See all here</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
                  <ul class="right-flag">
                     <li><a href="#"><img src="a/images/flag.png" alt="" /> <span>Change</span></a></li>
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
   <script src="a/js/jquery-ui.js"></script>
   <script src="a/js/wow.min.js"></script>
   <!--custom js-->
   <script src="a/js/custom.js"></script>
   <script>
      $(function() {
         $("#slider-range").slider({
            range: true,
            min: 0,
            max: 2000,
            values: [158, 1230],
            slide: function(event, ui) {
               $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
         });
         $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
      });
   </script>
   <script src="a/js/jquery.nicescroll.min.js"></script>
   <script>
      $(document).ready(function() {
         $("#boxscroll").niceScroll({
            cursorborder: "",
            cursorcolor: "#ededed",
            boxzoom: true
         }); // First scrollable DIV
      });
   </script>
</body>

</html>