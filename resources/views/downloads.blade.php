@extends('layout.master')

@section('title', $pageTitle)

@section('content')

<div class="ttm-page-title-row" style="background-image: url(images/banner/DOWNLODS-BANNER-removebg-preview.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading">
                        <h1 class="title headingtag">{{$pageTitle}}</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                        <span>{{$pageTitle}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-main">

<section class="ttm-row blog-grid-section clearfix">
    <div class="container">
        <div class="row">
            @foreach ($downloads as $key => $download)
            <div class="col-md-6 col-lg-4">
                <div class="featured-imagebox featured-imagebox-post box-shadow">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="{{ $download['image'] }}" alt="">
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="post-title featured-title">
                            <h5 class="text-center"><a href="#">{{ $download['title'] }}</a></h5>
                            <div class="text-center mt-20">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-skincolor mb-20" href="{{ $download['url'] }}">DOWNLOAD</a>
                            </div>
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
