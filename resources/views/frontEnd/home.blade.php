@extends('frontEnd.master')

@section('title')
    Home
@endsection
@section('content')
    <!-- Start slider -->

    <section id="slider">
        <div class="main-slider">
            @foreach($allPublushedSliders as $allPublushedSlider)

            <div class="single-slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 502px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                <img src="{{asset($allPublushedSlider->slider_image)}}"  alt="img">
            </div>
            @endforeach

        </div>
    </section>
    <!-- End slider -->

    <!-- Start about  -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">SHEIKH FARID CORPORATION LTD.</h2>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- Start counter -->
    <section id="counter">
        <div class="counter-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="counter-area">
                            <div class="row">
                                <!-- Start single counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-counter">
                                        <div class="counter-icon">
                                            <i class="fa fa-suitcase"></i>
                                        </div>
                                        <div class="counter-no counter">
                                            1275
                                        </div>
                                        <div class="counter-label">
                                            Projects
                                        </div>
                                    </div>
                                </div>
                                <!-- End single counter -->
                                <!-- Start single counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-counter">
                                        <div class="counter-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="counter-no counter">
                                            5275
                                        </div>
                                        <div class="counter-label">
                                            Hours Work
                                        </div>
                                    </div>
                                </div>
                                <!-- End single counter -->
                                <!-- Start single counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-counter">
                                        <div class="counter-icon">
                                            <i class="fa fa-trophy"></i>
                                        </div>
                                        <div class="counter-no counter">
                                            350
                                        </div>
                                        <div class="counter-label">
                                            Awards
                                        </div>
                                    </div>
                                </div>
                                <!-- End single counter -->
                                <!-- Start single counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-counter">
                                        <div class="counter-icon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="counter-no counter">
                                            875
                                        </div>
                                        <div class="counter-label">
                                            Clients
                                        </div>
                                    </div>
                                </div>
                                <!-- End single counter -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End counter -->



    <!-- Start Product table -->
    <section id="pricing-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">OUR REGULAR PRODUCT</h2>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pricing-table-content">
                        <div class="row">
                            @foreach($allPublushedProucts as $allPublushedProuct)
                            <div class="col-md-3 col-sm-6 col-xs-12" style="margin: 5px 0px 20px 0px;">
                                <div class="single-table-price wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="price-header" style="margin-bottom: 8%; ">
                                        <h3 style="font-size: 14px !important;">{{ $allPublushedProuct->product_name }}</h3>
                                        <h4>MRP. {{ $allPublushedProuct->product_price }} BDT</h4>
                                    </div>
                                    <div class="price-article">
                                        <img src="{{asset($allPublushedProuct->product_image)}}" alt="" style="width: 180px; height: 200px;">
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



    <!-- Start Testimonial section -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-area">
                                <h2 class="title">Whats Client Say</h2>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- Start testimonial slider -->
                            <div class="testimonial-slider">
                                <!-- Start single slider -->
                                @foreach($allPublushedClients as $allPublushedClient)
                                <div class="single-slider">
                                    <div class="testimonial-img">
                                        <img src="{{asset($allPublushedClient->client_image)}}" width="150" height="100" alt="testimonial image">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>{{$allPublushedClient->client_message}}</p>
                                        <h6>{{$allPublushedClient->client_name}}, <span>{{$allPublushedClient->client_designation}}</span></h6>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Start single slider -->


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonial section -->



    <!-- Start Feature -->
    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Our Features</h2>
                        <span class="line"></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="feature-content">
                        <div class="row">
                            @foreach($allPublushedFeatures as $allPublushedFeature)

                            <div class="col-md-4 col-sm-6">
                                <div class="single-feature wow zoomIn">
                                    <i><img src="{{asset($allPublushedFeature->feature_image)}}"></i>
                                    <h4 class="feat-title">{{ $allPublushedFeature->feature_title }}</h4>
                                    <p>{{ $allPublushedFeature->feature_description }}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature -->


@endsection
