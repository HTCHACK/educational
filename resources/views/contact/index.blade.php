@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | Aloqa</title>
@endsection
@section('content')



    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section background_bg overlay_bg_50 page_title_light"
        data-img-src="{{ asset('assets/images/gallery_item1.jpg') }}">
        <div class="container">
            <!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <h1>Aloqa</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Bosh Sahifa</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('contactus.index') }}">Aloqa</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>



    <!-- END SECTION BREADCRUMB -->
    <div class="section">
        <div class="container">
            <div class="heading_s1">
                <h4 style="text-align:center;padding-bottom:3rem">Aloqa</h4>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="single_course">
                        <div class="courses_title">
                            <div class="course_info">
                                <div class="review_form field_form">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul style="list-style:none;">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @elseif (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form class="row" method="POST" action="{{ route('contacts.store') }}">
                                        @csrf

                                        <div class="form-group col-md-12">
                                            <input required="required" placeholder="Ismingiz" class="form-control"
                                                name="name" type="text">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input id="phone" name="phone_number" placeholder="(998)-9_-___-__-__"
                                                value="(998)" class="phone_number_2 form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea required="required" placeholder="Xabar" class="form-control"
                                                name="message" rows="8"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div  class="g-recaptcha" data-sitekey="6LdzhIQaAAAAAOA9PY9H7G5frc7timXgJ0NeqA_v"></div>
                                        </div>
                                        <div class="form-group col-12">
                                            <button type="submit" class="btn btn-default" name="submit"
                                                value="Submit" style="width: 60%">Jo'natish</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single_course">
                        <div class="courses_title">
                            <div class="course_info">
                                <div class="review_form field_form">
                                   
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12111.697377980194!2d72.2316682!3d40.6315504!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39ccbb8e0c27691!2s53-Maktab!5e0!3m2!1sen!2s!4v1616161350884!5m2!1sen!2s" 
                                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
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
