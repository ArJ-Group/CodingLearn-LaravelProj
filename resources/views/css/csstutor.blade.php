


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
  
  <title>Welcome to CSS </title>
  

    <link rel="shortcut icon" href="c/html.png"/>
  
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  
    <link rel="stylesheet" href="b/css/citheme.css" type="text/css" />
  

  
        <link rel="index" title="Index"
              href="../genindex.html"/>
        <link rel="search" title="Search" href="../search.html"/>
    <link rel="top" title="CodeIgniter 3.1.11 documentation" href="../index.html"/>
        <link rel="next" title="Installation Instructions" href="../installation/index.html"/>
        <link rel="prev" title="CodeIgniter User Guide" href="../index.html"/> 

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
        <ul class="current">
<li class="toctree-l1"><a class="reference internal" href="welcome.html">Welcome to CSS</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('html.htmltutor')}}">HTML Tutorial</a><ul>
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
        
          <a href="../index.html" class="fa fa-home"> CSS</a>
        
        
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
<li class="toctree-l1 current"><a class="current reference internal" href="{{url('css.welcomecss')}}">Welcome to CSS</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('css.csstutor')}}">CSS TUTORIAL</a><ul>
<li class="toctree-l2"><a class="reference internal" href="">CSS HOME</a></li>
<li class="toctree-l2 current"><a class="current reference internal" href="#">CSS INTRODUCTION</a></li>
<li class="toctree-l2"><a class="reference internal" href="">CSS SYNTAX</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS SELECTORS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS HOW TO</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS COMMENTS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS COLORS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS BACKGROUNDS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS BORDERS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS MARGINS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS PADDING</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS HEIGHT/WIDTH</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS BOX MODEL</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS OUTLINE</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS TEXT</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS FONTS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS ICONS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS LINKS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS LISTS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS TABLES</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS DISPLAY</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS MAX-width</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS POSITION</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS OVERFLOW</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS FLOAT</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS INLINE-BLOCK</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS ALIGN</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS COMBINATOR</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS PSEUDO-CLASS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS PSEUDO-ELEMENT</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS OPACITY</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS NAVIGATOR BAR</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS DROP DOWN</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS IMAGE GALLERY</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS IMAGE SPRITES</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS ATTR SELECTOR</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS FORMS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS COUNTERS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS WEBSITE LAYOUT</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS UNITS</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS SPECIFICITY</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">CSS IMPORTANT</a></li>

</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('css.cssadvanced')}}">CSS ADVANCED</a><ul>
<li class="toctree-l2"><a class="reference internal" href="getting_started.html">CSS ROUNDED CORNERS</a></li>
<li class="toctree-l2"><a class="reference internal" href="at_a_glance.html">CSS BACKGROUNDS</a></li>
<li class="toctree-l2"><a class="reference internal" href="features.html">CSS COLORS</a></li>
<li class="toctree-l2"><a class="reference internal" href="appflow.html">CSS COLORS KEYWORDS</a></li>
<li class="toctree-l2"><a class="reference internal" href="mvc.html">CSS GRADIENTS</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS SHADOWS</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS TEXT EFFECT</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS WEB FONTS</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS 2D TRANSFORM</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS 3D TRANSFORM</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS TRANSITIONS</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS ANIMATION</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS TOOLTIPS</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS STYLE IMAGES</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS IMAGE REFLECTION</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS OBJECT-FIT</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS OBJECT-POSITION</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS BUTTONS</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS PAGINATION</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS MULTIPLE COLUMNS</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS USER INTERFACE</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS VARIABLES</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS BOX SIZING</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS MEDIA QUERIES</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS MQ EXAMPLES</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">CSS FLEXBOX</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('css.cssresponsive')}}">CSS RESPONSIVE</a><ul>
<li class="toctree-l2"><a class="reference internal" href="static_pages.html">RWD INTRO</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">RWD VIEWPORT</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">RWD GRID VIEW</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">RWD MEDIA QUERIES</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">RWD IMAGES</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">RWD VIDEOS</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">RWD FRAMEWORKS</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">RWD TEMPLATES</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('css.cssgrid')}}">CSS GRID</a><ul>
<li class="toctree-l2"><a class="reference internal" href="">GRID INTRO</a></li>
<li class="toctree-l2"><a class="reference internal" href="">GRID CONTAINER</a></li>
<li class="toctree-l2"><a class="reference internal" href="">GRID ITEM</a></li>

