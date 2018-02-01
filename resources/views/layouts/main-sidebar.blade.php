<nav id="sidebar">
    <div id="main-menu">
        <ul class="sidebar-nav">
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
            </li>
            <li class="active current hasSub">
                <a href="#"><i class="glyph-icon flaticon-shopping80"></i><span class="sidebar-text">eCommerce</span>
                    <span class="fa arrow"></span><span class="label label-danger pull-right m-r-20 w-300">New</span></a>
                <ul class="submenu collapse">
                    <li class="current">
                        <a href="ecommerce_dashboard.html"><span class="sidebar-text">Dashboard<span class="label label-dark pull-right">Hot</span></span></a>
                    </li>
                    <li>
                        <a href="ecommerce_products.html"><span class="sidebar-text">Products</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_product_view.html"><span class="sidebar-text">Product View</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_orders.html"><span class="sidebar-text">Orders</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_order_view.html"><span class="sidebar-text">Order View</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_invoice.html"><span class="sidebar-text">Invoice</span></a>
                    </li>
                    <li>
                        <a href="ecommerce_pricing.html"><span class="sidebar-text">Pricing Tables</span></a>
                    </li>
                    <li>
                        <a href="shopping_cart.html"><span class="sidebar-text">Shopping Cart<span class="label label-danger pull-right">New</span></span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="footer-widget">
        <div class="footer-gradient"></div>
        <div id="sidebar-charts">
            <div class="sidebar-charts-inner">
                <div class="sidebar-charts-left">
                    <div class="sidebar-chart-title">Orders</div>
                    <div class="sidebar-chart-number">1,256</div>
                </div>
                <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                    <span class="dynamicbar1"></span>
                </div>
            </div>
            <hr class="divider">
            <div class="sidebar-charts-inner">
                <div class="sidebar-charts-left">
                    <div class="sidebar-chart-title">Income</div>
                    <div class="sidebar-chart-number">$47,564</div>
                </div>
                <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                    <span class="dynamicbar2"></span>
                </div>
            </div>
            <hr class="divider">
            <div class="sidebar-charts-inner">
                <div class="sidebar-charts-left">
                    <div class="sidebar-chart-title">Visits</div>
                    <div class="sidebar-chart-number" id="number-visits">147,687</div>
                </div>
                <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                    <span class="dynamicbar3"></span>
                </div>
            </div>
        </div>
        <div class="sidebar-footer clearfix">
            <a class="pull-left" href="profil_edit.html" data-rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
            <a class="pull-left" href="lockscreen.html" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
            <a class="pull-left" href="login.html" data-rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
        </div>
    </div>
</nav>
