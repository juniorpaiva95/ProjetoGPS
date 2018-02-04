<nav id="sidebar">
    <div id="main-menu">
        <ul class="sidebar-nav">
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
            </li>
            <li class="{{ setActive('home') }} hasSub">
                <a href="#"><i class="glyph-icon flaticon-shopping80"></i><span class="sidebar-text">Loja</span>
                    <span class="fa arrow"></span><span class="label label-danger pull-right m-r-20 w-300">New</span></a>
                <ul class="submenu collapse">
                    <li class="{{ setActive('produto') }}">
                        <a href="{{route('produto.index')}}"><span class="sidebar-text">Produtos</span></a>
                    </li>
                    <li class="{{ setActive('carrinho') }}">
                        <a href="{{route('carrinho.index')}}"><span class="sidebar-text">Meu carrinho</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    {{--<div class="footer-widget">--}}
        {{--<div class="footer-gradient"></div>--}}
        {{--<div id="sidebar-charts">--}}
            {{--<div class="sidebar-charts-inner">--}}
                {{--<div class="sidebar-charts-left">--}}
                    {{--<div class="sidebar-chart-title">Orders</div>--}}
                    {{--<div class="sidebar-chart-number">1,256</div>--}}
                {{--</div>--}}
                {{--<div class="sidebar-charts-right" data-type="bar" data-color="theme">--}}
                    {{--<span class="dynamicbar1"></span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<hr class="divider">--}}
            {{--<div class="sidebar-charts-inner">--}}
                {{--<div class="sidebar-charts-left">--}}
                    {{--<div class="sidebar-chart-title">Income</div>--}}
                    {{--<div class="sidebar-chart-number">$47,564</div>--}}
                {{--</div>--}}
                {{--<div class="sidebar-charts-right" data-type="bar" data-color="theme">--}}
                    {{--<span class="dynamicbar2"></span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<hr class="divider">--}}
            {{--<div class="sidebar-charts-inner">--}}
                {{--<div class="sidebar-charts-left">--}}
                    {{--<div class="sidebar-chart-title">Visits</div>--}}
                    {{--<div class="sidebar-chart-number" id="number-visits">147,687</div>--}}
                {{--</div>--}}
                {{--<div class="sidebar-charts-right" data-type="bar" data-color="theme">--}}
                    {{--<span class="dynamicbar3"></span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="sidebar-footer clearfix">--}}
            {{--<a class="pull-left" href="profil_edit.html" data-rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>--}}
            {{--<a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>--}}
            {{--<a class="pull-left" href="lockscreen.html" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>--}}
            {{--<a class="pull-left" href="login.html" data-rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}
</nav>
