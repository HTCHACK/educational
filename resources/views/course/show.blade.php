@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | Kurs Haqida</title>
@endsection

@section('content')

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="{{ asset('storage/' . $course->image) }}">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1>Kurs Haqida</h1>
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




<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="single_course">
                    <div class="courses_title">
                        <h></h4>
                    </div>
                    <div class="countent_detail_meta">
                        <ul>
                            <li>
                                <div class="instructor">
                                    <img src="{{ asset('assets/images/user.png')}}" alt="user1">
                                    <div class="instructor_info">
                                        <label>{{$course->author}}</label>
                                        <a href=""></a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="course_rating">
                                    <label>Review</label>
                                    <div class="rating_stars">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star-outline"></i>
                                        <span>4.0</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="course_student">
                                    <label>Kurs Nomi</label>
                                    <span> {{$course->name}}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="course_img">
						<a href="">
                            <iframe width="100%" height="320px"  src="https://www.youtube.com/embed/{!! $course->url !!}" frameborder="0" allowfullscreen ></iframe>
                        </a>
                    </div>
                    <div class="course_info">
                        <div class="course_desc">
                        	<div class="heading_s1">
                        		<h4>Tavsif : Download Video Courses   <a class="btn btn-dark rounded-0 checkout" href="{!! $course->url !!}" download="{!! $course->url !!}"><i class="fa fa-download"></i> DOWNLOAD</a></h4>
                            </div>
                        	<p>{!! $course->description !!}
                                <a class="btn btn-default" href="{{ route('courseus.index') }}"><i class="fa fa-plus"></i> KO'PROQ</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
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
