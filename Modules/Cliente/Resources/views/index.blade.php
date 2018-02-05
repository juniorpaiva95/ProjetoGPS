@extends('layouts.myapp')
@section('title','Artbazar - Home')
@section('data-page','ecommerce_dashboard')

@section('end-page-styles')
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
@endsection

@section('begin-page-scripts')
    <script src="assets/plugins/jquery-1.11.js"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.js"></script>
    <script src="assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
    <script src="assets/plugins/nprogress/nprogress.js"></script>
    <script src="assets/plugins/charts-sparkline/sparkline.min.js"></script>
    <script src="assets/plugins/breakpoints/breakpoints.js"></script>
    <script src="assets/plugins/numerator/jquery-numerator.js"></script>
    <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/quicksearch/jquery.quicksearch.js"></script>
    <script src="assets/js/members.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script src="assets/js/application.js"></script>
@endsection

@section('main-content')

    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h2>Members <small>list of users registered</small></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" id="member-finder" class="form-control" placeholder="Search a member...">
                            </div>
                            {{--<div class="col-md-8 align-right m-t-10">--}}
                                    {{--<span class="c-gray m-r-20">Filter by--}}
                                        {{--<a href="#" class="m-l-10 m-r-5">Date</a>--}}
                                        {{--<span class="c-gray-light">/</span>--}}
                                        {{--<a href="#" class="m-l-5 m-r-5">Name</a>--}}
                                        {{--<span class="c-gray-light">/</span>--}}
                                        {{--<a href="#" class="c-blue m-l-5">City</a>--}}
                                    {{--</span>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            @foreach($clientes as $c)
                                <div class="col-md-4 member-entry">
                                    <div class="row member">
                                        <div class="col-xs-3">
                                            <img src="assets/img/avatars/avatar12_big.png" alt="avatar 12" class="pull-left img-responsive">
                                        </div>
                                        <div class="col-xs-9">
                                            <h3 class="m-t-0 member-name"><strong>{{ $c->fullName() }}</strong></h3>
                                            <div class="pull-left">
                                                <p><i class="fa fa-envelope-o c-gray-light p-r-10"></i>{{ $c->email }}</p>
                                                {{--<p><i class="fa fa-facebook c-gray-light p-r-10"></i> facebook.com/emalon</p>--}}
                                            </div>
                                            <div class="pull-right align-right">
                                                {{--<p><i class="fa fa-calendar c-gray-light p-r-10"></i> 15 april 2014</p>--}}
                                                <p><i class="fa fa-map-marker c-gray-light p-r-10"></i> {{$c->cidade}}</p>
                                                    <p><i class="fa fa-map-marker c-gray-light p-r-10"></i> {{$c->telefone}}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="m-t-30 align-center">
                            {!! $clientes->links() !!}
                            {{--<ul class="pagination">--}}
                                {{--<li><span><i class="fa fa-angle-left c-gray-light"></i></span></li>--}}
                                {{--<li class="active"><span>1</span></li>--}}
                                {{--<li><a href="#">2</a></li>--}}
                                {{--<li><a href="#">3</a></li>--}}
                                {{--<li><span>...</span></li>--}}
                                {{--<li><a href="#">9</a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
                            {{--</ul>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
