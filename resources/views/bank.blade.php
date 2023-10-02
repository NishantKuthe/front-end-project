@extends('layout.master')

@section('title', $pageTitle)



@section('content')
    <div class="ttm-page-title-row" style="background-image: url(images/banner/BANKING-removebg-preview.jpg)">
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
    </div>

    <div class="site-main">
        <section class="ttm-row team-member-section clearfix">
            <div class="container">
                <div class="row ">
                    @foreach ($banks as $key => $value)
                        <div class="col-lg-6 widget-area ttm-bgcolor-grey pull-right">
                            <aside class="widget widget-categories">
                                <!-- <h3 class="widget-title">Product Categories</h3> -->
                                <ul>
                                    <li>
                                        <i class="fa fa-briefcase"></i>
                                        <span>Account Name:</span>
                                        <b>{{ $value['account_holder_name'] }}</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-id-card"></i>
                                        <span>Account Number:</span>
                                        <b>{{ $value['account_number'] }}</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-university"></i>
                                        <span>Bank Name:</span>
                                        <b>{{ $value['name'] }}</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>Bank Branch:</span>
                                        <b>{{ $value['branch_name'] }}</b>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack"></i>
                                        <span>IFSC:</span>
                                        <b>{{ $value['ifsc'] }}</b>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@stop
