@extends('layout.master')

@section('title', $pageTitle)

@section('content')
 <!-- page-title -->
 <div class="ttm-page-title-row" style="background-image: url({{asset('images/banner/product.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading">
                        <h1 class="title headingtag">{{ $product->name }}</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                        <span>{{ $product->name }}</span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">

<!-- sidebar -->
<div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
    <div class="container">
        <!-- row -->
        <div class="row d-block">
            <div class="col-lg-12 content-area pull-left">
                <div class="ttm-single-product-details product">
                    <div class="ttm-single-product-info clearfix">
                        <div class="product-gallery images">
                            <figure class="ttm-product-gallery__wrapper">
                                <div class="product-gallery__image">
                                    <img class="img-fluid" src="{{ $product->cover_image }}" alt="product-img">
                                </div>
                            </figure>
                        </div>
                        <div class="summary entry-summary">
                            <h3 class="singel_product_title">{{ $product->name }}</h3>
                            <p class="price">
                                <span class="Price-amount amount">
                                    <span class="Price-currencySymbol">{{ $settings['currency_symbol'] }}</span> {{ $product->dp_amount }}
                                </span>
                                <del><span class="product-Price-amount">
                                    <span class="product-Price-currencySymbol">{{ $settings['currency_symbol'] }}</span>{{ $product->retail_amount }}
                                </span>
                            </del>

                            </p>
                            <div class="product-details__short-description">
                                <p>{!! html_entity_decode($product->description) !!}</p>
                            </div>
                            <a href="{{env('LOGIN_URL')}}" class="cart_button ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey">Add to cart</a>
                        </div>
                    </div>
                    <div class="ttm-tabs style2 tabs-for-single-products" data-effect="fadeIn">
                        <ul class="tabs clearfix">
                            <li class="tab active"><a href="#">Benefits</a></li>
                        </ul>
                        <div class="content-tab ttm-bgcolor-white">
                            <!-- content-inner -->
                            <div class="content-inner">
                                <p>{!! html_entity_decode($product->benefits) !!} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</div>
<!-- sidebar end -->

</div><!--site-main end-->



@stop
