


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
        <link rel="next" title="Database Quick Start: Example Code" href="examples.html"/>
        <link rel="prev" title="Zip Encoding Class" href="../libraries/zip.html"/> 

        <style>
          table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
          }
          
          td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }
          
          tr:nth-child(even) {
            background-color: #dddddd;
          }
          </style>


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
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmlgrapic')}}">HTML Graphics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="static_pages.html">HTMl Canva</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">HTMl SVG</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmlmedia')}}">HTML Media</a><ul>
<li class="toctree-l2"><a class="reference internal" href="">HTML Media</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Video</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Audio</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Plug-Ins</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl YouTube</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="#">HTML APIs</a><ul>
<li class="toctree-l2"><a class="reference internal" href="urls.html">HTMl Geolocation</a></li>
<li class="toctree-l2"><a class="reference internal" href="controllers.html">HTMl Drag/Drop</a></li>
<li class="toctree-l2"><a class="reference internal" href="reserved_names.html">HTML Web Storage</a></li>
<li class="toctree-l2"><a class="reference internal" href="views.html">HTML Web Workers</a></li>
<li class="toctree-l2"><a class="reference internal" href="models.html">HTML SSE</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmlexamp')}}">HTML Examples</a><ul>
<li class="toctree-l2"><a class="reference internal" href="benchmark.html">HTML Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">HTML Quiz</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.html">HTML Exercise</a></li>
<li class="toctree-l2"><a class="reference internal" href="cart.html">HTML Certificate</a></li>
<li class="toctree-l2"><a class="reference internal" href="config.html">HTML Summary</a></li>
<li class="toctree-l2"><a class="reference internal" href="email.html">HTML Accessibility</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1 current"><a class="current reference internal" href="{{url('html.htmlreferences')}}">HTML REFERENCES</a><ul>
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
        <a href="../index.html">HTML</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="../index.html">Docs</a> &raquo;</li>
      
    <li>HTML Tags</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
    <div style="float:right;margin-left:5px;" id="closeMe">
      <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
    </div>
  </ul>
  <hr/>
</div>
          <div role="main" class="document">
            
  <div class="section" id="database-reference">
<h1>HTML Tags<a class="headerlink" href="#database-reference" title="Permalink to this headline">¶</a></h1>

<h1>HTML <span class="color_h1">Element Reference</span></h1>
<hr>


<div id="htmltags">

