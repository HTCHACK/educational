@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | Kurslar</title>
@endsection


@section('content')

<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="{{ asset('assets/images/course_img1.jpg')}}">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1>Kurslar</h1>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Bosh Sahifa</a></li>
                    <li class="breadcrumb-item"><a href="{{route('courseus.index')}}">Kurslar</a></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION TEAM -->
<div class="section small_pb">
	<div class="container">
        <div class="row">
        	<div class="col-lg-4">
            	<div class="team_single">
                	<div class="team_img">
                    	<img src="{{ asset('assets/images/ABOUT1.jpg')}}" alt="team_img_big">
                    </div>
                    <div class="team_single_info">
                        <div class="team_name">
                            <h5>Alisher Halimjonov</h5>
                            <span>Ona Tili va Adabiyot</span>
                        </div>
                        <ul class="list_none social_icons">
                            <li><a href="" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
            	<div class="team_detail">
                    <div class="teacher_desc">
                    	<div class="heading_s1 mb-3">
                        	<h5>Men Haqimda</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi reiciendis ullam. Quam eaque dolorum voluptates cupiditate explicabo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-2 mb-md-0">
                            <div class="heading_s1 mb-3">
                                <h5>Ta'lim</h5>
                            </div>
                            <div class="content_box">
                                <span class="text_default">2000-2009 Maktab</span>
                                <h6>Maktab</h6>
                            </div>
                            <div class="content_box">
                                <span class="text_default">2016-2019 Andijon Davlat Universiteti</span>
                                <h6>Bakalavr Diplom</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="heading_s1 mb-3">
                                <h5>Tajriba</h5>
                            </div>
                            <div class="content_box">
                                <span class="text_default">2013-2015 ADU</span>
                                <h6>Tarix</h6>
                            </div>
                            <div class="content_box">
                                <span class="text_default">2018 - </span>
                                <h6>Ona Tili</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section small_pt">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="heading_s1 mb-md-4">
                	<h3>Kurslar</h3>
                </div>
                <div class="carousel_slider owl-carousel owl-theme" data-dots="false" data-margin="20" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "1199":{"items": "3"}}'>
                    @foreach($courses as $key=>$course)
                    <div class="item">
                        <div class="courses_box radius_all_10 box_shadow1">
                            <div class="courses_img"> 
                                <a href="{{ route('courseus.show', $course->id) }}"><img src="{{ asset('storage/' . $course->image) }}" alt="course_img1" ></a>
                            </div>
                            <div class="courses_info">
                                <div class="rating_stars"> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star-outline"></i> 
                                    <span>4.0</span> 
                                </div>
                                <h5 class="courses_title"><a href="{{ route('courseus.show', $course->id) }}">{{$course->name}}</a></h5>
                                <div class="courses_teacher"> 
                                    <a href="{{ route('courseus.show', $course->id) }}"><img src="{{asset('assets/images/user.png')}}" alt="user1"><span>{{$course->author}}</span></a> 
                                </div>
                                <div class="courses_footer">
                                    <ul class="courses_meta">
                                        <li><a href="{{ route('courseus.show', $course->id) }}"><i class="ti-time"></i><span>{{ Carbon\Carbon::parse($course->created_at)->format('M d Y') }}</span></a></li>
                                    </ul>
                                    <div class="courses_price"> Narc <span>$30</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION TEAM -->
<div class="small_pt pb-0 newsletter_overlap">
	<div class="container">	
    	<div class="row justify-content-center">	
            <div class="col-md-12">
            	<div class="bg_default radius_all_10 text_white newsletter_box animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="row align-items-center">
                    	<div class="col-lg-6">
                            <div class="heading_s1">
                                <h2 class="font_style1">Obuna Bo'ling</h2>
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="newsletter_form2 rounded_input">
                                <form method="POST" action="{{route('emails.store')}}"> 
                                    @csrf
                                    <input type="text" name="email" class="form-control" required="" placeholder="Email Manzil">
                                    <button type="submit" title="Subscribe" class="btn btn-default btn-radius" name="submit" value="Submit">Obuna Bo'lish</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection