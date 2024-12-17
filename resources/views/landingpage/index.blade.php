<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUTU</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landingpage/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landingpage/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landingpage/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{ asset('landingpage/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('landingpage/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/icomoon-icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/vendors/twentytwenty/twentytwenty.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('landingpage/css/zilom.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingpage/css/zilom-responsive.css')}}" />
</head>

<body>

    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ asset('landingpage/images/loader.png')}}" alt="" />
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header main-header--one  clearfix">
            <div class="main-header--one__top clearfix">
                <div class="container">
                    <div class="main-header--one__top-inner clearfix">
                        <div class="main-header--one__top-left">
                            <div class="main-header--one__top-logo">
                                <a href="index.html"><img src="{{ asset('landingpage/images/resources/5.png')}}" style="width: 200px;" alt="" /></a>
                            </div>
                        </div>

                        <div class="main-header--one__top-right clearfix">
                            <ul class="main-header--one__top-social-link list-unstyled clearfix">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                            <div class="main-header--one__top-contact-info clearfix">
                                <ul class="main-header--one__top-contact-info-list list-unstyled">
                                    <li class="main-header--one__top-contact-info-list-item">
                                        <div class="icon">
                                            <span class="icon-phone-call-1"></span>
                                        </div>
                                        <div class="text">
                                            <h6>Call Agent</h6>
                                            <p><a href="tel:123456789">92 888 666 0000</a></p>
                                        </div>
                                    </li>
                                    <li class="main-header--one__top-contact-info-list-item">
                                        <div class="icon">
                                            <span class="icon-message"></span>
                                        </div>
                                        <div class="text">
                                            <h6>Call Agent</h6>
                                            <p><a href="mailto:info@templatepath.com">tutuofficial@student.ac.id</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="main-header-one__bottom clearfix">
                <div class="container">
                    <div class="main-header-one__bottom-inner clearfix">
                        <nav class="main-menu main-menu--1">
                            <div class="main-menu__inner">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                                <div class="left">
                                    <ul class="main-menu__list">
                                        <li class="">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li><a href="#welcome">About</a></li>
                                   </ul>
                                </div>

                                <div class="right">
                                    <div class="main-menu__right">
                                        <div class="main-menu__right-login-register">
                                            <ul class="list-unstyled">
                                                <li><a href="{{ url('landingpage/login') }}">Login</a></li>
                                                <li><a href="{{ url('landingpage/register') }}">Register</a></li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right-cart-search">
                                            <div class="main-menu__right-search-box">
                                                <a href="#" class="thm-btn search-toggler">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </nav>

                    </div>
                </div>
            </div>

        </header>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <section class="main-slider main-slider-one">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 7000
        }}'>

                <div class="swiper-wrapper">
                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide">
                        <div class="shape1"><img src="{{ asset('landingpage/images/shapes/slider-v1-shape1.png')}}" alt="" /></div>
                        <div class="shape2"><img src="{{ asset('landingpage/images/shapes/slider-v1-shape2.png')}}" alt="" /></div>
                        <div class="image-layer"
                            style="background-image: url({{ asset('landingpage/images/backgrounds/main-slider-v1-1.jpg);')}}"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="main-slider__content">
                                <div class="main-slider__content-icon-one">
                                    <span class="icon-lamp"></span>
                                </div>
                                <div class="main-slider__content-icon-two">
                                    <span class="icon-human-resources"></span>
                                </div>
                               
                                <div class="main-slider__content-tagline">
                                    <h2>Ready to learn?</h2>
                                    <br>
                                </div>
                                <h1 class="main-slider__content-title" style="font-size: 36px;">Bimbingan Terjadwal, Skripsi Tuntas!</h1>
                                <p class="main-slider__content-text">Jangan khawatir lupa deadline, TuTu siap mengingatkan Anda.</p>
                                <div class="main-slider__content-btn">
                                    <a href="#" class="thm-btn">Start Now</a>
                                </div>
                                <div class="main-slider-one__img">
                                    <img src="{{ asset('landingpage/images/resources/5.png')}}" style="width: 900px;" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Swiper Slide-->

                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide">
                        <div class="shape1"><img src="{{ asset('landingpage/images/shapes/slider-v1-shape1.png')}}" alt="" /></div>
                        <div class="shape2"><img src="{{ asset('landingpage/images/shapes/slider-v1-shape2.png')}}" alt="" /></div>
                        <div class="image-layer"
                            style="background-image: url({{ asset('landingpage/images/backgrounds/main-slider-v1-1.jpg);')}}"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="main-slider__content">
                                <div class="main-slider__content-icon-one">
                                    <span class="icon-lamp"></span>
                                </div>
                                <div class="main-slider__content-icon-two">
                                    <span class="icon-human-resources"></span>
                                </div>
                               
                                <div class="main-slider__content-tagline">
                                    <h2>Ready to learn?</h2>
                                </div>
                                <h1 class="main-slider__content-title" style="font-size: 36px;">Deadline Terkendali, Tugas Tuntas!</h1>
                                <p class="main-slider__content-text">Dengan TuTu, tak ada lagi tugas akhir yang terbengkalai.</p>
                                <div class="main-slider__content-btn">
                                    <a href="#" class="thm-btn">Start Now</a>
                                </div>
                                <div class="main-slider-one__img">
                                    <img src="{{ asset('landingpage/images/resources/5.png')}}" style="width: 900px;" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Swiper Slide-->

                                  </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <span class="icon-left"></span>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <span class="icon-right"></span>
                    </div>
                </div>

            </div>
        </section>








        <!--Features One Start-->
        <section class="features-one">
            <div class="container">
                <div class="row">
                    <!--Start Single Features One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-empowerment"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h6><a href="#">Progres Belajar</a></h6>
                                <p>Cek Progres Belajar Menuju Kelulusan</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Features One-->

                    <!--Start Single Features One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-human-resources-1"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h6><a href="#">Lacak Perkembangan</a></h6>
                                <p>Ikuti Perkembangan Secara Real-Time</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Features One-->

                    <!--Start Single Features One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-recruitment"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h6><a href="#">Pengingat Tepat Waktu</a></h6>
                                <p>Ingatkan Tugas dan Deadline Anda</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Features One-->
                </div>
            </div>
        </section>
        <!--Features One End-->



        <!--About One Start-->
        <section class="about-one clearfix">
            <div class="container">
                <div class="row">
                    <!-- Start About One Left-->
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <ul class="about-one__left-img-box list-unstyled clearfix">
                                <li class="about-one__left-single">
                                    <div class="about-one__left-img1">
                                        <img src="{{ asset('landingpage/images/resources/pexels-ivan-samkov-4240497.jpg')}}" style="width: 330px" alt="" />
                                    </div>
                                </li>
                                <li class="about-one__left-single">
                                    <div class="about-one__left-img2">
                                        <img src="{{ asset('landingpage/images/resources/pexels-karolina-grabowska-5908728.jpg')}}" style="width: 330px" alt="" />
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__left-overlay">
                                <div class="icon">
                                    <span class="icon-relationship"></span>
                                </div>
                                <div class="title">
                                    <h6>Selesaikan Skripsi Lebih <br> Terstruktur & Efisien</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End About One Left-->


                    <!-- Start About One Right-->
                    <div id="welcome" class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title">
                                <h4 class="section-title__title">WELCOME TO TUTU </h4>
                            </div>
                            <div class="about-one__right-inner">
                                <p class="about-one__right-text">TUTU hadir sebagai solusi bagi mahasiswa akhir yang kesulitan mengatur waktu, mengelola progres, dan menjaga fokus dalam menyelesaikan tugas akhir. Dengan fitur-fitur unggulan, TUTU membantu Anda menuju kelulusan tepat waktu dengan lebih terstruktur dan terarah.</p>
                                <ul class="about-one__right-list list-unstyled">
                                    <li class="about-one__right-list-item">
                                        <div class="icon">
                                            <span class="icon-confirmation"></span>
                                        </div>
                                        <div class="text">
                                            <p>Atur Pengingat Bimbingan </p>
                                        </div>
                                    </li>

                                    <li class="about-one__right-list-item">
                                        <div class="icon">
                                            <span class="icon-confirmation"></span>
                                        </div>
                                        <div class="text">
                                            <p>Pantau Progres Skripsi </p>
                                        </div>
                                    </li>

                                    <li class="about-one__right-list-item">
                                        <div class="icon">
                                            <span class="icon-confirmation"></span>
                                        </div>
                                        <div class="text">
                                            <p>Statistik Penggunaan Waktu</p>
                                        </div>
                                    </li>
                                    <li class="about-one__right-list-item">
                                        <div class="icon">
                                            <span class="icon-confirmation"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manajemen Data Pengguna</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End About One Right-->
                </div>
            </div>
        </section>
        <!--About One End-->


        <!--Testimonials One Start-->
        <section id="testimonials" class="testimonials-one clearfix">
            <div class="auto-container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">ARTICLE</span>
                    <h6 class="section-title__title">Mengapa TuTu Penting Bagi Mahasiswa Akhir?</h6>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonials-one__wrapper">
                            <div class="testimonials-one__pattern"><img
                                    src="{{ asset('landingpage/images/pattern/testimonials-one-left-pattern.png')}}" alt="" /></div>
                            <div class="shape1"><img src="{{ asset('landingpage/images/shapes/thm-shape3.png')}}" alt="" /></div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">
                                        <!--Start Single Testimonials One -->
                                        <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <div class="testimonials-one__single-inner">
                                                <h4 class="testimonials-one__single-title"></h4>
                                                <p class="testimonials-one__single-text">Mahasiswa akhir sering menghadapi kesulitan menyelesaikan tugas akhir akibat manajemen waktu yang buruk, tenggat bimbingan terlewat, dan kurangnya fokus. Tanpa alat yang tepat, banyaknya tugas dalam waktu singkat sering membuat mereka kewalahan. Oleh karena itu, dibutuhkan sistem yang membantu mengatur progres dan waktu secara efisien.</p>
                                                <div class="testimonials-one__single-client-info">
                                                    <div class="testimonials-one__single-client-info-img">
                                                        <img src="{{ asset('landingpage/images/resources/pexels-william-fortunato-6393008.jpg')}}"
                                                            alt="" />
                                                    </div>
                                                    <div class="testimonials-one__single-client-info-text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Testimonials One -->

                                        <!--Start Single Testimonials One -->
                                        <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                            data-wow-duration="1500ms">
                                            <div class="testimonials-one__single-inner">
                                               
                                                <p class="testimonials-one__single-text">TuTu  platform yang membantu mahasiswa akhir mengelola waktu, progres, dan pengingat tugas. Dengan pengingat otomatis untuk deadline dan jadwal bimbingan, mahasiswa dapat mengatur waktu lebih efisien. Fitur pemantauan progres dan statistik penggunaan waktu memudahkan pengaturan jadwal, sehingga mahasiswa lebih terorganisir dan mencapai target akademik.</p>
                                                <div class="testimonials-one__single-client-info">
                                                    <div class="testimonials-one__single-client-info-img">
                                                        <img src="{{ asset('landingpage/images/resources/pexels-julio-lopez-75309646-29179700.jpg')}}"
                                                            alt="" />
                                                    </div>
                                                    <div class="testimonials-one__single-client-info-text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Testimonials One -->

                                        <!--Start Single Testimonials One -->
                                        <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                            data-wow-duration="1500ms">
                                            <div class="testimonials-one__single-inner">
                                                <h4 class="testimonials-one__single-title"></h4>
                                                <p class="testimonials-one__single-text">Manajemen waktu penting untuk mengurangi stres, meningkatkan produktivitas, dan menyelesaikan studi tepat waktu. Dengan TuTu, mahasiswa dapat mengelola waktu lebih efisien, memantau progres, dan mencapai hasil maksimal tanpa kebingungan, sehingga tugas akhir dapat diselesaikan dengan lebih terorganisir dan tepat waktu.</p>
                                                <div class="testimonials-one__single-client-info">
                                                    <div class="testimonials-one__single-client-info-img">
                                                        <img src="{{ asset('landingpage/images/resources/pexels-buro-millennial-636760-1438081.jpg')}}"
                                                            alt="" />
                                                    </div>
                                                    <div class="testimonials-one__single-client-info-text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Single Testimonials One -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials One End-->
   

        <!--Start Footer One-->
        <footer class="footer-one">
            <div class="footer-one__bg" style="background-image: url({{ asset('landingpage/images/backgrounds/footr-v1-bg.jpg);')}}">
            </div><!-- /.footer-one__bg -->
            <div class="footer-one__top">
                <div class="container">
                    <div class="row">
                        <!--Start Footer Widget Column-->
                        <div class="col-xl-2 col-lg-4 col-md-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="index.html"><img src="{{ asset('landingpage/images/resources/5.png')}}" style="width: 180px;" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->


                        <!--Start Footer Widget Column-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="text">Srengseng Sawah, Depok</p>
                                <p><a href="mailto:info@templatepath.com">tutuofficial@student.ac.id</a></p>
                                <p class="phone"><a href="tel:123456789">92 888 666 0000</a></p>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                        <!--Start Footer Widget Column-->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.9s">
                            <div class="footer-widget__column footer-widget__social-links">
                                <ul class="footer-widget__social-links-list list-unstyled clearfix">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                    </div>
                </div>
            </div>

            <!--Start Footer One Bottom-->
            <div class="footer-one__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner">
                                <div class="footer-one__bottom-text text-center">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer One Bottom-->
        </footer>
        <!--End Footer One-->









    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('landingpage/images/resources/mobilemenu_logo.png')}}"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@zilom.com</a>
                </li>
                <li>
                    <i class="icon-letter"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('landingpage/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/wow/wow.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/isotope/isotope.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/twentytwenty/twentytwenty.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{ asset('landingpage/vendors/parallax/parallax.min.js')}}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

    <!-- template js -->
    <script src="{{ asset('landingpage/js/zilom.js')}}"></script>


</body>

</html>