@extends('layout.master')

@section('title', $pageTitle)

@section('content')

    @if (!$popups->isEmpty())
        @foreach ($popups as $popup)
            <div id="popup-{{ $popup->id }}" class="simplePopupBackground">
                <div id="onstartmodal-{{ $popup->id }}" class="simplePopup">
                    <div id="close-{{ $popup->id }}" class="simplePopupClose">X</div>
                    <img class="img-responsive" src="{{ $popup->image }}" alt="">
                </div>
            </div>
        @endforeach
    @endif
    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay"
        data-alias="classic4export" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner rev_slider_4_1_height" data-version="5.4.8.1">

            <ul>
                <!-- SLIDE  -->
                @foreach ($sliders as $key => $slider)
                    @if ($key === 0)
                        <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                            data-thumb="{{ $slider['image'] }}" data-rotate="0" data-saveperformance="off"
                            data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ $slider['image'] }}" alt="" title="home-main-sliderbg01" width="1920" height="730"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->


                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-2"
                                data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                                data-y="['top','top','middle','middle']" data-voffset="['185','185','-107','-87']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['75','75','75','60']"
                                data-fontweight="['700','700','700','700']"
                                data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":380,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                {{ substr($slider['title'], 0, 13) }} </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-3"
                                data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                                data-y="['top','top','middle','middle']" data-voffset="['257','257','-46','-38']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['75','75','75','60']"
                                data-fontweight="['700','700','700','700']"
                                data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":540,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                {{ substr($slider['title'], 13, 18) }} <strong
                                    class="ttm-textcolor-skincolor">{{ substr($slider['title'], 33, 37) }}</strong> </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-4"
                                data-x="['left','left','center','center']" data-hoffset="['50','50','-702','-702']"
                                data-y="['top','top','middle','middle']" data-voffset="['350','350','247','247']"
                                data-fontsize="['16','16','14','14']" data-lineheight="['26','26','24','24']"
                                data-fontweight="['400','400','400','400']"
                                data-color="['rgb(222,222,222)','rgb(222,222,222)','rgb(222,222,222)','rgb(222,222,222)']"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-visibility="['on','on','off','off']" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":830,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                {{ $slider['subtitle'] }} </div>

                            <!-- LAYER NR. 5 -->
                            @if ($slider->cta_link)
                                <a class="tp-caption skin-flat-button tp-resizeme" href="{{ $slider->cta_link }}"
                                    target="_self" id="slide-1-layer-5" data-x="['left','left','center','center']"
                                    data-hoffset="['50','50','0','0']" data-y="['top','top','middle','middle']"
                                    data-voffset="['452','452','39','31']" data-fontsize="['13','13','12','11']"
                                    data-lineheight="['13','13','12','11']" data-fontweight="['700','700','700','700']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                    data-actions='' data-responsive_offset="on"
                                    data-frames='[{"delay":910,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[16,16,14,12]" data-paddingright="[35,35,30,25]"
                                    data-paddingbottom="[16,16,14,12]"
                                    data-paddingleft="[35,35,30,25]">{{ $slider->cta_text }} </a>
                            @endif

                        </li>
                    @else
                        <li data-index="rs-14" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                            data-thumb="{{ $slider['image'] }}" data-rotate="0" data-saveperformance="off"
                            data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ $slider['image'] }}" alt="" title="Home 1" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 11 -->


                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption tp-resizeme" id="slide-3-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['167','87','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-141','-121','-102','-86']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['75','75','75','60']"
                                data-fontweight="['700','700','700','700']"
                                data-color="['rgb(5, 6, 43)','rgb(5, 6, 43)','rgb(5, 6, 43)','rgb(5, 6, 43)']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":330,"speed":800,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                {{ substr($slider['title'], 0, 15) }}</div>

                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption tp-resizeme" id="slide-3-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['280','200','0','0']"
                                data-y="['top','top','middle','middle']" data-voffset="['256','256','-41','-37']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['75','75','75','60']"
                                data-fontweight="['700','700','700','700']"
                                data-color="['rgb(5, 6, 43)','rgb(5, 6, 43)','rgb(5, 6, 43)','rgb(5, 6, 43)']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":500,"speed":800,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                {{ substr($slider['title'], 15, 26) }}</div>

                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption tp-resizeme" id="slide-3-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['227','147','-702','-702']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['6','6','247','247']"
                                data-fontsize="['17','17','14','14']" data-lineheight="['26','26','24','24']"
                                data-fontweight="['400','400','400','400']"
                                data-color="['rgb(46, 50, 54)','rgb(46,50,54)','rgb(222,222,222)','rgb(222,222,222)']"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-visibility="['on','on','off','off']" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":890,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                {{ $slider['subtitle'] }} </div>

                            <!-- LAYER NR. 15 -->


                            <!-- LAYER NR. 16 -->
                            @if ($slider->cta_link)
                                <a class="tp-caption tp-resizeme skin-flat-button" href="{{ $slider['cta_link'] }}"
                                    target="_self" id="slide-3-layer-6" data-x="['center','center','center','center']"
                                    data-hoffset="['266','186','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['96','96','103','87']" data-fontsize="['13','13','12','11']"
                                    data-lineheight="['13','13','12','11']" data-fontweight="['700','700','700','700']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                    data-actions='' data-responsive_offset="on"
                                    data-frames='[{"delay":1120,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[16,16,14,12]" data-paddingright="[35,35,30,25]"
                                    data-paddingbottom="[16,16,14,12]"
                                    data-paddingleft="[35,35,30,25]">{{ $slider['cta_text'] }} </a>
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>

        </div>
    </div>

    <!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">

        <!--row-top-section-->
        <section class="ttm-row row-top-section first-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt_86 mlr-30 res-991-mt-0">
                        <div class="row">
                            <!-- row -->
                            <!-- post-slide -->
                            <div class="services-slide owl-carousel owl-theme owl-loaded" data-item="3" data-nav="false"
                                data-dots="false" data-auto="false">
                                <!-- featured-imagebox-post -->
                                <div class="featured-imagebox featured-imagebox-services text-center">
                                    <div class="featured-title">
                                        <h5><a href="#">Corporate Finanace</a></h5>
                                    </div>
                                    <div class="featured-thumbnail">
                                        <a href=""><img class="img-fluid" src="images/04.jpg" alt=""></a>
                                    </div>
                                    <div class="featured-content featured-content-services">
                                        <div class="featured-desc">
                                            <p>Concerned with a variety of forms of company financing, aspects of the
                                                reorganization.</p>
                                        </div>
                                        <a href="#"
                                            class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- featured-imagebox-post end -->
                                <!-- featured-imagebox-post -->
                                <div class="featured-imagebox featured-imagebox-services text-center">
                                    <div class="featured-title">
                                        <h5><a href="#">Analytics Solutions</a></h5>
                                    </div>
                                    <div class="featured-thumbnail">
                                        <a href=""><img class="img-fluid" src="images/05.jpg" alt=""></a>
                                    </div>
                                    <div class="featured-content featured-content-services">
                                        <div class="featured-desc">
                                            <p>We are in charge of, to increase of a consumer brand awareness and the
                                                revenue.</p>
                                        </div>
                                        <a href="#"
                                            class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- featured-imagebox-post end -->
                                <!-- featured-imagebox-post -->
                                <div class="featured-imagebox featured-imagebox-services text-center">
                                    <div class="featured-title">
                                        <h5><a href="#">Business Growth</a></h5>
                                    </div>
                                    <div class="featured-thumbnail">
                                        <a href=""><img class="img-fluid" src="images/06.jpg" alt=""></a>
                                    </div>
                                    <div class="featured-content featured-content-services">
                                        <div class="featured-desc">
                                            <p>To implement future-oriented logistics strategies leading companies in all
                                                industries.</p>
                                        </div>
                                        <a href="#"
                                            class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- featured-imagebox-post end -->
                                <!-- featured-imagebox-post -->
                                <div class="featured-imagebox featured-imagebox-services text-center">
                                    <div class="featured-title">
                                        <h5><a href="#">Advance Reports</a></h5>
                                    </div>
                                    <div class="featured-thumbnail">
                                        <a href=""><img class="img-fluid" src="images/07.jpg" alt=""></a>
                                    </div>
                                    <div class="featured-content featured-content-services">
                                        <div class="featured-desc">
                                            <p>We are in charge of, to increase of a consumer brand awareness and the
                                                revenue.</p>
                                        </div>
                                        <a href="#"
                                            class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- featured-imagebox-post end -->
                                <!-- featured-imagebox-post -->
                                <div class="featured-imagebox featured-imagebox-services text-center">
                                    <div class="featured-title">
                                        <h5><a href="#">Chain Management</a></h5>
                                    </div>
                                    <div class="featured-thumbnail">
                                        <a href=""><img class="img-fluid" src="images/08.jpg" alt=""></a>
                                    </div>
                                    <div class="featured-content featured-content-services">
                                        <div class="featured-desc">
                                            <p>To implement future-oriented logistics strategies leading companies in all
                                                industries.</p>
                                        </div>
                                        <a href="#"
                                            class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- featured-imagebox-post end -->
                                <!-- featured-imagebox-post -->
                                <div class="featured-imagebox featured-imagebox-services text-center">
                                    <div class="featured-title">
                                        <h5><a href="#">Advanced Analytics</a></h5>
                                    </div>
                                    <div class="featured-thumbnail">
                                        <a href=""><img class="img-fluid" src="images/09.jpg" alt=""></a>
                                    </div>
                                    <div class="featured-content featured-content-services">
                                        <div class="featured-desc">
                                            <p>Concerned with a variety of forms of company financing, aspects of the
                                                reorganization.</p>
                                        </div>
                                        <a href="#"
                                            class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- featured-imagebox-post end -->
                            </div>
                        </div>
                        <!-- row end -->
                    </div>
                </div>
                <!-- row end -->
                <div class="row pt-25">
                    <div class="col-md-12 text-center mb-55 res-991-mb-0">
                        <p>Don’t hesitate, contact us for better help and services.<strong><u><a href="#"
                                        class="ttm-textcolor-darkgrey"> Explore all services</a></u></strong></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- row-top-section end -->

        <!-- about-section -->
        <section class="ttm-row about-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <div class="pr-80 res-991-pr-0">
                            <!-- section title -->
                            <div class="section-title pr-60 res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h5>ABOUT CONSULTANCY</h5>
                                    <h2 class="title">We work with you to address your most critical business
                                        priorities</h2>
                                </div>
                                <div class="title-desc">To obtain higher performance, Our leaders first identify the
                                    critical obstacles to forward progress and then develop a coherent approach to
                                    overcoming them. We define your company mission and prioritize company objectives.
                                    <u><a href="#" class="ttm-textcolor-skincolor">Read More</a></u>
                                </div>
                            </div>
                            <!-- section title end -->
                            <div class="row no-gutters mt-40 mb-27">
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <ul class="ttm-list ttm-list-style-icon">
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span
                                                class="ttm-list-li-content">Acquire live chat enables sales </span></li>
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span
                                                class="ttm-list-li-content">Engage - marketing automation</span></li>
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span
                                                class="ttm-list-li-content">Acquire live chat enables sales</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <ul class="ttm-list ttm-list-style-icon">
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span
                                                class="ttm-list-li-content">Learn from customer feedback</span></li>
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span
                                                class="ttm-list-li-content">Support -customer support </span></li>
                                        <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span
                                                class="ttm-list-li-content">Learn from customer feedback</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="separator">
                                <div class="sep-line dashed"></div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 left-icon right-border">
                                        <div class="">
                                            <img src="https://via.placeholder.com/102X84/444444.png" alt="sign">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Jhon Martin</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Chairnan and founder</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 without-icon right-border">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>123-456-7890 </h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Call to ask any question</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <div class="ml_30 res-991-ml-0 res-991-mt-30 position-relative">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper w100 p-12 with-border">
                                <img class="img-fluid" src="images/single-img-one.jpg" title="single-img-one"
                                    alt="single-img-one">
                            </div>
                            <!-- ttm_single_image-wrapper end -->
                            <!--featured-icon-box-->
                            <div class="featured-icon-box style2 left-icon ttm-bgcolor-skincolor">
                                <a href="https://youtu.be/7e90gBu4pas" class="ttm_prettyphoto">
                                    <img src="images/ttm-playicon-30x30.png" alt="play-icon" class="ttm_prettyphoto">
                                </a>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Play Video</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- featured-icon-box end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

        <!-- services-section -->
        <section class="ttm-row ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img1 services-section clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-1"></div>
                    <div class="col-md-8 col-sm-10">
                        <!-- section title -->
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>WHAT WE DO</h5>
                                <h2 class="title">We creating solutions for your organization</h2>
                            </div>
                        </div>
                        <!-- section title end -->
                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style3 text-center mb-30">
                            <div class="featured-icon">
                                <!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon flaticon-consultation"></i>
                                </div>
                            </div>
                            <!-- featured-icon -->
                            <div class="featured-content">
                                <!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Business Finance<br> Strategy</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Devise and implement business strategies that drive success—for an entire business or
                                        division, technology, or asset.</p>
                                </div>
                            </div>
                            <!-- featured-content -->
                        </div>
                        <!-- featured-icon-box -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style3 text-center mb-30">
                            <div class="featured-icon">
                                <!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon flaticon-branding"></i>
                                </div>
                            </div>
                            <!-- featured-icon -->
                            <div class="featured-content">
                                <!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Portfolio &amp; Resource <br> Allocation</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>By balancing and optimizing the many competing assets and initiatives achieve deep
                                        &amp; lasting improvements.</p>
                                </div>
                            </div>
                            <!-- featured-content -->
                        </div>
                        <!-- featured-icon-box -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style3 text-center mb-30">
                            <div class="featured-icon">
                                <!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon flaticon-viral-marketing"></i>
                                </div>
                            </div>
                            <!-- featured-icon -->
                            <div class="featured-content">
                                <!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Organization &amp; <br> Decision Process</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Organizations are designed to be effective and an efficient. The processes require
                                        cross-functional teaming.</p>
                                </div>
                            </div>
                            <!-- featured-content -->
                        </div>
                        <!-- featured-icon-box -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style3 text-center mb-30">
                            <div class="featured-icon">
                                <!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon flaticon-talk-1"></i>
                                </div>
                            </div>
                            <!-- featured-icon -->
                            <div class="featured-content">
                                <!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Decision &amp; Risk <br> Analytic</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Our decision risk analytics empower clients to develop rational decision-making
                                        models and development.</p>
                                </div>
                            </div>
                            <!-- featured-content -->
                        </div>
                        <!-- featured-icon-box -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style3 text-center mb-30">
                            <div class="featured-icon">
                                <!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon flaticon-business-and-finance-1"></i>
                                </div>
                            </div>
                            <!-- featured-icon -->
                            <div class="featured-content">
                                <!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Banking &amp; <br> Capital Markets</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>The venues where savings and investments are channeled between the suppliers who have
                                        capital and those.</p>
                                </div>
                            </div>
                            <!-- featured-content -->
                        </div>
                        <!-- featured-icon-box -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style3 text-center mb-30">
                            <div class="featured-icon">
                                <!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon flaticon-document"></i>
                                </div>
                            </div>
                            <!-- featured-icon -->
                            <div class="featured-content">
                                <!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Modern &amp; Tribe<br> Workplace</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Redefine your workplace value equation that encourage staff to work more attentively
                                        and gracefully.</p>
                                </div>
                            </div>
                            <!-- featured-content -->
                        </div>
                        <!-- featured-icon-box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- services-section end -->

        <!-- broken-section -->
        <section class="ttm-row broken-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-12">
                        <div class="position-relative skin-border text-left">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper with-top-border mt_12">
                                <img class="img-fluid" src="images/single-img-two.jpg" title="single-img-one"
                                    alt="single-img-one">
                            </div>
                            <!-- ttm_single_image-wrapper end -->
                            <!--ttm-fid-->
                            <div class="ttm-fid inside ttm-fid-view-lefticon ttm-highlight-fid-style1">
                                <div class="ttm-fid-left">
                                    <div class="ttm-fid-icon-wrapper">
                                        <i class="ti ti-cup"></i>
                                    </div>
                                </div>
                                <div class="ttm-fid-contents text-left">
                                    <h4 class="ttm-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="300"
                                            data-interval="20" data-before="" data-before-style="sup" data-after="+"
                                            data-after-style="sub">300</span><span class="ml-5">+</span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Successful Customers</h3>
                                </div>
                            </div>
                            <!-- ttm-fid end-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <!--  -->
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white spacing-1 z-1">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>WHY CHOOSE US</h5>
                                        <h2 class="title">We Provide Experts To Create A Great Value For Your
                                            Business</h2>
                                    </div>
                                </div>
                                <!-- section title end -->
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-info ttm-num"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>We modify whole system</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>By dealing with data, select tools that help you automate time-consuming
                                                processes.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- featured-icon-box end -->
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-info ttm-num"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Safeguard for Your Business</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>To guard, Avoid Revealing Too Much, Apply for a Provisional Patent,
                                                Trademark.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- featured-icon-box end -->
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-info ttm-num"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Beneficial Strategies</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Strategic initiatives – all ideas welcome rather it’s by our employees or
                                                client.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- featured-icon-box end -->
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-round">
                                            <i class="ti ti-info ttm-num"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Build Solid Human Resource</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Give employees generous boundaries by listening intently, Belief in them.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- featured-icon-box end -->
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-document"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>We Are ISO Certified Company</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>We have achieved ISO 9001:2015 certification.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- featured-icon-box end -->
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </section>
        <!-- broken-section -->

        <!-- row-title-section -->
        <section class="ttm-row ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img2 row-title-section clearfix" style="background-image: url(images/banner/we-make-a-difference.jpg)">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-1"></div>
                    <div class="col-md-8 col-sm-10">
                        <div class="text-center">
                            <div class="row-title mt-25">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>WE MAKE A DIFFERENCE</h5>
                                        <h2 class="title">The Best Solutions For Developing Your Business</h2>
                                    </div>
                                </div>
                                <!-- section title end -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-20">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-skincolor mb-20"
                                href="#">view more services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- row-title-section end -->

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

        <!-- testimonial-section -->
        <section class="ttm-row testimonial-section bg-layer clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-bgimg ttm-bg ttm-col-bgimage-yes ttm-left-span ttm-bgcolor-skincolor spacing-2">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
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
                                <!-- testimonial-slide end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end-->
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
                        </div>
                        <!-- section-title end -->
                    </div>
                </div>
                <!-- row end -->
            </div>
        </section>
        <!--blog-text-section end-->

        <!--blog-section-->
        <section class="ttm-row blog-section home-blog-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- post-slide -->
                    <div class="post-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false"
                        data-dots="false" data-auto="false">
                        <!-- featured-imagebox-post -->
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
                <!-- row end-->
            </div>
        </section>
        <!--blog-section end-->
        <div class="ttm-row client-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- ttm-client -->
                        <div class="ttm-client clients-slide owl-carousel owl-theme owl-loaded mt-5" data-item="5"
                            data-nav="false" data-dots="false" data-auto="true">
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                                        <img class="img-fluid" src="	http://themetechmount.com/html/fondex/images/client/client-01.png
                                            " alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                                        <img class="img-fluid" src="	http://themetechmount.com/html/fondex/images/client/client-02.png
                                            " alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                                        <img class="img-fluid" src="	http://themetechmount.com/html/fondex/images/client/client-03.png
    " alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                                        <img class="img-fluid" src="	http://themetechmount.com/html/fondex/images/client/client-04.png
    " alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                                        <img class="img-fluid" src="	http://themetechmount.com/html/fondex/images/client/client-05.png
    " alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-boxed-logo">
                                <div class="client">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                                        <img class="img-fluid" src="	http://themetechmount.com/html/fondex/images/client/client-06.png
    " alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ttm-client end -->
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop

@section('pageJs')

    <script>
        $(document).ready(function() {

            let id = setTimeout(function() {
                $('.simplePopupBackground').css("display", "block");
                // $('.simplePopupBackground').css("opacity",0.7);
                $('.simplePopup').css("display", "block");
            }, 3000);

            $('.simplePopupClose').click(function(e) {
                var getElementID = e.target.id;
                // console.log(getElementID);
                var getPopupID = getElementID.split("-")[1];
                console.log(getPopupID);
                $('#popup-' + getPopupID).remove();
                $('#onstartmodal-' + getPopupID).css("display", "none");
            });

        })
    </script>

@stop
