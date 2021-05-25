
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
  <link rel="next" title="Getting Started With CodeIgniter" href="getting_started.html" />
  <link rel="prev" title="Troubleshooting" href="../installation/troubleshooting.html" />


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
          <li class="toctree-l1"><a class="reference internal" href="../installation/index.html">Java Tutorial</a>
            <ul>
              <li class="toctree-l2"><a class="reference internal" href="">Java Home</a></li>
              <li class="toctree-l2 current"><a class="current reference internal" href="#">Java Introduction</a></li>
              <li class="toctree-l2"><a class="reference internal" href="">Java Editors</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Basic</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Element</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Attribute</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Headings</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Paragraph</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Styles</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Formatting</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Quotations</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Comments</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Colors</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java CSS</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java links</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Images</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Tables</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java List</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Block and Inline</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Classes</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Id</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Iframes</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Javascript</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java File Paths</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Head</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Layout</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Responsive</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Computer Code</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Semantics</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Style Guide</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Entities</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Symbols</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Emojis</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Charset</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java URL Encode</a></li>
            </ul>
          </li>
        </ul>
        <ul class="current">
          <li class="toctree-l1 current"><a class="current reference internal" href="{{url('java.javamethod')}}">Java Methods</a>
            <ul>
              <li class="toctree-l2 current"><a class="current reference internal" href="{{url('java.javamethod')}}">Java Methods</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Method Parameters</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Method Overloading</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Scope</a></li>
              <li class="toctree-l2"><a class="reference internal" href="#">Java Recursion</a></li>
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
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('java.javaexample')}}">Java Examples</a>
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
      <img src="data:image/jpeg;base64,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" title="Toggle Table of Contents" alt="Toggle Table of Contents" />
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
          <li class="toctree-l1"><a class="reference internal" href="{{url('html.welcomehtml')}}">Welcome to HTML</a></li>
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


          <ul class="current">
            <li class="toctree-l1 current"><a class="current reference internal" href="{{url('java.javamethod')}}">Java Methods</a>
              <ul>
                <li class="toctree-l2 current"><a class="current reference internal" href="{{url('java.javamethod')}}">Java Methods</a></li>
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
        <ul>
          <li class="toctree-l1"><a class="reference internal" href="{{url('java.javaexample')}}">Java Examples</a>
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
              <li><a href="../index.html">Docs</a> &raquo;</li>

              <li>Java Methods</li>
              <li class="wy-breadcrumbs-aside">

              </li>
              <div style="float:right;margin-left:5px;" id="closeMe">
                <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
              </div>
            </ul>
            <hr />
          </div>
          <h1>Java Methods</h1>
          <div role="main" class="document">
            <p class="intro">A <strong>method</strong> is a block of code which only runs when it is called.</p>
            <p class="intro">You can pass data, known as parameters, into a method.</p>
            <p class="intro">Methods are used to perform certain actions, and they are also known as <strong>functions</strong>.</p>
            <p class="intro">Why use methods? To reuse code: define the code once, and use
              it many times.</p>
            <hr>
            <h2>Create a Method</h2>
            <p>A method must be declared within a class. It is defined
              with the name of the method, followed by parentheses <strong>()</strong>. Java provides some pre-defined methods, such as <code class="w3-codespan">System.out.println()</code>, but you can also create your own methods to perform certain actions:</p>
            <div class="w3-example" bis_skin_checked="1">
              <h3>Example</h3>
              <p>Create a method inside Main:</p>
              <pre class=" w3-white language-java" data-line="2"><code class=" language-java"><span class="token keyword keyword-public">public</span> <span class="token keyword keyword-class">class</span> <span class="token class-name">Main</span> <span class="token punctuation">{</span>
  <span class="token keyword keyword-static">static</span> <span class="token keyword keyword-void">void</span> <span class="token function">myMethod</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
    <span class="token comment">// code to be executed</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
<div aria-hidden="true" data-range="2" class=" line-highlight" data-start="2" style="top: 22px;" bis_skin_checked="1"> 
</div></code></pre>
            </div>
            <h4>Example Explained</h4>
            <ul>
              <li><code class="w3-codespan">myMethod()</code> is the name of the method</li>
              <li><code class="w3-codespan">static</code> means that the method belongs to the
                Main class and not an object of the Main class. You will learn more about objects and how to access methods through objects later in this tutorial.</li>
              <li><code class="w3-codespan">void</code> means that this method does not have a
                return value. You will learn more about return values later in this chapter</li>
            </ul>
            <hr>

            <h2>Call a Method</h2>
            <p>To call a method in Java, write the method's name followed by two
              parentheses <strong>()</strong> and a semicolon<strong>;</strong></p>
            <p>In the following example, <code class="w3-codespan">myMethod()</code> is used to print a text (the action), when it is called:</p>

            <div class="w3-example" bis_skin_checked="1">
              <h3>Example</h3>
              <p>Inside <code class="w3-codespan">main</code>, call the <code class="w3-codespan">
                  myMethod()</code> method:</p>
              <pre class=" w3-white language-java" data-line="7"><code class=" language-java"><span class="token keyword keyword-public">public</span> <span class="token keyword keyword-class">class</span> <span class="token class-name">Main</span> <span class="token punctuation">{</span>
  <span class="token keyword keyword-static">static</span> <span class="token keyword keyword-void">void</span> <span class="token function">myMethod</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
    <span class="token class-name">System</span><span class="token punctuation">.</span>out<span class="token punctuation">.</span><span class="token function">println</span><span class="token punctuation">(</span><span class="token string">"I just got executed!"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span>

  <span class="token keyword keyword-public">public</span> <span class="token keyword keyword-static">static</span> <span class="token keyword keyword-void">void</span> <span class="token function">main</span><span class="token punctuation">(</span><span class="token class-name">String</span><span class="token punctuation">[</span><span class="token punctuation">]</span> args<span class="token punctuation">)</span> <span class="token punctuation">{</span>
    <span class="token function">myMethod</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token comment">// Outputs "I just got executed!"</span>
<div aria-hidden="true" data-range="7" class=" line-highlight" data-start="7" style="top: 132px;" bis_skin_checked="1"> 
</div></code></pre>
              <p>
                <a target="_blank" class="w3-btn" href="https://www.w3schools.com/java/tryjava.asp?filename=demo_method">Try it Yourself »</a>
              </p>
            </div>

            <p>A method can also be called multiple times:</p>

            <div class="w3-example" bis_skin_checked="1">
              <h3>Example</h3>
              <pre class=" w3-white language-java" data-line="7,8,9"><code class=" language-java"><span class="token keyword keyword-public">public</span> <span class="token keyword keyword-class">class</span> <span class="token class-name">Main</span> <span class="token punctuation">{</span>
  <span class="token keyword keyword-static">static</span> <span class="token keyword keyword-void">void</span> <span class="token function">myMethod</span><span class="token punctuation">(</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
    <span class="token class-name">System</span><span class="token punctuation">.</span>out<span class="token punctuation">.</span><span class="token function">println</span><span class="token punctuation">(</span><span class="token string">"I just got executed!"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span>

  <span class="token keyword keyword-public">public</span> <span class="token keyword keyword-static">static</span> <span class="token keyword keyword-void">void</span> <span class="token function">main</span><span class="token punctuation">(</span><span class="token class-name">String</span><span class="token punctuation">[</span><span class="token punctuation">]</span> args<span class="token punctuation">)</span> <span class="token punctuation">{</span>
    <span class="token function">myMethod</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token function">myMethod</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token function">myMethod</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>

<span class="token comment">// I just got executed!</span>
<span class="token comment">// I just got executed!</span>
<span class="token comment">// I just got executed!</span>
<div aria-hidden="true" data-range="7" class=" line-highlight" data-start="7" style="top: 132px;" bis_skin_checked="1"> 
</div><div aria-hidden="true" data-range="8" class=" line-highlight" data-start="8" style="top: 154px;" bis_skin_checked="1"> 
</div><div aria-hidden="true" data-range="9" class=" line-highlight" data-start="9" style="top: 176px;" bis_skin_checked="1"> 
</div></code></pre>
              <p>
                <a target="_blank" class="w3-btn" href="https://www.w3schools.com/java/tryjava.asp?filename=demo_method_multiple">Try it Yourself »</a>
              </p>
            </div>



          </div>

          <footer>

            <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">

              <a href="getting_started.html" class="btn btn-neutral float-right" title="Getting Started With CodeIgniter">Next <span class="fa fa-arrow-circle-right"></span></a>


              <a href="../installation/troubleshooting.html" class="btn btn-neutral" title="Troubleshooting"><span class="fa fa-arrow-circle-left"></span> Previous</a>

            </div>


            <hr />

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