<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>@yield('title')|mishop商城后台管理系统</title>
        <!-- Main styles for this application-->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
        @yield('head')
    </head>
    <body class="c-app c-no-layout-transition">
        @include('admin.includes.sideBar')
        @include('admin.includes.aside')


        <div class="c-wrapper">
            @include('admin.includes.header')
            <div class="c-body">
                @yield('content')
            </div>
            @include('admin.includes.footer')
        </div>

        <!-- CoreUI and necessary plugins-->
        <script src="/vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
        <!--[if IE]><!-->
        <script src="/vendors/@coreui/icons/js/svgxuse.min.js"></script>
        <!--<![endif]-->
        <!-- Plugins and scripts required by this view-->
        <script src="/vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js"></script>
        <script src="/vendors/@coreui/utils/js/coreui-utils.js"></script>
        <script src="/js/main.js"></script>
        <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            setTimeout(function() {
            document.body.classList.remove('c-no-layout-transition')
            }, 2000);
        });
        </script>
        @yield('foot')
    </body>
</html>