</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('css.cssexm')}}">CSS EXAMPLES</a><ul>
<li class="toctree-l2"><a class="reference internal" href="urls.html">CSS TEMPLATES</a></li>
<li class="toctree-l2"><a class="reference internal" href="controllers.html">CSS EXAMPLES</a></li>
<li class="toctree-l2"><a class="reference internal" href="reserved_names.html">CSS QUIZ</a></li>
<li class="toctree-l2"><a class="reference internal" href="views.html">CSS EXERCISE</a></li>
<li class="toctree-l2"><a class="reference internal" href="models.html">CSS CERTIFICATE</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('css.cssreferences')}}">CSS REFERENCES</a><ul>
<li class="toctree-l2"><a class="reference internal" href="benchmark.html">CSS REFERENCES</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">CSS SELECTORS</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.html">CSS FUNCTIONS</a></li>
<li class="toctree-l2"><a class="reference internal" href="cart.html">CSS REFERENCE AURAL</a></li>
<li class="toctree-l2"><a class="reference internal" href="config.html">CSS WEB SAFE FONTS</a></li>
<li class="toctree-l2"><a class="reference internal" href="email.html">CSS ANIMATABLE</a></li>
<li class="toctree-l2"><a class="reference internal" href="benchmark.html">CSS UNITS</a></li>
<li class="toctree-l2"><a class="reference internal" href="caching.html">CSS PX-EM CONVERTER</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.html">CSS COLOR</a></li>
<li class="toctree-l2"><a class="reference internal" href="cart.html">CSS COLOR VALUES</a></li>
<li class="toctree-l2"><a class="reference internal" href="config.html">CSS DEFAULT VALUES</a></li>
<li class="toctree-l2"><a class="reference internal" href="email.html">CSS BROWSER SUPPORT</a></li>
</ul>
</li>
</ul>

<ul>          
        
      </div>
      &nbsp;
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="../index.html">CSS</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="../index.html">Docs</a> &raquo;</li>
      
    <li>Welcome to CSS</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
    <div style="float:right;margin-left:5px;" id="closeMe">
      <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
    </div>
  </ul>
  <hr/>
</div>
          <div role="main" class="document">
            
  <div class="section" id="welcome-to-codeigniter">
<h1>Welcome to CSS<a class="headerlink" href="#welcome-to-codeigniter" title="Permalink to this headline">¶</a></h1><br>



<div class="admonition note">
  <p class="first admonition-title">CSS </p>
  <table>
    <tbody> <tr>
      <td style="width:225px"><img alt="Videoformats" width="196" height="109" src="a/images/c.png"></td>
      <td><br><br>CSS describes how HTML elements should be displayed..<br>
      <br> This tutorial will teach you CSS from basic to advanced.<br>
      <br> This tutorial will teach you CSS from basic to advanced.</td>
      </tr></tbody></table><br>
  </div>



  <div class="w3-rest">
  <a class="btn btn-outline-success" href="{{url('css.welcomecss')}}">Start learning CSS now »</a>
  </div>
  </div>
  </div>
  <hr>
  <div class="admonition note">
    <p class="first admonition-title">Examples in Each Chapter </p>
  <p>This CSS tutorial contains hundreds of CSS examples.</p>
  <p>With our online editor, you can edit the CSS, and click on a button to view the result.</p>
</div>
  <div class="w3-example">
  <h3>CSS Example</h3>

  <div class="highlight-ci"><div class="highlight"><pre><span></span><span class="o">&lt;</span><span class="nx">!DOCTYPE html</span><span class="o">&gt;</span>
    <div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
      body
      <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">&nbsp;&nbsp;background-color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> lightblue<span class="cssdelimitercolor" style="color:black">;</span></span></span><span class="cssdelimitercolor" style="color:black">}</span>
      h1
      <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">
      &nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> white<span class="cssdelimitercolor" style="color:black">;</span></span>
      &nbsp;&nbsp;text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span>
      </span><span class="cssdelimitercolor" style="color:black">}</span>
      <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red">
        &nbsp;
      font-family<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> verdana<span class="cssdelimitercolor" style="color:black">;</span></span>
      &nbsp;&nbsp;font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 20px<span class="cssdelimitercolor" style="color:black">;</span></span>
      </span><span class="cssdelimitercolor" style="color:black">}</span> </span></div><br>
