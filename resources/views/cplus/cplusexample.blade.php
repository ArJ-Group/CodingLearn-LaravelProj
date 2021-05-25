
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

<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->

<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>CLA</title>




  <link rel="shortcut icon" href="b/ci-icon.ico" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{!! asset('css/w3schools26.css') !!}">








  <link rel="stylesheet" href="b/css/citheme.css" type="text/css" />



  <link rel="index" title="Index" href="../genindex.html" />
  <link rel="search" title="Search" href="../search.html" />
  <link rel="top" title="CodeIgniter 3.1.11 documentation" href="../index.html" />
  <link rel="next" title="Benchmarking Class" href="benchmark.html" />
  <link rel="prev" title="PHP Style Guide" href="../general/styleguide.html" />


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
      <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAARgAA/+4ADkFkb2JlAGTAAAAAAf/bAIQABAMDAwMDBAMDBAYEAwQGBwUEBAUHCAYGBwYGCAoICQkJCQgKCgwMDAwMCgwMDQ0MDBERERERFBQUFBQUFBQUFAEEBQUIBwgPCgoPFA4ODhQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQU/8AAEQgAKwCaAwERAAIRAQMRAf/EAHsAAQAABwEBAAAAAAAAAAAAAAABAwQFBgcIAgkBAQAAAAAAAAAAAAAAAAAAAAAQAAEDAwICBwYEAgsAAAAAAAIBAwQAEQUSBiEHkROTVNQWGDFBUVIUCHEiMtOUFWGBobHRQlMkZIRVEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDSC+ygkOOaUoKigUCgUCgUCgUCgUCgUCgUCgkuGguIP9FBMFb0Hqg7We+3jlmIqqYFf4ub+/QYlnOR/LqIBKGFUbf8qWv971BytQXXE7Y3Lnm3HsFhp2TaZJAdchRXpIgSpdEJWxJEW3xoKV7F5OMy7JkQn2o7D6w33XGjEAkoiqrJEqIiOIiKuhePCgqp22dyYyS3CyWHnQ5joG61HkRnmnTbaFSMhExRVQRRVJU9iUHjE7ez+fJ0MFipmUNhBV8YUd2SoIV9KkjQla9ltegttBdPLW4/qocL+UTfrMiHW4+P9M71shuyrqaHTcxsl7jegpsji8nh5ZwMvDfgTm0RTjSmjYdFCS6KoOIipdFunCgmNYTMv457MMY6U7iI6oMieDDhRm1VbIhuoOkbqtuK0Hpzb+eZcYZexUxt6UyUqK2cd0SdjtgrhOgijcgERUlJOCIl6CpgbP3blRI8XgMjNARAyKNDfeRBdFDBVUAXgQrqH4pxoJTu2NysY97LP4ac1io5q1InHFeGO24LnVKJuKOkSQ/yKir+rh7aCLG1dzypZQI2FnvTgccYOM3FeN0XWERXAUEFVQgQkUktdLpegm+Td3/Xli/L+S/mYNJIOF9G/wBeLKrZHFb0akG6W1WtQWSg3Dyg5e7V3fipE3O4/wCrktyzYA+ufas2LbZIlmnAT2kvuoN1wft95augilglX/tzP3qCu9O3LL/wV/i5v79BvmTADq14UGu91467Z6U9y0HzH/ncj/U/sT/CgynZG7I2NezpZGUjIycJkYkZSG+uQ81pbBNKLxJfjwoMqZ3/ALYHl35AJ7/cuwHcu5k7r1Q5pHetBjquqVVJWGxj9Zrtcl/Ggy3dHMvauR3HFZj5nHNxSyW5JISYDMoIwx8tFIGHZhPNaykGapr6rUAiicEoMG21lMRj8buPAz8xhJrr7uOeiPTCyAwXUaGR1mgozbTusOsFLEiJ7fbQa/h7gcjy2H3V6xppwDNtUSxCJIqp7valBuWVzJ22xuCROXNNZiJkMtms0DbjUkAZjzoDrTMd9dDRI44ZC2YsrYdKWP2WDT2S3N9dNdlRYrGMYc06IURXSYb0igrpWS485xVNS6nF4rwslkoMwnbpgZLB7bmt5uMweAhDEl4B5uSLzzqTnnyVpW2jaJHRMSIjdDiiotvy3DOE5rYTEbkl5yFn28k7JyG4c7AU2HtLH1uKfaiMPI40CdYbpNtmLdwTSn5rewLNld+7TLdeal4WarWBkbVKBjgdElMJJwAAY5fl4kB3b1fp4XvagsGS3FjJfLzDNtS8aeXx7LzT7TyzByQE5PccRGRC0ZRUDRV6y62vbjagzLmJzS2vuPK43JY6aP1TW6Jz+RIWyFtyC06y3EkiiinAo7YCqfq1AqqnGgsOH3lhZO8d1pmcpB8j5XIm9OYlBJSQ/FSS4427DKO0RC8AlcEMhFdViRR1WDWR5t3WXVuL1d106kG9vdeye2g60+1FDyW0shIcXVpyroXt8I8dfd+NB1vioAdWnD3UF1+gD4UFc6CEKpagxXN43rwJLUHz7yX2c8zokt9uHlsPIhA4aRnnHJTLptIS6CNsY7iASpxUUMkReGpfbQW0vtN5pitvrsN28rwtBD0nc0+/Yft5XhaB6TuaXfsP28rwtA9J3NPv2H7eV4Wgek7mn37D9vK8LQPSdzT79h+3leFoHpO5pd+w/byvC0D0nc0u/Yft5XhaB6TuaXfsP28rwtA9J3NLv2H7eV4Wgek7ml37D9vK8LQPSdzS79h+3leFoHpO5p9+w/byvC0E9r7Reazy2HIYVPxkS/CUHVn26cosxyv2g7h89LYmZSXOenvLEQ1YaQ222RATcQCP8rSGqqA8S02W2pQ6FhMoAIlqCtsnwoCpdKClejI4i3Sgtb+GBxVuNBSFt1pV/RQefLjPyUDy4z8lA8uM/JQPLjPyUDy4z8lA8uM/JQPLjPyUDy4z8lA8uM/JQPLjPyUDy4z8lA8utJ/koJ7WCbBU/LQXOPAFq1koK8B0pag90CggtBBf6qB0UDooHRQOigdFA6KB0UDooHRQOigdFA6KB0UDooI0EaBQf//Z" title="Toggle Table of Contents" alt="Toggle Table of Contents" />
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
        <ul class="current">
          <li class="current toctree-l1"><a class="current reference internal" href="{{url('cplus.cplusexample')}}">C++ Example</a>
            <ul>
              <li class="current toctree-l2"><a class="current reference internal" href="{{url('cplus.cplusexample')}}">C++ Example</a></li>

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
              <li><a href="../index.html">C++</a> &raquo;</li>

              <li>Examples</li>
              <li class="wy-breadcrumbs-aside">

              </li>
              <div style="float:right;margin-left:5px;" id="closeMe">
                <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
              </div>
            </ul>
            <hr />
          </div>
          <div role="main" class="document">

            <h1>C++ <span class="color_h1">Examples</span></h1>
            <div class="w3-clear nextprev">

            </div>
            <hr>

            <h2>C++ Syntax</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_helloworld">
                Create a simple "Hello World" program</a>
            </div>
            <a href="cpp_syntax.asp" class="ws-btn w3-margin-top">Syntax Explained</a>
            <hr>

            <h2>C++ Output/Print</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_output">
                Use cout to output values/print text</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_output2">
                Using many cout objects</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_output3">
                Insert a new line with \n</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_output5">
                Insert a new line with endl</a>
            </div>
            <a href="cpp_output.asp" class="ws-btn w3-margin-top">Output Explained</a>
            <hr>

            <h2>C++ Comments</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_single_comment">
                Single-line comment before a line of code</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_single_comment_end">
                Single-line comment at the end of a line of code</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_multi_comment">
                Multi-line comment</a>
            </div>
            <a href="cpp_comments.asp" class="ws-btn w3-margin-top">Comments Explained</a>
            <hr>

            <h2>C++ Variables</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_variables_int">
                Create an integer variable</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_variables_int2">
                Create a variable without assigning the value, and assign the value later</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_variables_int3">
                Assign a new value to an existing value (this will overwrite the previous value)</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_variables_const">
                Create an unchangeable variable with the const keyword</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_variables_display">
                Combine text and a variable on print</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_variables_add">
                Add a variable to another variable</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_variables_many">
                Declare many variables of the same type with a comma-separated list</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_variables_identifiers">
                Identifiers</a>
            </div>
            <a href="cpp_variables.asp" class="ws-btn w3-margin-top">Variables Explained</a>
            <hr>

            <h2>C++ User Input</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="showcpp.asp?filename=demo_user_input">
                Input a number and print the result</a>
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="showcpp.asp?filename=demo_user_input2">
                Input two numbers and print the sum</a>
            </div>
            <a href="cpp_user_input.asp" class="ws-btn w3-margin-top">User Input Explained</a>
            <hr>

            <h2>C++ Data Types</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_data_types">
                A demonstration of different data types</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_data_type_int">
                Create an int type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_data_type_float">
                Create a float type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_data_type_double">
                Create a double type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_boolean">
                Create boolean types</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_data_type_char">
                Create a char type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_strings">
                Create a string type</a>
            </div>
            <a href="cpp_data_types.asp" class="ws-btn w3-margin-top">Data Types Explained</a>
            <hr>
            <div id="midcontentadcontainer" style="overflow:auto;text-align:center" bis_skin_checked="1">
              <!-- MidContent -->
              <!-- <p class="adtext">Advertisement</p> -->

              <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
              <div id="snhb-mid_content-0" bis_skin_checked="1" data-google-query-id="CPua6Iusr_ACFcKIjwodarkKuw" style="display: none;">
                <div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" bis_skin_checked="1" style="border: 0pt none; width: 728px; height: 90px;"></div>
              </div>

            </div>
            <hr>

            <h2>C++ Operators</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_oper">
                Addition operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_oper_increment">
                Increment operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_oper_assignment1">
                Assignment operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_oper_assignment2">
                Addition assignment operator</a>
            </div>
            <a href="cpp_operators.asp" class="ws-btn w3-margin-top">Operators Explained</a>
            <hr>

            <h2>C++ Strings</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_strings">Create a string</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_strings_concat">String concatenation</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_strings_length">String length</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_strings_access">Access string characters</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_strings_change">Change string characters</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="showcpp.asp?filename=demo_strings_getline">User input strings</a>
            </div>
            <a href="cpp_strings.asp" class="ws-btn w3-margin-top">Strings Explained</a>
            <hr>

            <h2>C++ Math</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_math_max">Find the highest value of two numbers</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_math_min">Find the lowest value of two numbers</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_math_cmath">Use the cmath header file for other math functions</a>
            </div>
            <a href="cpp_math.asp" class="ws-btn w3-margin-top">Math Explained</a>
            <hr>

            <h2>C++ Booleans</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_boolean">Boolean values</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_boolean2">Compare two values</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_boolean1">Compare two variables</a>
            </div>
            <a href="cpp_booleans.asp" class="ws-btn w3-margin-top">Booleans Explained</a>
            <hr>

            <h2>C++ If...Else (Conditions)</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_if">
                The if statement</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_if_else">
                The else statement</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_if_else_if">
                The else if statement</a>
            </div>
            <a href="cpp_conditions.asp" class="ws-btn w3-margin-top">If...Else Explained</a>
            <hr>

            <h2>C++ Switch</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_switch">
                The switch statement</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_switch_default">
                The switch statement with a default keyword</a>
            </div>
            <a href="cpp_switch.asp" class="ws-btn w3-margin-top">Switch Explained</a>
            <hr>

            <h2>C++ Loops</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_while_loop">
                While loop</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_do_while_loop">
                Do while loop</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_for_loop">
                For loop</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_break">
                Break a loop</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_continue">
                Continue a loop</a>
            </div>
            <a href="cpp_while_loop.asp" class="ws-btn w3-margin-top">Loops Explained</a>
            <hr>

            <h2>C++ Arrays</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_array">
                Create and access an array</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_array_change">
                Change an array element</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_array_loop">
                Loop through an array</a>
            </div>
            <a href="cpp_arrays.asp" class="ws-btn w3-margin-top">Arrays Explained</a>
            <hr>

            <h2>C++ References</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_reference">
                Create a reference variable</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_reference_adr">
                Access the memory address of a variable</a>
            </div>
            <a href="cpp_references.asp" class="ws-btn w3-margin-top">References Explained</a>
            <hr>

            <h2>C++ Pointers</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_pointer">
                Create a pointer variable</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_pointer_dereference">
                Get the value of a variable with the dereference operator *</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_pointer_change">
                Modify the pointer value</a>
            </div>
            <a href="cpp_pointers.asp" class="ws-btn w3-margin-top">Pointers Explained</a>
            <hr>

            <h2>C++ Files</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="showcpp.asp?filename=demo_files_read">
                Create, write and read a text file</a>
            </div>
            <a href="cpp_files.asp" class="ws-btn w3-margin-top">Files Explained</a>
            <hr>

            <h2>C++ Functions</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_functions">
                Create and call a function</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_functions_multiple">
                Call a function multiple times</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_functions_opt">
                Function declaration and definition</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_functions_param">
                Parameters and arguments</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_functions_param_def">
                Default parameter value</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_functions_param_multi">
                Multiple parameters</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_functions_void">
                Return value</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_functions_void2">
                Return the sum of two parameters</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_functions_ref">
                Pass by reference</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_function_overloading">
                Function overloading</a>
            </div>
            <a href="cpp_functions.asp" class="ws-btn w3-margin-top">Functions Explained</a>
            <hr>

            <h2>C++ Classes/Objects</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trycpp.asp?filename=demo_object_attr">
                Create an object of a class and access class attributes</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_object_real">
                Create multiple objects</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_object_method">
                Create class methods</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_object_method2">
                Define a class method outside the class definition</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_object_method_param">
                Add parameters to a class method</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_constructor">
                Create a constructor</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_constructor_param">
                Constructor parameters</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_constructor_param2">
                Constructor defined outside the class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_access_private">
                Public and private specifiers</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_encapsulation">
                Encapsulation - hide sensitive data from users</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_inheritance">
                Inheritance - inherit attributes and methods from one class to another</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_inheritance_multi">
                Multilevel inheritance</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_inheritance_multi2">
                Multiple inheritance</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_polymorphism">
                Polymorphism - perform a single action in different ways</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_files_read">
                Files - Create, write and read a file</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trycpp.asp?filename=demo_try_catch">
                Exceptions - Handle errors</a>
            </div>
            <a href="cpp_classes.asp" class="ws-btn w3-margin-top">Classes/Objects Explained</a>
            <hr>


          </div>
          <footer>

            <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">

              <a href="benchmark.html" class="btn btn-neutral float-right" title="Benchmarking Class">Next <span class="fa fa-arrow-circle-right"></span></a>


              <a href="../general/styleguide.html" class="btn btn-neutral" title="PHP Style Guide"><span class="fa fa-arrow-circle-left"></span> Previous</a>

            </div>


            <hr />

            <div role="contentinfo">
              <p>
                &copy; Copyright 2020- 2021, Politeknik Negeri Malang.
                Coding Web Application.
              </p>
            </div>

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