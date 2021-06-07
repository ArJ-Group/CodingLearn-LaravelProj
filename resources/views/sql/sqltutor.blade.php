


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
  
  <title>Welcome to SQL </title>
  

    <link rel="shortcut icon" href="b/html.png"/>
  
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  
    <link rel="stylesheet" href="b/css/citheme.css" type="text/css" />
  

  
        <link rel="index" title="Index"
              href="../genindex.html"/>
        <link rel="search" title="Search" href="../search.html"/>
    <link rel="top" title="CodeIgniter 3.1.11 documentation" href="../index.html"/>
        <link rel="next" title="Installation Instructions" href="../installation/index.html"/>
        <link rel="prev" title="CodeIgniter User Guide" href="../index.html"/> 

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div id="nav">
  <div id="nav_inner">
    
    
    
      <div id="pulldown-menu" class="ciNav">
        <ul class="current">
<li class="toctree-l1"><a class="reference internal" href="welcome.html">Welcome to HTML</a></li>
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
        
          <a href="../index.html" class="fa fa-home"> SQL</a>
        
        
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
<li class="toctree-l1 current"><a class="current reference internal" href="{{url('sql.sqltutor')}}">Welcome to SQL</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('sql.sqltutor1')}}">SQL TUTORIAL</a><ul>
<li class="toctree-l2"><a class="reference internal" href="{{url('sql.sqltutor1')}}">SQL Home</a></li>
<li class="toctree-l2 current"><a class="current reference internal" href="#">SQL Introduction</a></li>
<li class="toctree-l2"><a class="reference internal" href="">SQL Syntax</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Select</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Select Distinct</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Where</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL And,Or,Not</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Order By</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Insert into</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Null Values</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Quotations</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Update</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Delete</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Select Top</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Min and Max</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Count,Avg,Sum</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Like</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Wildcards</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL In</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Between</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Aliases</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Joins</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Inner Join</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Left Join</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Right Join</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Full Join</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Self Join</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Union</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Grub By</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Style Guide</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Having</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Exist</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Any,All</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Select Into</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Insert Into Insert</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Case</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Null Function</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Stored Procedures</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL Comments</a></li>
<li class="toctree-l2"><a class="reference internal" href="#">SQL operators</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('sql.sqldb')}}">SQL Database</a><ul>
<li class="toctree-l2"><a class="reference internal" href="getting_started.html">SQL Create DB</a></li>
<li class="toctree-l2"><a class="reference internal" href="at_a_glance.html">SQL Drop DB</a></li>
<li class="toctree-l2"><a class="reference internal" href="features.html">SQL Backup DB</a></li>
<li class="toctree-l2"><a class="reference internal" href="appflow.html">SQL Create Table</a></li>
<li class="toctree-l2"><a class="reference internal" href="mvc.html">SQL Drop Table</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Alter Table</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Constraint</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Not Null</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Unique</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Primary Key</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Foreign Key</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Check</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Default</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Index</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Auto Increment</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Dates</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL View Injection/a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Hosting</a></li>
<li class="toctree-l2"><a class="reference internal" href="goals.html">SQL Data Types</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('sql.sqlrefer')}}">HTML References</a><ul>
<li class="toctree-l2"><a class="reference internal" href="static_pages.html">SQL Keyword</a></li>
<li class="toctree-l2"><a class="reference internal" href="news_section.html">MySQL Function</a></li>
<li class="toctree-l2"><a class="reference internal" href="static_pages.html">SQL Server Function</a></li>
<li class="toctree-l2"><a class="reference internal" href="static_pages.html">MS Access Function</a></li>
<li class="toctree-l2"><a class="reference internal" href="static_pages.html">SQL Quick Ref</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="{{url('sql.sqlexam')}}">SQL EXAMPLES</a><ul>
<li class="toctree-l2"><a class="reference internal" href="">SQL Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="">SQL Quiz</a></li>
<li class="toctree-l2"><a class="reference internal" href="">SQL Exercises</a></li>
<li class="toctree-l2"><a class="reference internal" href="">SQL Certificate</a></li>

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
        <a href="../index.html">SQL</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="../index.html">Docs</a> &raquo;</li>
      
    <li>Welcome to SQL</li>
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
<h1>Welcome to SQL<a class="headerlink" href="#welcome-to-codeigniter" title="Permalink to this headline">¶</a></h1>


<div class="admonition note">
<p class="first admonition-title">What is SQL? </p>
<ul>
   <li>SQL stands for Structured Query Language</li>
   <li>SQL lets you access and manipulate databases</li>
   <li>SQL became a standard of the American National Standards Institute (ANSI) 
   in 1986, and of the International Organization for Standardization (ISO) in 
   1987</li>
 </ul>
</div>


<div class="admonition note">
<p class="first admonition-title">What Can SQL do? </p>
<ul>
   <li> SQL can execute queries against a database</li>
   <li>SQL can retrieve data from a database</li>
   <li>SQL can insert records in a database</li>
   <li>SQL can update records in a database</li>
   <li>SQL can delete records from a database</li>
   <li>SQL can create new databases</li>
   <li>SQL can create new tables in a database</li>
   <li>SQL can create stored procedures in a database</li>
   <li>SQL can create views in a database</li>
   <li>SQL can set permissions on tables, procedures, and views</li>
 </ul>
</div>
	

<div class="admonition note">
<p class="first admonition-title">SQL is a Standard </p>
<p>Although SQL is an ANSI/ISO standard, there are different versions of the SQL language.
<p>However, to be compliant with the ANSI standard, they all support at least the major commands (such as <code class="w3-codespan">
SELECT</code>, <code class="w3-codespan">UPDATE</code>, <code class="w3-codespan">
DELETE</code>, <code class="w3-codespan">INSERT</code>, <code class="w3-codespan">
WHERE</code>) in a similar manner.</p>

</div>
<div class="admonition important">
   <p class="first admonition-title">Note </p>
  <p> Most of the SQL database programs also have their own proprietary extensions in addition to the SQL standard!<p>
</div>

<div class="admonition note">
   <p class="first admonition-title">Using SQL in Your Web Site</p>
   <p>To build a web site that shows data from a database, you will need:</p>
   <ul>
     <li>An RDBMS database program (i.e. MS Access, SQL Server, MySQL)</li>
     <li>To use a server-side scripting language, like PHP or ASP</li>
     <li>To use SQL to get the data you want</li>
     <li>To use HTML / CSS to style the page</li>
   </ul>
   <hr>
   <h2>RDBMS</h2>
   <p>RDBMS stands for Relational Database Management System.</p>
   <p>RDBMS is the basis for SQL, and for all modern database systems such as MS SQL Server, IBM DB2, Oracle, MySQL, and Microsoft Access.</p>
   <p>The data in RDBMS is stored in database objects called tables. A table is a collection of related data entries and it consists of columns and rows.</p>
   <p>Look at the "Customers" table:</p>
</div>

</div>
<div class="admonition note">
   <p><code class="w3-codespan">Select * From Customer</code></p>
  
</div>
<a class="btn btn-neutral" target="_blank" href="{{url('sql.sqltutor1')}}">Try it Yourself »</a><br> <br>  

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