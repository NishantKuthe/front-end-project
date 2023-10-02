@extends('layout.master')

@section('title', $pageTitle)

@section('content')
<!-- page-title -->
<div class="ttm-page-title-row" style="background-image: url(images/banner/DOCUMENTS-BANNER-removebg-preview.jpg)">
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

<section class="ttm-row project-style2-section clearfix">
    <div class="container">
        <div class="row">
            @foreach ($documents as $document)
            <div class="col-md-4">
                <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                    <div class="ttm-box-view-content-inner">
                        <div class="featured-thumbnail">
                            <a href="#"> <img class="img-fluid" src="{{$document->image}}" alt="image"></a>
                        </div>
                        <div class="ttm-box-view-overlay">
                            <div class="featured-iconbox ttm-media-link">
                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="" data-rel="prettyPhoto" href="{{$document->image}}"><i class="ti ti-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="featured-content featured-content-portfolio text-center box-shadow2">
                        <div class="featured-title">
                            <h5><a href="/">{{$document->title}}</a></h5>
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
