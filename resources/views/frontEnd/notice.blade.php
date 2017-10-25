@extends('frontEnd.master')

@section('title')
    Notice
@endsection

@section('content')
    <!-- Start single page header -->
    <section id="single-page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-left">
                            <h2>Notice</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End single page header -->

    <!-- Start latest news -->
    <section id="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Latest News</h2>
                        <span class="line"></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-news-content">
                        <div class="row">
                            <!-- start single latest news -->
                            @foreach($allPublushedNotices as $allPublushedNotice)

                            <div class="col-md-4">

                                <article class="blog-news-single">

                                    <div class="blog-news-img">
                                        <a href="blog-single-with-right-sidebar.html"><img src="{{asset($allPublushedNotice->notice_image)}}" alt="image"></a>
                                    </div>
                                    <div class="blog-news-title">
                                        <h2><a href="blog-single-with-right-sidebar.html">{{$allPublushedNotice->notice_title}}</a></h2>
                                        <p>By <a class="blog-author" href="#">{{$allPublushedNotice->author_name}}</a> <span class="blog-date"> |{{$allPublushedNotice->created_at}}</span></p>
                                    </div>
                                    <div class="blog-news-details">
                                        <p>{{$allPublushedNotice->notice_description}}</p>
                                        <a class="blog-more-btn btn btn-danger" href="{{url('/news-details/'.$allPublushedNotice->id)}}" style="color:#FFF;">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest news -->

@endsection