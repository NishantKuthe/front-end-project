@extends('layout.master')

@section('title', $pageTitle)

@section('content')
    <!-- page-title -->
    <div class="ttm-page-title-row" style="background-image: url(images/banner/contactus.jpg)">
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

        <!-- map-section -->
        <div class="ttm-row map-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--map-start-->
                        <div class="map-wrapper">
                            {{-- <div id="map_canvas"></div> --}}
                            <iframe src="{{ $settings['google_map'] }}" width="100%" height="100%" frameborder="0"></iframe>
                        </div>
                        <!--map-end-->
                    </div>
                </div>
            </div>
        </div>
        <!-- map-section end -->
        <!-- contact-form-section -->
        <section class="ttm-row contact-form-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="spacing-6 clearfix">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h3 class="title">We’re Happy to  Answer any Question
                                    </h3>
                                </div>
                            </div><!-- section title end -->
                            <ul class="ttm_contact_widget_wrapper">
                                <li>
                                    <h6>Company Name</h6>
                                    <i class="ttm-textcolor-skincolor ti ti-home"></i>
                                    <span> {{ $settings['company_name'] }}</span>
                                </li>
                                <li>
                                    <h6>Address</h6>
                                    <i class="ttm-textcolor-skincolor ti ti-location-pin"></i>
                                    <span> {{ $settings['address'] }}
                                        {{$settings['city']}}
                                        {{$settings['state']}}
                                        {{$settings['pincode']}}</span>
                                </li>
                                <li>
                                    <h6>Email</h6>
                                    <i class="ttm-textcolor-skincolor ti ti-comment"></i>
                                    <span>Contact Email:   <a
                                            href="tel:{{ $settings['contact_email'] }}">{{ $settings['contact_email'] }}</a></span><br>
                                            Support Email:  <span> <a
                                                href="tel:{{ $settings['support_email'] }}">{{ $settings['support_email'] }}</a></span>
                                </li>
                                <li>
                                    <h6>Toll Free Number</h6>
                                    <i class="ttm-textcolor-skincolor ti ti-mobile"></i>
                                  Contact Phone:   <a href="tel:{{ $settings['contact_phone'] }}">{{ $settings['contact_phone'] }}</a><br>
                                Support Phone:     <a href="tel:{{ $settings['support_phone'] }}">{{ $settings['support_phone'] }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="map-col-bg ttm-bgcolor-skincolor spacing-7">
                            <!-- section title -->
                            <div class="section-title text-left with-desc clearfix">
                                <div class="title-header">
                                    <h2 class="title">Let’s Start <br> The Conversation.</h2>
                                </div>
                            </div><!-- section title end -->
                            <div class="alert alert-success" role="alert" id="contact-msg">
                            </div>
                            <form id="contact_form" class="ttm-contactform wrap-form clearfix" method="GET" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input">
                                                <input name="first_name" id="first_name" type="text" value=""
                                                    placeholder="Your Name" required="required">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input">
                                                <input name="email" type="email" id="email" value=""
                                                    placeholder="Your Email" required="required">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input">
                                                <input name="mobile" id="mobile" type="text" value=""
                                                    placeholder="Your Phone" required="required">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input">
                                                <input name="subject" id="subject" type="text" value=""
                                                    placeholder="Subject" required="required">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <label>
                                    <span class="text-input">
                                        <textarea name="message" cols="40" rows="3" id="message" placeholder="Message" required="required"></textarea>
                                    </span>
                                </label>
                                <input type="hidden" name="recaptcha" id="recaptcha">
                                <input name="submit" type="submit" id="submit"
                                    class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey"
                                    value="SUBMIT">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-section END-->
    </div>
    <!--site-main end-->
@stop


@section('pageJs')

    <!-- <script src="https://maps.google.com/maps/api/js?sensor=false"></script> -->

    <script src="https://www.google.com/recaptcha/api.js?render=6LeNueQUAAAAAOdXr5rhWWz5f4KodsexOwonkLAp"></script>

    <script>
        function getRecaptcha() {
            grecaptcha.ready(function() {
                grecaptcha.execute('6LeNueQUAAAAAOdXr5rhWWz5f4KodsexOwonkLAp', {
                    action: 'contact'
                }).then(function(token) {
                    if (token) {
                        document.getElementById('recaptcha').value = token;
                    }
                });
            });
        }
        getRecaptcha();
    </script>

    <script src="{{ asset('override/contactsubmit.js') }}"></script>

@stop
