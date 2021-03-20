<header class="header_wrap fixed-top light_skin sticky_dark_skin main_menu_uppercase transparent_header header_with_topbar dd_dark_skin">
    <div class="top-header light_skin d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="contact_detail text-center text-lg-left">
                    	<li><i class="ti-mobile"></i><span>+998-99-906-08-63</span></li>
                    	<li><i class="ti-email"></i><span>alisher.halimjonov94gmail.com</span></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-end">
                        <ul class="social_icons social_white">
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="fas fa-paper-plane"></i></a></li>
                            <li><a href=""><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                        <ul class="header_list border_list">
                            <li><a href="https://t.me/onatili_tarix_kurs" class="nav_btn ">Channel</a></li>
                            <li><a href="https://t.me/onatilivaadabiyoti_nazoratishi" class="nav_btn btn-default">Telegram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg"> 
        	<a class="navbar-brand" href=""> 
            	<img class="logo_light" src="{{ asset('assets/images/favicon.png')}}" alt="logo" width="50px"><h3 style="color:#fff;font-weight:bold;margin-top:-2.7rem;margin-left:3.5rem">FILOLOG</h3> 
                <img class="logo_dark" src="{{ asset('assets/images/logo.png')}}" alt="logo"> 
            </a>
          	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> <span class="ion-android-menu"></span> </button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
					
                    <li><a class="nav-link {{ Str::contains(Route::currentRouteName(), 'home') ? 'active' : null }} nav_item" href="{{route('home')}}">Bosh Sahifa</a></li>
                    <li><a class="nav-link {{ Str::contains(Route::currentRouteName(), 'courseus') ? 'active' : null }} nav_item" href="{{route('courseus.index')}}">Kurslar</a></li>
                    <li><a class="nav-link {{ Str::contains(Route::currentRouteName(), 'ourgallery') ? 'active' : null }} nav_item" href="{{route('ourgallery.index')}}">Galareya</a></li> 
                    <li><a class="nav-link {{ Str::contains(Route::currentRouteName(), 'contactus') ? 'active' : null }} nav_item" href="{{route('contactus.index')}}">Aloqa</a></li>      
							
					
                </ul>
          	</div>
			<ul class="navbar-nav attr-nav align-items-center">
                
                <li class="dropdown">
                	<a class="nav-link cart_trigger" href="" data-toggle="dropdown"><i class="fa fa-paper-plane"></i><span class="cart_count"></span></a>
                    <div class="cart_box dropdown-menu dropdown-menu-right">
                        <div class="cart_footer">
                        	<p class="cart_buttons"><a href="{{route('courseus.index')}}" class="btn btn-default rounded-0 view-cart">Kurslar</a><a href="https://t.me/onatili_tarix_kurs" class="btn btn-dark rounded-0 checkout">Telegram</a></p>
                        </div>
                    </div>
                </li>
			</ul>
        </nav>
    </div>
</header>