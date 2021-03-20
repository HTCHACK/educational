@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | Galareya</title>
@endsection
@section('content')
    <!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="{{ asset('assets/images/gallery_item1.jpg')}}">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1>Galareya</h1>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Bosh Sahifa</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('ourgallery.index') }}">Galareya</a></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION GALLERY -->
<div class="section pb_70">
	<div class="container">
        <div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<ul class="grid_container gutter_medium grid_col3 image_gallery">
                	<li class="grid-sizer"></li>
                    @foreach($galleries as $key=>$gallery)
                    <li class="grid_item brands adv">
                    	<div class="image_gallery_item">
                            <a href="{{ asset('storage/' . $gallery->image) }}">
                                <div class="gallery_img">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="image">
                                </div>
                                <div class="gallary_hover_box">
                                    <i class="ti-zoom-in"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                    @endforeach
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
<!-- END SECTION GALLERY -->
@endsection