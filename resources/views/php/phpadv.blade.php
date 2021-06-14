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

    <title>Welcome to PHP </title>


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
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.welcomephp')}}">Welcome to PHP</a></li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phptutor')}}">PHP Tutorial</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Introduction PHP</a></li>
                <li class="toctree-l2 "><a class=" reference internal" href="#">PHP Install</a></li>
                <li class="toctree-l2"><a class="reference internal" href="">PHP Syntax</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Comments</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Variables</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Echo/Print</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Data Types</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP String</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Number</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Math</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Constants</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Sets</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP If...Else...Elseif</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Switch</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Loops</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Array</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Superglobals</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP RegEx</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpform')}}">PHP Form</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Validation</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Required</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form URL/E-Mail</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Complete</a></li>
              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpadv')}}">PHP Advanced</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Date & Time</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Include</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Open/Read</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Create/Write</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Upload</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Cookies</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Session</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Filters</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Filters Advanced</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Callback Functions</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP JSON</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Exceptions</a></li>


              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpoop')}}">PHP OOP</a>
              <ul>
                <li class="toctree-l2 "><a class=" reference internal" href="{{url('php.phpoop')}}">PHP OOP Get Started</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Classes/Objects</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP constructor</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Destructor</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Access Modifiers</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Inheritance</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Constants</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Abstract Classes</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Interfaces</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Traits</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Static Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Static Properties</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Namespaces</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Iterables</a></li>
              </ul>
            </li>
          </ul>

          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpdtb')}}">PHP Database</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Getting Startet</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpxml')}}">PHP XML</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP XML Parses</a></li>



              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpexamp')}}">PHP Examples</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Examples</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpexer')}}">PHP Exercise</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Exercise</a></li>

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

          <a href="../index.html" class="fa fa-home"> PHP</a>


          <div role="search">
            <form id="rtd-search-form" class="wy-form" action="../search.html" method="get">
              <input type="text" name="q" placeholder="Search docs" />
              <input type="hidden" name="check_keywords" value="yes" />
              <input type="hidden" name="area" value="default" />
            </form>
          </div>
        </div>

        <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">

          <ul class="current">
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.welcomephp')}}">Welcome to PHP</a></li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phptutor')}}">PHP Tutorial</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Introduction PHP</a></li>
                <li class="toctree-l2 "><a class=" reference internal" href="#">PHP Install</a></li>
                <li class="toctree-l2"><a class="reference internal" href="">PHP Syntax</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Comments</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Variables</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Echo/Print</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Data Types</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP String</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Number</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Math</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Constants</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Sets</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP If...Else...Elseif</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Switch</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Loops</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Array</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Superglobals</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP RegEx</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpform')}}">PHP Form</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Validation</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Required</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form URL/E-Mail</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Form Complete</a></li>
              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpadv')}}">PHP Advanced</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Date & Time</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Include</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Handling</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Open/Read</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Create/Write</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP File Upload</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Cookies</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Session</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Filters</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Filters Advanced</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Callback Functions</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP JSON</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Exceptions</a></li>


              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpoop')}}">PHP OOP</a>
              <ul>
                <li class="toctree-l2 "><a class=" reference internal" href="{{url('php.phpoop')}}">PHP OOP Get Started</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Classes/Objects</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP constructor</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Destructor</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Access Modifiers</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Inheritance</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Constants</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Abstract Classes</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Interfaces</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Traits</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Static Methods</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Static Properties</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Namespaces</a></li>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Iterables</a></li>
              </ul>
            </li>
          </ul>

          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpdtb')}}">PHP Database</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">Getting Startet</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpxml')}}">PHP XML</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP XML Parses</a></li>



              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpexamp')}}">PHP Examples</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Examples</a></li>

              </ul>
            </li>
          </ul>
          <ul>
            <li class="toctree-l1"><a class="reference internal" href="{{url('php.phpexer')}}">PHP Exercise</a>
              <ul>
                <li class="toctree-l2"><a class="reference internal" href="#">PHP Exercise</a></li>

              </ul>
            </li>
          </ul>

        </div>
        &nbsp;
      </nav>

      <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">


        <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
          <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
          <a href="../index.html">PHP</a>
        </nav>



        <div class="wy-nav-content">
          <div class="rst-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
              <ul class="wy-breadcrumbs">
                <li><a href="../index.html">Docs</a> &raquo;</li>

                <li>Welcome to PHP</li>
                <li class="wy-breadcrumbs-aside">

                </li>
                <div style="float:right;margin-left:5px;" id="closeMe">
                  <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
                </div>
              </ul>
              <hr />
            </div>
            <div role="main" class="document">
              <div class="section" id="welcome-to-codeigniter">
        <h2>PHP Include Files<h2><hr>
                <p class="intro">The <code class="w3-codespan">include</code> (or <code class="w3-codespan">require</code>) statement takes all the text/code/markup that exists in the specified file and copies it into
                  the file that uses the include statement.</p>
                  <p class="intro">Including files is very useful when you want to include the same PHP,
                  HTML, or text on multiple pages of a website.</p>
                  <hr>
                  <div class="admonition note">
                    <p class="first admonition-title">  <strong>PHP include and require Statements</strong> </p>
                
                  <p>It is possible to insert the content of one PHP file into another PHP file (before the 
                  server executes it), with the include or require statement.</p>
                  <p><b>The include and require statements are identical, except upon failure:</b></p>
                  <ul>
                    
                    <li><p>require</code> will produce a fatal error (E_COMPILE_ERROR) and stop the script</li>
                    <li><p>include</code> will only produce a warning (E_WARNING) and the script will continue</li>
                  </ul>
                  <p>So, if you want the execution to go on and show users the output, even if the 
                  include file is missing, use the include statement. Otherwise, in case of FrameWork, CMS, or a 
                  complex PHP application coding, always use the require statement to include a key file to the 
                  flow of execution. This will help avoid compromising your application's security 
                  and integrity, just in-case one key file is accidentally missing.</p>
                  
                  <p>Including files saves a lot of work. This means that 
                  you can create a standard header, footer, or menu file for all your web pages. 
                  Then, when the header needs to be updated, you can only 
                  update the header include file.</p></div><hr>
                  <h3>Syntax</h3>
                  <div class="w3-code w3-border notranslate"><div>
                  include '<i>filename</i>';<br>
                  <br>
                  or<br>
                  <br>
                  require '<i>filename</i>';</div></div>
                  <hr>
                  
                  <h2>PHP include Examples</h2>
                  <h3>Example 1</h3>
                  <p>Assume we have a standard footer file called &quot;footer.php&quot;, that looks like this:</p>
                  <div class="w3-code w3-border notranslate"><div>
                   &lt;?php<br>echo &quot;&lt;p&gt;Copyright &amp;copy; 1999-&quot; . date(&quot;Y&quot;) . &quot; W3Schools.com&lt;/p&gt;&quot;;<br>?&gt;</div>
                  </div>
                  
                  <p>To include the footer file in a page, use the <code class="w3-codespan">include</code> statement:</p>
                  <div class="w3-example">
                  <h3>Example</h3>
                  <div class="w3-code htmlHigh notranslate">
                  &lt;html&gt;<br>
                  &lt;body&gt;<br>
                  <br>
                  &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>
                  &lt;p&gt;Some text.&lt;/p&gt;<br>&lt;p&gt;Some more text.&lt;/p&gt;<br>&lt;?php include 'footer.php';?&gt;<br>
                  <br>
                  &lt;/body&gt;<br>
                  &lt;/html&gt;
                  </div>
                 
                  </div>
                  <hr>
                  <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
                  <!-- MidContent -->
                  <!-- <p class="adtext">Advertisement</p> -->
                  
                    <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
                    <div id="snhb-mid_content-0"></div>
                  
                  </div>
                  <hr>
                  
                  <h3>Example 2</h3>
                  <p>Assume we have a standard menu file called &quot;menu.php&quot;:</p>
                  <div class="w3-code w3-border notranslate"><div>
                   &lt;?php<br>echo '&lt;a href=&quot;/default.asp&quot;&gt;Home&lt;/a&gt; -<br>&lt;a href=&quot;/html/default.asp&quot;&gt;HTML Tutorial&lt;/a&gt; -<br>&lt;a href=&quot;/css/default.asp&quot;&gt;CSS Tutorial&lt;/a&gt; -<br>&lt;a href=&quot;/js/default.asp&quot;&gt;JavaScript Tutorial&lt;/a&gt; -<br>&lt;a href=&quot;default.asp&quot;&gt;PHP Tutorial&lt;/a&gt;';<br>?&gt;</div></div>
                  <p>All pages in the Web site should use this menu file. Here is how it can be done 
                  (we are using a &lt;div&gt; element so that the menu easily can be styled with CSS later):</p>
                  
                  <div class="w3-example">
                  <h3>Example</h3>
                  <div class="w3-code htmlHigh notranslate">
                  &lt;html&gt;<br>
                  &lt;body&gt;<br>
                  <br>
                   &lt;div class=&quot;menu&quot;&gt;<br>&lt;?php include 'menu.php';?&gt;<br>&lt;/div&gt;<br><br>
                   &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>&lt;p&gt;Some text.&lt;/p&gt;<br>&lt;p&gt;Some more text.&lt;/p&gt;<br>
                  <br>
                  &lt;/body&gt;<br>
                  &lt;/html&gt;
                  </div>
                  
                  </div>
                  <hr>
                  
                  <h3>Example 3</h3>
                  <p>Assume we have a file called &quot;vars.php&quot;, with some variables defined:</p>
                  <div class="w3-code w3-border notranslate"><div>
                  &lt;?php<br>
                  $color='red';<br>
                  $car='BMW';<br>
                  ?&gt;</div></div>
                  <p>Then, if we include the &quot;vars.php&quot; file, the variables can be used in the calling file:</p>
                  <div class="w3-example">
                  <h3>Example</h3>
                  <div class="w3-code htmlHigh notranslate">
                  &lt;html&gt;<br>
                  &lt;body&gt;<br>
                  <br>
                  &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>
                  &lt;?php include 'vars.php';<br>
                  echo &quot;I have a $color $car.&quot;;<br>?&gt;<br>
                  <br>
                  &lt;/body&gt;<br>
                  &lt;/html&gt;
                  </div>
                  
                  </div>
                  <hr>
                  
                  <h2>PHP include vs. require</h2>
                  <p>The <code class="w3-codespan">require</code> statement is also used to include a file into the PHP code.</p>
                  <p>However, there is one big difference between include and require; when a 
                  file is included with the <code class="w3-codespan">include</code> statement and PHP cannot find it, the script 
                  will continue to execute:</p>
                  <div class="w3-example">
                  <h3>Example</h3>
                  <div class="w3-code htmlHigh notranslate">
                  &lt;html&gt;<br>
                  &lt;body&gt;<br>
                  <br>
                  &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>
                  &lt;?php include 'noFileExists.php';<br>
                  echo &quot;I have a $color $car.&quot;;<br>?&gt;<br>
                  <br>
                  &lt;/body&gt;<br>
                  &lt;/html&gt;
                  </div>
                 
                  </div>
                  
                  <p>If we do the same example using the <code class="w3-codespan">require</code> statement, the 
                  echo statement will not be executed because the script execution dies after the 
                  <code class="w3-codespan">require</code> statement returned a fatal error:</p>
                  <div class="w3-example">
                  <h3>Example</h3>
                  <div class="w3-code htmlHigh notranslate">
                  &lt;html&gt;<br>
                  &lt;body&gt;<br>
                  <br>
                  &lt;h1&gt;Welcome to my home page!&lt;/h1&gt;<br>
                  &lt;?php require 'noFileExists.php';<br>
                  echo &quot;I have a $color $car.&quot;;<br>?&gt;<br>
                  <br>
                  &lt;/body&gt;<br>
                  &lt;/html&gt;
                  </div>
                  
                  </div>
                  
                  <div class="w3-panel w3-note">
                  <p>Use <code class="w3-codespan">require</code> when the file is required by the application.</p>
                  <p>Use <code class="w3-codespan">include</code> when the file is not required and application should continue when file is not found.</p>
                  </div>
                  <hr>
                


              </div>
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