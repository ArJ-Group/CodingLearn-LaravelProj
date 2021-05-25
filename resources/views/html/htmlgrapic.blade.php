


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
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>CLA</title>
  

  
  
    <link rel="shortcut icon" href="b/ci-icon.ico"/>
  

  
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  
  
    

  

  
  
    <link rel="stylesheet" href="b/css/citheme.css" type="text/css" />
  

  
        <link rel="index" title="Index"
              href="../genindex.html"/>
        <link rel="search" title="Search" href="../search.html"/>
    <link rel="top" title="CodeIgniter 3.1.11 documentation" href="../index.html"/>
        <link rel="next" title="Static pages" href="static_pages.html"/>
        <link rel="prev" title="Design and Architectural Goals" href="../overview/goals.html"/> 

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div id="nav">
  <div id="nav_inner">
    
    
    
      <div id="pulldown-menu" class="ciNav">
        <ul>
<li class="toctree-l1"><a class="reference internal" href="welcome.html">Welcome to HTML</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../installation/index.html">HTML Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="">HTML Home</a></li>
<li class="toctree-l2 current"><a class="current reference internal" href="#">HTML Introduction</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTML Editors</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Basic</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Element</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Attribute</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Headings</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Paragraph</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Styles</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Formatting</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Quotations</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Comments</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Colors</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML CSS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML links</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Images</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Tables</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML List</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Block and Inline</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Id</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Iframes</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Javascript</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML File Paths</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Head</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Layout</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Responsive</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Computer Code</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Semantics</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Style Guide</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Entities</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Symbols</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Emojis</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Charset</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML URL Encode</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="#">HTML FORMS</a><ul>
<li class="toctree-l2"><a class="reference internal" href="getting_started.html">HTML Forms</a></li>
<li class="toctree-l2"><a class="reference internal" href="at_a_glance.html">HTML Forms Attribute</a></li>
<li class="toctree-l2"><a class="reference internal" href="features.html">HTML Forms Elements</a></li>
<li class="toctree-l2"><a class="reference internal" href="appflow.html">HTML Input Types</a></li>
<li class="toctree-l2"><a class="reference internal" href="mvc.html">HTML Input Attributes</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">HTML Input Forms Attributes</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="#">HTML Graphics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="static_pages.html">HTMl Canva</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">HTMl SVG</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="#">HTML Media</a><ul>
<li class="toctree-l2"><a class="reference internal" href="">HTML Media</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Video</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Audio</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Plug-Ins</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl YouTube</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1 current"><a class="current reference internal" href="#">HTML APIs</a><ul>
<li class="toctree-l2"><a class="reference internal" href="urls.html">HTMl Geolocation</a></li>
<li class="toctree-l2"><a class="reference internal" href="controllers.html">HTMl Drag/Drop</a></li>
<li class="toctree-l2"><a class="reference internal" href="reserved_names.html">HTML Web Storage</a></li>
<li class="toctree-l2"><a class="reference internal" href="views.html">HTML Web Workers</a></li>
<li class="toctree-l2"><a class="reference internal" href="models.html">HTML SSE</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../libraries/index.html">HTML Examples</a><ul>
<li class="toctree-l2"><a class="reference internal" href="benchmark.html">HTML Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">HTML Quiz</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.html">HTML Exercise</a></li>
<li class="toctree-l2"><a class="reference internal" href="cart.html">HTML Certificate</a></li>
<li class="toctree-l2"><a class="reference internal" href="config.html">HTML Summary</a></li>
<li class="toctree-l2"><a class="reference internal" href="email.html">HTML Accessibility</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../database/index.html">HTML Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="examples.html">HTML Tag List</a></li>
<li class="toctree-l2"><a class="reference internal" href="configuration.html">HTML Attributes</a></li>
<li class="toctree-l2"><a class="reference internal" href="connecting.html">HTML Global Attributes</a></li>
<li class="toctree-l2"><a class="reference internal" href="queries.html">HTML Browser Support</a></li>
<li class="toctree-l2"><a class="reference internal" href="results.html">HTML Events</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers.html">HTML Colors</a></li>
<li class="toctree-l2"><a class="reference internal" href="query_builder.html">HTML Canvas</a></li>
<li class="toctree-l2"><a class="reference internal" href="transactions.html">HTML Audio/Video</a></li>
<li class="toctree-l2"><a class="reference internal" href="metadata.html">HTML Doctypes</a></li>
<li class="toctree-l2"><a class="reference internal" href="call_function.html">HTML Character Sets</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">HTML URL Encode</a></li>
<li class="toctree-l2"><a class="reference internal" href="forge.html">HTML Lang Codes</a></li>
<li class="toctree-l2"><a class="reference internal" href="utilities.html">HTML Messages</a></li>
<li class="toctree-l2"><a class="reference internal" href="db_driver_reference.html">HTML Methods</a></li>
<li class="toctree-l2"><a class="reference internal" href="db_driver_reference.html">Keyboard Short Cut</a></li>
<li class="toctree-l2"><a class="reference internal" href="db_driver_reference.html">PX to EM Converter</a></li>
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
        
          <a href="../index.html" class="fa fa-home"> HTML</a>
        
        
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
<li class="toctree-l1"><a class="reference internal" href="{{url('html.welcomehtml')}}">Welcome to HTML</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmltutor')}}">HTML Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="{{url('html.htmltutor')}}">HTML Home</a></li>
<li class="toctree-l2 current"><a class="current reference internal" href="#">HTML Introduction</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTML Editors</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Basic</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Element</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Attribute</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Headings</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Paragraph</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Styles</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Formatting</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Quotations</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Comments</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Colors</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML CSS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML links</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Images</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Tables</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML List</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Block and Inline</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Id</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Iframes</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Javascript</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML File Paths</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Head</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Layout</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Responsive</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Computer Code</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Semantics</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Style Guide</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Entities</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Symbols</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Emojis</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML Charset</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">HTML URL Encode</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmlform')}}">HTML FORMS</a><ul>
<li class="toctree-l2"><a class="reference internal" href="{{url('html.htmlform')}}">HTML Forms</a></li>
<li class="toctree-l2"><a class="reference internal" href="at_a_glance.html">HTML Forms Attribute</a></li>
<li class="toctree-l2"><a class="reference internal" href="features.html">HTML Forms Elements</a></li>
<li class="toctree-l2"><a class="reference internal" href="appflow.html">HTML Input Types</a></li>
<li class="toctree-l2"><a class="reference internal" href="mvc.html">HTML Input Attributes</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">HTML Input Forms Attributes</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1 current"><a class="current reference internal" href="{{url('html.htmlgrapic')}}">HTML Graphics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="{{url('html.htmlgrapic')}}">HTMl Canva</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">HTMl SVG</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmlmedia')}}">HTML Media</a><ul>
<li class="toctree-l2"><a class="reference internal" href="{{url('html.htmlmedia')}}">HTML Media</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Video</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Audio</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Plug-Ins</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl YouTube</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmlexamp')}}">HTML APIs</a><ul>
<li class="toctree-l2"><a class="reference internal" href="{{url('html.htmlexamp')}}">HTMl Geolocation</a></li>
<li class="toctree-l2"><a class="reference internal" href="controllers.html">HTMl Drag/Drop</a></li>
<li class="toctree-l2"><a class="reference internal" href="reserved_names.html">HTML Web Storage</a></li>
<li class="toctree-l2"><a class="reference internal" href="views.html">HTML Web Workers</a></li>
<li class="toctree-l2"><a class="reference internal" href="models.html">HTML SSE</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmlexamp')}}">HTML Examples</a><ul>
<li class="toctree-l2"><a class="reference internal" href="{{url('html.htmlexamp')}}">HTML Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">HTML Quiz</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.html">HTML Exercise</a></li>
<li class="toctree-l2"><a class="reference internal" href="cart.html">HTML Certificate</a></li>
<li class="toctree-l2"><a class="reference internal" href="config.html">HTML Summary</a></li>
<li class="toctree-l2"><a class="reference internal" href="email.html">HTML Accessibility</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmlreferences')}}">HTML Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="{{url('html.htmlreferences')}}">HTML Tag List</a></li>
<li class="toctree-l2"><a class="reference internal" href="configuration.html">HTML Attributes</a></li>
<li class="toctree-l2"><a class="reference internal" href="connecting.html">HTML Global Attributes</a></li>
<li class="toctree-l2"><a class="reference internal" href="queries.html">HTML Browser Support</a></li>
<li class="toctree-l2"><a class="reference internal" href="results.html">HTML Events</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers.html">HTML Colors</a></li>
<li class="toctree-l2"><a class="reference internal" href="query_builder.html">HTML Canvas</a></li>
<li class="toctree-l2"><a class="reference internal" href="transactions.html">HTML Audio/Video</a></li>
<li class="toctree-l2"><a class="reference internal" href="metadata.html">HTML Doctypes</a></li>
<li class="toctree-l2"><a class="reference internal" href="call_function.html">HTML Character Sets</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">HTML URL Encode</a></li>
<li class="toctree-l2"><a class="reference internal" href="forge.html">HTML Lang Codes</a></li>
<li class="toctree-l2"><a class="reference internal" href="utilities.html">HTML Messages</a></li>
<li class="toctree-l2"><a class="reference internal" href="db_driver_reference.html">HTML Methods</a></li>
<li class="toctree-l2"><a class="reference internal" href="db_driver_reference.html">Keyboard Short Cut</a></li>
<li class="toctree-l2"><a class="reference internal" href="db_driver_reference.html">PX to EM Converter</a></li>
</ul>
</li>
</ul>


          
        
      </div>
      &nbsp;
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="../index.html">CodeIgniter</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="../index.html">Docs</a> &raquo;</li>
      
    <li>Tutorial</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
    <div style="float:right;margin-left:5px;" id="closeMe">
      <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
    </div>
  </ul>
  <hr/>