<table class="w3-table-all notranslate">
<tbody><tr>
<th style="width:25%">Tag</th>
<th>Description</th>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_comment.asp">&lt;!--...--&gt;</a></td>
<td>Defines a comment</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_doctype.asp">&lt;!DOCTYPE&gt;</a>&nbsp;</td>
<td>Defines the document type</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_a.asp">&lt;a&gt;</a></td>
<td>Defines a hyperlink</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_abbr.asp">&lt;abbr&gt;</a></td>
<td>Defines an abbreviation or an acronym</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_acronym.asp" class="notsupported">&lt;acronym&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5. Use <a href="https://www.w3schools.com/tags/tag_abbr.asp">&lt;abbr&gt;</a> instead.<br></span>Defines an acronym</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_address.asp">&lt;address&gt;</a></td>
<td>Defines contact information for the author/owner of a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_applet.asp" class="notsupported">&lt;applet&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5. Use <a href="https://www.w3schools.com/tags/tag_embed.asp">&lt;embed&gt;</a> or <a href="https://www.w3schools.com/tags/tag_object.asp">&lt;object&gt;</a> instead.<br></span>Defines an embedded applet</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_area.asp">&lt;area&gt;</a></td>
<td>Defines an area inside an image map</td>
</tr>
<tr>
<td class="html5badge"><a href="https://www.w3schools.com/tags/tag_article.asp">&lt;article&gt;</a></td>
<td>Defines an article</td>
</tr>
<tr>
<td class="html5badge"><a href="https://www.w3schools.com/tags/tag_aside.asp">&lt;aside&gt;</a></td>
<td>Defines content aside from the page content</td>
</tr>
<tr>
<td class="html5badge"><a href="https://www.w3schools.com/tags/tag_audio.asp">&lt;audio&gt;</a></td>
<td>Defines embedded sound content</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_b.asp">&lt;b&gt;</a></td>
<td>Defines bold text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_base.asp">&lt;base&gt;</a></td>
<td>Specifies the base URL/target for all relative URLs in a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_basefont.asp" class="notsupported">&lt;basefont&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Specifies a default color, size, and font for all text in a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_bdi.asp">&lt;bdi&gt;</a></td>
<td>Isolates a part of text that might be formatted in a different direction 
from other text outside it</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_bdo.asp">&lt;bdo&gt;</a></td>
<td>Overrides the current text direction</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_big.asp" class="notsupported">&lt;big&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Defines big text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_blockquote.asp">&lt;blockquote&gt;</a></td>
<td>Defines a section that is quoted from another source</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_body.asp">&lt;body&gt;</a></td>
<td>Defines the document's body</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_br.asp">&lt;br&gt;</a></td>
<td>Defines a single line break</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_button.asp">&lt;button&gt;</a></td>
<td>Defines a clickable button</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_canvas.asp">&lt;canvas&gt;</a></td>
<td>Used to draw graphics, on the fly, via scripting (usually JavaScript)</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_caption.asp">&lt;caption&gt;</a></td>
<td>Defines a table caption</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_center.asp" class="notsupported">&lt;center&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Defines centered text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_cite.asp">&lt;cite&gt;</a></td>
<td>Defines the title of a work</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_code.asp">&lt;code&gt;</a></td>
<td>Defines a piece of computer code</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_col.asp">&lt;col&gt;</a></td>
<td>Specifies column properties for each column within a &lt;colgroup&gt; element&nbsp;</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_colgroup.asp">&lt;colgroup&gt;</a></td>
<td>Specifies a group of one or more columns in a table for formatting</td>
</tr>
  <tr>
<td><a href="https://www.w3schools.com/tags/tag_data.asp">&lt;data&gt;</a></td>
<td>Adds a machine-readable 
translation of a given content</td>
  </tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_datalist.asp">&lt;datalist&gt;</a></td>
