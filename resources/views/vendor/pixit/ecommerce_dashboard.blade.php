@extends('layouts.myapp')
@section('title','Artbazar - Home')
@section('data-page','ecommerce_dashboard')
@section('begin-page-styles')
    <link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="assets/plugins/metrojs/metrojs.css" rel="stylesheet">
@endsection

@section('end-page-styles')
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
@endsection

@section('begin-page-scripts')
    <script src="{{ asset('assets/plugins/mandatoryJs.min.js') }}"></script>

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

@section('main-content')

    <div id="main-content" class="ecommerce_dashboard">
        <div class="row m-t-20">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="panel no-bd bd-3 panel-stat">
                            <div class="panel-body bg-green p-15">
                                <div class="row m-b-0">
                                    <div class="col-xs-3">
                                        <i class="glyph-icon flaticon-orders"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <small class="stat-title">ORDERS THIS MONTH</small>
                                        <div class="live-tile" data-delay="4000" data-animation-easing="fade" data-height="47">
                                            <div>
                                                <h1 class="m-0 w-500 bg-green">148</h1>
                                            </div>
                                            <div>
                                                <h1 class="m-0 w-500 bg-green">+28%</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-title">Last month</small>
                                        <div class="live-tile" data-delay="4000" data-animation-easing="fade" data-height="30">
                                            <div class="bg-green">
                                                <h3 class="m-0 w-500">126</h3>
                                            </div>
                                            <div class="bg-green">
                                                <h3 class="m-0 w-500">$12,545</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <small class="stat-title">Last week</small>
                                        <div class="live-tile" data-delay="4000" data-animation-easing="fade" data-height="30">
                                            <div class="bg-green">
                                                <h3 class="m-0 w-500">41</h3>
                                            </div>
                                            <div class="bg-green">
                                                <h3 class="m-0 w-500">$4,237</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="panel no-bd bd-3 panel-stat">
                            <div class="panel-body bg-dark p-15">
                                <div class="row m-b-6">
                                    <div class="col-xs-3">
                                        <i class="glyph-icon flaticon-incomes"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <small class="stat-title">INCOMES THIS MONTH</small>
                                        <h1 class="m-0 w-500">$<span class="animate-number" data-value="42567" data-animation-duration="1400">0</span></h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-title">Last month</small>
                                        <h3 class="m-0 w-500">$<span class="animate-number" data-value="38547" data-animation-duration="1400">0</span></h3>
                                    </div>
                                    <div class="col-xs-6">
                                        <small class="stat-title">Last week</small>
                                        <h3 class="m-0 w-500">$<span class="animate-number" data-value="8754" data-animation-duration="1400">0</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 hidden-md">
                        <div class="panel no-bd bd-3 panel-stat">
                            <div class="panel-body bg-red p-15">
                                <div class="row m-b-6">
                                    <div class="col-xs-3">
                                        <i class="glyph-icon flaticon-educational"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <small class="stat-title">Products Online</small>
                                        <h1 class="m-0 w-500">1 450</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-title">Added This Month</small>
                                        <h3 class="m-0 w-500">75</h3>
                                    </div>
                                    <div class="col-xs-6">
                                        <small class="stat-title">Number of Categories</small>
                                        <h3 class="m-0 w-500">21</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 hidden-md">
                        <div class="panel no-bd bd-3 panel-stat">
                            <div class="panel-body bg-blue p-15">
                                <div class="row m-b-10">
                                    <div class="col-xs-3">
                                        <i class="glyph-icon flaticon-visitors"></i>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="56">
                                            <div>
                                                <small class="stat-title">Clients this Month</small>
                                                <h1 class="m-0 w-300">85</h1>
                                            </div>
                                            <div>
                                                <small class="stat-title">Total Client</small>
                                                <h1 class="m-0 w-300">1 654</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-title">Average Order</small>
                                        <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="30">
                                            <div>
                                                <h3 class="m-0 w-300">$156.65</h3>
                                            </div>
                                            <div>
                                                <h3 class="m-0 w-300">$136.50</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <small class="stat-title">Average Items</small>
                                        <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="30">
                                            <div>
                                                <h3 class="m-0 w-500">8</h3>
                                            </div>
                                            <div>
                                                <h3 class="m-0 w-500">7</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-stat bg-white">
                            <div class="panel-heading text-center p-10 p-b-0">
                                <div class="pos-abs t-10 l-15 f-18"><i class="fa fa-dollar"></i>
                                </div>
                                <h2 class="panel-title">Revenue</h2>
                                <div class="pos-abs t-5 r-5 f-18 cursor-pointer">
                                    <div class="glyph-icon flaticon-plus16 f-32"></div>
                                </div>
                            </div>
                            <div class="panel-body p-0 p-b-10">
                                <div id="chart_revenue" style="height: 270px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-b-40 m-t-10">
            @if(session()->exists('msg'))
                <div class="">
                    <div class="col-lg-12 alert alert-success">
                        <strong>{{session()->get('msg')}}</strong>
                    </div>
                </div>
            @endif
            <div class="col-md-12">
                <div class="tabcordion">
                    <ul id="myTab" class="nav nav-tabs nav-dark">
                        <li><a href="#products" data-toggle="tab">Top Selling</a></li>
                        <li class="active"><a href="#orders" data-toggle="tab">Last Orders</a></li>
                        {{--<li><a href="#reviews" data-toggle="tab">Pending Reviews <span class="m-l-10 badge badge-primary">5</span></a></li>--}}
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade" id="products">
                            <div class="row p-20">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                    <table id="products-table" class="table table-tools table-hover">
                                        <thead>
                                        <tr>
                                            <th style="min-width:70px"><strong>ID</strong>
                                            <th><strong>Product</strong>
                                            </th>
                                            <th><strong>Category</strong>
                                            </th>
                                            <th><strong>Price</strong>
                                            </th>
                                            <th><strong>Sales this Month</strong>
                                            </th>
                                            <th><strong>Sales Variation</strong>
                                            </th>
                                            <th class="text-center"><strong>Sales</strong>
                                            </th>
                                            <th class="text-center"><strong>Status</strong>
                                            </th>
                                            <th class="text-center"><strong>Actions</strong>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Product 1</td>
                                                <td>Women / Underwear</td>
                                                <td><strong>$25.20</strong></td>
                                                <td>123</td>
                                                <td class="c-green"><strong>+26%</strong></td>
                                                <td class="text-center">
                                                    <div class="sparkline" data-sparkline-color="#7BB2B4" data-sparkline-value="[13,14,16,15,4,14,20,14,12,16,11,17,19,16]"></div>
                                                </td>
                                                <td class="text-center">
                                                    <span class="label label-success w-300">Online</span>
                                                </td>
                                                <td class="text-center ">
                                                    <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active in" id="orders">
                            <div class="row p-20">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                    <table class="table table-tools table-hover">
                                        <thead>
                                        <tr>
                                            <th style="min-width:70px"><strong>ID</strong>
                                            <th><strong>Purchase Date</strong>
                                            </th>
                                            <th><strong>Client</strong>
                                            </th>
                                            <th><strong>Amount</strong>
                                            </th>
                                            <th><strong>Items</strong>
                                            </th>
                                            <th><strong>Delivery date</strong>
                                            </th>
                                            <th><strong>Destination</strong>
                                            </th>
                                            <th class="text-center"><strong>Status</strong>
                                            </th>
                                            <th class="text-center"><strong>Actions</strong>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pedidos as $p)
                                            <tr>
                                                <td>{{ $p->id }}</td>
                                                <td>{{ $p->created_at }}</td>
                                                <td><a class="c-blue" href="profil_edit.html">{{ $p->cliente->fullName() }}</a></td>
                                                <td>R$ {{ $p->totalPreco() }}</td>
                                                <td>{{ $p->totalItens() }}</td>
                                                <td>02/10/2013</td>
                                                <td>New York</td>
                                                <td class="text-center">
                                                    {!! $p->getStatusHTML() !!}
                                                </td>
                                                <td class="text-center">
                                                    <a href="ecommerce_order_view.html" class="view btn btn-sm btn-default"><i class="fa fa-search"></i> View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{--<div class="tab-pane fade" id="reviews">--}}
                            {{--<div class="row p-20">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<table id="product-review" class="table table-tools table-hover">--}}
                                        {{--<thead>--}}
                                        {{--<tr>--}}
                                            {{--<th style="min-width:70px"><strong>Review ID</strong>--}}
                                            {{--<th><strong>Review Date</strong></th>--}}
                                            {{--<th><strong>User / Client</strong></th>--}}
                                            {{--<th><strong>Review Content</strong></th>--}}
                                            {{--<th class="text-center"><strong>Status</strong></th>--}}
                                            {{--<th class="text-center"><strong>Actions</strong></th>--}}
                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                        {{--<tbody>--}}
                                        {{--<tr>--}}
                                            {{--<td>1</td>--}}
                                            {{--<td>03/11/2013</td>--}}
                                            {{--<td><a class="c-blue" href="profil_edit.html">John Addams</a></td>--}}
                                            {{--<td>Very good product. Low price. I like it a lot. Thanks! </td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-info w-300">Pending</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</a>--}}
                                                {{--<a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>2</td>--}}
                                            {{--<td>02/11/2013</td>--}}
                                            {{--<td><a class="c-blue" href="profil_edit.html">Fred Aster</a></td>--}}
                                            {{--<td>I sell my car. Do you want to buy it?</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-info w-300">Pending</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</a>--}}
                                                {{--<a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>3</td>--}}
                                            {{--<td>01/11/2013</td>--}}
                                            {{--<td><a class="c-blue" href="profil_edit.html">Mike Johson</a></td>--}}
                                            {{--<td>I like this shirt. Quick delivery. </td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-info w-300">Pending</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</a>--}}
                                                {{--<a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>4</td>--}}
                                            {{--<td>25/10/2013</td>--}}
                                            {{--<td><a class="c-blue" href="profil_edit.html">Amanda Taping</a></td>--}}
                                            {{--<td>Love it. </td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-info w-300">Pending</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</a>--}}
                                                {{--<a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>5</td>--}}
                                            {{--<td>20/10/2013</td>--}}
                                            {{--<td><a class="c-blue" href="profil_edit.html">John Johnson</a></td>--}}
                                            {{--<td>Beautiful shirt</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-info w-300">Pending</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-pencil"></i> Validate</a>--}}
                                                {{--<a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--</tbody>--}}
                                    {{--</table>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
