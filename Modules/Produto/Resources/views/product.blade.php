@extends('layouts.myapp')
@section('title','Artbazar - Produto')
@section('data-page','products')

@section('begin-page-styles')@endsection

@section('end-page-styles')
    <script src="{{ asset('assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
@endsection

@section('begin-page-scripts')
    <script src="{{ asset('assets/plugins/jquery-1.11.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/mmenu/js/jquery.mmenu.min.all.js') }}"></script>
    <script src="{{ asset('assets/plugins/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-sparkline/sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/breakpoints/breakpoints.js') }}"></script>
    <script src="{{ asset('assets/plugins/numerator/jquery-numerator.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.cookie.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/plugins/bootstrap-switch/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dynamic/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.tableTools.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/table.editable.js') }}"></script>
    <script src="{{ asset('assets/js/ecommerce.js') }}"></script>
@endsection
@section('end-page-scripts')
    <script src="{{ asset('assets/js/application.js') }}"></script>
@endsection

@section('main-content')
    <div id="main-content">
        <div class="m-b-20 clearfix">
            <div class="page-title pull-left">
                <h3 class="pull-left"><strong>Manage Products</strong></h3>
            </div>
            <div class="pull-right">
                <a href="{{ route('produto.create') }}" class="btn btn-success m-t-10"><i class="fa fa-plus p-r-10"></i>
                    Add a product</a>
            </div>
        </div>
        @if(session()->exists('msg'))
            <div class="">
                <div class="col-lg-12 alert alert-success">
                    <strong>{{session()->get('msg')}}</strong>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                <table id="products-table" class="table table-tools table-hover">
                                    <thead>
                                    <tr>
                                        <th style="min-width:70px">
                                            <strong>ID</strong>
                                        </th>
                                        <th>
                                            <strong>Product</strong>
                                        </th>
                                        <th>
                                            <strong>Reference</strong>
                                        </th>
                                        <th>
                                            <strong>Category</strong>
                                        </th>
                                        <th>
                                            <strong>Price</strong>
                                        </th>
                                        <th>
                                            <strong>Date added</strong>
                                        </th>
                                        <th style="width:10%;text-align:center">
                                            <strong>Stock</strong>
                                        </th>
                                        <th class="text-center">
                                            <strong>Sales</strong>
                                        </th>
                                        <th class="text-center">
                                            <strong>Status</strong>
                                        </th>
                                        <th class="text-center">
                                            <strong>Actions</strong>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($produtos->count() >0)
                                        @foreach($produtos as $p)
                                            <tr>
                                                <td>{{$p->id}}</td>
                                                <td>{{ $p->nome }}</td>
                                                <td>SV 456 878 647</td>
                                                <td>Women / Underwear</td>
                                                <td><strong>R$ {{ $p->preco }}</strong></td>
                                                <td>{{ $p->created_at }}</td>
                                                <td class="color-{{$p->qtd_estq > $p->qtd_estq_min ? 'sucess': 'danger' }}">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-{{$p->qtd_estq > $p->qtd_estq_min ? 'sucess': 'danger' }}"
                                                             data-aria-valuetransitiongoal="{{$p->qtd_estq}}">{{$p->qtd_estq}}</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="sparkline" data-sparkline-color="#7BB2B4"
                                                         data-sparkline-value="[13,14,16,15,4,14,20,14,12,16,11,17,19,16]"></div>
                                                </td>
                                                <td class="text-center">
                                                    <span class="label label-success w-300">Online</span>
                                                </td>
                                                <td class="text-center ">
                                                    <a href="ecommerce_product_view.html"
                                                       class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i>
                                                        Edit</a>
                                                    <a href="#" class="delete btn btn-sm btn-default"><i
                                                                class="fa fa-times-circle"></i> Remove</a>
                                                </td>
                                            </tr>

                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection