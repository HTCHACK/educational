<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('title')
    @include('layouts.head')
</head>

<body>
    <!-- LOADER -->
    <div id="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END LOADER -->
    @if (Route::currentRouteName() != 'login')
        @include('layouts.menu')
    @endif
    @yield('content')
    @if (Route::currentRouteName() != 'login')
        @include('layouts.footer')
    @endif
    @include('layouts.script')
</body>

</html>