</div>
          <div role="main" class="document">
            
  <div class="section" id="tutorial">
<h1>HTML CANVAS<a class="headerlink" href="#tutorial" title="Permalink to this headline">¶</a></h1>
<div>
  <table>
  <tbody> <tr>
    <td style="width:225px"><img alt="Videoformats" width="196" height="109" src="a/images/gra.png"></td>
    <td>The HTML <code class="w3-codespan">&lt;canvas&gt;</code> element is used to draw graphics on a web page.<br>
    <br> The graphic to the left is created with <code class="w3-codespan">&lt;canvas&gt;</code>. It shows four 
    elements: a red rectangle, a gradient rectangle,
    a multicolor rectangle, and a multicolor text</td>
    </tr></tbody></table><br>

    <h2>What is HTML Canvas?</h2>
<p>The HTML <code class="w3-codespan">&lt;canvas&gt;</code> element is used to draw graphics, on the fly, via JavaScript.</p>
<p>The <code class="w3-codespan">&lt;canvas&gt;</code> element is only a container for graphics. You must use  
JavaScript to actually draw the graphics.</p>
<p>Canvas has several methods for drawing paths, boxes, circles, text, and adding images.</p>
<hr>

<h2>What is HTML Canvas?</h2>
<p>The HTML <code class="w3-codespan">&lt;canvas&gt;</code> element is used to draw graphics, on the fly, via JavaScript.</p>
<p>The <code class="w3-codespan">&lt;canvas&gt;</code> element is only a container for graphics. You must use  
JavaScript to actually draw the graphics.</p>
<p>Canvas has several methods for drawing paths, boxes, circles, text, and adding images.</p>
<hr>

