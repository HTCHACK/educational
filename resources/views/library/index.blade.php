@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | Kutubxona</title>
@endsection
@section('content')

 <!-- START SECTION BREADCRUMB -->
 <div class="breadcrumb_section background_bg overlay_bg_50 page_title_light"
 data-img-src="{{ asset('assets/images/library.jpg')}}">
 <div class="container">
     <!-- STRART CONTAINER -->
     <div class="row">
         <div class="col-sm-12">
             <div class="page-title">
                 <h1>Kutubxona</h1>
             </div>
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="{{route('home')}}">Bosh Sahifa</a></li>
                 <li class="breadcrumb-item"><a href="{{route('ourlibrary.index')}}">Kutubxona</a></li>
             </ol>
         </div>
     </div>
 </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START SECTION EVENTS-->
<div class="section">
 <div class="container">
     <div class="row">
         <div class="col-12">
             <div class="event_list">
                 @foreach($libraries as $key=>$library)
                 <div class="event_box box_shadow1 animation" data-animation="fadeInUp"
                     data-animation-delay="0.2s">
                     <div class="event_img">
                         <img src="{{ asset('storage/' . $library->image) }}" alt="event_img1">
                     </div>
                     <div class="event_info">
                         <h5 class="event_title"><a href="events-list.html#">{{$library->name}}</a></h5>
                         <div class="event_desc">
                             <p>{{$library->subtitle}}</p>
                         </div>
                         <div class="event_btn">
                             <a href="{!! $library->url !!}" class="btn btn-default" download="{!! $library->url !!}"><i class="fa fa-download"></i> Download</a>
                         </div>
                     </div>
                 </div>
                @endforeach
             </div>
         </div>
     </div>
     <div class="row" style="text-align:center">
        <div class="col-12 mt-2 mt-md-3">
            <ul class="pagination pagination_style1 justify-content-center">
                {!! $libraries->links() !!}
            </ul>
        </div>
    </div>
 </div>
</div>
<!-- END SECTION EVENTS-->
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
