


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
  
  <title>HTML MEDIA</title>
  
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

  
  
    <link rel="shortcut icon" href="b/ci-icon.ico"/>
  

  
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  
  
    

  

  
  
    <link rel="stylesheet" href="b/css/citheme.css" type="text/css" />
  

  
        <link rel="index" title="Index"
              href="../genindex.html"/>
        <link rel="search" title="Search" href="../search.html"/>
    <link rel="top" title="CodeIgniter 3.1.11 documentation" href="../index.html"/>
        <link rel="next" title="Writing CodeIgniter Documentation" href="../documentation/index.html"/>
        <link rel="prev" title="Conclusion" href="../tutorial/conclusion.html"/> 

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div id="nav">
  <div id="nav_inner">
    
    
    
      <div id="pulldown-menu" class="ciNav">
        <ul>
<li class="toctree-l1"><a class="reference internal" href="../general/welcome.html">Welcome to CodeIgniter</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../installation/index.html">Installation Instructions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../installation/downloads.html">Downloading CodeIgniter</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/index.html">Installation Instructions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/upgrading.html">Upgrading From a Previous Version</a></li>
<li class="toctree-l2"><a class="reference internal" href="../installation/troubleshooting.html">Troubleshooting</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../overview/index.html">CodeIgniter Overview</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../overview/getting_started.html">Getting Started</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/at_a_glance.html">CodeIgniter at a Glance</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/features.html">Supported Features</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/appflow.html">Application Flow Chart</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/mvc.html">Model-View-Controller</a></li>
<li class="toctree-l2"><a class="reference internal" href="../overview/goals.html">Architectural Goals</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../tutorial/index.html">Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/static_pages.html">Static pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/news_section.html">News section</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/create_news_items.html">Create news items</a></li>
<li class="toctree-l2"><a class="reference internal" href="../tutorial/conclusion.html">Conclusion</a></li>
</ul>
</li>
</ul>
<ul class="current">
<li class="toctree-l1 current"><a class="current reference internal" href="#">Contributing to CodeIgniter</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../documentation/index.html">Writing CodeIgniter Documentation</a></li>
<li class="toctree-l2"><a class="reference internal" href="../DCO.html">Developer’s Certificate of Origin 1.1</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../general/index.html">General Topics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../general/urls.html">CodeIgniter URLs</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/controllers.html">Controllers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/reserved_names.html">Reserved Names</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/views.html">Views</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/models.html">Models</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/helpers.html">Helpers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/libraries.html">Using CodeIgniter Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_libraries.html">Creating Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/drivers.html">Using CodeIgniter Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/creating_drivers.html">Creating Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/core_classes.html">Creating Core System Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/ancillary_classes.html">Creating Ancillary Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/hooks.html">Hooks - Extending the Framework Core</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/autoloader.html">Auto-loading Resources</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/common_functions.html">Common Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/compatibility_functions.html">Compatibility Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/routing.html">URI Routing</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/errors.html">Error Handling</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/caching.html">Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/profiling.html">Profiling Your Application</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/cli.html">Running via the CLI</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/managing_apps.html">Managing your Applications</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/environments.html">Handling Multiple Environments</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/alternative_php.html">Alternate PHP Syntax for View Files</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/security.html">Security</a></li>
<li class="toctree-l2"><a class="reference internal" href="../general/styleguide.html">PHP Style Guide</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../libraries/index.html">Libraries</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../libraries/benchmark.html">Benchmarking Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/caching.html">Caching Driver</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/calendar.html">Calendaring Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/cart.html">Shopping Cart Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/config.html">Config Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/email.html">Email Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/encrypt.html">Encrypt Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/encryption.html">Encryption Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/file_uploading.html">File Uploading Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/form_validation.html">Form Validation</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/ftp.html">FTP Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/image_lib.html">Image Manipulation Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/input.html">Input Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/javascript.html">Javascript Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/language.html">Language Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/loader.html">Loader Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/migration.html">Migrations Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/output.html">Output Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/pagination.html">Pagination Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/parser.html">Template Parser Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/security.html">Security Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/sessions.html">Session Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/table.html">HTML Table Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/trackback.html">Trackback Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/typography.html">Typography Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/unit_testing.html">Unit Testing Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/uri.html">URI Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/user_agent.html">User Agent Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/xmlrpc.html">XML-RPC and XML-RPC Server Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="../libraries/zip.html">Zip Encoding Class</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../database/index.html">Database Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../database/examples.html">Quick Start: Usage Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/configuration.html">Database Configuration</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/connecting.html">Connecting to a Database</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/queries.html">Running Queries</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/results.html">Generating Query Results</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/helpers.html">Query Helper Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/query_builder.html">Query Builder Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/transactions.html">Transactions</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/metadata.html">Getting MetaData</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/call_function.html">Custom Function Calls</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/caching.html">Query Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/forge.html">Database Manipulation with Database Forge</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/utilities.html">Database Utilities Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="../database/db_driver_reference.html">Database Driver Reference</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../helpers/index.html">Helpers</a><ul>
<li class="toctree-l2"><a class="reference internal" href="../helpers/array_helper.html">Array Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/captcha_helper.html">CAPTCHA Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/cookie_helper.html">Cookie Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/date_helper.html">Date Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/directory_helper.html">Directory Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/download_helper.html">Download Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/email_helper.html">Email Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/file_helper.html">File Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/form_helper.html">Form Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/html_helper.html">HTML Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/inflector_helper.html">Inflector Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/language_helper.html">Language Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/number_helper.html">Number Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/path_helper.html">Path Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/security_helper.html">Security Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/smiley_helper.html">Smiley Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/string_helper.html">String Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/text_helper.html">Text Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/typography_helper.html">Typography Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/url_helper.html">URL Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="../helpers/xml_helper.html">XML Helper</a></li>
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
<li class="toctree-l1 current"><a class="current reference internal" href="{{url('html.htmlmedia')}}">HTML MEDIA</a><ul>
<li class="toctree-l2"><a class="reference internal" href="{{url('html.htmlforma')}}">HTML Media</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Video</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Audio</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl Plug-Ins</a></li>
<li class="toctree-l2"><a class="reference internal" href="">HTMl YouTube</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="../general/index.html">HTML APIs</a><ul>
<li class="toctree-l2"><a class="reference internal" href="urls.html">HTMl Geolocation</a></li>
<li class="toctree-l2"><a class="reference internal" href="controllers.html">HTMl Drag/Drop</a></li>
<li class="toctree-l2"><a class="reference internal" href="reserved_names.html">HTML Web Storage</a></li>
<li class="toctree-l2"><a class="reference internal" href="views.html">HTML Web Workers</a></li>
<li class="toctree-l2"><a class="reference internal" href="models.html">HTML SSE</a></li>
</ul>
</li>
</ul>
<ul>
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
      
    <li>HTML MEDIA</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
    <div style="float:right;margin-left:5px;" id="closeMe">
      <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
    </div>
  </ul>
  <hr/>
