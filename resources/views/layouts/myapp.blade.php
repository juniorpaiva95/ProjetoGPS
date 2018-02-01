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
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->

    @yield('begin-page-styles')
    <!-- BEGIN PAGE LEVEL STYLE -->

    <!-- END PAGE LEVEL STYLE -->
    @yield('end-page-styles')
</head>

<body data-page="ecommerce_dashboard">
<!-- BEGIN TOP MENU -->
@include('layouts.top-menu')
<!-- END TOP MENU -->
<!-- BEGIN WRAPPER -->
<div id="wrapper">

    <!-- BEGIN MAIN SIDEBAR -->
    @include('layouts.main-sidebar')
    <!-- END MAIN SIDEBAR -->

    <!-- BEGIN MAIN CONTENT -->
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
            <div class="col-md-12">
                <div class="tabcordion">
                    <ul id="myTab" class="nav nav-tabs nav-dark">
                        <li class="active"><a href="#products" data-toggle="tab">Top Selling</a></li>
                        <li><a href="#orders" data-toggle="tab">Last Orders</a></li>
                        <li><a href="#reviews" data-toggle="tab">Pending Reviews <span class="m-l-10 badge badge-primary">5</span></a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="products">
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
                                        <tr>
                                            <td>2</td>
                                            <td>Product 2 <span class="label bg-red">Low Stock</span>
                                            </td>
                                            <td>Menu / Shoes</td>
                                            <td><strong>$22.55</strong></td>
                                            <td>112</td>
                                            <td class="c-green"><strong>+11%</strong></td>
                                            <td class="text-center">
                                                <div class="sparkline" data-sparkline-color="#c3a8db" data-sparkline-value="[14,17,16,12,15,16,22,15,14,17,11,18,11,12]"></div>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-success w-300">Online</span>
                                            </td>
                                            <td class="text-center ">
                                                <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Product 3</td>
                                            <td>Women / Underwear</td>
                                            <td><strong>$21.00</strong></td>
                                            <td>97</td>
                                            <td class="c-red"><strong>-8%</strong></td>
                                            <td class="text-center">
                                                <div class="sparkline" data-sparkline-color="#8dae24" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-success w-300">Online</span>
                                            </td>
                                            <td class="text-center ">
                                                <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Product 4</td>
                                            <td>Women / Underwear</td>
                                            <td><strong>$34.25</strong></td>
                                            <td>85</td>
                                            <td class="c-green"><strong>+38%</strong></td>
                                            <td class="text-center">
                                                <div class="sparkline" data-sparkline-color="#7BB2B4" data-sparkline-value="[18,10,11,14,4,14,20,14,18,11,10,15,19,16]"></div>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-success w-300">Online</span>
                                            </td>
                                            <td class="text-center ">
                                                <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Product 5</td>
                                            <td>Menu / Shoes</td>
                                            <td><strong>$42.78</strong></td>
                                            <td>72</td>
                                            <td class="c-red"><strong>-6%</strong></td>
                                            <td class="text-center">
                                                <div class="sparkline" data-sparkline-color="#c3a8db" data-sparkline-value="[8,12,16,12,11,16,22,15,14,17,10,13,11,16]"></div>
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-success w-300">Online</span>
                                            </td>
                                            <td class="text-center ">
                                                <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                                <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Product 6</td>
                                            <td>Women / Underwear</td>
                                            <td><strong>$21.00</strong></td>
                                            <td>62</td>
                                            <td class="c-green"><strong>+47%</strong></td>
                                            <td class="text-center">
                                                <div class="sparkline" data-sparkline-color="#8dae24" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
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
                        <div class="tab-pane fade" id="orders">
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
                                        <tr>
                                            <td>1</td>
                                            <td>03/11/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">John Addams</a></td>
                                            <td>$125.20</td>
                                            <td>5</td>
                                            <td>02/10/2013</td>
                                            <td>New York</td>
                                            <td class="text-center">
                                                <span class="label label-success w-300">Shipped</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="ecommerce_order_view.html" class="view btn btn-sm btn-default"><i class="fa fa-search"></i> View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>02/11/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">Steve Jobs</a></td>
                                            <td>$352.55</td>
                                            <td>12</td>
                                            <td>01/10/2013</td>
                                            <td>Chicago</td>
                                            <td class="text-center">
                                                <span class="label label-success w-300">Payment received</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="ecommerce_order_view.html" class="view btn btn-sm btn-default"><i class="fa fa-search"></i> View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>04/09/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">Mike Jefferson</a></td>
                                            <td>$121.00</td>
                                            <td>6</td>
                                            <td>28/09/2013</td>
                                            <td>Los Angeles</td>
                                            <td class="text-center">
                                                <span class="label label-primary w-300">Waiting paiment</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="ecommerce_order_view.html" class="view btn btn-sm btn-default"><i class="fa fa-search"></i> View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>02/09/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">James Miller</a></td>
                                            <td>$85.55</td>
                                            <td>2</td>
                                            <td>14/09/2013</td>
                                            <td>Miami</td>
                                            <td class="text-center">
                                                <span class="label label-primary w-300">Waiting paiment</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="ecommerce_order_view.html" class="view btn btn-sm btn-default"><i class="fa fa-search"></i> View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>01/09/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">Samantha Harris</a></td>
                                            <td>$125.20</td>
                                            <td>5</td>
                                            <td>No date</td>
                                            <td>Boston</td>
                                            <td class="text-center">
                                                <span class="label label-warning w-300">Fraud</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="ecommerce_order_view.html" class="view btn btn-sm btn-default"><i class="fa fa-search"></i> View</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <div class="row p-20">
                                <div class="col-md-12">
                                    <table id="product-review" class="table table-tools table-hover">
                                        <thead>
                                        <tr>
                                            <th style="min-width:70px"><strong>Review ID</strong>
                                            <th><strong>Review Date</strong></th>
                                            <th><strong>User / Client</strong></th>
                                            <th><strong>Review Content</strong></th>
                                            <th class="text-center"><strong>Status</strong></th>
                                            <th class="text-center"><strong>Actions</strong></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>03/11/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">John Addams</a></td>
                                            <td>Very good product. Low price. I like it a lot. Thanks! </td>
                                            <td class="text-center">
                                                <span class="label label-info w-300">Pending</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</a>
                                                <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>02/11/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">Fred Aster</a></td>
                                            <td>I sell my car. Do you want to buy it?</td>
                                            <td class="text-center">
                                                <span class="label label-info w-300">Pending</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</a>
                                                <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>01/11/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">Mike Johson</a></td>
                                            <td>I like this shirt. Quick delivery. </td>
                                            <td class="text-center">
                                                <span class="label label-info w-300">Pending</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</a>
                                                <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>25/10/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">Amanda Taping</a></td>
                                            <td>Love it. </td>
                                            <td class="text-center">
                                                <span class="label label-info w-300">Pending</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-check"></i> Validate</a>
                                                <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>20/10/2013</td>
                                            <td><a class="c-blue" href="profil_edit.html">John Johnson</a></td>
                                            <td>Beautiful shirt</td>
                                            <td class="text-center">
                                                <span class="label label-info w-300">Pending</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="edit btn btn-sm btn-success"><i class="fa fa-pencil"></i> Validate</a>
                                                <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END WRAPPER -->
