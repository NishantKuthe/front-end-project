@extends('layout.master')

@section('title', $pageTitle)

@section('content')
    <!-- page-title -->
    <div class="ttm-page-title-row" style="background-image: url(images/banner/achiver.jpg)">
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

        <!-- team-member-section -->
        <section class="ttm-row team-member-section clearfix">
            <div class="container">
                <div class="row">
                    @foreach ($achievers as $key => $achiever)
                        <div class="col-md-4 col-sm-6">
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team mb-30">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ $achiever['image'] }}" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        {{-- <ul class="social-icons list-inline">
                                    <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul> --}}
                                    </div>
                                </div>
                                <div class="featured-content featured-content-team">
                                    <div class="featured-title">
                                        <h5><a href="#">{{ $achiever['title'] }}</a></h5>
                                    </div>
                                    <p class="category">{{ $achiever['subtitle'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>

@stop
