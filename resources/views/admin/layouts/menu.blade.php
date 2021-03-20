<div class="sidebar" data-color="purple" data-background-color="white"
    data-image="{{ asset('assets/vendor/img/sidebar-1.jpg') }}">
    <div class="logo"><a href="" class="simple-text logo-normal">
            Administration
            
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'admin') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item  {{ Str::contains(Route::currentRouteName(), 'categories') ? 'active' : null }}">
                <a class="nav-link" href="{{route('categories.index')}}">
                    <i class="fa fa-list-alt"></i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item  {{ Str::contains(Route::currentRouteName(), 'galleries') ? 'active' : null }}">
                <a class="nav-link" href="{{route('galleries.index')}}">
                    <i class="fa fa-image"></i>
                    <p>Gallery</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'posts') ? 'active' : null }}">
                <a class="nav-link" href="{{route('posts.index')}}">
                    <i class="fa fa-paper-plane"></i>
                    <p>Post</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'courses') ? 'active' : null }}">
                <a class="nav-link" href="{{route('courses.index')}}">
                    <i class="fa fa-video-camera"></i>
                    <p>Courses</p>
                </a>
            </li>
            <li class="nav-item {{ Str::contains(Route::currentRouteName(), 'comments') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('comments.index') }}">
                    <i class="fa fa-comments-o"></i>
                    <p>Comments</p>
                </a>
            </li>
            <li class="nav-item  {{ Str::contains(Route::currentRouteName(), 'contacts') ? 'active' : null }}">
                <a class="nav-link" href="{{route('contacts.index')}}">
                    <i class="fa fa-envelope"></i>
                    <p>Contacts</p>
                </a>
            </li>
            <li class="nav-item  {{ Str::contains(Route::currentRouteName(), 'emails') ? 'active' : null }}">
                <a class="nav-link" href="{{route('emails.index')}}">
                    <i class="fa fa-users"></i>
                    <p>Email Subscriber</p>
                </a>
            </li>
            <li class="nav-item"><a href="{{ route('force_to_logout') }}" class="nav-link"><i
                class="fa fa-sign-out"></i>Logout</a></li>  
        </ul>
    </div>
</div>