<h2>Browser Support</h2>
<p>The numbers in the table specify the first browser version that fully supports the 
<code class="w3-codespan">&lt;canvas&gt;</code> element.</p>
<table class="browserref notranslate">
  <tbody><tr>
    <th style="width:20%;font-size:16px;text-align:left;">Element</th>
    <th style="width:16%;" class="bsChrome" title="Chrome"></th>
    <th style="width:16%;" class="bsEdge" title="Internet Explorer / Edge"></th>
    <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
    <th style="width:16%;" class="bsSafari" title="Safari"></th>
    <th style="width:16%;" class="bsOpera" title="Opera"></th>                
  </tr>
  <tr>
    <td style="text-align:left;">&lt;canvas&gt;</td>
    <td>4.0</td>
    <td>9.0</td>
    <td>2.0</td>
    <td>3.1</td>
    <td>9.0</td>
  </tr>
</tbody></table>
<hr>

<h2>Canvas Examples</h2>
<p>A canvas is a rectangular area on an HTML page. By default, a canvas has no border and no content.</p>
<p>The markup looks like this:</p>


<div class="highlight-ci"><div class="highlight"><pre><span></span><span class="o"></span><span class="nx"></span><span class="o"></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>canvas<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="myCanvas"</span> width<span class="attributevaluecolor" style="color:mediumblue">="200"</span> height<span class="attributevaluecolor" style="color:mediumblue">="100"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/canvas<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
    
  </div>
  
  </pre></div>

  <div class="admonition note">
    <p class="first admonition-title">Note </p>
    <p class="last"><p>Always specify an <code class="w3-codespan">id</code> attribute (to be referred to in a script), 
      and a <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code> 
      attribute to define the size of the canvas. To add a border, use the <code class="w3-codespan">style</code> attribute.</p> 
    </div>

