<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="a/images/icon-b1.png">


    <!-- SEO Meta Tags -->

    <meta name="author" content="ArJ">
    <link rel="icon" href="a/images/icon-b1.png">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Webpage Title -->
    <title>Coding Learn Application</title>

    <!-- Styles -->
    <link href="../../fonts.googleapis.com/css2ed1a.css?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&amp;display=swap" rel="stylesheet">
    <link href="../../fonts.googleapis.com/css218e1.css?family=Poppins:wght@600&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{!! asset('landing/css/bootstrap.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('landing/css/fontawesome-all.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('landing/css/swiper.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('landing/css/magnific-popup.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('landing/css/styles.css') !!}">
    <!-- Favicon  -->
    <link rel="shortcut icon" href="b/ci-icon.ico" />
    <style>
        .social-text {
            padding: 0.7rem 0;
            font-size: 1rem;
        }

        .social-media {
            display: flex;
            justify-content: center;
        }

        .social-icon {
            height: 46px;
            width: 46px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 0.45rem;
            color: #333;
            border-radius: 50%;
            border: 1px solid #333;
            text-decoration: none;
            font-size: 1.1rem;
            transition: 0.3s;
        }

        .social-icon:hover {
            color: #4481eb;
            border-color: #4481eb;
        }
    </style>


