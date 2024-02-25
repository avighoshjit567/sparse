<!-- BEGIN: Header-->
<nav class="navbar navbar-expand navbar-light fixed-top header">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link navbar-icon sidebar-toggler" id="sidebar-toggler" href="#"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></li>
        <li class="nav-item dropdown d-none d-sm-inline-block"><a class="nav-link dropdown-toggle megamenu-link" href="#" data-toggle="dropdown"><span>Apps<i class="ti-angle-down arrow ml-2"></i></span></a>
            <div class="dropdown-menu nav-megamenu" style="min-width: 400px">
                <div class="row m-0">
                    {{-- <div class="col-6">
                        <a class="mega-menu-item" href="#"><i class="ft-activity item-badge mb-4"></i>
                            <h5 class="mb-2">Activity</h5>
                            <div class="text-muted font-12">Lorem Ipsum dolar.</div>
                        </a>
                    </div> --}}
                    <div class="col-12">
                        <a class="mega-menu-item bg-primary text-white" href="{{ route('home') }}"><i class="ft-globe item-badge mb-4 text-white"></i>
                            <h5 class="mb-2">Website Homepage</h5>
                            <div class="text-white font-12">Goto Website</div>
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link navbar-icon" href="javascript:;" data-toggle="modal" data-target="#search-modal"><i class="ft-search"></i></a></li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle navbar-icon" data-toggle="dropdown" href="#"><i class="ft-bell position-relative"></i><span class="notify-signal bg-primary"></span></a>
            <div class="dropdown-menu dropdown-menu-right pt-0" style="min-width: 350px">
                <div class="py-4 px-3 text-center text-white mb-3" style="background-color: #2c2f48;">
                    <h5 class="m-0">7 New Notifications</h5>
                </div>
                <div class="custom-scroll position-relative mb-3" style="height:320px;">
                    <div class="list-group list-group-flush"><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                            <div class="media align-items-center"><i class="ti-shopping-cart text-center font-20 text-primary mr-3" style="width: 40px"></i>
                                <div class="media-body">
                                    <div class="flexbox">
                                        <h6 class="mb-0 font-weight-bold">2 New Orders</h6>
                                        <div class="text-muted font-13">15 min</div>
                                    </div>
                                    <div class="font-13 text-muted">Lorem ipsum dolor sit amet ut.</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="px-3 py-2 text-center"><a class="hover-link font-13" href="javascript:;">view all</a></div>
            </div>
        </li>
        <li class="nav-divider"></li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle no-arrow d-inline-flex align-items-center" data-toggle="dropdown" href="#"><span class="d-none d-sm-inline-block mr-2">{{ Auth::user()->name }}</span><span class="position-relative d-inline-block"><img class="rounded-circle" src="{{ URL::to('admin/assets/img/users/admin-image.png') }}" alt="image" width="36" /><span class="badge-point badge-success avatar-badge"></span></span></a>
            <div class="dropdown-menu dropdown-menu-right pt-0 pb-4" style="min-width: 280px;">
                <div class="p-4 mb-4 media align-items-center text-white" style="background-color: #2c2f48;"><img class="rounded-circle mr-3" src="{{ URL::to('admin/assets/img/users/admin-image.png') }}" alt="image" width="55" />
                    <div class="media-body">
                        <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                        <div class="font-13">Administrator</div>
                    </div>
                </div><a class="dropdown-item d-flex align-items-center" href="#"><i class="ft-user mr-3 font-18 text-muted"></i>Profile</a><a class="dropdown-item d-flex align-items-center" href="#"><i class="ft-message-square mr-3 font-18 text-muted"></i>Messages</a><a class="dropdown-item d-flex align-items-center" href="#"><i class="ft-settings mr-3 font-18 text-muted"></i>Settings</a>
                <div class="dropdown-divider my-3"></div>
                <div class="mx-4"><a class="btn btn-link p-0" href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="btn-icon"><i class="ft-power mr-2 font-18"></i>Logout</span></a></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
        {{-- <li><a class="nav-link navbar-icon quick-sidebar-toggler" href="javascript:;"><span class="ti-align-right"></span></a></li> --}}
    </ul>
</nav><!-- END: Header-->