<h4>Here is an example of a basic, empty canvas:</h4>

<canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;">
Your browser does not support the canvas element.
</canvas>
<div class="w3-example">
<h3>Example</h3>

<div class="highlight-ci"><div class="highlight"><pre><span></span><span class="o"></span><span class="nx"></span><span class="o"></span> <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>canvas<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="myCanvas"</span> width<span class="attributevaluecolor" style="color:mediumblue">="200"</span> height<span class="attributevaluecolor" style="color:mediumblue">="100"</span>style<span class="attributevaluecolor" style="color:mediumblue">="border:1px solid #000000;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/canvas<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
</div>

</pre></div>

<a target="_blank" href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_canvas_empty" class="btn btn-primary btn-lg btn-block border-none">Try it Yourself »</a>
</div>

<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0" data-google-query-id="CJnenKqBj_ACFfyLZgId3EcGWg" style="display: none;"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>

</div>
<hr>

<h2>Add a JavaScript</h2>
<p>After creating the rectangular canvas area, you must add a JavaScript to do 
the drawing.</p>
<p>Here are some examples:</p>
<h3>Draw a Line</h3>
<canvas id="myCanvas2" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element
</canvas>
<script>
var c=document.getElementById("myCanvas2");
var canvOK=1;
try {c.getContext("2d");}
catch (er) {canvOK=0;}
if (canvOK==1)
 {
 var ctx=c.getContext("2d");
 ctx.moveTo(0,0);
 ctx.lineTo(200,100);
 ctx.stroke();
 }
</script> 
<div class="w3-example">
<h3>Example</h3>
<div class="highlight-ci"><div class="highlight"><pre><span></span><div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>&lt;script&gt;<br><span class="jskeywordcolor" style="color:mediumblue">var</span> c = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myCanvas"</span>);<br><span class="jskeywordcolor" style="color:mediumblue">var</span> ctx = c.<span class="jspropertycolor" style="color:black">getContext</span>(<span class="jsstringcolor" style="color:brown">"2d"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> ctx.<span class="jspropertycolor" style="color:black">moveTo</span>(<span class="jsnumbercolor" style="color:red">0</span>, <span class="jsnumbercolor" style="color:red">0</span>);<br>ctx.<span class="jspropertycolor" style="color:black">lineTo</span>(<span class="jsnumbercolor" style="color:red">200</span>, <span class="jsnumbercolor" style="color:red">100</span>);<br><span class="jsnumbercolor" style="color:red">
</span> ctx.<span class="jspropertycolor" style="color:black">stroke</span>();<br>&lt;/script&gt; </span></div>
</div>
</div>
<a class="btn btn-primary btn-lg btn-block border-none" href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_canvas_tut_path" target="_blank">Try it Yourself »</a>
<br><br>
<h3>Draw a Circle</h3>
<canvas id="myCanvas3" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element
</canvas>
<script>
var c=document.getElementById("myCanvas3");
var canvOK=1;
try {c.getContext("2d");}
catch (er) {canvOK=0;}
if (canvOK==1)
 {
 var ctx=c.getContext("2d");
 ctx.beginPath();
 ctx.arc(95,50,40,0,2*Math.PI);
 ctx.stroke();
 }
