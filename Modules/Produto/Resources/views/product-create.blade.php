@extends('layouts.myapp')
@section('title','Artbazar - Produto')
@section('data-page','product_view')

@section('begin-page-styles')
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="/assets/plugins/magnific/magnific-popup.css">
    <link rel="stylesheet" href="/assets/plugins/datatables/dataTables.css">
    <link rel="stylesheet" href="/assets/plugins/datatables/dataTables.tableTools.css">

@endsection

@section('end-page-styles')
    <!-- END PAGE LEVEL STYLE -->
    <script src="/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
@endsection

@section('begin-page-scripts')
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="/assets/plugins/jquery-1.11.js"></script>
    <script src="/assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="/assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
    <script src="/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="/assets/plugins/bootstrap-select/bootstrap-select.js"></script>
    <script src="/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
    <script src="/assets/plugins/nprogress/nprogress.js"></script>
    <script src="/assets/plugins/charts-sparkline/sparkline.min.js"></script>
    <script src="/assets/plugins/breakpoints/breakpoints.js"></script>
    <script src="/assets/plugins/numerator/jquery-numerator.js"></script>
    <script src="/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/assets/plugins/magnific/jquery.magnific-popup.min.js"></script>>
    <script src="/assets/js/ecommerce.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="/assets/js/application.js"></script>
@endsection

