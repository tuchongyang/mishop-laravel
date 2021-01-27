<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>@yield('title')|mishop商城</title>
        <!-- Main styles for this application-->
        <link href="/css/web.css" rel="stylesheet">
        @yield('head')
    </head>
    <body>
        @include('web.includes.header')
            @include('admin.includes.message')
            @yield('content')
        @include('web.includes.footer')

        <script src="/vendors/jquery/js/jquery.min.js"></script>
        <script src="/js/main.js"></script>
        @yield('foot')
    </body>
</html>