</script> 
<div class="w3-example">
<h3>Example</h3>

<div class="highlight-ci"><div class="highlight"><pre><span></span><div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>  &lt;script&gt;<br><span class="jskeywordcolor" style="color:mediumblue">var</span> c = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myCanvas"</span>);<br><span class="jskeywordcolor" style="color:mediumblue">var</span> ctx = c.<span class="jspropertycolor" style="color:black">getContext</span>(<span class="jsstringcolor" style="color:brown">"2d"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> ctx.<span class="jspropertycolor" style="color:black">beginPath</span>();<br>ctx.<span class="jspropertycolor" style="color:black">arc</span>(<span class="jsnumbercolor" style="color:red">95</span>, <span class="jsnumbercolor" style="color:red">50</span>, <span class="jsnumbercolor" style="color:red">40</span>, <span class="jsnumbercolor" style="color:red">0</span>, <span class="jsnumbercolor" style="color:red">2</span> * Math.<span class="jspropertycolor" style="color:black">PI</span>);<br>ctx.<span class="jspropertycolor" style="color:black">stroke</span>();<br><span class="jsnumbercolor" style="color:red">
</span>  &lt;/script&gt; </span></div>
</div>

</div>
<a class="btn btn-primary btn-lg btn-block border-none" href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_canvas_tut_path2" target="_blank">Try it Yourself »</a>
<br><br>

<h3>Draw a Text</h3>
<canvas id="myCanvas4" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element
</canvas>
<script>
var c=document.getElementById("myCanvas4");
var canvOK=1;
try {c.getContext("2d");}
catch (er) {canvOK=0;}
if (canvOK==1)
 {
    var ctx=c.getContext("2d");
    ctx.font="30px Arial";
    ctx.fillText("Hello World",10,50);
 }
</script> 
<div class="w3-example">
<h3>Example</h3>

<div class="highlight-ci"><pre><span></span><div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>   &lt;script&gt;<br><span class="jskeywordcolor" style="color:mediumblue">var</span> c = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myCanvas"</span>);<br><span class="jskeywordcolor" style="color:mediumblue">var</span> ctx = c.<span class="jspropertycolor" style="color:black">getContext</span>(<span class="jsstringcolor" style="color:brown">"2d"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> ctx.<span class="jspropertycolor" style="color:black">font</span> = <span class="jsstringcolor" style="color:brown">"30px Arial"</span>;<br>ctx.<span class="jspropertycolor" style="color:black">fillText</span>(<span class="jsstringcolor" style="color:brown">"Hello World"</span>, <span class="jsnumbercolor" style="color:red">10</span>, <span class="jsnumbercolor" style="color:red">50</span>);<br><span class="jsnumbercolor" style="color:red">
</span>   &lt;/script&gt; </span></div>
</div>
</div>
<a class="btn btn-primary btn-lg btn-block border-none" href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_canvas_tut_text" target="_blank">Try it Yourself »</a>
<br><br>


<h3>Stroke Text</h3>
<canvas id="myCanvas5" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element
</canvas>
<script>
var c=document.getElementById("myCanvas5");
var canvOK=1;
try {c.getContext("2d");}
catch (er) {canvOK=0;}
if (canvOK==1)
 {
    var ctx=c.getContext("2d");
    ctx.font="30px Arial";
    ctx.strokeText("Hello World",10,50);
 }
</script> 
<div class="w3-example">
<h3>Example</h3>

<div class="highlight-ci"><pre><span></span><div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>  &lt;script&gt;<br><span class="jskeywordcolor" style="color:mediumblue">var</span> c = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myCanvas"</span>);<br><span class="jskeywordcolor" style="color:mediumblue">var</span> ctx = c.<span class="jspropertycolor" style="color:black">getContext</span>(<span class="jsstringcolor" style="color:brown">"2d"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> ctx.<span class="jspropertycolor" style="color:black">font</span> = <span class="jsstringcolor" style="color:brown">"30px Arial"</span>;<br>ctx.<span class="jspropertycolor" style="color:black">strokeText</span>(<span class="jsstringcolor" style="color:brown">"Hello World"</span>, <span class="jsnumbercolor" style="color:red">10</span>, <span class="jsnumbercolor" style="color:red">50</span>);<br><span class="jsnumbercolor" style="color:red">
</span>  &lt;/script&gt; </span></div>
</div>



