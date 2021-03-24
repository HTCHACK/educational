@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | O'qituvchilar</title>
@endsection
@section('content')
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="{{ asset('assets/images/teacher.jpg')}}">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1>O'qituvchilar</h1>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Bosh Sahifa</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('ourteacher.index') }}">O'qituvchilar</a></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

    <div class="section pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="heading_s1 text-center">
                        <h2>O'qituvchilar</h2>
                    </div>
                    <p class="text-center">Bizning Jamoa</p>
                </div>
            </div>
            <div class="row justify-content-center">
                @if(!empty($teachers) && $teachers->count())
                @foreach ($teachers as $key => $teacher)
                    <div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="team_box team_style2 radius_all_10">
                            <div class="team_img">
                                <img src="{{ asset('storage/' . $teacher->image) }}" alt="team_img1" width="250px" height="250px">
                                <ul class="social_icons social_white">
                                    <li><a href="{!! $teacher->facebook !!}"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="{!! $teacher->telegram !!}"><i class="fas fa-paper-plane"></i></a></li>
                                </ul>
                            </div>
                            <div class="team_content">
                                <div class="team_title">
                                    <h5>{{ $teacher->fullname }}</h5>
                                    <span>{{ $teacher->profession }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                <div class="col-lg-12 col-md-12">
                    <div class="heading_s1 text-center">
                        <h2>O'qituvchi Yoq</h2>
                    </div>
                </div>
                @endif
            </div>
            <div class="row" style="text-align:center">
                <div class="col-12 mt-2 mt-md-3">
                    <ul class="pagination pagination_style1 justify-content-center">
                        {!! $teachers->links() !!}
                    </ul>
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