<td>Specifies a list of pre-defined options for input controls</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_dd.asp">&lt;dd&gt;</a></td>
<td>Defines a description/value of a term in a description list</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_del.asp">&lt;del&gt;</a></td>
<td>Defines text that has been deleted from a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_details.asp">&lt;details&gt;</a></td>
<td>Defines additional details that the user can view or hide</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_dfn.asp">&lt;dfn&gt;</a></td>
<td>Specifies a term that is going to be defined within the content</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_dialog.asp">&lt;dialog&gt;</a></td>
<td>Defines a dialog box or window</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_dir.asp" class="notsupported">&lt;dir&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5. Use <a href="https://www.w3schools.com/tags/tag_ul.asp">&lt;ul&gt;</a> instead.<br></span>Defines a directory list</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_div.asp">&lt;div&gt;</a></td>
<td>Defines a section in a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_dl.asp">&lt;dl&gt;</a></td>
<td>Defines a description list</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_dt.asp">&lt;dt&gt;</a></td>
<td>Defines a term/name in a description list</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_em.asp">&lt;em&gt;</a></td>
<td>Defines emphasized text&nbsp;</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_embed.asp">&lt;embed&gt;</a></td>
<td>Defines a container for an external application</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_fieldset.asp">&lt;fieldset&gt;</a></td>
<td>Groups related elements in a form</td>
</tr>
<tr>
<td class="html5badge"><a href="https://www.w3schools.com/tags/tag_figcaption.asp">&lt;figcaption&gt;</a></td>
<td>Defines a caption for a &lt;figure&gt; element</td>
</tr>
<tr>
<td class="html5badge"><a href="https://www.w3schools.com/tags/tag_figure.asp">&lt;figure&gt;</a></td>
<td>Specifies self-contained content</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_font.asp" class="notsupported">&lt;font&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Defines font, color, and size for text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_footer.asp">&lt;footer&gt;</a></td>
<td>Defines a footer for a document or section</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_form.asp">&lt;form&gt;</a></td>
<td>Defines an HTML form for user input</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_frame.asp" class="notsupported">&lt;frame&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5.<br></span>Defines a window (a frame) in a frameset</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_frameset.asp" class="notsupported">&lt;frameset&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5.<br></span>Defines a set of frames</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_hn.asp">&lt;h1&gt; to &lt;h6&gt;</a></td>
<td> Defines HTML headings</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_head.asp">&lt;head&gt;</a></td>
<td>Contains metadata/information for the document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_header.asp">&lt;header&gt;</a></td>
<td>Defines a header for a document or section</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_hr.asp">&lt;hr&gt;</a></td>
<td> Defines a thematic change in the content</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_html.asp">&lt;html&gt;</a></td>
<td>Defines the root of an HTML document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_i.asp">&lt;i&gt;</a></td>
<td>Defines a part of text in an alternate voice or mood</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_iframe.asp">&lt;iframe&gt;</a></td>
<td>Defines an inline frame</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_img.asp">&lt;img&gt;</a></td>
<td>Defines an image</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_input.asp">&lt;input&gt;</a></td>
<td>Defines an input control</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_ins.asp">&lt;ins&gt;</a></td>
<td>Defines a text that has been inserted into a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_kbd.asp">&lt;kbd&gt;</a></td>
<td>Defines keyboard input</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_label.asp">&lt;label&gt;</a></td>
<td>Defines a label&nbsp;for an &lt;input&gt; element</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_legend.asp">&lt;legend&gt;</a></td>
<td>Defines a caption for a &lt;fieldset&gt; element</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_li.asp">&lt;li&gt;</a></td>
<td>Defines a list item</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_link.asp">&lt;link&gt;</a></td>
<td>Defines the relationship between a document and an external resource (most 
used to link to style sheets)</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_main.asp">&lt;main&gt;</a></td>
<td>Specifies the main content of a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_map.asp">&lt;map&gt;</a></td>
<td>Defines an image map</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_mark.asp">&lt;mark&gt;</a></td>
<td>Defines marked/highlighted text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_meta.asp">&lt;meta&gt;</a></td>
<td>Defines metadata about an HTML document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_meter.asp">&lt;meter&gt;</a></td>
<td>Defines a scalar measurement within a known range (a gauge)</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_nav.asp">&lt;nav&gt;</a></td>
<td>Defines navigation links</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_noframes.asp" class="notsupported">&lt;noframes&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5.<br></span>Defines an alternate content for users that do not support frames</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_noscript.asp">&lt;noscript&gt;</a></td>
<td>Defines an alternate content for users that do not support 
client-side scripts</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_object.asp">&lt;object&gt;</a></td>
<td>Defines a container for an external application</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_ol.asp">&lt;ol&gt;</a></td>
<td>Defines an ordered list</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_optgroup.asp">&lt;optgroup&gt;</a></td>
<td>Defines a group of related options in a drop-down list</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_option.asp">&lt;option&gt;</a></td>
<td>Defines an option in a drop-down list</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_output.asp">&lt;output&gt;</a></td>
<td>Defines the result of a calculation</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_p.asp">&lt;p&gt;</a></td>
<td>Defines a paragraph</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_param.asp">&lt;param&gt;</a></td>
<td>Defines a parameter for an object</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_picture.asp">&lt;picture&gt;</a></td>
<td>Defines a container for multiple image resources</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_pre.asp">&lt;pre&gt;</a></td>
<td>Defines preformatted text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_progress.asp">&lt;progress&gt;</a></td>
<td>Represents the progress of a task</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_q.asp">&lt;q&gt;</a></td>
<td>Defines a short quotation</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_rp.asp">&lt;rp&gt;</a></td>
<td>Defines what to show in browsers that do not support ruby annotations</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_rt.asp">&lt;rt&gt;</a></td>
<td>Defines an explanation/pronunciation of characters (for East Asian 
typography)</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_ruby.asp">&lt;ruby&gt;</a></td>
<td>Defines a ruby annotation (for East Asian typography)</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_s.asp">&lt;s&gt;</a></td>
<td>Defines text that is no longer correct</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_samp.asp">&lt;samp&gt;</a></td>
<td>Defines sample output from a computer program</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_script.asp">&lt;script&gt;</a></td>
<td>Defines a client-side script</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_section.asp">&lt;section&gt;</a></td>
<td>Defines a section in a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_select.asp">&lt;select&gt;</a></td>
<td>Defines a drop-down list</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_small.asp">&lt;small&gt;</a></td>
<td>Defines smaller text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_source.asp">&lt;source&gt;</a></td>
<td>Defines multiple media resources for media elements (&lt;video&gt; and &lt;audio&gt;)</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_span.asp">&lt;span&gt;</a></td>
<td>Defines a section in a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_strike.asp" class="notsupported">&lt;strike&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5. Use <a href="https://www.w3schools.com/tags/tag_del.asp">&lt;del&gt;</a> or <a href="https://www.w3schools.com/tags/tag_s.asp">&lt;s&gt;</a> instead.<br></span>Defines strikethrough text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_strong.asp">&lt;strong&gt;</a></td>
<td>Defines important text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_style.asp">&lt;style&gt;</a></td>
<td>Defines style information for a document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_sub.asp">&lt;sub&gt;</a></td>
<td>Defines subscripted text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_summary.asp">&lt;summary&gt;</a></td>
<td>Defines a visible heading for a &lt;details&gt; element</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_sup.asp">&lt;sup&gt;</a></td>
<td>Defines superscripted text</td>
</tr>
  <tr>
