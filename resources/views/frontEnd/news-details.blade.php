@extends('frontEnd.master')

@section('title')
    Details
@endsection
@section('content')

    <!-- Start single page header -->
    <section id="single-page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-left">
                            <h2>Notice Detauils</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Feature</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End single page header -->
    <!-- Start blog archive -->
    <section id="blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-archive-area">
                        <div class="row">


                            <div class="col-md-10">
                                <div class="blog-archive-left">
                                    <!-- Start blog news single -->
                                    <article class="blog-news-single">
                                        <div class="blog-news-img">
                                            <img src="{{asset($noticeById->notice_image)}}" alt="image">
                                        </div>
                                        <div class="blog-news-title">
                                            <h2>{{$noticeById->notice_title}}</h2>
                                            <p>By <a class="blog-author" href="#">{{$noticeById->author_name}}</a> <span class="blog-date">| {{$noticeById->created_at}}</span></p>
                                        </div>
                                        <div class="blog-news-details blog-single-details">
                                            <p>{{$noticeById->notice_description}}</p>

                                            <div class="blog-single-bottom">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="blog-single-tag">
                                                            <span class="fa fa-tags"></span>
                                                            <a href="#">Design,</a>
                                                            <a href="#">Photoshop,</a>
                                                            <a href="#">Development</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="blog-single-social">
                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Start blog navigation -->
                                    <div class="blog-navigation-area">
                                        <div class="blog-navigation-prev">
                                            <a href="#">
                                                <h5>All about writing story</h5>
                                                <span>Previous Post</span>
                                            </a>
                                        </div>
                                        <div class="blog-navigation-next">
                                            <a href="#">
                                                <h5>All about friends story</h5>
                                                <span>Next Post</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Start Comment box -->
                                    <div class="comments-box-area">
                                        <h2>Leave a Comment</h2>
                                        <form action="{{url('/new-comment')}}" method="post" class="comments-form">
                                            {{ csrf_field() }}

                                            <div class="form-group col-sm-6" style="margin-left:-10px; ">
                                                <input type="text" name="customer_name" class="form-control " placeholder="Your Name">
                                              <span style="color:red">{{$errors->has('customer_name') ? $errors->first('customer_name') : ''}}</span>
											</div>
                                            <div class="form-group col-sm-6">
                                                <input type="email" name="customer_email" class="form-control" placeholder="Enter Your Email">
                                               <span style="color:red">{{$errors->has('customer_email') ? $errors->first('customer_email') : ''}}</span>
    
											</div>
                                            <div class="form-group">
                                                <textarea name="customer_comment" placeholder="Comment Here" rows="3" class="form-control"></textarea>
                                              <span style="color:red">{{$errors->has('customer_comment') ? $errors->first('customer_comment') : ''}}</span>
											</div>
                                            <button type="submit" name="btn" class="comment-btn">Submit Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog archive -->



@endsection
