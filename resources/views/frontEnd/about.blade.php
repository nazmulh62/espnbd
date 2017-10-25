@extends('frontEnd.master')

@section('title')
    About
@endsection
@section('content')

    <!-- Start single page header -->
    <section id="single-page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page-header-left">
                            <h2>About Us</h2>
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

    <!-- Start about  -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="about-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="our-skill">
                                    <h3>Our Mission</h3>
                                    <div class="our-skill-content">

                                        <p style="text-align:justify;">There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form, by injected humour.
                                            There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form,
                                            by injected humour There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form,
                                            by injected humour There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form, by injected humour.
                                        </p>



                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="our-skill">
                                    <h3>Our Vision</h3>
                                    <div class="our-skill-content">

                                        <p style="text-align:justify;">There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form, by injected humour.
                                            There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form,
                                            by injected humour There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form,
                                            by injected humour There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form, by injected humour.
                                        </p>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- Start team area -->
    <section id="our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Our Team</h2>
                        <span class="line"></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="our-team-content">
                        <div class="row">
                            <!-- Start single team member -->

                            @foreach($allPublushedTeamInfos as $allPublushedTeamInfo)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="team-member-img">
                                        <img src="{{asset($allPublushedTeamInfo->team_image)}}" alt="img">
                                    </div>
                                    <div class="team-member-name">
                                        <p>{{$allPublushedTeamInfo->member_name}}</p>
                                        <span>{{$allPublushedTeamInfo->member_designation}}</span>
                                    </div>
                                    <p>{{$allPublushedTeamInfo->member_message}}</p>
                                    <div class="team-member-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Start single team member -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End team Area -->

@endsection
