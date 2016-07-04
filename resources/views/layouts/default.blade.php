<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="用于广西师范大学新生报名">
        <meta name="keywords" content="广西师范大学,教务处,新生报名">
        <meta name="author" content="Fu Rongxin,符荣鑫">

        <title>{{ isset($title) ? $title . ' - ' : ''}}广西师范大学教务处新生报名系统</title>
        <!--link rel="shortcut icon" href="favicon.ico"-->

        @section('styles')
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @show

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
            <script src="{{ asset('js/html5shiv.js') }}"></script>
            <script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
    </head>

    <body>
        <div id="wrapper">
            @include('layouts._header')

            @include('layouts._navigation')

            @yield('page')

            @include('layouts._footer')
        </div>
        <!-- /#wrapper -->

        @section('scripts')
            <!-- Load JS here for greater good -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        @show
    </body>
</html>