@section('main-content')
    <div id="main-content">
        <div class="page-title">
            <i class="icon-custom-left"></i>
            <h3>
                Novo Produto
                {{--<img class="m-r-20" src="{{ asset('assets/img/various/clothing.png') }}" alt="clothing">--}}
                {{--<strong>Product 1</strong> <small>update product</small>--}}
            </h3>
            <br>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabcordion">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#product_general" data-toggle="tab">Geral</a></li>
                        {{--<li><a href="#product_meta" data-toggle="tab">SEO</a></li>--}}
                        {{--<li><a href="#product_images" data-toggle="tab">Images</a></li>--}}
                        {{--<li><a href="#product_reviews" data-toggle="tab">Reviews--}}
                                {{--<span class="m-l-10 badge badge-primary">5</span></a>--}}
                        {{--</li>--}}
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="product_general">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="formCreateProduto" class="form-horizontal" action="{{ route('produto.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nome do Produto<span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" name="nome" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Descrição</label>
                                            <div class="col-sm-7">
                                                <textarea rows="4" name="descricao" class="form-control" placeholder="Maximum 220 characters"></textarea>
                                            </div>
                                        </div>
                                        {{--<div class="form-group">--}}
                                            {{--<label class="col-sm-2 control-label">Categories <span class="asterisk">*</span></label>--}}
                                            {{--<div class="col-sm-7">--}}
                                                {{--<select class="form-control" multiple title="Choose one or more">--}}
                                                    {{--<optgroup label="Type">--}}
                                                        {{--<option>Shirts</option>--}}
                                                        {{--<option>Shoes</option>--}}
                                                        {{--<option>Underwear</option>--}}
                                                    {{--</optgroup>--}}
                                                    {{--<optgroup label="Brand">--}}
                                                        {{--<option>Adidas</option>--}}
                                                        {{--<option>Nike</option>--}}
                                                        {{--<option>Reebok</option>--}}
                                                    {{--</optgroup>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Preço <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" name="preco" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Quantidade Estoque
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="number" name="qtd_estq" class="form-control valid" placeholder="Estoque"></input>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Estoque Minimo
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="number" name="qtd_estq_min" class="form-control valid" placeholder="Estoque"></input>
                                            </div>
                                        </div>
                                        {{--<div class="form-group">--}}
                                            {{--<label class="col-sm-2 control-label m-t-10">Status <span class="asterisk">*</span>--}}
                                            {{--</label>--}}
                                            {{--<div class="col-sm-7">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<label>--}}
                                                            {{--<input type="radio" name="radio-choice-0" checked>Online--}}
                                                        {{--</label>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<label>--}}
                                                            {{--<input type="radio" name="radio-choice-0">Offline--}}
                                                        {{--</label>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-3">--}}
                                                        {{--<label>--}}
                                                            {{--<input type="radio" name="radio-choice-0">Draft--}}
                                                        {{--</label>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label class="col-sm-2 control-label">Comment--}}
                                            {{--</label>--}}
                                            {{--<div class="col-sm-7">--}}
                                                {{--<textarea rows="5" class="form-control valid" placeholder="Optional comment..."></textarea>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product_meta">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Meta Title <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="Product 1 : buy your shirt with Pixit">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Meta Description <span class="asterisk">*</span>
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="4" class="form-control" placeholder="Max 255 characters..."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Meta Keywords
                                            </label>
                                            <div class="col-sm-7">
                                                <textarea rows="6" class="form-control" placeholder="Max 1000 characters..."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product_images">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="product-review" class="table">
                                        <thead>
                                        <tr>
                                            <th style="min-width:100px"><strong>Preview</strong>
                                            <th style="min-width:150px"><strong>Label</strong>
                                            </th>
                                            <th><strong>Main image</strong>
                                            </th>
                                            <th><strong>Thumbnail</strong>
                                            </th>
                                            <th><strong>Gallery</strong>
                                            </th>
                                            <th class="text-center"><strong>Actions</strong>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width:20%">
                                                <a href="{{ asset('assets/img/gallery/animal1.jpg') }}" class="magnific" title="Nature 1">
                                                    <img src="{{ asset('assets/img/gallery/animal1.jpg') }}" alt="animal1" class="img-responsive">
                                                </a>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control m-t-10" value="Product 1 main image">
                                            </td>
                                            <td >
                                                <input type="radio" name="product1-main" value="1" class="m-t-10" checked>
                                            </td>
                                            <td>
                                                <input type="radio" name="product1-main" value="1" class="m-t-10">
                                            </td>
                                            <td>
                                                <input type="radio" name="product1-main" value="1" class="m-t-10">
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">
                                                <a href="{{ asset('assets/img/gallery/animal2.jpg') }}" class="magnific" title="Nature 2">
                                                    <img src="{{ asset('assets/img/gallery/animal2.jpg') }}" alt="animal2" class="img-responsive">
                                                </a>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control m-t-10" value="Product 1 thumbnail">
                                            </td>
                                            <td >
                                                <input type="radio" name="product1-thumbnail" value="1" class="m-t-10">
                                            </td>
                                            <td>
                                                <input type="radio" name="product1-thumbnail" value="1" class="m-t-10" checked>
                                            </td>
                                            <td>
                                                <input type="radio" name="product1-thumbnail" value="1" class="m-t-10">
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">
                                                <a href="{{ asset('assets/img/gallery/animal3.jpg') }}" class="magnific" title="Nature 3">
                                                    <img src="{{ asset('assets/img/gallery/animal3.jpg') }}" alt="animal3" class="img-responsive">
                                                </a>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control m-t-10" value="Product 1 gallery" >
                                            </td>
                                            <td >
                                                <input type="radio" name="product1-gallery" value="1" class="m-t-10">
                                            </td>
                                            <td>
                                                <input type="radio" name="product1-gallery" value="1" class="m-t-10">
                                            </td>
                                            <td>
                                                <input type="radio" name="product1-gallery" value="1" class="m-t-10" checked>
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="delete-img btn btn-sm btn-default m-t-10"><i class="fa fa-times-circle"></i> Remove</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{--<div class="tab-pane fade" id="product_reviews">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<table class="table table-tools table-hover">--}}
                                        {{--<thead>--}}
                                        {{--<tr>--}}
                                            {{--<th style="min-width:70px"><strong>Review ID</strong>--}}
                                            {{--<th><strong>Review Date</strong>--}}
                                            {{--</th>--}}
                                            {{--<th><strong>User / Client</strong>--}}
                                            {{--</th>--}}
                                            {{--<th><strong>Review Content</strong>--}}
                                            {{--</th>--}}
                                            {{--<th class="text-center"><strong>Status</strong>--}}
                                            {{--</th>--}}
                                            {{--<th class="text-center"><strong>Actions</strong>--}}
                                            {{--</th>--}}
                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                        {{--<tbody>--}}
                                        {{--<tr>--}}
                                            {{--<td>1</td>--}}
                                            {{--<td>03/11/2013</td>--}}
                                            {{--<td>John Addams</td>--}}
                                            {{--<td>Very good product. Low price. I like it a lot. Thanks! </td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-success w-300">Approved</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>--}}
                                                {{--<a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>2</td>--}}
                                            {{--<td>02/11/2013</td>--}}
                                            {{--<td>Fred Aster</td>--}}
                                            {{--<td>I sell my car. Do you want to buy it?</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-danger w-300">Rejected</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>--}}
                                                {{--<a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>3</td>--}}
                                            {{--<td>01/11/2013</td>--}}
                                            {{--<td>Mike Johson</td>--}}
                                            {{--<td>I like this shirt. Quick delivery. </td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-info w-300">Pending</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>--}}
                                                {{--<a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>4</td>--}}
                                            {{--<td>25/10/2013</td>--}}
                                            {{--<td>Amanda Taping</td>--}}
                                            {{--<td>Love it. </td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-success w-300">Approved</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>--}}
                                                {{--<a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td>5</td>--}}
                                            {{--<td>20/10/2013</td>--}}
                                            {{--<td>John Johnson</td>--}}
                                            {{--<td>Beautiful shirt</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<span class="label label-success w-300">Approved</span>--}}
                                            {{--</td>--}}
                                            {{--<td class="text-center">--}}
                                                {{--<a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>--}}
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
        <div class="row">
            <div class="col-md-12 m-t-20 m-b-40 align-center">
                <a href="{{ \Illuminate\Support\Facades\URL::previous() }}" class="btn btn-default m-r-10 m-t-10"><i class="fa fa-reply"></i> Cancelar</a>
                {{--<a href="ecommerce_products.html" class="btn btn-danger m-r-10 m-t-10"><i class="fa fa-times"></i> Delete Product</a>--}}
                <a href="#" title="save" class="btn btn-success m-t-10"
                   onclick="event.preventDefault();document.getElementById('formCreateProduto').submit();">
                    <i class="fa fa-check"></i> Salvar
                </a>
            </div>
        </div>

    </div>
@endsection