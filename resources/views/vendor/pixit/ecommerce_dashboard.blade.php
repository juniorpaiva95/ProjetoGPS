@extends('layouts.myapp')
@section('title','Artbazar - Home')

@section('begin-page-styles')
    <link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="assets/plugins/metrojs/metrojs.css" rel="stylesheet">
@endsection

@section('end-page-styles')
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
@endsection

@section('begin-page-scripts')
    <script src="assets/plugins/metrojs/metrojs.min.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.animator.min.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/ecommerce.js"></script>
@endsection
@section('end-page-scripts')
    <script src="assets/js/application.js"></script>
@endsection
