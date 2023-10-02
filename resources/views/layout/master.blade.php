<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- SITE TITLE -->
    <title>{{ $settings['site_name'] }} - @yield('title')</title>
    @include('layout.head-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('override/override.css') }}" />

</head>

<body>
    <div class="page">
        {{-- <div id="preloader">
            <div id="status">&nbsp;</div>
        </div> --}}
        <!--header start-->
        <header id="masthead" class="header ttm-header-style-classic">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact ttm-highlight-left text-left">
                            <li><strong>{{$settings['company_name']}}</strong> </li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-envelope-o"></i> <a href="tel:{{ $settings['contact_email'] }}">{{ $settings['contact_email'] }}</a></li>
                                <li><i class="fa fa-phone"></i><a href="tel:{{ $settings['contact_phone'] }}">{{ $settings['contact_phone'] }}</a></li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="{{$settings['facebook_link']}}"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="{{$settings['twitter_link']}}"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="{{$settings['instagram_link']}}"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="{{$settings['youtube_link']}}"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="/" title="Fondex" rel="home">
                                        <img id="logo-img" class="img-center" src="{{$settings['logo']}}" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <div class="header-btn">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black"
                                            href="{{env('LOGIN_URL')}}">Login/Register</a>
                                    </div>
                                    <div class="ttm-rt-contact">
                                        <!-- header-icons -->
                                        <div class="ttm-header-icons">
                                            <div class="ttm-header-icon ttm-header-search-link">
                                                <a href="#"><i class="ti ti-search"></i></a>
                                                <div class="ttm-search-overlay">
                                                    <form method="get" class="ttm-site-searchform" action="/products">
                                                        <div class="w-search-form-h">
                                                            <div class="w-search-form-row">
                                                                <div class="w-search-input">
                                                                    <input type="search" class="field searchform-s"
                                                                        name="searchQry" placeholder="Type Word Then Enter...">
                                                                    <button type="submit">
                                                                        <i class="ti ti-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- header-icons end -->
                                    </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a>

                                            </li>
                                            <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="/about">About</a>

                                            </li>
                                            <li class="{{ request()->is( 'news', 'achievers', 'downloads', 'bank-partners', 'documents') ? 'active' : '' }}"><a href="#">Company</a>
                                                <ul>
                                                    <li><a href="/news"> News </a></li>
                                                    <li><a href="#"> Business Opportunity </a></li>
                                                    <li><a href="/achievers"> Achievers </a></li>
                                                    <li><a href="/downloads"> Downloads </a></li>
                                                <li><a href="/documents"> Document </a></li>
                                                    <li><a href="/bank-partners"> Banking </a></li>
                                                </ul>
                                            </li>

                                            <li class="{{ request()->is('products') ? 'active' : '' }}"><a href="/products">Products</a>
                                            </li>
                                            <li class="{{ request()->is('gallery') ? 'active' : '' }}"><a href="/gallery">Gallery</a>
                                            </li>
                                            <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="/contact">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div>
            <!--ttm-header-wrap end -->
        </header>
        <!--header end-->

        @yield('content')
        <footer class="footer widget-footer clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="first-footer-inner">
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-center" src="{{$settings['logo']}}"
                                        alt="">
                                </div>
                                <div class="row no-gutters footer-box">
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Our Address</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>{{$settings['company_name']}}</p>
                                                    <p>   {{$settings['address']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Talk To Expert</h5>
                                                </div>

                                                <div class="featured-desc">
                                                    <a href="tel:{{ $settings['contact_phone'] }}">{{ $settings['contact_phone'] }}</a><br>
                                                    <a href="tel:{{ $settings['support_phone'] }}">{{ $settings['support_phone'] }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Email Us</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <a href="tel:{{ $settings['contact_email'] }}">{{ $settings['contact_email'] }}</a><br>
                                                    <a href="tel:{{ $settings['support_email'] }}">{{ $settings['support_email'] }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-textcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text  clearfix">
                                <h3 class="widget-title">About Business</h3>
                                <div class="textwidget widget-text">
                                    {{$settings['company_about']}}
                                    <br><br>
                                    <div class="social-icons circle social-hover">
                                        <ul class="list-inline">
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank"
                                                    href="{{$settings['facebook_link']}}" data-tooltip="Facebook"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a class="tooltip-top" target="_blank"
                                                    href="{{$settings['twitter_link']}}" data-tooltip="Twitter"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="social-flickr"><a class=" tooltip-top" target="_blank"
                                                    href="{{$settings['instagram_link']}}" data-tooltip="instagram"><i class="fa fa-instagram"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class=" tooltip-top" target="_blank"
                                                    href="{{$settings['youtube_link']}}" data-tooltip="YouTube"><i class="fa fa-youtube"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul id="menu-footer-services">
                                     <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/terms-and-conditions">Terms and Condition</a></li>
                                    <li><a href="/product-catalogue">Product Catalogue</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text clearfix">
                                <h3 class="widget-title">Need Helps </h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/downloads">Downloads</a></li>
                                    <li><a href="/documents">Documents</a></li>
                                    <li><a href="/bank-partners">Banking </a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li><a href="{{ env('LOGIN_URL') }}"> Login </a></li>
                                    <li><a href="{{ env('REGISTRATION_URL') }}"> Register </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget flicker_widget clearfix">
                                <h3 class="widget-title">Our Office</h3>
                                <div class="textwidget widget-text">
                                   <p>   <i class="fa fa-home"></i> {{$settings['company_name']}}</p>
                                    <ul class="ttm-our-location-list">
                                        <li>{{$settings['address']}}
                                            {{$settings['city']}}
                                            {{$settings['state']}}
                                            {{$settings['pincode']}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="">
                                <p> <a href="/">{{ $settings['company_name'] }}</a> © {{ Date('Y') }}  All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://api.whatsapp.com/send?phone=+919546111819&text=Hello" class="float-one" target="_blank">
        <img src="images/whatsapp.png" class="my-float" alt="whatsapp">
    </a>
        </footer>
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
    @include('layout.footer-js')
    @yield('pageJs')
</body>

</html>
