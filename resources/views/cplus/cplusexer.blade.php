
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
               
                                    <a id="navbarDropdown"  class="right-arrow pull-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="caret"></span>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
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
                                 <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Material</span> <img  alt="" /> </a> </li>
                                 <li> <a href="#"><img class="h-i" src="a/images/help-icon.png" alt="" /> Examples </a> </li>
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href={{url('index')}}>BACK CLA</a></li>
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

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>CLA</title>




  <link rel="shortcut icon" href="b/ci-icon.ico" />



  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">








  <link rel="stylesheet" href="b/css/citheme.css" type="text/css" />



  <link rel="index" title="Index" href="../genindex.html" />
  <link rel="search" title="Search" href="../search.html" />
  <link rel="top" title="CodeIgniter 3.1.11 documentation" href="../index.html" />
  <link rel="next" title="Getting Started With CodeIgniter" href="getting_started.html" />
  <link rel="prev" title="Troubleshooting" href="../installation/troubleshooting.html" />

  <link rel="stylesheet" type="text/css" href="{!! asset('css/w3schools26.css') !!}">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div id="nav">
    <div id="nav_inner">



      <div id="pulldown-menu" class="ciNav">
        <ul class="current">
          <li class="current toctree-l1"><a class="current reference internal" href="#">Welcome to C++</a></li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('cplus.cplustutor')}}">C++ Tutorial</a>
            <ul>

              <li class="toctree-l2 "><a class=" reference internal" href="#">C++ Syntax</a></li>
              <li class="toctree-l2"><a class="reference internal" href="">C++ Output</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Comments</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Variables</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ User Input</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Data Types</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Operators</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ String</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Math</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Booleans</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Condition</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Switch</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ While Loop</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ For Loop</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Break/Continue</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Array</a></li>

            </ul>
          </li>
        </ul>
        <ul class="">
          <li class="toctree-l1 "><a class=" reference internal" href="{{url('cplus.cplusfunc')}}">C++ Function</a>
            <ul>
              <li class="toctree-l2 "><a class=" reference internal" href="{{url('cplus.cplusfunc')}}">C++ Function</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Function Parameters</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Function Overloading</a></li>

            </ul>
          </li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('cplus.cplusclasses')}}">C++ Classes</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ OOP</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Classes/Method</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Method</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Constructors</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Access Specifiers</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Encapsulaton</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Inheritance</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Polymorphism</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Files</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Exceptions</a></li>

            </ul>
          </li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('cplus.cplusexample')}}">C++ Example</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="{{url('cplus.cplusexample')}}">C++ Example</a></li>

            </ul>
          </li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('cplus.cplusexer')}}">C++ Exercise</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="{{url('cplus.cplusexer')}}">C++ Exercise</a></li>

            </ul>
          </li>
        </ul>

      </div>

    </div>
  </div>
  <div id="nav2">
    <a href="#" id="openToc">
      <img src="data:image/jpeg;base64,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" title="Toggle Table of Contents" alt="Toggle Table of Contents" />
    </a>
  </div>

  <div class="wy-grid-for-nav">


    <nav data-toggle="wy-nav-shift" class="wy-nav-side">
      <div class="wy-side-nav-search">

        <a href="../index.html" class="fa fa-home"> C++</a>


        <div role="search">
          <form id="rtd-search-form" class="wy-form" action="../search.html" method="get">
            <input type="text" name="q" placeholder="Search docs" />
            <input type="hidden" name="check_keywords" value="yes" />
            <input type="hidden" name="area" value="default" />
          </form>
        </div>
      </div>

      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">



        <ul class="">
          <li class=" toctree-l1"><a class=" reference internal" href="#">Welcome to C++</a></li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('cplus.cplustutor')}}">C++ Tutorial</a>
            <ul>

              <li class="toctree-l2 "><a class=" reference internal" href="#">C++ Syntax</a></li>
              <li class="toctree-l2"><a class="reference internal" href="">C++ Output</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Comments</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Variables</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ User Input</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Data Types</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Operators</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ String</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Math</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Booleans</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Condition</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Switch</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ While Loop</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ For Loop</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Break/Continue</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Array</a></li>

            </ul>
          </li>
        </ul>
        <ul class="">
          <li class=" toctree-l1 "><a class="  reference internal" href="{{url('cplus.cplusfunc')}}">C++ Function</a>
            <ul>
              <li class=" toctree-l2 "><a class="  reference internal" href="{{url('cplus.cplusfunc')}}">C++ Function</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Function Parameters</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Function Overloading</a></li>

            </ul>
          </li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('cplus.cplusclasses')}}">C++ Classes</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ OOP</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Classes/Method</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Method</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Constructors</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Access Specifiers</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Encapsulaton</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Inheritance</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Polymorphism</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Files</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">C++ Exceptions</a></li>

            </ul>
          </li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('cplus.cplusexample')}}">C++ Example</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="{{url('cplus.cplusexample')}}">C++ Example</a></li>

            </ul>
          </li>
        </ul>
        <ul class="current">
          <li class="current toctree-l1"><a class="current reference internal" href="{{url('cplus.cplusexer')}}">C++ Exercise</a>
            <ul>
              <li class="current toctree-l2"><a class="current reference internal" href="{{url('cplus.cplusexer')}}">C++ Exercise</a></li>

            </ul>
          </li>
        </ul>

      </div>
      &nbsp;
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">


      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="../index.html">C++</a>
      </nav>



      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
            <ul class="wy-breadcrumbs">
              <li><a href="../index.html">Docs</a> &raquo;</li>

              <li>Exercise</li>
              <li class="wy-breadcrumbs-aside">

              </li>
              <div style="float:right;margin-left:5px;" id="closeMe">
                <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
              </div>
            </ul>
            <hr />
          </div>

          <div>

          </div>



          <footer>

            <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">

              <a href="getting_started.html" class="btn btn-neutral float-right" title="Getting Started With CodeIgniter">Next <span class="fa fa-arrow-circle-right"></span></a>


              <a href="../installation/troubleshooting.html" class="btn btn-neutral" title="Troubleshooting"><span class="fa fa-arrow-circle-left"></span> Previous</a>

            </div>


            <hr />

            Built with <a href="http://sphinx-doc.org/">Sphinx</a> using a <a href="https://github.com/snide/sphinx_rtd_theme">theme</a> provided by <a href="https://readthedocs.org">Read the Docs</a>.

          </footer>
        </div>
      </div>

    </section>

  </div>





  <script type="text/javascript">
    var DOCUMENTATION_OPTIONS = {
      URL_ROOT: '../',
      VERSION: '3.1.11',
      COLLAPSE_INDEX: false,
      FILE_SUFFIX: '.html',
      HAS_SOURCE: false
    };
  </script>
  <script type="text/javascript" src="b/jquery.js"></script>
  <script type="text/javascript" src="b/underscore.js"></script>
  <script type="text/javascript" src="b/doctools.js"></script>





  <script type="text/javascript" src="b/js/theme.js"></script>




  <script type="text/javascript">
    jQuery(function() {
      SphinxRtdTheme.StickyNav.enable();
    });
  </script>


</body>

</html>