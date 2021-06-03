<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Welcome {{ Auth::user()->name }}</title>

   <!-- Bootstrap -->
   <link href="profile/css/bootstrap.min.css" rel="stylesheet"> <!-- Font Awesome -->
   <link rel="stylesheet" href="profile/css/font-awesome.min.css"> <!-- Font SourceSansPro -->
   <link href='../../../fonts.googleapis.com/css5677.css?family=Source+Sans+Pro:400,700,300,400italic' rel='stylesheet' type='text/css'> <!-- Animations -->
   <link rel="stylesheet" href="profile/css/animate.css">
   <link rel="stylesheet" href="profile/css/magnific-popup.css"> <!-- Stylesheets -->
   <link rel="stylesheet" href="profile/css/styles.css">
   <link rel="stylesheet" href="profile/css/mediaqueries.css"> <!-- Favicons -->
   <link rel="apple-touch-icon" sizes="180x180" href="profile/favicons/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="profile/favicons/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="profile/favicons/favicon-16x16.png">
   <link rel="manifest" href="profile/favicons/manifest.json">
   <link rel="mask-icon" href="profile/favicons/safari-pinned-tab.svg" color="#333333">
   <meta name="theme-color" content="#333333">
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
</head>

<body data-spy="scroll" data-target="#top-menu" data-offset="180">
   <!-- page-overlay -->
   <div id="overlay">
      <div class="loader"></div>
      <h1 class="animated pulse text-right"><b>Welcome</b></h1>
   </div> <!-- /.page-overlay -->
   <!-- fixed borders and fixed contacts -->
   <div class="top-br"></div>
   <div class="right-br"></div>
   <div class="bottom-br"></div>
   <div class="left-br"></div>
   <div class="fixed-left-contact">
      <p> <a href="callto:+1234567890" title="Call me">+123&nbsp;456&nbsp;7890</a>
      <p class="mydiv">bathymetry</p><span class="poll">undersaturated philadelphia</span> </p>
      <p class="classy">mischaracterize</p><span class="bura">babyishness overreflective</span><span class="lehi">stupefacient</span>
   </div>
   <div class="fixed-right-socials">
      <ul class="list-unstiled">
         <li><a href="#" title="Facebook"><i class="fa fa-facebook-official"></i></a>
            <p class="fitz">saxicolous</p><span class="frow">anticlericalism semipractical</span>
         </li>
         <li><a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a>
            <p class="poll">retabulated</p><span class="fitz">bipinnaria thioester</span>
         </li>
         <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
            <p class="libeled">tonsillotomy</p><span class="bura">posthemiplegic multijugate</span>
         </li>
         <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a>
            <p class="sown">proritual</p><span class="lehi">incardinating hagiolatry</span>
         </li>
      </ul>
   </div>
   <!-- /.fixed borders -->
   <!-- NavBar Fixed to top -->
   <nav class="navbar navbar-default animated fadeInDown">
      <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span><span class="divc">bipartisanship</span> <span class="icon-bar"></span>
               <span class="lefty">agitable</span> <span class="icon-bar"></span><span class="coma">nonsuspension</span>
               <span class="icon-bar"></span>

               <p class="sown">supraorbital</p><span class="kiwi">detribalise semipractical</span>
         </div> <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse pull-right" id="top-menu">
            <ul class="nav navbar-nav text-uppercase text-center">

               <li><a href="#section0" class="inset-lnk hvr-underline-from-left">Profile</a>
                  <p class="lefty">unmilitarised</p><span class="fitz">ferrovanadium unsegregated</span>
               </li>
               <li><a href="{{ url('edit') }}" class="inset-lnk hvr-underline-from-left">Change Data</a>
                  <p class="mydiv">inimical</p><span class="libeled">semibouffant tonsillotomy
                  </span>
               </li>

               <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="right-arrow pull-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="caret"></span>
                     {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <b class="fa fa-chevron-circle-right" style="color:grey;"> Logout</b>
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </div>
               </li>

            </ul>
         </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
   </nav>
   <div id="page-content">
      <header class="front-header one-page" id="section0">
         <div class="container">
            <div class="row">
               <div class=" col-sm-6 col-md-4 text-center user-block animated fadeInUp">  <input type="file" name="gambar"  >
                <img src="profile/images/default.png" alt="" class="img-responsive">

                  <h2>Hello <b>{{ $user->username }} </b> </h2>
                  <p class="text-uppercase function"><b>{{ $user->email }}</b></p>
                  <p class="fitz">stupefacient</p><span class="poll">thiobacilli monogyny</span><span class="frow">preobligating</span>
               </div>
               <div class="col-sm-6 col-md-7 user-description">
                  <h2><b>Welcome</b></h2>

                  <h2 class="animated-intro"></h2>

                  <p>Got some nice skills in HTML,CSS,PHP,Javascript,Python,and many more</p>
                  <p class="poll">tonsillotomy</p><span class="sown">prepenetration stipulation</span><span class="sown">ornamental</span>

                  <a href="{{ url('/index') }}" class="btn text-uppercase"><i class="fa fa-chevron-circle-right"></i> Dashboard</a>
                  <p class="poll">overspicing</p><span class="lefty">personifying nondyspeptic</span>
               </div>
            </div>
         </div>
      </header>
   </div>
      
   <script src="profile/js/plugins/jquery-1.12.0.min.js"></script>
   <script src="profile/js/plugins/jquery-ui.min.js"></script><!-- for calendar script-->
   <script src="profile/js/plugins/bootstrap.min.js"></script><!-- bootstrap -->
   <script src="profile/js/plugins/jquery.validate.min.js"></script><!-- form validation -->
   <script src="profile/js/plugins/jquery.fullpage.min.js"></script>
   <script src="profile/js/plugins/bootstrap-portfilter.min.js"></script>
   <script src="profile/js/plugins/jquery.timeline.js"></script><!-- for horizontal animated timeline-->
   <script src="profile/js/plugins/owl.carousel.min.js"></script><!-- for clients & testimonials carousel -->
   <script src="profile/js/plugins/typed.js"></script><!-- animated header text -->
   <script src="profile/js/plugins/wow.min.js"></script><!-- animation on scroll -->
   <script src="profile/js/plugins/jquery.magnific-popup.min.js"></script> <!-- Default functions -->
   <script src="profile/js/functions.js"></script>

</body>
<!-- Mirrored from rt.md/rd/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jun 2021 03:18:01 GMT -->

</html>
</p>
<p class="coma">admiringly</p><span class="bura">unobsolete nonsuspension</span><span class="mydiv">nontheocratical</span></span><span class="libeled">hagiolatry</span></a>
<p class="frow">electively</p><span class="divc">annexationism detoxicated</span>
<!--This HTML was obfuscated in order to prevent copying.!-->