@extends('layouts.body')
@section('title')

    <title>Authentication</title>

@endsection
@section('content')
    <section class="main"
        style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url({{ asset('assets/images/course_img6.jpg')}}    );background-repeat:no-repeat;background-size:cover;background-position:center;">
        <div class="layer">
            <div class="content-w3ls">
                
                <!---728x90--->
                <div class="content-bottom">
                    <form action="{{ route('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="field-group">
                            <div class="wthree-field">
                                <input name="phone_number" type="text" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="wthree-field">
                                <input name="password" type="password" placeholder="*******">
                            </div>
                        </div>
                        <div class="wthree-field" style="padding-left: 5.4%">

                            <div class="g-recaptcha" data-sitekey="6LdzhIQaAAAAAOA9PY9H7G5frc7timXgJ0NeqA_v"></div>

                        </div>
                        <div class="wthree-field">
                            <button type="submit" class="btn">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
