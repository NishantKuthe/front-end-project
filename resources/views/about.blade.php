@extends('layout.master')

@section('title', $pageTitle)

@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row" style="background-image: url(images/banner/aboutus.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title headingtag">{{ $pageTitle }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ $pageTitle }}</span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- about-section -->
        <section class="ttm-row about-top-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 align-self-center">
                        <div class="position-relative pr-15 res-991-pr-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <div class="ttm_single_image-wrapper w100">
                                            <img class="img-fluid" src="{{ $about->image }}" title="single-img-five"
                                                alt="single-img-five">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="pl-15 res-991-pl-0 res-991-mt-30">
                            <div class="section-title pr-60 res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h2 class="title">{{ $about->title }}</h2>
                                    <h5 class="title-desc">{{ $about->subtitle }}</h5>
                                </div>
                                <div class="title-desc">{!! html_entity_decode($about->description) !!} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- about-section end -->
        <section class="ttm-row about-top-section clearfix ttm-bgcolor-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="pl-15 res-991-pl-0 res-991-mt-30">
                            <div class="section-title pr-60 res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h2 class="title">{{ $directorMessage->title }}</h2>
                                    <h5 class="title-desc">{{ $directorMessage->subtitle }}</h5>
                                </div>
                                <div class="title-desc">{!! html_entity_decode($directorMessage->description) !!} </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 align-self-center">
                        <div class="position-relative pr-15 res-991-pr-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <div class="ttm_single_image-wrapper w100">
                                            <img class="img-fluid" src="{{ $directorMessage->image }}"
                                                title="single-img-five" alt="single-img-five">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ttm-row about-top-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 align-self-center">
                        <div class="position-relative pr-15 res-991-pr-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <div class="ttm_single_image-wrapper w100">
                                            <img class="img-fluid" src="{{ $workCulture->image }}"
                                                title="single-img-five" alt="single-img-five">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="pl-15 res-991-pl-0 res-991-mt-30">
                            <div class="section-title pr-60 res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h2 class="title">{{ $workCulture->title }}</h2>
                                    <h5 class="title-desc">{{ $workCulture->subtitle }}</h5>
                                </div>
                                <div class="title-desc">{!! html_entity_decode($workCulture->description) !!} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-section -->
        <section class="ttm-row ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img1 about-services-section clearfix"
            style="background-image: url(images/banner/WHY-CHOOSE-US-ABOUT-US.jpg)">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-sm-1"></div>
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <!-- section title -->
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header mb-60">
                                <h5>WHY CHOOSE US</h5>
                                <h2 class="title">We creating solutions for your organization</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row align-items-center ptb-50 res-991-ptb-20 iconalign-before-heading-row">
                            <div class="col-md-4">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box iconalign-before-heading style1">
                                    <div class="featured-content">
                                        <!-- featured-content -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="ti ti-world"></i>
                                        </div>
                                        <div class="featured-title">
                                            <h5 class="mb-0">{{ $mission->title }}</h5>
                                        </div>
                                    </div><!-- featured-content -->
                                </div><!-- featured-icon-box -->
                            </div>
                            <div class="col-md-8">
                                <p class="mb-0 ml-30 res-767-mt-20 res-767-ml-10">{!! html_entity_decode($mission->description) !!}</p>
                            </div>
                        </div>
                        <div class="row align-items-center ptb-50 res-991-ptb-20 iconalign-before-heading-row">
                            <div class="col-md-4">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box iconalign-before-heading style1">
                                    <div class="featured-content">
                                        <!-- featured-content -->
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="ti ti-bar-chart"></i>
                                        </div>
                                        <div class="featured-title">
                                            <h5 class="mb-0">{{ $vision->title }}</h5>
                                        </div>
                                    </div><!-- featured-content -->
                                </div><!-- featured-icon-box -->
                            </div>
                            <div class="col-md-8">
                                <p class="mb-0 ml-30 res-767-mt-20 res-767-ml-10">{!! html_entity_decode($mission->description) !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- services-section end -->

        <!-- team-section -->
        <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img3 team-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2"></div>
                    <div class="col-md-6 col-sm-8">
                        <!-- section title -->
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>OUR TEAM MEMBER</h5>
                                <h2 class="title">Discover our team and experts</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-3 col-sm-2"></div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="wrap-team team-slide owl-carousel " data-item="3" data-nav="false" data-dots="false"
                        data-auto="true">
                        @foreach ($teams as $team)
                            <div class="featured-imagebox featured-imagebox-team">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ $team->image }}" alt="image">
                                </div>
                                <div class="featured-content featured-content-team">
                                    <div class="featured-title">
                                        <h5><a href="/">{{ $team->name }}</a></h5>
                                    </div>
                                    <p class="category">{{ $team->designation }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->

        <!-- client-section -->
        <section class="ttm-row team-work-section bg-img4 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2"></div>
                    <div class="col-md-6 col-sm-8">
                        <!-- section title -->
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header mb-60">
                                <h5>how it work</h5>
                                <h2 class="title">Three Simple Step To Start Working Process</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-3 col-sm-2"></div>
                </div>
                <div class="row no-gutters mt-23 ttm-fid-view-topicon-row ttm-bgcolor-white">
                    <div class="col-md-3 col-sm-6 with-right-border">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-light-bulb"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span data-appear-animation="animateDigits" data-from="0" data-to="273"
                                        data-interval="20" data-before="" data-before-style="sup" data-after=""
                                        data-after-style="sub">273
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Experts In Specific Field Of Research</span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 with-right-border">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-world"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span data-appear-animation="animateDigits" data-from="0" data-to="145"
                                        data-interval="20" data-before="" data-before-style="sup" data-after=""
                                        data-after-style="sub">145
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Established Branches Globally</span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 with-right-border">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-pencil-alt"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span data-appear-animation="animateDigits" data-from="0" data-to="891"
                                        data-interval="20" data-before="" data-before-style="sup" data-after=""
                                        data-after-style="sub">891
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Projects Have Done Successfully</span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 with-right-border">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-user"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span data-appear-animation="animateDigits" data-from="0" data-to="547"
                                        data-interval="20" data-before="" data-before-style="sup" data-after=""
                                        data-after-style="sub">547
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Satisfied Clients From Corporate World</span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                </div>
                <div class="separator">
                    <div class="sep-line solid mt-50 mb-25 res-991-mb-0"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- ttm-client -->
                        <div class="ttm-client clients-slide owl-carousel owl-theme owl-loaded mt-5" data-item="5"
                            data-nav="false" data-dots="false" data-auto="true">
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                                        <img class="img-fluid" src="https://via.placeholder.com/170X90/444444.png"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                                        <img class="img-fluid" src="https://via.placeholder.com/170X90/444444.png"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                                        <img class="img-fluid" src="https://via.placeholder.com/170X90/444444.png"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                                        <img class="img-fluid" src="https://via.placeholder.com/170X90/444444.png"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                                        <img class="img-fluid" src="https://via.placeholder.com/170X90/444444.png"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                                        <img class="img-fluid" src="https://via.placeholder.com/170X90/444444.png"
                                            alt="image">
                                    </div>
                                </div>
                            </div>
                        </div><!-- ttm-client end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- client-section end-->

        <!-- testimonial-section -->
        <section
            class="ttm-row about-testimonial-section ttm-bgimage-yes map-bgimg ttm-bg ttm-bgcolor-skincolor bg-layer clearfix">
            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-slide owl-carousel" data-item="1" data-nav="false" data-dots="true"
                            data-auto="true">
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonials style1 text-center">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-center" src="{{ $testimonial->image }}"
                                                    alt="testimonial-img">
                                            </div>
                                        </div>

                                        <blockquote>{{ $testimonial->description }}</blockquote>
                                        <div class="testimonial-caption">
                                            <h6>{{ $testimonial->name }}</h6>
                                            <label>{{ $testimonial->subtitle }}</label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end-->

        <!--blog-text-section-->
        <section class="ttm-row blog-text-section ttm-bgcolor-grey mt_120 res-991-mt-0 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 clearfix">
                            <div class="title-header">
                                <h5>Our latest News</h5>
                                <h2 class="title">Read Our Latest Articles, Tips &amp; News</h2>
                            </div>
                            <div class="title-desc">Know how to pursue pleasure rationally encounter consequences that
                                are re <br> rationally encounter consequences that are extremely painful.</div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--blog-text-section end-->

        <!--blog-section-->
        <section class="ttm-row about-blog-section clearfix aboutnews">
            <div class="container">
                <div class="row">
                    <div class="post-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false"
                        data-dots="false" data-auto="false">
                        @foreach ($newses as $key => $news)
                            <div class="featured-imagebox featured-imagebox-post box-shadow">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ $news['image'] }}" alt="">
                                </div>
                                <div class="featured-content featured-content-post">
                                    <div class="post-title featured-title">
                                        <h5><a href="/news">{{ $news['title'] }}</a></h5>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line"><i
                                                class="fa fa-calendar"></i>{{ $news['date'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

    </div>

@stop
