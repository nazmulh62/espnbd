@extends('frontEnd.master')

@section('title')
    Contact
@endsection
@section('content')
<!-- Start single page header -->
<section id="single-page-header">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-page-header-left">
                        <h2>Contact</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-page-header-right">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End single page header -->
<!-- Start contact section  -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area">
                    <h2 class="title">Have any Questions?</h2>
                    <span class="line"></span>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="cotact-area">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-area-left">
                                <h4>Contact Info</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                <address class="single-address">
                                    <p>P.O. Box 0000. West Dhanmondhi,Address: House No-229/1, Road No-19(old),</p>
                                    <p>support@gmail.com</p>
                                    <p>+088000000000</p>
                                </address>
                                <div class="footer-right contact-social">
                                    <a href="index.html"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="contact-area-right">
                                <form action="{{url('/new-contact')}}" method="post" class="comments-form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" >
                                        <span style="color:red">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email_address" class="form-control" placeholder="Email">
                                        <span style="color:red">{{$errors->has('email_address') ? $errors->first('email_address') : ''}}</span>

                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        <span style="color:red">{{$errors->has('subject') ? $errors->first('subject') : ''}}</span>

                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Comment" name="comment" rows="3" class="form-control" ></textarea>
                                        <span style="color:red">{{$errors->has('comment') ? $errors->first('comment') : ''}}</span>

                                    </div>
                                    <button type="submit" name="btn" class="comment-btn">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact section  -->

<!-- Start google map -->
<section id="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14606.75207828725!2d90.36200984442816!3d23.758502213456328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAddress%3A+House+No-229%2F1%2C+Road+No-19(old)%2C+West+Dhanmondhi%2C+Dhaka+1209!5e0!3m2!1sbn!2sbd!4v1508091436614" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></section>
<!-- End google map -->
@endsection