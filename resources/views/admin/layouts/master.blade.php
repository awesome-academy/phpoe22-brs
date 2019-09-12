<!DOCTYPE html>
<html lang="en">
    <head>
        <title> @yield('title') </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/lib-admin/css/main.css') }}">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/lib-admin/font-awsome.css') }}">
    </head>
    <body class="app sidebar-mini rtl">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <main class="app-content">
            @yield('main')
        </main>
        <script src="{{ asset(mix('js/custom.js')) }}"></script>
    </body>
</html>