@extends('layout.master')

@section('title', $pageTitle)

@section('content')
    <div class="ttm-page-title-row" style="background-image: url(images/banner/news.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title headingtag">{{ $pageTitle }}</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{ $pageTitle }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-main">

        <section class="ttm-row blog-left-img-section clearfix">
            <div class="container">
                <div class="row">
                    @foreach ($newses as $key => $news)
                        <div class="col-lg-12 col-sm-12 col-md-6 col-xs-12">
                            <div
                                class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
                                <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left align-self-center">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ $news['image'] }}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-6 featured-content featured-content-post">
                                    <div class="post-title featured-title">
                                        <h5><a href="#">{{ $news['title'] }}</a></h5>
                                    </div>
                                    <div class="post-title featured-title">
                                        <h5>{{ $news['subtitle'] }}</h5>
                                    </div>
                                    <div class="featured-desc ttm-box-desc">
                                        <p>{{ $news['description'] }}</p>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a
                                                href="#">{{ $news['date'] }}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@stop
