<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>@yield('title' , 'FYP E-Com')</title>
    @include('admin.includes.head')


<body>
    <div class="wrapper">
        @include('admin.includes.sidebar')


        <div class="main">
            @include('admin.includes.header')
            @yield('content')
            @include('admin.includes.footer')
        </div>
    </div>

    @include('admin.includes.script')
    @stack('scripts')
</body>

</html>