<h3>Draw Linear Gradient</h3>
<canvas id="myCanvas6" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element
</canvas>
<script>
var c=document.getElementById("myCanvas6");
var canvOK=1;
try {c.getContext("2d");}
catch (er) {canvOK=0;}
if (canvOK==1)
 {
    var ctx=c.getContext("2d");
    // Create gradient
    var grd = ctx.createLinearGradient(0,0,200,0);
    grd.addColorStop(0,"red");
    grd.addColorStop(1,"white");
    // Fill with gradient
    ctx.fillStyle = grd;
    ctx.fillRect(10,10,150,80);
 }
</script> 
<div class="w3-example">
<h3>Example</h3>

<div class="highlight-ci"><pre><span></span><div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>   &lt;script&gt;<br><span class="jskeywordcolor" style="color:mediumblue">var</span> c = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myCanvas"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> ctx = c.<span class="jspropertycolor" style="color:black">getContext</span>(<span class="jsstringcolor" style="color:brown">"2d"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> <br><span class="jsnumbercolor" style="color:red">
</span> <span class="commentcolor" style="color:green">// Create gradient<br></span><span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> grd = ctx.<span class="jspropertycolor" style="color:black">createLinearGradient</span>(<span class="jsnumbercolor" style="color:red">0</span>, <span class="jsnumbercolor" style="color:red">0</span>, <span class="jsnumbercolor" style="color:red">200</span>, <span class="jsnumbercolor" style="color:red">0</span>);<br><span class="jsnumbercolor" style="color:red">
</span> grd.<span class="jspropertycolor" style="color:black">addColorStop</span>(<span class="jsnumbercolor" style="color:red">0</span>, <span class="jsstringcolor" style="color:brown">"red"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> grd.<span class="jspropertycolor" style="color:black">addColorStop</span>(<span class="jsnumbercolor" style="color:red">1</span>, <span class="jsstringcolor" style="color:brown">"white"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> <br><span class="jsnumbercolor" style="color:red">
</span> <span class="commentcolor" style="color:green">// Fill with gradient<br></span><span class="jsnumbercolor" style="color:red">
</span> ctx.<span class="jspropertycolor" style="color:black">fillStyle</span> = grd;<br><span class="jsnumbercolor" style="color:red">
</span> ctx.<span class="jspropertycolor" style="color:black">fillRect</span>(<span class="jsnumbercolor" style="color:red">10</span>, <span class="jsnumbercolor" style="color:red">10</span>, <span class="jsnumbercolor" style="color:red">150</span>, <span class="jsnumbercolor" style="color:red">80</span>);<br>&lt;/script&gt; </span></div>

 <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</div>
</div><br>

<a class="btn btn-primary btn-lg btn-block border-none" href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_canvas_tut_grad" target="_blank">Try it Yourself »</a>
<br><br><h3>Draw Circular Gradient</h3>
<canvas id="myCanvas7" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element
</canvas>
<script>
var c=document.getElementById("myCanvas7");
var canvOK=1;
try {c.getContext("2d");}
catch (er) {canvOK=0;}
if (canvOK==1)
 {
    var ctx=c.getContext("2d");
    // Create gradient
    var grd = ctx.createRadialGradient(75,50,5,90,60,100);
    grd.addColorStop(0,"red");
    grd.addColorStop(1,"white");
    // Fill with gradient
    ctx.fillStyle = grd;
    ctx.fillRect(10,10,150,80);
 }
</script> 
<div class="w3-example">
<h3>Example</h3>

<div class="highlight-ci"><pre><span></span><div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>   &lt;script&gt;<br><span class="jskeywordcolor" style="color:mediumblue">var</span> c = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myCanvas"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> ctx = c.<span class="jspropertycolor" style="color:black">getContext</span>(<span class="jsstringcolor" style="color:brown">"2d"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> <br><span class="jsnumbercolor" style="color:red">
</span> <span class="commentcolor" style="color:green">// Create gradient<br></span><span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> grd = ctx.<span class="jspropertycolor" style="color:black">createRadialGradient</span>(<span class="jsnumbercolor" style="color:red">75</span>, <span class="jsnumbercolor" style="color:red">50</span>, <span class="jsnumbercolor" style="color:red">5</span>, <span class="jsnumbercolor" style="color:red">90</span>, <span class="jsnumbercolor" style="color:red">60</span>, <span class="jsnumbercolor" style="color:red">100</span>);<br><span class="jsnumbercolor" style="color:red">
</span> grd.<span class="jspropertycolor" style="color:black">addColorStop</span>(<span class="jsnumbercolor" style="color:red">0</span>, <span class="jsstringcolor" style="color:brown">"red"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> grd.<span class="jspropertycolor" style="color:black">addColorStop</span>(<span class="jsnumbercolor" style="color:red">1</span>, <span class="jsstringcolor" style="color:brown">"white"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> <br><span class="jsnumbercolor" style="color:red">
</span> <span class="commentcolor" style="color:green">// Fill with gradient<br></span><span class="jsnumbercolor" style="color:red">
</span>  ctx.<span class="jspropertycolor" style="color:black">fillStyle</span> = grd;<br>ctx.<span class="jspropertycolor" style="color:black">fillRect</span>(<span class="jsnumbercolor" style="color:red">10</span>, <span class="jsnumbercolor" style="color:red">10</span>, <span class="jsnumbercolor" style="color:red">150</span>, <span class="jsnumbercolor" style="color:red">80</span>);<br>&lt;/script&gt; </span></div>
</div>


<div class="w3-example">
<h3>Draw Image</h3>

<div class="highlight-ci"><pre><span></span><div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
</span>  &lt;script&gt;<br><span class="jskeywordcolor" style="color:mediumblue">var</span> c = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"myCanvas"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> ctx = c.<span class="jspropertycolor" style="color:black">getContext</span>(<span class="jsstringcolor" style="color:brown">"2d"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> <span class="jskeywordcolor" style="color:mediumblue">var</span> img = document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"scream"</span>);<br><span class="jsnumbercolor" style="color:red">
</span> ctx.<span class="jspropertycolor" style="color:black">drawImage</span>(img, <span class="jsnumbercolor" style="color:red">10</span>, <span class="jsnumbercolor" style="color:red">10</span>);<br>&lt;/script&gt; </span></div>
</div>
<a class="btn btn-primary btn-lg btn-block border-none" href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_canvas_tut_img" target="_blank">Try it Yourself »</a>
<br><br>
<h2>HTML Canvas Tutorial</h2>
<p>To learn more about <code class="w3-codespan">&lt;canvas&gt;</code>, please 
read our <a href="https://www.w3schools.com/graphics/canvas_intro.asp">HTML Canvas Tutorial</a>.</p>

  </div>
</div>


          </div><br><br><br>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="static_pages.html" class="btn btn-neutral float-right" title="Static pages">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="../overview/goals.html" class="btn btn-neutral" title="Design and Architectural Goals"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
    </div>
  

  <hr/>

  <div role="contentinfo">
    <p>
        &copy; Copyright 2014 - 2019, British Columbia Institute of Technology.
      Last updated on Sep 19, 2019.
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
            URL_ROOT:'../',
            VERSION:'3.1.11',
            COLLAPSE_INDEX:false,
            FILE_SUFFIX:'.html',
            HAS_SOURCE:  false
        };
    </script>
      <script type="text/javascript" src="b/jquery.js"></script>
      <script type="text/javascript" src="b/underscore.js"></script>
      <script type="text/javascript" src="b/doctools.js"></script>

  

  
  
    <script type="text/javascript" src="b/js/theme.js"></script>
  

  
  
  <script type="text/javascript">
      jQuery(function () {
          SphinxRtdTheme.StickyNav.enable();
      });
  </script>
   

</body>
</html>