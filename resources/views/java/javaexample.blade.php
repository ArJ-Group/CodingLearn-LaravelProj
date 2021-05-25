
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
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>CLA</title>




  <link rel="shortcut icon" href="b/ci-icon.ico" />



  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{!! asset('css/w3schools26.css') !!}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="welcome.html">Welcome to Java</a></li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="../installation/index.html">Java Tutorial</a>
            <ul>
              <li class="toctree-l1"><a class="reference internal" href="{{url('java.javatutor')}}">Java Tutorial</a>
                <ul>
                  <li class="toctree-l2"><a class="reference internal" href="">Java Get Started</a></li>
                  <li class="toctree-l2 current"><a class="current reference internal" href="#">Java Syntax</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="">Java Comments</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Variables</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Element</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Data Types</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Type Casting</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Operators</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java String</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Math</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Booleans</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java If...Else</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Switch</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java While Loop</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java For Loop</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Break/Continue</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Array</a></li>

                </ul>
              </li>
            </ul>
            <ul class="">
              <li class="toctree-l1 "><a class=" reference internal" href="{{url('java.javamethod')}}">Java Methods</a>
                <ul>
                  <li class="toctree-l2 "><a class=" reference internal" href="{{url('java.javamethod')}}">Java Methods</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Method Parameters</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Method Overloading</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Scope</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Recursion</a></li>

                </ul>
              </li>
            </ul>
            <ul>
              <li class="toctree-l1 "><a class=" reference internal" href="{{url('java.javamethod')}}">Java Methods</a>
                <ul>
                  <li class="toctree-l2 "><a class="s reference internal" href="{{url('java.javamethod')}}">Java Methods</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Method Parameters</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Method Overloading</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Scope</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Recursion</a></li>

                </ul>
              </li>
            </ul>
            <ul>
              <li class="toctree-l1"><a class="reference internal" href="{{url('java.javaclasses')}}">Java Classes</a>
                <ul>
                  <li class="toctree-l2 "><a class=" reference internal" href="{{url('java.javaclasses')}}">Java OOP</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Classs/Object</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Class Attributes</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Class Methods</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Constructor</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Modifiers</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Encapsulation</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Packages/Api</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Inheritance</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Polymorhism</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Inner Classes</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Abstraction</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Interface</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Enums</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java User Input</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Date</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java ArrayList</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Linked List</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java HashMap</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java HashSet</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Iterator</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Wrapper Classes</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Exceptions</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java RegEx</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Threads</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Lambda</a></li>

                </ul>
              </li>
            </ul>
            <ul>
              <li class="toctree-l1"><a class="reference internal" href="{{url('java.javafile')}}">Java FIle handling</a>
                <ul>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Files</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Create/Write Files</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Read Files</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Delete Files</a></li>

                </ul>
              </li>
            </ul>
            <ul>
              <li class="toctree-l1"><a class="reference internal" href="{{url('java.javareferences')}}">Java References</a>
                <ul>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Keywords</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java String Method</a></li>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Math Method</a></li>

                </ul>
              </li>
            </ul>
            <ul class="current">
              <li class="current toctree-l1"><a class="current reference internal" href="{{url('java.javaexample')}}">Java Examples</a>
                <ul>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Examples</a></li>

                </ul>
              </li>
            </ul>
            <ul>
              <li class="toctree-l1"><a class="reference internal" href="{{url('java.javaexer')}}">Java Exercise</a>
                <ul>
                  <li class="toctree-l2"><a class="reference internal" href="#">Java Exercise</a></li>

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

        <a href="../index.html" class="fa fa-home"> Java</a>


        <div role="search">
          <form id="rtd-search-form" class="wy-form" action="../search.html" method="get">
            <input type="text" name="q" placeholder="Search docs" />
            <input type="hidden" name="check_keywords" value="yes" />
            <input type="hidden" name="area" value="default" />
          </form>
        </div>
      </div>

      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">



        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('java.welcomejava')}}">Welcome to Java</a></li>
        </ul>
        <ul>

          <li class="toctree-l1"><a class="reference internal" href="{{url('java.javatutor')}}">Java Tutorial</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="">Java Get Started</a></li>
              <li class="toctree-l2 current"><a class="current reference internal" href="#">Java Syntax</a></li>
              <li class="toctree-l2"><a class="reference internal" href="">Java Comments</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Variables</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Element</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Data Types</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Type Casting</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Operators</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java String</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Math</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Booleans</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java If...Else</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Switch</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java While Loop</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java For Loop</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Break/Continue</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Array</a></li>

            </ul>
          </li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('java.javaclasses')}}">Java Classes</a>
            <ul>
              <li class="toctree-l2 "><a class=" reference internal" href="{{url('java.javaclasses')}}">Java OOP</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Classs/Object</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Class Attributes</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Class Methods</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Constructor</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Modifiers</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Encapsulation</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Packages/Api</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Inheritance</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Polymorhism</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Inner Classes</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Abstraction</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Interface</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Enums</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java User Input</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Date</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java ArrayList</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Linked List</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java HashMap</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java HashSet</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Iterator</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Wrapper Classes</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Exceptions</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java RegEx</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Threads</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Lambda</a></li>

            </ul>
          </li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('java.javafile')}}">Java FIle handling</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Files</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Create/Write Files</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Read Files</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Delete Files</a></li>

            </ul>
          </li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('java.javareferences')}}">Java References</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Keywords</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java String Method</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Math Method</a></li>

            </ul>
          </li>
        </ul>
        <ul class="current">
          <li class="current toctree-l1"><a class="current reference internal" href="{{url('java.javaexample')}}">Java Examples</a>
            <ul>
              <li class="current toctree-l2"><a class="current reference internal" href="#">Java Examples</a></li>

            </ul>
          </li>
        </ul>
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('java.javaexer')}}">Java Exercise</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Exercise</a></li>

            </ul>
          </li>
        </ul>

      </div>
      &nbsp;
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">


      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="../index.html">Java</a>
      </nav>



      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
            <ul class="wy-breadcrumbs">
              <li><a href="../index.html">Java</a> &raquo;</li>

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
            <h2>Java Syntax</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_helloworld">
                Create a simple "Hello World" program</a>
            </div>
            <a href="java_syntax.asp" class="ws-btn w3-margin-top">Syntax Explained</a>
            <hr>

            <h2>Java Comments</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_single_comment">
                Single-line comment before a line of code</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_single_comment_end">
                Single-line comment at the end of a line of code</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_multi_comment">
                Multi-line comment</a>
            </div>
            <a href="java_comments.asp" class="ws-btn w3-margin-top">Comments Explained</a>
            <hr>

            <h2>Java Variables</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_variables">
                Create a string variable</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_variables_int">
                Create an integer variable</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_variables_int2">
                Create a variable without assigning the value, and assign the value later</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_variables_ow">
                Overwrite an existing variable value</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_variables_final">
                Create a final variable (unchangeable and read-only)</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_variables2">
                Combine text and a variable on display</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_variables3">
                Add a variable to another variable</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_variables5">
                Declare many variables of the same type with a comma-separated list</a>
            </div>
            <a href="java_variables.asp" class="ws-btn w3-margin-top">Variables Explained</a>
            <hr>

            <h2>Java Data Types</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_data_types">
                A demonstration of different data types in Java</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_type_byte">
                Create a byte type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_type_short">
                Create a short type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_type_int">
                Create an int type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_type_long">
                Create a long type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_type_float">
                Create a float type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_type_double">
                Create a double type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_booleans">
                Create a boolean type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_type_char">
                Create a char type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_type_string">
                Create a String type</a>
            </div>
            <a href="java_data_types.asp" class="ws-btn w3-margin-top">Data Types Explained</a>
            <hr>

            <h2>Java Type Casting</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_casting_wide">
                Widening Casting</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_casting_narrow">
                Narrowing Casting</a>
            </div>
            <a href="java_type_casting.asp" class="ws-btn w3-margin-top">Type Casting Explained</a>
            <hr>

            <h2>Java Operators</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_oper_add">
                Addition operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_oper_sub">
                Subtraction operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_oper_mult">
                Multiplication operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_oper_div">
                Division operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_oper_mod">
                Modulus operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_oper_inc">
                Increment operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_oper_dec">
                Decrement operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_oper_ass1">
                Assignment operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_oper_compare1">
                Comparison operator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_oper_logical1">
                Logical operator</a>
            </div>
            <a href="java_operators.asp" class="ws-btn w3-margin-top">Operators Explained</a>
            <hr>

            <h2>Java Strings</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_strings">
                Create a string</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_strings_quotes">
                Quotes inside a string</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_strings_length">
                Find the length of a string</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_strings_touppercase">
                Using methods to convert strings to uppercase and lowercase</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_strings_indexof">
                Finding a string in a string</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_strings_conc">
                String concatenation</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_strings_num3">
                If you add a number and a string, the result will be a string concatenation</a>
            </div>
            <a href="java_strings.asp" class="ws-btn w3-margin-top">Strings Explained</a>
            <hr>

            <h2>Java Math</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_math_max">
                Math.max(x,y) - return the highest value of x and y</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_math_min">
                Math.min(x,y) - return the lowest value of x and y</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_math_sqrt">
                Math.sqrt(x) - return the square root of x</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_math_abs">
                Math.abs(x) - return the absolute (positive) value of x</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_math_random">
                Math.random() - return a random number between 0 and 1</a>
            </div>
            <a href="java_math.asp" class="ws-btn w3-margin-top">Math Explained</a>
            <hr>

            <h2>Java Booleans</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_booleans">
                Create a boolean type</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_booleans1">
                Find out if an expression is true or false</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_booleans3">
                Use the "equal to" operator to evaluate a boolean expression</a>
            </div>
            <a href="java_booleans.asp" class="ws-btn w3-margin-top">Booleans Explained</a>
            <hr>
            <div id="midcontentadcontainer" style="overflow:auto;text-align:center" bis_skin_checked="1">
              <!-- MidContent -->
              <!-- <p class="adtext">Advertisement</p> -->

              <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
              <div id="snhb-mid_content-0" bis_skin_checked="1" data-google-query-id="CM-uvNqGpvACFU2JjwodE9cF8Q" style="display: none;">
                <div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" bis_skin_checked="1" style="border: 0pt none; width: 728px; height: 90px;"></div>
              </div>

            </div>
            <hr>

            <h2>Java If...Else (Conditions)</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_if">
                The if statement</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_if_else">
                The else statement</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_if_else_if">
                The else if statement</a>
            </div>
            <a href="java_conditions.asp" class="ws-btn w3-margin-top">If...Else Explained</a>
            <hr>

            <h2>Java Switch</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_switch">
                The switch statement</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_switch_default">
                The switch statement with a default keyword</a>
            </div>
            <a href="java_switch.asp" class="ws-btn w3-margin-top">Switch Explained</a>
            <hr>

            <h2>Java Loops</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_while_loop">
                While loop</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_do_while_loop">
                Do while loop</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_for_loop">
                For loop</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_array_for_each">
                For-each loop</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_break">
                Break a loop</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_continue">
                Continue a loop</a>
            </div>
            <a href="java_while_loop.asp" class="ws-btn w3-margin-top">Loops Explained</a>
            <hr>

            <h2>Java Arrays</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_array">
                Create and access an array</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_array_change">
                Change an array element</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_array_length">
                Find the length of an array</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_array_change">
                Access an array</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_array_loop">
                Loop through an array</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_array_for_each">
                Loop through an array with for-each</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_array_multi">
                Multidimensional array</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_array_multi_for">
                Loop through a multidimensional array</a>
            </div>
            <a href="java_arrays.asp" class="ws-btn w3-margin-top">Arrays Explained</a>
            <hr>

            <h2>Java Methods</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_method">
                Create and call a method</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_method_multiple">
                Call a method multiple times</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_method_param">
                Method with parameters</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_method_param2">
                Method with multiple parameters</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_method_void">
                Return value</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_method_ifelse">
                A method with if...else</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_method_overloading2">
                Method overloading</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_recursion">
                Recursion</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_recursion2">
                Recursive function with a halting condition</a>
            </div>
            <a href="java_methods.asp" class="ws-btn w3-margin-top">Methods Explained</a>
            <hr>

            <h2>Java Classes and Objects</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_class">
                Create a class and an object of a class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_class_multi_obj">
                Create multiple objects of a class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_attributes">
                Accessing class attributes (variables)</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_attributes2">
                Modify attributes</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_attributes3">
                Override existing attribute values</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_attributes_multiple">
                Multiple attributes</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_class_method">
                Create a class method</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_class_method_para">
                Method with parameters</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_class_car">
                Access class methods with an object</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_constructor">
                Create a class constructor</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_constructor_para2">
                Constructor with parameters</a>
            </div>
            <a href="java_classes.asp" class="ws-btn w3-margin-top">Classes and Objects Explained</a>
            <hr>

            <h2>Java Modifiers</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_mod_public">
                Public class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_mod_default">
                Default class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="showjava_classes.asp?filename=demo_mod_public2">
                Public attributes</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_access_mod">
                Private attributes</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_mod_default2">
                Default attributes</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_mod_protected">
                Protected attributes</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_mod_final">
                Final class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="showjava_classes.asp?filename=demo_mod_abstract">
                Abstract class with abstract methods</a>
            </div>
            <a href="java_modifiers.asp" class="ws-btn w3-margin-top">Modifiers Explained</a>
            <hr>

            <h2>Java Encapsulation</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="showjava_classes.asp?filename=demo_getset">
                Java encapsulation (getters and setters)</a>
            </div>
            <a href="java_encapsulation.asp" class="ws-btn w3-margin-top">Encapsulation Explained</a>
            <hr>

            <h2>Java Packages</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="showjava.asp?filename=demo_api_scanner">
                Import a class from the Java API</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="showjava.asp?filename=demo_api_scanner_package">
                Import a package from the Java API</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="showjava.asp?filename=demo_package">
                Create a package</a>
            </div>
            <a href="java_packages.asp" class="ws-btn w3-margin-top">Packages Explained</a>
            <hr>

            <h2>Java Inheritance</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_inherit">
                Java inheritance (extends)</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_polymorphism">
                Java polymorphism</a>
            </div>
            <a href="java_inheritance.asp" class="ws-btn w3-margin-top">Inheritance Explained</a>
            <hr>

            <h2>Java Inner Classes</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_class_inner">
                Inner class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_class_inner2">
                Private inner class (error when trying to access it from an outside class)</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_class_inner3">
                Static inner class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_class_inner_access">
                Access outer class from inner class</a>
            </div>
            <a href="java_inner_classes.asp" class="ws-btn w3-margin-top">Inner Classes Explained</a>
            <hr>

            <h2>Java Abstraction &amp; Interfaces</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_abstract">
                Java abstract classes and methods</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_interface">
                Java interface (implements)</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_interface_multi">
                Multiple interfaces</a>
            </div>
            <a href="java_interface.asp" class="ws-btn w3-margin-top">Interfaces Explained</a>
            <hr>

            <h2>Java Enums</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_enums">
                Create an enum with a group of constants</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_enums_class">
                An enum inside a class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_enums_switch">
                An enum in a switch statement</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_enums_loop">
                Loop through an enum</a>
            </div>
            <a href="java_enums.asp" class="ws-btn w3-margin-top">Enums Explained</a>
            <hr>

            <h2>Java User Input</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="showjava.asp?filename=demo_api_scanner">
                Read user input</a>
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="showjava.asp?filename=demo_api_scanner2">
                Read user input of various types</a>
            </div>
            <a href="java_user_input.asp" class="ws-btn w3-margin-top">User Input Explained</a>
            <hr>

            <h2>Java Dates</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_date_localdate">
                Display current date</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_date_localtime">
                Display current time</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_date_localdatetime">
                Display current date and time</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_date_format">
                Formatting date and time</a>
            </div>
            <a href="java_date.asp" class="ws-btn w3-margin-top">Dates Explained</a>
            <hr>

            <h2>Java ArrayList</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_arraylist_add">
                Create an ArrayList</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_arraylist_get">
                Access an item in an ArrayList</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_arraylist_remove">
                Remove an item from an ArrayList</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_arraylist_clear">
                Remove all items from an ArrayList</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_arraylist_size">
                Get the size of an ArrayList</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_arraylist_loop">
                Loop through an ArrayList</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_arraylist_for_each">
                Loop through an ArrayList with for-each</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_arraylist_integer">
                Create an ArrayList that should store numbers (integers)</a>
            </div>
            <a href="java_arraylist.asp" class="ws-btn w3-margin-top">ArrayList Explained</a>
            <hr>

            <h2>Java HashMap</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_hashmap_put">
                Create a HashMap</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashmap_get">
                Access an item in a HashMap</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashmap_remove">
                Remove an item from a HashMap</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashmap_clear">
                Remove all items from a HashMap</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashmap_size">
                Get the size of a HashMap</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashmap_loop_keyvalue">
                Loop through a HashMap</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashmap_integer">
                Create a HashMap that should store String keys and Integer values</a>
            </div>
            <a href="java_hashmap.asp" class="ws-btn w3-margin-top">HashMap Explained</a>
            <hr>

            <h2>Java HashSet</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_hashset_add">
                Create a HashSet and add items to it</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashset_contains">
                Check if an item exists in a HashSet</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashset_remove">
                Remove an item from a HashSet</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashset_clear">
                Remove all items from a HashSet</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashset_size">
                Get the size of a HashSet</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashset_for_each">
                Loop through a HashSet</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_hashset_integer">
                Create a HashSet that should store Integer values</a>
            </div>
            <a href="java_hashset.asp" class="ws-btn w3-margin-top">HashSet Explained</a>
            <hr>

            <h2>Java Iterator</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_iterator">
                Getting an iterator</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_iterator_loop">
                Looping throug a collection</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_iterator_remove">
                Removing items from a collection</a>
            </div>
            <a href="java_iterator.asp" class="ws-btn w3-margin-top">Iterator Explained</a>
            <hr>

            <h2>Java Wrapper Classes</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_arraylist_integer">
                Create an ArrayList that should store numbers (integers)</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_wrapper_create">
                Create wrapper objects</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_wrapper_methods">
                Using wrapper methods</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_wrapper_string">
                Convert wrapper objects to strings</a>
            </div>
            <a href="java_wrapper_classes.asp" class="ws-btn w3-margin-top">Wrapper Classes Explained</a>
            <hr>

            <h2>Java Exceptions (Try...Catch)</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_try_catch">
                The try...catch statement</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_try_catch_finally">
                The finally statement</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_throw">
                The throw statement</a>
            </div>
            <a href="java_try_catch.asp" class="ws-btn w3-margin-top">Exceptions Explained</a>
            <hr>

            <h2>Java Regular Expressions</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_regex">
                Search for the word "w3schools" in a sentence</a>
            </div>
            <a href="java_regex.asp" class="ws-btn w3-margin-top">Regular Expressions Explained</a>
            <hr>

            <h2>Java Threads</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="tryjava.asp?filename=demo_threads">
                Running a thread by extending the thread class</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_threads_runnable">
                Running a thread by implementing the Runnable interface</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_threads_concurrency">
                Concurrency problems</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="tryjava.asp?filename=demo_threads_concurrency2">
                Avoid concurrency problems</a>
            </div>
            <a href="java_threads.asp" class="ws-btn w3-margin-top">Threads Explained</a>
            <hr>

            <h2>Java Files</h2>
            <div class="w3-bar-block" bis_skin_checked="1">
              <a class="w3-button w3-bar-item ws-grey" target="_blank" href="showjava.asp?filename=demo_files_create">
                Create a file</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="showjava.asp?filename=demo_files_write">
                Write to a file</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="showjava.asp?filename=demo_files_read">
                Read a file</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="showjava.asp?filename=demo_files_get">
                Get file information</a>
              <a class="w3-button w3-bar-item ws-grey w3-border-top" target="_blank" href="showjava.asp?filename=demo_files_delete">
                Delete a file</a>
            </div>
            <a href="java_files.asp" class="ws-btn w3-margin-top">Files Explained</a>
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