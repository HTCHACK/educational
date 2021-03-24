@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | Kurslar</title>
@endsection


@section('content')

<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="{{ asset('assets/images/course.jpg')}}">
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
                                    <div class="courses_price"> Narx <span>$30</span> </div>
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