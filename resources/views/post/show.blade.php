@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | Post Detallari</title>
@endsection


@section('content')

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section background_bg overlay_bg_50 page_title_light"
        data-img-src="{{ asset('storage/' . $post->image) }}">
        <div class="container">
            <!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <h1>{{ $post->name }}</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Bosh Sahifa</a></li>
                        <li class="breadcrumb-item active">Post Detallari</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION BLOG -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-3 mt-lg-0">
                    <div class="sidebar">
                        <div class="widget">
                            <h5 class="widget_title">So'ngi Postlar</h5>
                            <ul class="widget_recent_post">
                                @foreach($popular as $key=>$pop)
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="{{ route('postus.show', $post->id) }}"><img src="{{ asset('storage/' . $pop->image) }}"
                                                    alt="letest_post1" style="width:100px"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="{{ route('postus.show', $post->id) }}">{{$pop->name}}</a>
                                                <p class="small m-0">{{ Carbon\Carbon::parse($pop->created_at)->format('M d Y, H:i:s') }}</p>
                                            </h6>
                                            
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="widget">
                            <h6 class="widget_title text-uppercase">Post</h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="single_post">
                        <div class="blog_img">
                            <img src="{{ asset('storage/' . $post->image) }}" alt=" blog_img1">
                        </div>
                        <div class="blog_content">
                            <div class="blog_text">
                                <h2 class="blog_title">{{ $post->name }}
                                </h2>
                                
                                <ul class="list_none blog_meta">
                                    <li><a href=""><i
                                                class="ti-calendar"></i>{{ Carbon\Carbon::parse($post->created_at)->format('M d Y') }}</a>
                                    </li>
                                    <li><a href="blog-detail.html#"><i class="ti-comments"></i>{{ count($comments) }}</a>
                                    </li>
                                    
                                </ul>
                                <p>{!! $post->description !!}
                                    <a class="btn btn-default" type="button" onclick="window.print()"><i class="fas fa-fw fa-print"></i>
                                        Print</a>
                                            
                                 </p>
                                <blockquote class="blockquote_style1">
                                    <p>{{ Str::limit($post->description, 150) }}</p>
                                </blockquote>

                                <div class="blog_post_footer">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-8 mb-3 mb-md-0">
                                            <div class="artical_tags">
                                                <a href="">General</a>
                                                <a href="">Design</a>
                                                <a href="">jQuery</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="social_icons text-md-right">
                                                <li><a href="" class="sc_facebook"><i
                                                            class="ion-social-facebook"></i></a></li>
                                                <li><a href="" class="sc_twitter"><i
                                                            class="ion-social-twitter"></i></a></li>
                                                <li><a href="" class="sc_google"><i
                                                            class="ion-social-googleplus"></i></a></li>
                                                <li><a href="" class="sc_youtube"><i
                                                            class="ion-social-youtube-outline"></i></a></li>
                                                <li><a href="" class="sc_instagram"><i
                                                            class="ion-social-instagram-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card post_author">
                        <div class="card-body">
                            <div class="author_img">
                                <img src="{{ asset('assets/images/user.png') }}" alt="user1">
                            </div>
                            <div class="author_info">
                                <h6 class="author_name"><a href=""
                                        class="mb-1 d-inline-block">{{ $post->author }}</a></h6>
                                
                                <p>{{ Str::limit($post->description, 120) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-area">
                        <div class="content_title">
                            <h5>{{ count($comments) }} izohlar</h5>
                        </div>
                        <ul class="list_none comment_list">
                            @foreach ($comments as $key => $commen)
                                <li class="comment_info">
                                    <div class="d-flex">
                                        <div class="comment_user">
                                            <img src="{{ asset('assets/images/user.png') }}" alt="user2">
                                        </div>
                                        <div class="comment_content">
                                            <div class="d-flex">
                                                <div class="meta_data">
                                                    <h6><a href="">{{ $commen->name }}</a></h6>
                                                    <div class="comment-time"><i class="ti-calendar"></i>
                                                        <span>{{ Carbon\Carbon::parse($commen->created_at)->diffForHumans() }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>{{ $commen->comment }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="content_title">
                            <h5>Leave a comment</h5>
                        </div>
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
                        <form class="field_form" action="{{ route('comments.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input name="name" class="form-control" placeholder="Ismingiz" required="required"
                                        type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="phone" name="phone_number" placeholder="(998)-9_-___-__-__" value="(998)"
                                        class="phone_number_2 form-control">
                                </div>
                                <input type="hidden" name="id" value="{{ $post->id }}">
                                <div class="form-group col-md-12">
                                    <textarea rows="3" name="comment" class="form-control" placeholder="Izoh eng kamida 15 harf"
                                        required="required"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <div  class="g-recaptcha" data-sitekey="6LdzhIQaAAAAAOA9PY9H7G5frc7timXgJ0NeqA_v"></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button value="Submit" name="submit" class="btn btn-default"
                                        title="Submit Your Message!" type="submit">Izoh Qo'shish</button>
                                </div>
                            </div>
                        </form>
                        

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
   
    <!-- END SECTION BLOG -->

@endsection
