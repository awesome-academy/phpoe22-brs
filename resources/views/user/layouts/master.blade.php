<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <base href="{{ asset('/') }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('user.layouts.css')
</head>
<body>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        @include('user.layouts.menu')
        <!-- Content -->
        @yield('content')
    </div>
    <!-- //Main wrapper -->
    @include('user.layouts.footer')
    @include('user.layouts.script')
    @yield('customjs')
</body>
</html>
