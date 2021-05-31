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
  <html class="no-js" lang="en">
  <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome to Python </title>


    <link rel="shortcut icon" href="b/html.png" />

    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="b/css/citheme.css" type="text/css" />



    <link rel="index" title="Index" href="../genindex.html" />
    <link rel="search" title="Search" href="../search.html" />
    <link rel="top" title="CodeIgniter 3.1.11 documentation" href="../index.html" />
    <link rel="next" title="Installation Instructions" href="../installation/index.html" />
    <link rel="prev" title="CodeIgniter User Guide" href="../index.html" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/w3schools26.css') !!}">
  </head>

  <body class="wy-body-for-nav" role="document">

    <div id="nav">
      <div id="nav_inner">



        <div id="pulldown-menu" class="ciNav">
          <ul class="current">
            <li class="toctree-l1"><a class="reference internal" href="#">Welcome to Python</a></li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pyttutor')}}">Python Tutorial</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="">Python Get Started</a></li>
                <li class="toctree-l2 current"><a class="current reference internal" href="#">Python Syntax</a></li>
                <li class="toctree-l2"><a class="reference internal" href="">Python Comments</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Variables</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Data Types</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Casting</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python String</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Booleans</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Operators</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Lists</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Tuples</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Sets</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Dictionaries</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python If...Else</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python While Loops</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python For Loop</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Function</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Lambda</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Array</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Classes/Object</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Inheritance</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Iterators</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Scope</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Modules</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Dates</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Math</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python JSON</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python RegEx</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python PIP</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Try...Except</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python User Input</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python String Formatting</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytfile')}}">Python FIle handling</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Python File Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Read Files</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Create/Write Files</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Delete Files</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytmodules')}}">Python Modules</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Python NumPy Tutorial</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Pandas Tutorial</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python SciPy Tutorial</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytmat')}}">Python Matplotlib</a>
              <ul>
                <li class="toctree-l2 "><a class=" reference internal" href="{{url('pyt.pytmat')}}">Python Get Started</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Pyplot</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Plotting</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Markers</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Line</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Labels</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Grid</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Subplots</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Scatter</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Bars</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Histogram</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Pie Charts</a></li>

              </ul>
            </li>
          </ul>

          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytmacl')}}">Python Machine Learning</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Getting Startet</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Mean, Median, Mode</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Standard Deviation</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Percentile</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Data Distribution</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Normal Data Distribution</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Scatter Plot</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Linear Regression</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Polynomial Regression</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Multiple Regression</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Scale</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Train/Test</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Decision Tree</a></li>
              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytreferences')}}">Python References</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Overview</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Built-in Functions</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python String Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python List Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Dictionary Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Tuple Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Set Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python File Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Keywords</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Exceptions</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Glossary</a></li>


              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytexample')}}">Python Examples</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Examples</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytexer')}}">Python Exercise</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Exercise</a></li>

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

          <a href="../index.html" class="fa fa-home"> Python</a>


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
            <li class=" toctree-l1"><a class=" reference internal" href="#">Welcome to Python</a></li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pyttutor')}}">Python Tutorial</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="">Python Get Started</a></li>
                <li class="toctree-l2 "><a class=" reference internal" href="#">Python Syntax</a></li>
                <li class="toctree-l2"><a class="reference internal" href="">Python Comments</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Variables</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Data Types</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Casting</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python String</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Booleans</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Operators</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Lists</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Tuples</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Sets</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Dictionaries</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python If...Else</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python While Loops</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python For Loop</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Function</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Lambda</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Array</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Classes/Object</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Inheritance</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Iterators</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Scope</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Modules</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Dates</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Math</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python JSON</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python RegEx</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python PIP</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Try...Except</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python User Input</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python String Formatting</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytfile')}}">Python FIle handling</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Python File Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Read Files</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Create/Write Files</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Delete Files</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytmodules')}}">Python Modules</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Python NumPy Tutorial</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Pandas Tutorial</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python SciPy Tutorial</a></li>


              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytmat')}}">Python Matplotlib</a>
              <ul>
                <li class="toctree-l2 "><a class=" reference internal" href="{{url('pyt.pytmat')}}">Python Get Started</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Pyplot</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Plotting</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Markers</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Line</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Labels</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Grid</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Subplots</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Scatter</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Bars</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Histogram</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Pie Charts</a></li>

              </ul>
            </li>
          </ul>

          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytmacl')}}">Python Machine Learning</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Getting Startet</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Mean, Median, Mode</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Standard Deviation</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Percentile</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Data Distribution</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Normal Data Distribution</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Scatter Plot</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Linear Regression</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Polynomial Regression</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Multiple Regression</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Scale</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Train/Test</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Decision Tree</a></li>
              </ul>
            </li>
          </ul>
          <ul class="">
            <li class=" toctree-l1"><a class=" reference internal" href="{{url('pyt.pytreferences')}}">Python References</a>
              <ul>
                <li class=" toctree-l2"><a class=" reference internal" href="#">Python Overview</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Built-in Functions</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python String Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python List Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Dictionary Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Tuple Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Set Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python File Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Keywords</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Exceptions</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Glossary</a></li>


              </ul>
            </li>
          </ul>
          <ul class="current">
            <li class="current toctree-l1"><a class="current reference internal" href="{{url('pyt.pytexample')}}">Python Examples</a>
              <ul>
                <li class="current toctree-l2"><a class="current reference internal" href="#">Python Examples</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.pytexer')}}">Python Exercise</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Python Exercise</a></li>

              </ul>
            </li>
          </ul>

        </div>
        &nbsp;
      </nav>

      <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">


        <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
          <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
          <a href="../index.html">Python</a>
        </nav>



        <div class="wy-nav-content">
          <div class="rst-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
              <ul class="wy-breadcrumbs">
                <li><a href="../index.html">Docs</a> &raquo;</li>

                <li>Welcome to Python</li>
                <li class="wy-breadcrumbs-aside">

                </li>
                <div style="float:right;margin-left:5px;" id="closeMe">
                  <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
                </div>
              </ul>
              <hr />
            </div>
            <div role="main" class="document">

              <h2>Python Syntax</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_default">
                  Print "Hello World"</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_comment">
                  Comments in Python</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_docstring">
                  Docstrings</a>
              </div>
              <p><a href="python_syntax.asp" class="ws-btn">Syntax Explained</a></p>
              <hr>

              <h2>Python Variables</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_variables1">
                  Create a variable</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_variables3">
                  Output both text and a variable</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_variables4">
                  Add a variable to another variable</a>
              </div>
              <p><a href="python_variables.asp" class="ws-btn">Variables Explained</a></p>
              <hr>

              <h2>Python Numbers</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_numbers">
                  Verify the type of an object</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_numbers_int">
                  Create integers</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_numbers_float">
                  Create floating point numbers</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_numbers_float2">
                  Create scientific numbers with an "e" to indicate the power of 10</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_numbers_complex">
                  Create complex numbers</a>
              </div>
              <p><a href="python_numbers.asp" class="ws-btn">Numbers Explained</a></p>

              <hr>

              <h2>Python Casting</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_casting_int">
                  Casting - Integers</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_float">
                  Casting - Floats</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_string">
                  Casting - Strings</a>
              </div>
              <p><a href="python_casting.asp" class="ws-btn">Casting Explained</a></p>
              <hr>
              <div id="midcontentadcontainer" style="overflow:auto;text-align:center" bis_skin_checked="1">
                <!-- MidContent -->
                <!-- <p class="adtext">Advertisement</p> -->

                <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
                <div id="snhb-mid_content-0" bis_skin_checked="1" data-google-query-id="CIaNhdnk8_ACFUxYjwod00wKRQ" style="height: auto !important; max-height: none !important; padding-left: 0px !important; margin-left: 0px !important;">
                  <div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" bis_skin_checked="1" style="border: 0pt none; max-height: none !important; max-width: 359px !important; padding: 0px !important; width: 359px !important; height: auto !important;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1" width="359" height="320" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="conversion-measurement 'src'" srcdoc="" style="border: 0px; vertical-align: bottom; left: -10000px !important; position: absolute !important;" data-google-container-id="9" bis_size="{&quot;x&quot;:0,&quot;y&quot;:1484,&quot;w&quot;:359,&quot;h&quot;:320,&quot;abs_x&quot;:0,&quot;abs_y&quot;:1484}" bis_id="fr_k6wqxi6qsiyxriggk4t3cc" bis_depth="0" bis_chainid="1" data-load-complete="true"></iframe></div>
                </div>

              </div>
              <hr>

              <h2>Python Strings</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_string1">
                  Get the character at position 1 of a string</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_string2">
                  Substring. Get the characters from position 2 to position 5 (not included)</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_string_strip">
                  Remove whitespace from the beginning or at the end of a string</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_string_len">
                  Return the length of a string</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_string_lower">
                  Convert a string to lower case</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_string_upper">
                  Convert a string to upper case</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_string_replace">
                  Replace a string with another string</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_string_split">
                  Split a string into substrings</a>
              </div>
              <p><a href="python_strings.asp" class="ws-btn">Strings Explained</a></p>
              <hr>

              <h2>Python Operators</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_oper_add">
                  Addition operator</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_oper_sub">
                  Subtraction operator</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_oper_mult">
                  Multiplication operator</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_oper_div">
                  Division operator</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_oper_mod">
                  Modulus operator</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_oper_ass1">
                  Assignment operator</a>
              </div>
              <p><a href="python_operators.asp" class="ws-btn">Operators Explained</a></p>
              <hr>

              <h2>Python Lists</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_list">
                  Create a list</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_access">
                  Access list items</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_change">
                  Change the value of a list item</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_loop">
                  Loop through a list</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_in">
                  Check if a list item exists</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_len">
                  Get the length of a list</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_append">
                  Add an item to the end of a list</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_insert">
                  Add an item at a specified index</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_remove">
                  Remove an item</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_pop">
                  Remove the last item</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_del">
                  Remove an item at a specified index</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_clear">
                  Empty a list</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_list_constructor">
                  Using the list() constructor to make a list</a>
              </div>
              <p><a href="python_lists.asp" class="ws-btn">Lists Explained</a></p>
              <hr>

              <h2>Python Tuples</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_tuple">
                  Create a tuple</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_tuple1">
                  Access tuple items</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_tuple2">
                  Change tuple values</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_tuple_loop">
                  Loop through a tuple</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_tuple_in">
                  Check if a tuple item exists</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_tuple_length">
                  Get the length of a tuple</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_tuple_del">
                  Delete a tuple</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_tuple3">
                  Using the tuple() constructor to create a tuple</a>
              </div>
              <p><a href="python_tuples.asp" class="ws-btn">Tuples Explained</a></p>
              <hr>

              <h2>Python Sets</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_set">
                  Create a set</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_loop">
                  Loop through a set</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_in">
                  Check if an item exists</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_add">
                  Add an item to a set</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_update">
                  Add multiple items to a set</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_length">
                  Get the length of a set</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_remove">
                  Remove an item in a set</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_discard">
                  Remove an item in a set by using the discard() method</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_pop">
                  Remove the last item in a set by using the pop() method</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_clear">
                  Empty a set</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set_del">
                  Delete a set</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_set2">
                  Using the set() constructor to create a set</a>
              </div>
              <p><a href="python_sets.asp" class="ws-btn">Sets Explained</a></p>
              <hr>

              <h2>Python Dictionaries</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_dictionary">
                  Create a dictionary</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_access">
                  Access the items of a dictionary</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_change">
                  Change the value of a specific item in a dictionary</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_loop">
                  Print all key names in a dictionary, one by one</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_loop2">
                  Print all values in a dictionary, one by one</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_loop_values">
                  Using the values() function to return values of a dictionary</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_loop_items">
                  Loop through both keys an values, by using the items() function</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_in">
                  Check if a key exists</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_length">
                  Get the length of a dictionary</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_add">
                  Add an item to a dictionary</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_pop">
                  Remove an item from a dictionary</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_clear">
                  Empty a dictionary</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_dictionary_dict">
                  Using the dict() constructor to create a dictionary</a>
              </div>
              <p><a href="python_dictionaries.asp" class="ws-btn">Dictionaries Explained</a></p>
              <hr>

              <h2>Python If ... Else</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_if2">
                  The if statement</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_if_elif">
                  The elif statement</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_if_else">
                  The else statement</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_if_short">
                  Short hand if</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_if_else_short">
                  Short hand if ... else</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_if_and">
                  The and keyword</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_if_or">
                  The or keyword</a>
              </div>
              <p><a href="python_conditions.asp" class="ws-btn">If ... Else Explained</a></p>
              <hr>

              <h2>Python While Loop</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_while">
                  The while loop</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_while_break">
                  Using the break statement in a while loop</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_while_continue">
                  Using the continue statement in a while loop</a>
              </div>
              <p><a href="python_while_loops.asp" class="ws-btn">While Loop Explained</a></p>
              <hr>

              <h2>Python For Loop</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_for">
                  The for loop</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_for_string">
                  Loop through a string</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_for_break">
                  Using the break statement in a for loop</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_for_continue">
                  Using the continue statement in a for loop</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_for_range">
                  Using the range() function in a for loop</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_for_else">
                  Else in for loop</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_for_nested">
                  Nested for loop</a>
              </div>
              <p><a href="python_for_loops.asp" class="ws-btn">For Loop Explained</a></p>
              <hr>

              <h2>Python Functions</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_function">
                  Create and call a function</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_function_param">
                  Function parameters</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_function_param2">
                  Default parameter value</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_function_return">
                  Let a function return a value</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_recursion">
                  Recursion</a>
              </div>
              <p><a href="python_functions.asp" class="ws-btn">Functions Explained</a></p>
              <hr>

              <h2>Python Lambda</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_lambda">
                  A lambda function that adds 10 to the number passed in as an argument</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_lambda2">
                  A lambda function that multiplies argument a with argument b</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_lambda3">
                  A lambda function that sums argument a, b, and c</a>
              </div>
              <p><a href="python_lambda.asp" class="ws-btn">Lambda Explained</a></p>
              <hr>

              <h2>Python Arrays</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_array1">
                  Create an array</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_array2">
                  Access the elements of an array</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_array3">
                  Change the value of an array element</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_array4">
                  Get the length of an array</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_array5">
                  Loop through all elements of an array</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_array6">
                  Add an element to an array</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_array7">
                  Remove an element from an array</a>
              </div>
              <p><a href="python_arrays.asp" class="ws-btn">Arrays Explained</a></p>
              <hr>

              <h2>Python Classes and Objects</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_class1">
                  Create a class</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_class2">
                  Create an object</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_class3">
                  The __init__() Function</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_class4">
                  Create object methods</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_class5">
                  The self parameter</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_class6">
                  Modify object properties</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_class7">
                  Delete object properties</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_class8">
                  Delete an object</a>
              </div>
              <p><a href="python_classes.asp" class="ws-btn">Classes/Objects Explained</a></p>
              <hr>

              <h2>Python Iterators</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_iterator">
                  Return an iterator from a tuple</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_iterator2">
                  Return an iterator from a string</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_iterator_loop">
                  Loop through an iterator</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_iterator_create">
                  Create an iterator</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_iterator_create2">
                  Stop iteration</a>
              </div>
              <p><a href="python_iterators.asp" class="ws-btn">Iterators Explained</a></p>
              <hr>

              <h2>Python Modules</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_module1">
                  Use a module</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_module2">
                  Variables in module</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_module3">
                  Re-naming a module</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_module4">
                  Built-in modules</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_module5">
                  Using the dir() function</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_module6">
                  Import from module</a>
              </div>
              <p><a href="python_modules.asp" class="ws-btn">Modules Explained</a></p>
              <hr>

              <h2>Python Dates</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_datetime1">
                  Import the datetime module and display the current date</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_datetime2">
                  Return the year and name of weekday</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_datetime3">
                  Create a date object</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_datetime_strftime">
                  The strftime() Method</a>
              </div>
              <p><a href="python_datetime.asp" class="ws-btn">Dates Explained</a></p>
              <hr>

              <h2>Python Math</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_math_min_max">
                  Find the lowest and highest value in an iterable</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_math_abs">
                  Return the absolute value of a number</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_math_pow">
                  Return the value of x to the power of y (x<sup>y</sup>)</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_math_sqrt">
                  Return the square root of a number</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_math_ceil_floor">
                  Round a number upwards and downwards to its nearest integer</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_math_pi">
                  Return the value of PI</a>
              </div>
              <p><a href="python_math.asp" class="ws-btn">Math Explained</a></p>
              <hr>

              <h2>Python JSON</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_json">
                  Convert from JSON to Python</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_json_from_python">
                  Convert from Python to JSON</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_json_from_python_all">
                  Convert Python objects into JSON strings</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_json_from_python_all_in_one">
                  Convert a Python object containing all the legal data types</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_json_from_python_indent">
                  Use the indent parameter to define the numbers of indents</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_json_from_python_separators">
                  Use the separators parameter to change the default separator</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_json_from_python_sort_keys">
                  Use the sort_keys parameter to specify if the result should be sorted or not</a>
              </div>
              <p><a href="python_json.asp" class="ws-btn">JSON Explained</a></p>
              <hr>

              <h2>Python RegEx</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_regex">
                  Search a string to see if it starts with "The" and ends with "Spain"</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_regex_findall">
                  Using the findall() function</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_regex_search">
                  Using the search() function</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_regex_split">
                  Using the split() function</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_regex_sub">
                  Using the sub() function</a>
              </div>
              <p><a href="python_regex.asp" class="ws-btn">RegEx Explained</a></p>
              <hr>

              <h2>Python PIP</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_camelcase">
                  Using a package</a>
              </div>
              <p><a href="python_pip.asp" class="ws-btn">PIP Explained</a></p>
              <hr>

              <h2>Python Try Except</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_try_except">
                  When an error occurs, print a message</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_try_except2">
                  Many exceptions</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_try_except3">
                  Use the else keyword to define a block of code to be executed if no errors were raised</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_try_except4">
                  Use the finally block to execute code regardless if the try block raises an error or not</a>
              </div>
              <p><a href="python_try_except.asp" class="ws-btn">Try Except Explained</a></p>
              <hr>

              <h2>Python Files</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_file_open">
                  Read a file</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_file_open2">
                  Read only parts of a file</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_file_readline">
                  Read one line of a file</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_file_readline3">
                  Loop through the lines of a file to read the whole file, line by line</a>
              </div>
              <p><a href="python_files.asp" class="ws-btn">Files Explained</a></p>
              <hr>

              <h2>Python MySQL</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_mysql_connection">
                  Create a connection to a database</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_create_db">
                  Create a database in MySQL</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_show_databases">
                  Check if a database exist</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_create_table">
                  Create a table</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_show_tables">
                  Check if a table exist</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_primary_key">
                  Create primary key when creating a table</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_insert">
                  Insert a record in a table</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_insert_many">
                  Insert multiple rows</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_insert_id">
                  Get inserted ID</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_select">
                  Select all records from a table</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_select_columns">
                  Select only some of the columns in a table</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_select_fetchone">
                  Use the fetchone() method to fetch only one row in a table</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_where">
                  Select with a filter</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_where_wildcard">
                  Wildcards characters</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_where_escape">
                  Prevent SQL injection</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_orderby">
                  Sort the result of a table alphabetically</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_orderby_desc">
                  Sort the result in a descending order (reverse alphabetically)</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_delete">
                  Delete records from an existing table</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_delete_escape">
                  Prevent SQL injection</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_drop_table">
                  Delete an existing table</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_drop_table2">
                  Delete a table if it exist</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_update">
                  Update existing records in a table</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_update_escape">
                  Prevent SQL injection</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_limit">
                  Limit the number of records returned from a query</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_inner_join">
                  Combine rows from two or more tables, based on a related column between them</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_left_join">
                  LEFT JOIN</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mysql_right_join">
                  RIGHT JOIN</a>
              </div>
              <p><a href="python_mysql_getstarted.asp" class="ws-btn">MySQL Explained</a></p>
              <hr>

              <h2>Python MongoDB</h2>
              <div class="w3-bar-block" bis_skin_checked="1">
                <a class="w3-button w3-bar-item ws-grey" target="_blank" href="trypython.asp?filename=demo_mongodb_create_db">
                  Create a database</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_check_db">
                  Check if a database exist</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_create_collection">
                  Create a collection</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_check_collection">
                  Check if a collection exist</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_insert">
                  Insert into collection</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_insert_id">
                  Return the id field</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_insert_many">
                  Insert multiple documents</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_insert_many2">
                  Insert multiple documents with specified IDs</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_find_one">
                  Find the first document in the selection</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_find">
                  Find all documents in the selection</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_find_some">
                  Find only some fields</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_query">
                  Filter the result</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_query_modifier">
                  Advanced query</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_query_regex">
                  Filter with regular expressions</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_sort">
                  Sort the result alphabetically</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_sort2">
                  Sort the result descending (reverse alphabetically)</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_delete_one">
                  Delete document</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_delete_many">
                  Delete many documents</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_delete_all">
                  Delete all documents in a collection</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_drop_collection">
                  Delete a collection</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_update_one">
                  Update a document</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_update_many">
                  Update many/all documents</a>
                <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="trypython.asp?filename=demo_mongodb_limit">
                  Limit the result</a>
              </div>
              <p><a href="python_mongodb_getstarted.asp" class="ws-btn">MongoDB Explained</a></p>
              <hr>

              <footer>

                <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">

                  <a href="../installation/index.html" class="btn btn-neutral float-right" title="Installation Instructions">Next <span class="fa fa-arrow-circle-right"></span></a>


                  <a href="../index.html" class="btn btn-neutral" title="CodeIgniter User Guide"><span class="fa fa-arrow-circle-left"></span> Previous</a>

                </div>


                <hr />

                &copy; Copyright 2020- 2021, Politeknik Negeri Malang.
                Coding Web Application TI-2H.

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