@extends('layouts.body')
@section('title')
    <title>AlisherFilolog | Uz</title>
@endsection
@section('content')


    <!-- START SECTION BANNER -->
    <div class="banner_section full_screen staggered-animation-wrap">
        <div id="carouselExampleControls" class="carousel slide carousel-fade carousel_style1 light_arrow"
            data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active background_bg overlay_bg_60"
                    data-img-src="{{ asset('assets/images/course_img6.jpg') }}">
                    <div class="banner_slide_content">
                        <div class="container">
                            <!-- STRART CONTAINER -->
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                                    <div class="banner_content text_white">
                                        <h2 class="staggered-animation" data-animation="fadeInUp"
                                            data-animation-delay="0.2s">Kurslar</h2>
                                        <p class="staggered-animation" data-animation="fadeInUp"
                                            data-animation-delay="0.4s">If you are going to use a passage of Lorem Ipsum,
                                            you need to be sure there isn't anything embarrassing hidden in the middle of
                                            text.</p>
                                        <a class="btn btn-default btn-radius staggered-animation"
                                            href="{{ route('courseus.index') }}" data-animation="fadeInUp"
                                            data-animation-delay="0.6s">Boshlash</a>
                                        <a class="btn btn-white btn-radius staggered-animation" href="#post"
                                            data-animation="fadeInUp" data-animation-delay="0.6s">Ko'proq</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END CONTAINER-->
                    </div>
                </div>
                <div class="carousel-item background_bg overlay_bg_60"
                    data-img-src="{{ asset('assets/images/course_img5.jpg') }}">
                    <div class="banner_slide_content">
                        <div class="container">
                            <!-- STRART CONTAINER -->
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                                    <div class="banner_content text_white">
                                        <h2 class="staggered-animation" data-animation="fadeInUp"
                                            data-animation-delay="0.2s">Hoziroq boshlang Porloq Kelajak Uchun</h2>
                                        <p class="staggered-animation" data-animation="fadeInUp"
                                            data-animation-delay="0.4s">If you are going to use a passage of Lorem Ipsum,
                                            you need to be sure there isn't anything embarrassing hidden in the middle of
                                            text.</p>
                                        <a class="btn btn-default btn-radius staggered-animation"
                                            href="{{ route('courseus.index') }}" data-animation="fadeInUp"
                                            data-animation-delay="0.6s">Boshlash</a>
                                        <a class="btn btn-white btn-radius staggered-animation" href="#post"
                                            data-animation="fadeInUp" data-animation-delay="0.6s">Ko'proq</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END CONTAINER-->
                    </div>
                </div>
                <div class="carousel-item background_bg overlay_bg_60"
                    data-img-src="{{ asset('assets/images/course_img4.jpg') }}">
                    <div class="banner_slide_content">
                        <div class="container">
                            <!-- STRART CONTAINER -->
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                                    <div class="banner_content text_white">
                                        <h2 class="staggered-animation" data-animation="fadeInUp"
                                            data-animation-delay="0.2s">Online Kurslar</h2>
                                        <p class="staggered-animation" data-animation="fadeInUp"
                                            data-animation-delay="0.4s">If you are going to use a passage of Lorem Ipsum,
                                            you need to be sure there isn't anything embarrassing hidden in the middle of
                                            text.</p>
                                        <a class="btn btn-default btn-radius staggered-animation"
                                            href="{{ route('courseus.index') }}" data-animation="fadeInUp"
                                            data-animation-delay="0.6s">Boshlash</a>
                                        <a class="btn btn-white btn-radius staggered-animation" href="#post"
                                            data-animation="fadeInUp" data-animation-delay="0.6s">Ko'proq</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END CONTAINER-->
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
            <a class="carousel-control-next" href="" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
        </div>
    </div>
    <!-- END SECTION BANNER -->

    <!-- START SECTION WHY CHOOSE -->
    <div class="section pb_70" style="background-color:#efefef">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="icon_box icon_box_style1 box_shadow1 text-center">
                        <div class="icon ibc_orange">
                            <a href="https://t.me/onatilivaadabiyoti_nazoratishi"><i class="fas fa-user-graduate"></i></a>
                        </div>
                        <div class="icon_box_content">
                            <a href="https://t.me/onatilivaadabiyoti_nazoratishi">
                                <h5>Administrator</h5>
                            </a>
                            <a href="https://t.me/onatilivaadabiyoti_nazoratishi">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="icon_box icon_box_style1 box_shadow1 text-center">
                        <div class="icon ibc_green">
                            <a href="{{ route('courseus.index') }}"><i class="fas fa-globe"></i></a>
                        </div>
                        <div class="icon_box_content">
                            <a href="{{ route('courseus.index') }}">
                                <h5>Online Kurslar</h5>
                            </a>
                            <a href="{{ route('courseus.index') }}">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="icon_box icon_box_style1 box_shadow1 text-center">
                        <div class="icon ibc_pink">
                            <a href="https://t.me/onatilivaadabiyoti_nazoratishi"><i class="fas fa-graduation-cap"></i></a>
                        </div>
                        <div class="icon_box_content">
                            <a href="https://t.me/onatilivaadabiyoti_nazoratishi">
                                <h5>Kurslar</h5>
                            </a>
                            <a href="https://t.me/onatilivaadabiyoti_nazoratishi">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION WHY CHOOSE -->
    <!-- START SECTION COURSES-->
    <div class="section pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="heading_s1 text-center">
                        <h2>So'ngi Yangiliklar</h2>
                    </div>
                    <p class="text-center">Ilm fan Olamidagi So'ngi Yangiliklar.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $key => $post)
                    <div class="col-lg-4 col-md-6">

                        <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
                            data-animation-delay="0.2s">
                            <div class="courses_img">
                                <a href="{{ route('postus.show', $post->id) }}"><img
                                        src="{{ asset('storage/' . $post->image) }}" alt="course_img1"
                                        style="height:250px" /></a>
                            </div>
                            <div class="courses_info">
                                <h5 class="courses_title"><a href="{{ route('postus.show', $post->id) }}">
                                        {{ Str::limit($post->name, 60) }}</a></h5>
                                <div class="courses_teacher">
                                    <a href="{{ route('postus.show', $post->id) }}"><img
                                            src="{{ asset('assets/images/user.png') }}"
                                            alt="user1"><span>{{ $post->author }}</span></a>
                                </div>
                                <div class="courses_footer">
                                    <ul class="courses_meta">
                                        <li><a href="{{ route('postus.show', $post->id) }}"><i
                                                    class="ti-comments"></i><span>{{ count($post->comment) }}</span></a>
                                        </li>
                                        <li><a href="{{ route('postus.show', $post->id) }}"><i
                                                    class="ti-time"></i>{{ Carbon\Carbon::parse($post->created_at)->format('M d ') }}</span>{{ Carbon\Carbon::parse($post->created_at)->format('- Y') }}</a>
                                        </li>
                                        <li>
                                            <li>
                                                <div class="fb-share-button" data-layout="button_count"
                                                    style="background-color:#007bff;border-radius:2px;color:#fff;padding:0.2rem;0.5rem;">
                                                    <a class="tgme_action_button" style="color:#fff"
                                                        href="tg://msg_url?url={{ route('postus.show', $post->id) }}"><i
                                                            class="fa fa-paper-plane"></i> Share</a>
                                                </div>
                                            </li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
    <!-- END SECTION CLASSES-->

    <div class="small_pt pb-0 newsletter_overlap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="bg_default radius_all_10 text_white newsletter_box animation" data-animation="fadeInUp"
                        data-animation-delay="0.02s">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="heading_s1">
                                    <h2 class="font_style1">Obuna Bo'ling</h2>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="newsletter_form2 rounded_input">
                                    <form method="POST" action="{{ route('emails.store') }}">
                                        @csrf
                                        <input type="text" name="email" class="form-control" required=""
                                            placeholder="Email Manzil">
                                        <button type="submit" title="Subscribe" class="btn btn-default btn-radius"
                                            name="submit" value="Submit">Obuna Bo'lish</button>
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
