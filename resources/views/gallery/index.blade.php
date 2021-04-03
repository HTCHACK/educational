@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | Galareya</title>
    <meta property="og:url"           content="http://www.alisherfilolog.uz/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Alisher Filolog | Uz" />
    <meta property="og:image"         content="{ asset('assets/images/gallery.jpg')}}" />
@endsection
@section('content')
    <!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="{{ asset('assets/images/gallery.jpg')}}">
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
                    @if(!empty($galleries) && $galleries->count())
                    @foreach($galleries as $key=>$gallery)
                    <li class="grid_item brands adv">
                    	<div class="image_gallery_item">
                            <a href="{{ asset('storage/' . $gallery->image) }}">
                                <div class="gallery_img">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="image" width="350px" height="250px">
                                </div>
                                <div class="gallary_hover_box">
                                    <i class="ti-zoom-in"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                    @endforeach
                    @else
                    <div class="col-lg-12 col-md-12">
                        <div class="heading_s1 text-center">
                            <h2>Rasm Yoq</h2>
                        </div>
                     </div>
                    @endif
                </ul>
            </div>
        </div>
        <div class="row" style="text-align:center">
            <div class="col-12 mt-2 mt-md-3">
                <ul class="pagination pagination_style1 justify-content-center">
                    {!! $galleries->links() !!}
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
