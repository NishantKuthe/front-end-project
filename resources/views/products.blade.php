@extends('layout.master')

@section('title', $pageTitle)

@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row" style="background-image: url(images/banner/product.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title headingtag">{{$pageTitle}}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                            <span>{{$pageTitle}}</span>
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
                    <div class="col-lg-9 content-area pull-left">
                        <p class="products-result-count">Showing {{ $total }} results</p>
                        <div class="products row">
                            @foreach ($products as $key => $product)
                                <div class="product col-lg-4 col-md-6 col-xs-12">
                                    <div class="ttm-product-box">
                                        <!-- ttm-product-box-inner -->
                                        <div class="ttm-product-box-inner">
                                            <div class="ttm-shop-icon">
                                                <div class="product-btn search-btn"><a href="#"><i
                                                            class="ti ti-search"></i></a></div>
                                            </div>
                                            <div class="ttm-product-image-box">
                                                <img class="img-fluid" src="{{ $product->cover_image }}" alt="">
                                            </div>
                                        </div><!-- ttm-product-box-inner end -->
                                        <div class="ttm-product-content">
                                            <a class="ttm-product-title" href="/product-detail/{{ $product->id }}/{{ str_replace(' ', '-', strtolower($product['name'])) }}">
                                                <h2>{{ $product->name }}</h2>
                                            </a>
                                            <br>
                                            <span class="price">
                                                <ins><span class="product-Price-amount">
                                                        <span class="product-Price-currencySymbol"> {{ $settings['currency_symbol'] }}</span> {{ $product->dp_amount }}
                                                    </span>
                                                </ins>
                                                  <del><span class="product-Price-amount">
                                                        <span class="product-Price-currencySymbol">{{ $settings['currency_symbol'] }}</span>{{ $product->retail_amount }}
                                                    </span>
                                                </del>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- product end -->
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-3 widget-area ttm-bgcolor-grey pull-right">
                        <aside class="widget widget-search">
                            <form role="search" method="get" class="search-form  box-shadow" action="#">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <i class="fa fa-search"></i>
                                    <input type="search" class="input-text" placeholder="Search …" value="" name="searchQry">
                                </label>
                            </form>
                        </aside>
                        <aside class="widget widget-categories">
                            <h3 class="widget-title">Product Categories</h3>
                            <ul>
                                @foreach ($categories as $key => $categorie)
                                <li class="has-submenu"> </li><a  href="/products?category_id={{ $categorie->id }}">{{ $categorie['name'] }}</a>
                                    <ul class="subcategories">
                                        @foreach ($categorie->children as $key => $subcategories)
                                        <li><a href="/products?category_id={{ $subcategories->id }}">{{ $subcategories['name'] }}</a></li>
                                        @endforeach
                                    </ul>

                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->

    </div>
    <!--site-main end-->

@stop
