<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Restore - Computer, Mobile & Digital Repair Shop HTML5 Template">
    <meta name="author" content="codeecstasy">
    <link rel="shortcut icon" href="{{asset('/site/images/favicon.png')}}"/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The styles -->
    <link rel="stylesheet" href="{{asset('/site/css/bootstrap.min.css')}}"/>
    <link href="{{asset('/site/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/site/css/icon-styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/site/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/site/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/site/css/venobox.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/site/css/styles.css')}}"/>

<body>

<div id="preloader">
    <span class="margin-bottom"><img src="{{asset('/site/images/loader.gif')}}" alt=""/></span>
</div>

<!--  HEADER -->

<header class="main-header clearfix">

    <section class="header-wrapper navgiation-wrapper">


        <div class="repair-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 repair-col-logo">
                        <div class="repair-logo">
                            <a href="#">
                                <img src="{{asset('/site/images/logo.png')}}" alt="Logo" width="156">
                            </a>
                        </div><!-- end .repair-logo  -->
                    </div><!-- end .col-md-3  -->
                    <div class="col-md-7 hidden-sm hidden-xs">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="repair-icon-box">
                                    <div class="icon-container">
                                        <span class="icon icon-basic-home"></span>
                                    </div>
                                    <div class="text">
                                        <span class="head-heading">Посетите нас</span>
                                        <span class="head-content">Минск, пр-т Победителей,1 </span>
                                    </div>
                                </div><!-- end .repair-icon-box  -->
                            </div><!-- end .col-md-4  -->

                            <div class="col-md-4">
                                <div class="repair-icon-box">
                                    <div class="icon-container">
                                        <i class="icon icon-basic-smartphone"></i>
                                    </div>
                                    <div class="text">
                                        <span class="head-heading">Позвоните нам сейчас</span>
                                        <span class="head-content">+375 (ХХ)ХХХ-ХХ-ХХ</span>
                                    </div>
                                </div><!-- end .repair-icon-box  -->
                            </div><!-- end .col-md-4  -->

                            <div class="col-md-4">
                                <div class="repair-icon-box">
                                    <div class="icon-container">
                                        <i class="icon icon-basic-clock"></i>
                                    </div>
                                    <div class="text">
                                        <span class="head-heading">Пн - Птн</span>
                                        <span class="head-content">9.00 - 18.00</span>
                                    </div>
                                </div><!-- end .repair-icon-box  -->
                            </div> <!-- end .col-md-4  -->
                        </div> <!-- end .row  -->

                    </div><!-- end .col-md-7  -->

                    <div class="col-md-2 hidden-sm hidden-xs">
                        <div class="btn-quote">
                            <a class="btn-request_quote" href="#">GET FREE QUOTE</a>
                        </div><!-- end .btn-quote  -->
                    </div><!-- end .col-md-2  -->

                </div><!-- end .row  -->
            </div><!-- end .container  -->
        </div><!-- end .repair-header-top  -->


        <div class="navbar navbar-default">
            <div class="container clearfix">
                <div class="navbar-collapse collapse pull-left">
                    <ul class="nav navbar-nav">
                        <li class="drop"><a href="/" title="Home Layout 01" class="link-active">Главная</a></li>
                        <li><a href="/about_us" title="About Us">О нас</a></li>
                        <li><a href="/repair_requests/create" title="Services">Сервис</a></li>
                        <li><a href="/contact">Контакты</a></li>
                    </ul> <!-- end .nav .navbar-nav  -->
                </div>
                <div class="navbar-header pull-right">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="social-icons hidden-sm hidden-xs">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="margin-right-0">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div> <!-- end .social-icons  -->
                </div>
            </div> <!-- end .container  -->
        </div> <!-- end .navbar .navbar-default  -->

    </section>


</header> <!-- end main-header  -->


@yield('content')

<!-- FOOTER  -->