<a target="_blank" href="https://www.w3schools.com/css/tryit.asp?filename=trycss_default" class="btn btn-outline-success">Try it Yourself »</a></div>
  </pre></div>
  </div>

  
  <div class="admonition note">
  
  <h2>CSS Examples</h2>
  <p>Learn from over 300 examples! With our editor, you can edit the CSS, and click on a
  button to view the result.</p>
  <p><a class="btn btn-outline-success" href="https://www.w3schools.com/css/css_examples.asp">Go to CSS Examples!</a></p>
</div>
  <hr>
  <div class="admonition note">
  <h2>Use the Menu</h2>
  <p>We recommend reading this tutorial, in the sequence listed in the menu.</p>
  <p>If you have a large screen, the menu will always be present on the left.</p>
  <p>If you have a small screen, open the menu by clicking the top menu sign <span class="w3-xlarge">☰</span>.</p>
</div>
<div class="admonition note">
  <h2>CSS Templates</h2>
  <p>We have created some responsive W3.CSS templates for you to use.</p>
  <p>You are free to modify, save, share, and use them in all your projects.
</div>
  <div class="admonition note">
  <h2>CSS Exercises and Quiz Test</h2>
  <p>Test your CSS skills at W3Schools!</p>
  <p><a href="https://www.w3schools.com/css/css_exercises.asp" class="btn btn-outline-success" style="width:200px">Start CSS Exercises!</a></p>
  <p><a href="https://www.w3schools.com/css/css_quiz.asp" class="btn btn-outline-success" style="width:200px">Start CSS Quiz!</a></p>
  </div>
  <hr>

  <div id="htmltags">

    <table class="w3-table-all notranslate">
    <tbody><tr>
    <th style="width:25%">Klik Button Here</th>
    <th><h2>CSS References</h2></th>
    </tr>
    <tr>
      <td><a  type="button" class="btn btn-outline-secondary" href="https://www.w3schools.com/cssref/default.asp">Klik Here</a></td>
      <td>CSS Properties Reference</td>
    </tr>
    <tr>
      <td><a class="btn btn-outline-secondary" href="https://www.w3schools.com/cssref/css_selectors.asp">Klik Here</a></td>
      <td>CSS Selectors Reference</td>
    </tr>
    <tr>
      <td><a class="btn btn-outline-secondary" href="https://www.w3schools.com/cssref/css_functions.asp">Klik Here</a></td>
      <td>CSS Functions Reference</td>
    </tr><tr>
      <td><a class="btn btn-outline-secondary" href="https://www.w3schools.com/cssref/css3_browsersupport.asp">Klik Here</a></td>
      <td>CSS Browser Support</td>
    </tr><tr>
      <td><a class="btn btn-outline-secondary" href="https://www.w3schools.com/cssref/css_animatable.asp">Klik Here</a></td>
      <td>CSS Animatable Reference</td>
    </tr><tr>
      <td><a class="btn btn-outline-secondary" href="https://www.w3schools.com/cssref/css_ref_aural.asp">Klik Here</a></td>
      <td>CSS Aural Reference</td>
    </tr><tr>
      <td><a class="btn btn-outline-secondary" href="https://www.w3schools.com/cssref/css_units.asp">Klik Here</a></td>
      <td>CSS Units</td>
    </tr><tr>
      <td><a class="btn btn-outline-secondary" href="https://www.w3schools.com/cssref/css_colors.asp">Klik Here</a></td>
      <td>CSS Color Reference</td>
    </tr><tr>
      <td><a class="btn btn-outline-secondary" href="https://www.w3schools.com/cssref/css_default_values.asp">Klik Here</a></td>
      <td>CSS Default Values</td>
    </tr>
    </tbody></table><br>
    </tr>

          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="../installation/index.html" class="btn btn-neutral float-right" title="Installation Instructions">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="../index.html" class="btn btn-neutral" title="CodeIgniter User Guide"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
    </div>
  

  <hr/>

   &copy; Copyright  2020- 2021, Politeknik Negeri Malang.
               Coding Web Application TI-2H.
  
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
      <script type="text/javascript" src="c/jquery.js"></script>
      <script type="text/javascript" src="c/underscore.js"></script>
      <script type="text/javascript" src="c/doctools.js"></script>

    <script type="text/javascript" src="c/js/theme.js"></script>
  

  
  
  <script type="text/javascript">
      jQuery(function () {
          SphinxRtdTheme.StickyNav.enable();
      });
  </script>
   

</body>
</html>