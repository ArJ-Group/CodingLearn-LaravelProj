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
                    <ul class="current">
                        <li class="current toctree-l1"><a class="current reference internal" href="{{url('pyt.pytmodules')}}">Python Modules</a>
                            <ul>
                                <li class="current toctree-l2"><a class="current reference internal" href="#">Python NumPy Tutorial</a></li>
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

                            <div class="w3-panel w3-info intro" style="background-color:#f3ecea" bis_skin_checked="1">
                                <div class="w3-hide-small" style="float:right;font-size:70px;color:#ffc0c7" bis_skin_checked="1">[+:</div>
                                <p>NumPy is a Python library.</p>
                                <p>NumPy is used for working with arrays.</p>
                                <p>NumPy is short for "Numerical Python".</p>
                            </div>

                            <h2>Learning by Reading</h2>
                            <p>We have created 43 tutorial pages for you to learn more about NumPy.</p>
                            <p>Starting with a basic introduction and ends up with creating and plotting random data sets, and working with NumPy functions:</p>
                            <style>
                                .pelle-btn {
                                    width: 180px;
                                    border-radius: 5px;
                                }

                                .pelle-btn.x2:link,
                                .pelle-btn.x2:visited {
                                    background-color: #96D4D4;
                                    color: #000;
                                }

                                .pelle-btn.x3:link,
                                .pelle-btn.x3:visited {
                                    background-color: #FFC0C7;
                                    color: #000;
                                }

                                .pelle-btn:link,
                                .pelle-btn:visited {
                                    background-color: #D9EEE1;
                                    color: #000;
                                }

                                .pelle-btn:hover,
                                .pelle-btn:active {
                                    background-color: #b9dfc7 !important;
                                }

                                .pelle-btn.x2:hover,
                                .pelle-btn.x2:active {
                                    background-color: #5cbcbc !important;
                                }

                                .pelle-btn.x3:hover,
                                .pelle-btn.x3:active {
                                    background-color: #ff808e !important;
                                }

                                .pelle-divider {
                                    width: 50%;
                                    border-right: 2px solid #D9EEE1;
                                    font-size: 10px;
                                }

                                .pelle-divider.x2 {
                                    border-right: 2px solid #96D4D4;
                                }

                                .pelle-divider.x3 {
                                    border-right: 2px solid #FFC0C7;
                                }
                            </style>

                            <div style="text-align:center;" bis_skin_checked="1">
                                <div class="w3-row" bis_skin_checked="1">
                                    <div class="w3-col m4 l4" bis_skin_checked="1">
                                        <h3 style="text-align:center">Basic</h3>
                                        <a class="w3-btn pelle-btn" href="numpy_intro.asp">Introduction</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_getting_started.asp">Getting Started</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_creating_arrays.asp">Creating Arrays</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_indexing.asp">Array Indexing</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_slicing.asp">Array Slicing</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_data_types.asp">Data Types</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_copy_vs_view.asp">Copy vs View</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_shape.asp">Array Shape</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_reshape.asp">Array Reshape</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_iterating.asp">Array Iterating</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_join.asp">Array Join</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_split.asp">Array Split</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_search.asp">Array Search</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_sort.asp">Array Sort</a>
                                        <div class="pelle-divider" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn" href="numpy_array_filter.asp">Array Filter</a>
                                    </div>
                                    <div class="w3-col m4 l4" bis_skin_checked="1">
                                        <h3>Random</h3>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random.asp">Random Intro</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_distribution.asp">Data Distribution</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_permutation.asp">Random Permutation</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_seaborn.asp">Seaborn Module</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_normal.asp">Normal Dist.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_binomial.asp">Binomial Dist.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_poisson.asp">Poisson Dist.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_uniform.asp">Uniform Dist.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_logistic.asp">Logistic Dist.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_multinomial.asp">Multinomial Dist.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_exponential.asp">Exponential Dis.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_chisquare.asp">Chi Square Dist.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_rayleigh.asp">Rayleigh Dist.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_pareto.asp">Pareto Dist.</a>
                                        <div class="pelle-divider x2" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x2" href="numpy_random_zipf.asp">Zipf Dist.</a>
                                    </div>
                                    <div class="w3-col m4 l4" bis_skin_checked="1">
                                        <h3>ufunc</h3>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc.asp">ufunc Intro</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_create_function.asp">Create Function</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_simple_arithmetic.asp">Simple Arithmetic</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_rounding_decimals.asp">Rounding Decimals</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_logs.asp">Logs</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_summations.asp">Summations</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_products.asp">Products</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_differences.asp">Differences</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_lcm.asp">Finding LCM</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_gcd.asp">Finding GCD</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_trigonometric.asp">Trigonometric</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_hyperbolic.asp">Hyperbolic</a>
                                        <div class="pelle-divider x3" bis_skin_checked="1">&nbsp;</div>
                                        <a class="w3-btn pelle-btn x3" href="numpy_ufunc_set_operations.asp">Set Operations</a>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <br>



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