<footer>
    <!-- FOOTER WIDGET AREA -->

    <section class="section-content-block footer-widget-area-bg">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-7">
                    <div class="footer-widget-area">
                        <div class="footer-logo">
                            <img src="{{asset('site/images/logo-footer.png')}}" alt="Logo" width="156">
                        </div>
                        <div class="contact-info divider-line">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas amet vestibulum tortor quam feugiat vitae ultricies eget tempor sit ante.</p>
                        </div>
                        <div class="contact-info">
                            <div class="contact-details">
                                <div class="social-icons">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end .footer-widget-area  -->
                </div> <!-- end .col-md-4  -->

                <div class="col-md-3 col-sm-5">
                    <div class="footer-widget-area">
                        <h3>Shop Info</h3>
                        <div class="contact-info divider-line">
                            <div class="contact-heading">Address:</div>
                            <div class="contact-details">
                                965 East Avenu, Sector 9 Russel Squire, UK
                            </div>
                        </div>
                        <div class="contact-info divider-line">
                            <div class="contact-heading">Phone:</div>
                            <div class="contact-details">
                                (+1)755-650-5212
                            </div>
                            <div class="contact-heading">Email:</div>
                            <div class="contact-details color-primary">
                                <a href="mailto:admin@bluewindlb.net">info@bluewindlab.net</a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-heading">Hours:</div>
                            <div class="contact-details">
                                Mon - Fri (9am - 6pm)
                            </div>
                        </div>
                    </div> <!-- end .footer-widget-area  -->
                </div> <!-- end .col-md-3  -->

                <div class="col-md-2 col-sm-6">
                    <div class="footer-widget-area">
                        <h3>Services</h3>
                        <ul class="footer-useful-links">
                            <li>
                                <a href="#">
                                    <i class="fa fa fa-long-arrow-right fa-footer"></i>
                                    Laptop Repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa fa-long-arrow-right fa-footer"></i>
                                    iPhone Repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa fa-long-arrow-right fa-footer"></i>
                                    iPad Repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right fa-footer"></i>
                                    Tablet Repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right fa-footer"></i>
                                    Smartphone Repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right fa-footer"></i>
                                    Gadget Repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right fa-footer"></i>
                                    Recover Data
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-long-arrow-right fa-footer"></i>
                                    Backup Data
                                </a>
                            </li>
                        </ul>

                    </div> <!-- end .footer-widget-area  -->
                </div> <!-- end .col-md-2  -->

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget-area newsletter-footer">
                        <h3>Newsletter</h3>
                        <p>Signup for regular newsletter and stay upto date with our latest news</p>
                        <form id="mc-form" class="mc-form fix" action="#">
                            <div class="newsletter-form">
                                <input id="mc-email" name="EMAIL" placeholder="Email Address..." type="email">
                                <button id="mc-submit" type="submit">
                                    <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </form>
                        <div class="mailchimp-alerts text-centre fix">
                            <div class="mailchimp-submitting"></div>
                            <div class="mailchimp-success"></div>
                            <div class="mailchimp-error"></div>
                        </div>

                    </div> <!-- end .footer-widget-area  -->
                </div> <!-- end .col-md-3  -->

            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!--  end .footer-widget-area-bg -->

    <!--FOOTER CONTENT  -->

    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                             <span>
                            Copyright © 2016. All right reserved by
                            <a class="color-primary" href="http://codeecstasy.com">codeecstasy.com</a>
                            </span>
                </div> <!-- end .col-md-6  -->
                <div class="col-md-6 col-sm-12">
                    <div class="footer-nav">
                        <nav>
                            <ul>
                                <li>
                                    <a href="/admin/repair_requests">Admin</a>
                                </li>
                                <li>
                                    <a href="/about_us">About</a>
                                </li>
                                <li>
                                    <a href="/repair_requests/create">Services</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> <!-- end .col-md-6  -->
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section>  <!--  end .footer-area -->

</footer> <!--  end of footer -->

<!-- Back To Top Button  -->

<a id="backTop">Back To Top</a>

<script src="{{asset('/site/js/jquery.min.js')}}"></script>
<script src="{{asset('/site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/site/js/wow.min.js')}}"></script>
<script src="{{asset('/site/js/jquery.backTop.min.js')}}"></script>
<script src="{{asset('/site/js/waypoints.min.js')}}"></script>
<script src="{{asset('/site/js/waypoints-sticky.min.js')}}"></script>
<script src="{{asset('/site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/site/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('/site/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/site/js/venobox.min.js')}}"></script>
<script src="{{asset('/site/js/custom-scripts.js')}}"></script>


</body>

</html>
