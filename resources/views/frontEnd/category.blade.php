@extends('frontEnd.master')

@section('title')
    Category
@endsection
@section('content')
    <!-- Start slider -->
    <section id="single-page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-left">
                            <h2>Category</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Product table -->
    <section id="pricing-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Categry PRODUCT</h2>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pricing-table-content">
                        <div class="row">

                            @foreach($categoryProducts as $categoryProduct)
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-table-price wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                        <div class="price-header" style="margin-bottom: 8%; ">
                                            <h3 style="font-size: 14px !important;">{{ $categoryProduct->product_name }}</h3>
                                            <h4>MRP. {{ $categoryProduct->product_price }} BDT</h4>
                                        </div>
                                        <div class="price-article">
                                            <img src="{{asset($categoryProduct->product_image)}}" alt="" style="width: 180px; height: 200px;">
                                        </div>
                                        <div class="price-footer">
                                            <a class="purchase-btn" href="#">Details</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End product table -->

@endsection
