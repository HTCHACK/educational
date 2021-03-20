<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('title')
    @include('admin.layouts.head')
</head>

<body class="">
    <div class="wrapper">
    @include('admin.layouts.menu')
    @yield('content')
    @include('admin.layouts.footer')
    </div>
    @include('admin.layouts.script')
</body>

</html>