<td><a href="https://www.w3schools.com/tags/tag_svg.asp">&lt;svg&gt;</a></td>
<td>Defines a container for SVG graphics</td>
  </tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_table.asp">&lt;table&gt;</a></td>
<td>Defines a table</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_tbody.asp">&lt;tbody&gt;</a></td>
<td>Groups the body content in a table</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_td.asp">&lt;td&gt;</a></td>
<td>Defines a cell in a table</td>
</tr>
  <tr>
<td><a href="https://www.w3schools.com/tags/tag_template.asp">&lt;template&gt;</a></td>
<td>Defines a container for content that should be hidden when the page loads</td>
  </tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_textarea.asp">&lt;textarea&gt;</a></td>
<td>Defines a multiline input control (text area)</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_tfoot.asp">&lt;tfoot&gt;</a></td>
<td>Groups the footer content in a table</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_th.asp">&lt;th&gt;</a></td>
<td>Defines a header cell in a table</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_thead.asp">&lt;thead&gt;</a></td>
<td>Groups the header content in a table</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_time.asp">&lt;time&gt;</a></td>
<td>Defines a specific time (or datetime)</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_title.asp">&lt;title&gt;</a></td>
<td>Defines a title for the document</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_tr.asp">&lt;tr&gt;</a></td>
<td>Defines a row in a table</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_track.asp">&lt;track&gt;</a></td>
<td>Defines text tracks for media elements (&lt;video&gt; and &lt;audio&gt;)</td>
</tr>
<tr>
<td><a class="notsupported" href="https://www.w3schools.com/tags/tag_tt.asp">&lt;tt&gt;</a></td>
<td><span class="deprecated">Not supported in HTML5. Use CSS instead.<br></span>Defines teletype text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_u.asp">&lt;u&gt;</a></td>
<td>Defines some text that is unarticulated and styled differently from normal 
text</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_ul.asp">&lt;ul&gt;</a></td>
<td>Defines an unordered list</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_var.asp">&lt;var&gt;</a></td>
<td>Defines a variable</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_video.asp">&lt;video&gt;</a></td>
<td>Defines embedded video content</td>
</tr>
<tr>
<td><a href="https://www.w3schools.com/tags/tag_wbr.asp">&lt;wbr&gt;</a></td>
<td>Defines a possible line-break</td>
</tr>
</tbody></table>
</div>

</div>


          </div><br>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="examples.html" class="btn btn-neutral float-right" title="Database Quick Start: Example Code">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="../libraries/zip.html" class="btn btn-neutral" title="Zip Encoding Class"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
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