<!-- BEGIN CHAT MENU -->
<nav id="menu-right">
    <ul>
        <li class="mm-label label-big">ONLINE</li>
        <li class="img no-arrow have-message">
                <span class="inside-chat">
                    <i class="online"></i>
                    <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                    <span class="chat-name">Alexa Johnson</span>
                    <span class="pull-right badge badge-danger hide">3</span>
                    <span>Los Angeles</span>
                </span>
            <ul class="chat-messages">
                <li class="img">
                        <span>
                            <span class="chat-detail">
                                <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                                <span class="chat-bubble"><span class="bubble-inner">Hi you!</span></span>
                            </span>
                        </span>
                </li>
                <li class="img">
                        <span>
                            <span class="chat-detail">
                                <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                                <span class="chat-bubble"><span class="bubble-inner">You there?</span></span>
                            </span>
                        </span>
                </li>
                <li class="img">
                        <span>
                            <span class="chat-detail">
                                <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                                <span class="chat-bubble">
                                    <span class="bubble-inner">Let me know when you come back</span>
                                </span>
                            </span>
                        </span>
                </li>
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="online"></i>
                    <img src="assets/img/avatars/avatar2.png" alt="avatar 2"/>
                    <span class="chat-name">Bobby Brown</span>
                    <span>New York</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="busy"></i>
                    <img src="assets/img/avatars/avatar13.png" alt="avatar 13"/>
                    <span class="chat-name">Fred Smith</span>
                    <span>Atlanta</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="away"></i>
                    <img src="assets/img/avatars/avatar4.png" alt="avatar 4"/>
                    <span class="chat-name">James Miller</span>
                    <span>Seattle</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="online"></i>
                    <img src="assets/img/avatars/avatar5.png" alt="avatar 5"/>
                    <span class="chat-name">Jefferson Jackson</span>
                    <span>Los Angeles</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="mm-label label-big m-t-30">OFFLINE</li>

        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar6.png" alt="avatar 6"/>
                    <span class="chat-name">Jordan</span>
                    <span>Savannah</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar7.png" alt="avatar 7"/>
                    <span class="chat-name">Kim Addams</span>
                    <span>Birmingham</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar8.png" alt="avatar 8"/>
                    <span class="chat-name">Meagan Miller</span>
                    <span>San Francisco</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                        <i class="offline"></i>
                        <img src="assets/img/avatars/avatar9.png" alt="avatar 9"/>
                        <span class="chat-name">Melissa Johnson</span>
                        <span>Austin</span>
                    </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar12.png" alt="avatar 12"/>
                    <span class="chat-name">Nicole Smith</span>
                    <span>San Diego</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar11.png" alt="avatar 11"/>
                    <span class="chat-name">Samantha Harris</span>
                    <span>Salt Lake City</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
        <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar10.png" alt="avatar 10"/>
                    <span class="chat-name">Scott Thomson</span>
                    <span>Los Angeles</span>
                </span>
            <ul class="chat-messages">
                <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- END CHAT MENU -->
<!-- BEGIN MANDATORY SCRIPTS -->
<script src="assets/plugins/mandatoryJs.min.js"></script>
<!-- END MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/plugins/metrojs/metrojs.min.js"></script>
<script src="assets/plugins/charts-flot/jquery.flot.js"></script>
<script src="assets/plugins/charts-flot/jquery.flot.animator.min.js"></script>
<script src="assets/plugins/charts-flot/jquery.flot.resize.js"></script>
<script src="assets/plugins/charts-flot/jquery.flot.time.min.js"></script>
<script src="assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/ecommerce.js"></script>
<!-- END  PAGE LEVEL SCRIPTS -->
<script src="assets/js/application.js"></script>
</body>

</html>