</div>
          <div role="main" class="document">
            
  <div class="section" id="contributing-to-codeigniter">
<h1>HTML VIDEO<a class="headerlink" href="#contributing-to-codeigniter" title="Permalink to this headline">¶</a></h1>
<div class="toctree-wrapper compound">
<ul><hr>

  <div class="section" id="support">
    <div class="admonition note">
      <p class="first admonition-title">Note</p>
      <p>The HTML <code class="w3-codespan">&lt;video&gt;</code> element is used to 
        show a video on a web page.</p></div><hr>
    </div>
    <div class="admonition note">
      <p class="first admonition-title">Example</p>
      <div id="content-wrapper">
        <div class="container-fluid pb-0">
         <div class="video-block section-padding">
          <div class="row">
           <div class="col-md-8">
            <div class="single-video-left">
             <div class="single-video">
              <video width="100%" height="100%" src="a/vid/a.mkv" frameborder="5" controls></video>
            </div>
      </div> </div> </div> </div> </div> </div> </div>
      <hr>
      <div class="admonition note">
        <p class="first admonition-title">The HTML &lt;video&gt; Element</p>
  
      <p>To show a video in HTML, use the <code class="w3-codespan">&lt;video&gt;</code> element:</p>
      <div class="w3-example">
        <h3>Example</h3><p>
        <div class="highlight-ci"><div class="highlight"><pre>&lt;video width=&quot;320&quot; height=&quot;240&quot; controls&gt;<br>&nbsp; &lt;source src=&quot;movie.mp4&quot; type=&quot;video/mp4&quot;&gt;<br>&nbsp; &lt;source src=&quot;movie.ogg&quot; type=&quot;video/ogg&quot;&gt;<br>Your browser does not support the video tag.<br>&lt;/video&gt;
      </div></div></div>
      </div></div>
      <hr>
      <div class="admonition note">
        <p class="first admonition-title">How it Works</p>
      <p>The <code class="w3-codespan">controls</code> attribute adds video controls, like play, pause, and volume.</p>
      <p>It is a good idea to always include <code class="w3-codespan">width</code> and <code class="w3-codespan">height</code> attributes. If height and width are not set, the page 
      might flicker while the video loads.</p>
      <p>The <code class="w3-codespan">&lt;source&gt;</code> element allows you to specify alternative video 
      files which the browser may choose from. The browser will use the first recognized format.</p>
      <p>The text between the <code class="w3-codespan">&lt;video&gt;</code> and <code class="w3-codespan">&lt;/video&gt;</code> tags will only be displayed 
      in browsers that do not 
      support the <code class="w3-codespan">&lt;video&gt;</code> element.</p>
      </div>
      <div class="admonition note">
        <p class="first admonition-title">HTML &lt;video&gt; Autoplay</p>
      <p>To start a video automatically, use the <code class="w3-codespan">autoplay</code> attribute:</p>
      <div class="w3-example">
      <h3>Example</h3><p>
      <div class="highlight-ci"><div class="highlight"><pre>
      &lt;video width=&quot;320&quot; height=&quot;240&quot; autoplay&gt;<br>
      &nbsp; &lt;source src=&quot;movie.mp4&quot; type=&quot;video/mp4&quot;&gt;<br>
      &nbsp; &lt;source src=&quot;movie.ogg&quot; type=&quot;video/ogg&quot;&gt;<br>
      Your browser does not support the video tag.<br>
      &lt;/video&gt;
      </div></div></div>
      </div>
      <div class="admonition important">
        <p class="first admonition-title"><strong>Note:</strong></p>
      <p> Chromium browsers do not 
      allow autoplay in most cases. However, muted autoplay is always allowed.</p>
      </div>
      <div class="admonition note">
        <p class="first admonition-title"><strong>Note:</strong></p>
      <p>Add <code class="w3-codespan">muted</code> after <code class="w3-codespan">
      autoplay</code> to let your video start playing automatically (but muted):</p>
      </div>
      <div class="w3-example">

      <div class="admonition note">
 
        <p class="first admonition-title"><strong>Note:</strong></p>
        <h3>Example</h3><p>
      <div class="w3-code notranslate htmlHigh">
        <div class="highlight-ci"><div class="highlight"><pre>
      &lt;video width=&quot;320&quot; height=&quot;240&quot; autoplay muted&gt;<br>
      &nbsp; &lt;source src=&quot;movie.mp4&quot; type=&quot;video/mp4&quot;&gt;<br>
      &nbsp; &lt;source src=&quot;movie.ogg&quot; type=&quot;video/ogg&quot;&gt;<br>
      Your browser does not support the video tag.<br>
      &lt;/video&gt;
      </div></div></div>
    
      </div>
  
      
   
      <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
      <!-- MidContent -->
      <!-- <p class="adtext">Advertisement</p> -->
      
        <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
        <div id="snhb-mid_content-0"></div>
      
      </div>
      <hr>
      <div class="admonition note">
        <p class="first admonition-title"><strong>HTML Video Formats</strong></p>
     
      <p>There are three supported video formats: MP4, WebM, and Ogg. The browser support for the different formats is:</p>
      <table class="w3-table-all notranslate">
      <tr>
      <th style="width:25%">Browser</th>
      <th style="width:25%">MP4</th>
      <th style="width:25%">WebM</th>
      <th style="width:25%">Ogg</th>
      </tr>
      <tr>
      <td>Edge</td>
      <td>YES</td>
      <td>YES</td>
      <td>YES</td>
      </tr>
      <tr>
      <td>Chrome</td>
      <td>YES</td>
      <td>YES</td>
      <td>YES</td>
      </tr>
      <tr>
      <td>Firefox</td>
      <td>YES</td>
      <td>YES</td>
      <td>YES</td>
      </tr>
      <tr>
      <td>Safari</td>
      <td>YES</td>
      <td>YES</td>
      <td>NO</td>
      </tr>
      <tr>
      <td>Opera</td>
      <td>YES</td>
      <td>YES</td>
      <td>YES</td>
      </tr>
      </table>
     
      </div>
      <div class="admonition note">
        <p class="first admonition-title"><strong>HTML Video - Media Types</strong></p>
      
      <table class="w3-table-all notranslate" id="table1">
      <tr>
      <th style="width:50%">File Format</th>
      <th style="width:50%">Media Type</th>
      </tr>
      <tr>
      <td>MP4</td>
      <td>video/mp4</td>
      </tr>
      <tr>
      <td>WebM</td>
      <td>video/webm</td>
      </tr>
      <tr>
      <td>Ogg</td>
      <td>video/ogg</td>
      </tr>
      </table>
  
      </div>
      <div class="admonition note">
        <p class="first admonition-title"><strong>HTML Video Tags</strong></p>

      <table class="w3-table-all notranslate">
      <tr>
      <th style="width:20%">Tag</th>
      <th>Description</th>
      </tr>
      <tr>
      <td><a href="/tags/tag_video.asp">&lt;video&gt;</a></td>
      <td>Defines a video or movie</td>
      </tr>
      <tr>
      <td><a href="/tags/tag_source.asp">&lt;source&gt;</a></td>
      <td>Defines multiple media resources for media elements, such as &lt;video&gt; and &lt;audio&gt;</td>
      </tr>
      <tr>
      <td><a href="/tags/tag_track.asp">&lt;track&gt;</a></td>
      <td>Defines text tracks in media players</td>
      </tr>
      </table>

          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="../documentation/index.html" class="btn btn-neutral float-right" title="Writing CodeIgniter Documentation">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
        <a href="../tutorial/conclusion.html" class="btn btn-neutral" title="Conclusion"><span class="fa fa-arrow-circle-left"></span> Previous</a>
      
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