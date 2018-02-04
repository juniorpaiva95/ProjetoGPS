<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"><!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="{{ asset('assets/css/icons/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->

    @yield('begin-page-styles')
    <!-- BEGIN PAGE LEVEL STYLE -->

    <!-- END PAGE LEVEL STYLE -->
    @yield('end-page-styles')
</head>

<body data-page="@yield('data-page')" class="@yield('body-class')">
<!-- BEGIN TOP MENU -->
@include('layouts.top-menu')
<!-- END TOP MENU -->
<!-- BEGIN WRAPPER -->
<div id="wrapper">

    <!-- BEGIN MAIN SIDEBAR -->
    @include('layouts.main-sidebar')
    <!-- END MAIN SIDEBAR -->

    <!-- BEGIN MAIN CONTENT -->
    @yield('main-content')
    <!-- END MAIN CONTENT -->
</div>
<!-- END WRAPPER -->

<!-- BEGIN CHAT MENU -->
@include('layouts.chat-menu')
<!-- END CHAT MENU -->

<!-- BEGIN MANDATORY SCRIPTS -->

<!-- END MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('begin-page-scripts')

<!-- END  PAGE LEVEL SCRIPTS -->


<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
@yield('end-page-scripts')

</body>

</html>