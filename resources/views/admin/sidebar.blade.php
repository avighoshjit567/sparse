<!-- BEGIN: Sidebar-->
            <div class="page-sidebar custom-scroll" id="sidebar">
                <div class="sidebar-header"><a class="sidebar-brand" href="{{ URL::to('dashboard')}}">SPARSE</a><a class="sidebar-brand-mini" href="index.html">Rd</a><span class="sidebar-points"><span class="badge badge-success badge-point mr-2"></span><span class="badge badge-danger badge-point mr-2"></span><span class="badge badge-warning badge-point"></span></span></div>
                <ul class="sidebar-menu metismenu">
                    <li class="heading"><span>DASHBOARDS</span></li>
                    <li class="mm-active"><a href="{{ URL::to('/dashboard') }}">
                        <i class="sidebar-item-icon ft-home"></i><span class="nav-label">Dashboards</span></a>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-anchor"></i><span class="nav-label">User</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <li><a href="{{ route('view') }}">User</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-anchor"></i><span class="nav-label">Setting</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <li><a href="{{ route('company-setting') }}">Company Setting</a></li>
                            <li><a href="{{ route('slider') }}">Slider</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-anchor"></i><span class="nav-label">Products</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <li><a href="{{ route('category') }}">Category</a></li>
                            <li><a href="{{ route('brand') }}">Brand</a></li>
                            <li><a href="{{ route('unit') }}">Unit</a></li>
                            <li><a href="{{ route('size') }}">Size/Model</a></li>
                            <li><a href="{{ route('color') }}">Color</a></li>
                            <li><a href="{{ route('product') }}">Product</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-anchor"></i><span class="nav-label">Order</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <li><a href="{{ route('order-list') }}">Order List</a></li>
                            <li><a href="{{ route('order-details-list') }}">Order Details List</a></li>
                            <li><a href="{{ route('delivered-order-list') }}">Delivered Order List</a></li>
                            <li><a href="{{ route('cancelled-order-list') }}">Cancelled Order List</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- END: Sidebar-->