</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

            <!-- Image Logo -->
            <a class="" href="#"><img src="a/images/logo.png" style="width:300px;" alt="alternative"></a>

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Services <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#register">Register</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large"><span class="blue">Young StartUp</span> Coding Learn Application</h1>
                        <p class="p-large">Use Our Website To improve your coding Skill</p>
                        <a class="btn-solid-lg page-scroll" href="{{url('login')}}">Start Learn!</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of div -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="landing/images/header-teamwork.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Supported By</h5>

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="https://i2.wp.com/www.rentalan.id/wp-content/uploads/2020/04/logo-kemendikbud.png?resize=300%2C64&ssl=1" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="https://www.kalderanews.com/wp-content/uploads/2020/09/Logo-Kampus-Merdeka-diluncurkan.jpg" style="height: 50px;" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="https://cdn-2.tstatic.net/tribunnewswiki/foto/bank/images/kemenristek-dikti-logo.jpg" style="height: 50px;" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="https://lh3.googleusercontent.com/proxy/S0tnAeVW1eyyc-GWyH3Dt-fE7_Y0JF0hWonhSpNGCFvw4ewEh7zC_Y0odrAMkNKvMO0IDwLsSXs9pKdJqEjFAe1PdFCDp6lwv4Dn4uzSdm_BBIGNwhpj78vlTQ2yelikZfJl" style="height: 50px;" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="https://i0.wp.com/desainerhub.com/wp-content/uploads/2020/11/hostinger.png?resize=395%2C150&ssl=1" style="height: 50px;" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="https://qwords.com/blog/wp-content/uploads/2021/05/stay-and-play-at-home-with-popular-past-google-doodles-halloween-2016-6753651837108773-2xa.gif" style="height: 50px;" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="https://geeksfarm.files.wordpress.com/2018/01/developers.png" style="height: 50px;" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="a/images/dev.jpg" style="height: 50px;" alt="alternative">
                                </div>

                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Our newest program</h2>
                    <p class="p-heading">
                        Kami menyelenggarakan beberapa program
                        untuk mendukung Pembelajaran coding di Indonesia.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="landing/images/services-icon-1.svg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Kurikulum Standard Industri</h5>
                            <p>Kurikulum dikembangkan bersama perusahaan dan pemilik teknologi dunia sesuai kebutuhan industri terkini.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="landing/images/services-icon-2.svg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Belajar Fleksibel Sesuai Kemauan anda</h5>
                            <p>Belajar kapan pun, di mana pun, secara mandiri. Bebas memilih
                                kelas sesuai minat belajar. Akses seumur hidup ke kelas dan forum diskusi setelah lulus.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="landing/images/services-icon-3.svg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Materi & Code dari Developer Expert</h5>
                            <p>Validasi skill Anda melalui 1-on-1
                                Professional Code Review yang diberikan langsung oleh Developer Expert.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->







    <!-- Video -->
    <div class="basic-3" id="details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Check out the video</h2>

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="#" data-effect="fadeIn">
                                <img class="img-fluid" src="landing/images/video-preview.svg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <p class="p-heading">This video will show you a case study for one of our Major Customers and will help you understand why your startup needs Evolo in this highly competitive market</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of video -->


    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="landing/images/testimonials.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Testimonials</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="a/images/andin.jpeg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Yang kudapat darisini adalah teknik belajar yang terstruktur
                                                dan komunitasnya yang bagus. CLA jadi salah satu andalanku dalam mempersiapkan diri demi karir.
                                            </p>
                                            <p class="testimonial-author">Amelia Widya Andini - Student Polinema</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="a/images/lyd.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Mengandalkan kuliah saja, tidak cukup. Dengan CLA, saya mantap tinggalkan dunia gaming lantas belajar dunia Android yang ternyata menyenangkan. Yang nomor satu,
                                                CLA mengajarkan ilmu berorientasi kerja. Kini saya sangat terbantu dalam karir saya.</p>
                                            <p class="testimonial-author">Putri Lidya - Student Polinema</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="a/images/abd.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Saya khusus mendedikasikan waktu saya untuk belajar ngoding. Di CLA belajarnya
                                                step by step, library-nya up-to-date. Kalau ada eror, nggak bingung. Di sini saya juga belajar
                                                untuk nggak asal coding. Saya jadi percaya diri</p>
                                            <p class="testimonial-author">Abdul Rohman - Student Polinema</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->
    <!-- Registration -->
    <div id="register">
   
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Join With Us For Free </h2>
                        <p>Discover it now</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Kurikulum Standard Industri Global</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Belajar Secara Fleksibel</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Code & Materi Dari Developer Expert</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Telah Dipercaya Oleh lembaga Pendidikan</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->

                <div class="col-lg-6">

                    <!-- Registration Form -->
                    <div class="form-container" class="cards-4">
                        <form method="POST" action="{{ route('register') }}" class="requestForm">

                            <div class="form-group">

                                <input id="username" placeholder="Username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group">

                                <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">

                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group">

                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">


                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group row mb-0" style="padding-right:50px">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="form-control-submit-button">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <p class="social-text" style="text-align:center;padding-left: 20px;">Or Sign up with social platforms</p>
                            <div class="social-media" style="padding-left: 21px;">
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>



                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of registration form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->


    <!-- About -->
    <div id="pricing" class="cards-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">About the team</h2>
                    <p class="p-heading">Meat our team of specialized developers which will help you to learn about the material</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card" style="margin-left: 70px;">
                        <div class="card-image">
                            <img class="img-fluid" src="a/images/ari.jpeg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Ariono Septian Jaya</h6>
                            <p>Project Manager <br> Project Developer <br> Frontend Programmer</p>

                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="landing/images/rjn.jpeg" style="height: 200px;width:300px;" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Rajendra Rakha A P</h6>
                            <p>Deputy Project Manager <br> UI/UX Designer <br> Frontend Programmer</p>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of card -->


            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card" style="margin-left: 130px;">
                        <div class="card-image">
                            <img class="img-fluid" src="a/images/radit.jpeg" style="height: 200px;width:500px;" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Radithya Iqbal P</h6>
                            <p>UI/UX Designer <br> Back-end Programmer</p>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="a/images/dira.jpg" style="height: 200px;width:300px;" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Wahyu Nandira Bakta</h6>
                            <p>Back-end Programmer Support</p>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="landing/images/team-member-3.svg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">M Bagas Ridhocaesar</h6>
                            <p><br><br> </p>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- end of card -->

                </div>

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of cards-3 -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2 bg-gray">
        <img class="decoration" src="landing/images/contact-macbook.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Contact details</h2>
                    <p class="p-heading">Don't hesitate to give us a call or just use the contact form below</p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> &nbsp;Jl. Soekarno Hatta No.9, Jatimulyo, Kota Malang, Jawa Timur 65141</li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00817202212">+62 341404424</a></li>
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:contact@evolo.com">CodingLearn@Polinema.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://maps.google.com/maps?q=politeknik%20negeri%20malang&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree with Evolo's <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Us</h6>
                        <p class="p-small">Kami hadir sebagai platform pendidikan teknologi yang membantu menghasilkan talenta
                            digital berstandar global. Semua demi mengakselerasi Indonesia agar menjadi yang terdepan.</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">


                            <li>Menu: <a class="page-scroll" href="#services">Services</a>, <a class="page-scroll" href="#details">Details</a>, <a class="page-scroll" href="#pricing">Team</a>, <a class="page-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">Contact Us! <a href="mailto:contact@evolo.com"><strong>CodingLearn@Polinema.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © Coding Learn Applicaation<a href="Polinema.ac.id"> 2021</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="landing/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="landing/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="landing/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="landing/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="landing/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="landing/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>