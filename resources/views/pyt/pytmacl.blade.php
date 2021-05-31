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
                    <ul class="">
                        <li class="toctree-l1"><a class="reference internal" href="{{url('pyt.welcomepyt')}}">Welcome to Python</a></li>
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
                    <ul class="current">
                        <li class="current toctree-l1"><a class="current reference internal" href="{{url('pyt.pytfile')}}">Python FIle handling</a>
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
                <img src="data:image/jpeg;base64,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" title="Toggle Table of Contents" alt="Toggle Table of Contents" />
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



                    <ul>
                        <li class=" toctree-l1"><a class=" reference internal" href="{{url('pyt.welcomepyt')}}">Welcome to Python</a></li>
                    </ul>
                    <ul class="">
                        <li class=" toctree-l1"><a class=" reference internal" href="{{url('pyt.pyttutor')}}">Python Tutorial</a>
                            <ul>
                                <li class=" toctree-l2"><a class=" reference internal" href="">Python Get Started</a></li>
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
                    <ul class="">
                        <li class="  toctree-l1"><a class=" reference internal" href="{{url('pyt.pytfile')}}">Python FIle handling</a>
                            <ul>
                                <li class=" toctree-l2"><a class=" eference internal" href="#">Python File Handling</a></li>
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
                    <ul class="">
                        <li class=" toctree-l1"><a class=" reference internal" href="{{url('pyt.pytmat')}}">Python Matplotlib</a>
                            <ul>
                                <li class=" toctree-l2 "><a class=" reference internal" href="{{url('pyt.pytmat')}}">Python Get Started</a></li>
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

                    <ul class="current">
                        <li class="current toctree-l1"><a class="current reference internal" href="{{url('pyt.pytmacl')}}">Python Machine Learning</a>
                            <ul>
                                <li class="current toctree-l2"><a class="current reference internal" href="#">Getting Started</a></li>
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
                        <div role="main" class="document" id="welcome-to-codeigniter">

                            <div class="w3-panel w3-info intro" bis_skin_checked="1">
                                <p>Machine Learning is making the computer learn from studying data and statistics.</p>
                                <p>Machine Learning is a step into the direction of artificial intelligence (AI).</p>
                                <p>Machine Learning is a program that analyses data and learns to predict the
                                    outcome.</p>
                            </div>

                            <h2>Where To Start?</h2>

                            <p>In this tutorial we will go back to mathematics and study statistics, and how to calculate
                                important numbers based on data sets.</p>
                            <p>We will also learn how to use various Python modules to get the answers we
                                need.</p>
                            <p>And we will learn how to make functions that are able to predict the outcome
                                based on what we have learned.</p>

                            <hr>

                            <h2>Data Set</h2>

                            <p>In the mind of a computer, a data set is any collection of data.
                                It can be anything from an array to a complete database.</p>

                            <p>Example of an array:</p>

                            <div class="w3-example w3-light-grey" bis_skin_checked="1">
                                <p><code class="pythonHigh"><span class="pythoncolor" style="color:black">[<span class="pythonnumbercolor" style="color:red">99</span>,<span class="pythonnumbercolor" style="color:red">86</span>,<span class="pythonnumbercolor" style="color:red">87</span>,<span class="pythonnumbercolor" style="color:red">88</span>,<span class="pythonnumbercolor" style="color:red">111</span>,<span class="pythonnumbercolor" style="color:red">86</span>,<span class="pythonnumbercolor" style="color:red">103</span>,<span class="pythonnumbercolor" style="color:red">87</span>,<span class="pythonnumbercolor" style="color:red">94</span>,<span class="pythonnumbercolor" style="color:red">78</span>,<span class="pythonnumbercolor" style="color:red">77</span>,<span class="pythonnumbercolor" style="color:red">85</span>,<span class="pythonnumbercolor" style="color:red">86</span>] </span></code></p>
                            </div>


                            <p>Example of a database:</p>

                            <table class="w3-table-all" id="welcome-to-codeigniter">
                                <tbody>
                                    <tr>
                                        <td>Carname</td>
                                        <td>Color</td>
                                        <td class="auto-style1">Age</td>
                                        <td class="auto-style1">Speed</td>
                                        <td class="auto-style2">AutoPass</td>
                                    </tr>
                                    <tr>
                                        <td>BMW</td>
                                        <td>red</td>
                                        <td class="auto-style1">5</td>
                                        <td class="auto-style1">99</td>
                                        <td class="auto-style2">Y</td>
                                    </tr>
                                    <tr>
                                        <td>Volvo</td>
                                        <td>black</td>
                                        <td class="auto-style1">7</td>
                                        <td class="auto-style1">86</td>
                                        <td class="auto-style2">Y</td>
                                    </tr>
                                    <tr>
                                        <td>VW</td>
                                        <td>gray</td>
                                        <td class="auto-style1">8</td>
                                        <td class="auto-style1">87</td>
                                        <td class="auto-style2">N</td>
                                    </tr>
                                    <tr>
                                        <td>VW</td>
                                        <td>white</td>
                                        <td class="auto-style1">7</td>
                                        <td class="auto-style1">88</td>
                                        <td class="auto-style2">Y</td>
                                    </tr>
                                    <tr>
                                        <td>Ford</td>
                                        <td>white</td>
                                        <td class="auto-style1">2</td>
                                        <td class="auto-style1">111</td>
                                        <td class="auto-style2">Y</td>
                                    </tr>
                                    <tr>
                                        <td>VW</td>
                                        <td>white</td>
                                        <td class="auto-style1">17</td>
                                        <td class="auto-style1">86</td>
                                        <td class="auto-style2">Y</td>
                                    </tr>
                                    <tr>
                                        <td>Tesla</td>
                                        <td>red</td>
                                        <td class="auto-style1">2</td>
                                        <td class="auto-style1">103</td>
                                        <td class="auto-style2">Y</td>
                                    </tr>
                                    <tr>
                                        <td>BMW</td>
                                        <td>black</td>
                                        <td class="auto-style1">9</td>
                                        <td class="auto-style1">87</td>
                                        <td class="auto-style2">Y</td>
                                    </tr>
                                    <tr>
                                        <td>Volvo</td>
                                        <td>gray</td>
                                        <td class="auto-style1">4</td>
                                        <td class="auto-style1">94</td>
                                        <td class="auto-style2">N</td>
                                    </tr>
                                    <tr>
                                        <td>Ford</td>
                                        <td>white</td>
                                        <td class="auto-style1">11</td>
                                        <td class="auto-style1">78</td>
                                        <td class="auto-style2">N</td>
                                    </tr>
                                    <tr>
                                        <td>Toyota</td>
                                        <td>gray</td>
                                        <td class="auto-style1">12</td>
                                        <td class="auto-style1">77</td>
                                        <td class="auto-style2">N</td>
                                    </tr>
                                    <tr>
                                        <td>VW</td>
                                        <td>white</td>
                                        <td class="auto-style1">9</td>
                                        <td class="auto-style1">85</td>
                                        <td class="auto-style2">N</td>
                                    </tr>
                                    <tr>
                                        <td>Toyota</td>
                                        <td>blue</td>
                                        <td class="auto-style1">6</td>
                                        <td class="auto-style1">86</td>
                                        <td class="auto-style2">Y</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p>By looking at the array, we can guess that the average value is probably around 80
                                or 90, and we are also able to determine the highest value and the lowest value, but what else can we do?</p>

                            <p>And by looking at the database we can see that the most popular color is white, and the oldest car is 17 years,
                                but what if we could predict if a car had an AutoPass, just by looking at the other values?</p>

                            <p>That is what Machine Learning is for! Analyzing data and predicting the outcome!</p>

                            <div class="w3-panel w3-note" bis_skin_checked="1">
                                <p>In Machine Learning it is common to work with very large data sets. In this
                                    tutorial we will try to make it as easy as possible to understand the
                                    different concepts of machine learning, and we will work with small
                                    easy-to-understand data sets.</p>
                            </div>

                            <hr>
                            <div class="section" id="welcome-to-codeigniter">

                                <h2>Data Types</h2>

                                <p>To analyze data, it is important to know what type of data we are dealing with.</p>

                                <p>We can split the data types into three main categories:</p>

                                <ul>
                                    <li><strong>Numerical</strong></li>
                                    <li><strong>Categorical</strong></li>
                                    <li><strong>Ordinal</strong></li>
                                </ul>

                                <p><strong>Numerical</strong> data are numbers, and can be split into two
                                    numerical categories:</p>

                                <ul>
                                    <li>Discrete Data<br>- numbers that are limited to integers. Example: The number
                                        of cars passing by.</li>
                                    <li>Continuous Data<br>- numbers that are of infinite value. Example: The
                                        price of an item, or the size of an item</li>
                                </ul>

                                <p><strong>Categorical</strong> data are values that cannot be measured up
                                    against each other. Example: a color value, or any yes/no values.</p>
                                <p><strong>Ordinal</strong> data are like categorical data, but can be measured
                                    up against each other. Example: school grades where A is better than B and so
                                    on.</p>
                                <p>By knowing the data type of your data source, you will be able to know what
                                    technique to use when analyzing them.</p>
                                <p>You will learn more about statistics and analyzing data in the next chapters.</p>

                                <hr>
                            </div>

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