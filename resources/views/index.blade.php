<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="admin template, angular admin template, bootstrap admin template, modern admin template, modern design admin template, dashboard template, responsive admin template, angular web app, crypto dashboard, bitcoin dashboard">
    <title>Bootstrap &amp; Angular admin template + crypto dashboard - modern design admin | Dashboard</title><!-- GLOBAL VENDORS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/feather-icons/feather.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/themify-icons/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" /><!-- PAGE LEVEL VENDORS-->
    <link href="{{ URL::to('admin/assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" /><!-- THEME STYLES-->
    <link href="{{ URL::to('admin/assets/css/app.min.css') }}" rel="stylesheet" /><!-- PAGE LEVEL STYLES-->
    <style>
        .tasks-list>li {
        padding-right: 0;
        padding-left: 0;
        padding: .8rem 1.5rem;
        }
        .task-actions {
        display: none;
        position: absolute;
        right: 20px;
        top: 50%;
        margin-top: -15px;
        }
        .task-actions>a.dropdown-toggle {
        color: #aaa;
        height: 30px;
        width: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        }
        .task-info {
        padding-left: 34px;
        }
        .tasks-list>li .checkbox input:checked~span {
        text-decoration: line-through;
        }
        .tasks-list>li:hover .task-actions {
        display: block
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="content-wrapper">
            <!-- BEGIN: Sidebar-->
            <div class="page-sidebar custom-scroll" id="sidebar">
                <div class="sidebar-header"><a class="sidebar-brand" href="index.html">Reidius</a><a class="sidebar-brand-mini" href="index.html">Rd</a><span class="sidebar-points"><span class="badge badge-success badge-point mr-2"></span><span class="badge badge-danger badge-point mr-2"></span><span class="badge badge-warning badge-point"></span></span></div>
                <ul class="sidebar-menu metismenu">
                    <li class="heading"><span>DASHBOARDS</span></li>
                    <li class="mm-active"><a href="javascript:;"><i class="sidebar-item-icon ft-home"></i><span class="nav-label">Dashboards</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a class="mm-active" href="index.html">Dashboard v1</a></li>
                            <li><a href="dashboard-2.html">Dashboard v2</a></li>
                            <li><a href="dashboard-3.html">Dashboard v3</a></li>
                            <li><a href="dashboard-ecommerce.html">eCommerce Analytics</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-trending-up"></i><span class="nav-label">Crypto</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="crypto-dashboard-1.html">Dashboard v1</a></li>
                            <li><a href="crypto-dashboard-2.html">Dashboard v2</a></li>
                            <li><a href="crypto-market.html">Market</a></li>
                            <li><a href="crypto-buy-sell.html">Buy/Sell</a></li>
                            <li><a href="crypto-wallet.html">Wallet</a></li>
                        </ul>
                    </li>
                    <li><a href="mailbox.html"><i class="sidebar-item-icon ft-mail"></i><span class="nav-label">Mailbox</span></a></li>
                    <li><a href="calendar.html"><i class="sidebar-item-icon ft-calendar"></i><span class="nav-label">Calendar</span></a></li>
                    <li><a href="contacts.html"><i class="sidebar-item-icon ft-users"></i><span class="nav-label">Contacts</span></a></li>
                    <li class="heading"><span>UI INTERFACE</span></li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-anchor"></i><span class="nav-label">Basic UI</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="ui-colors.html">State Colors</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-button-group.html">Button Group</a></li>
                            <li><a href="javascript:;"><span class="nav-label">Tabs</span><i class="arrow la la-angle-right"></i></a><!-- 3-rd level-->
                                <ul class="nav-3-level">
                                    <li><a href="ui-tabs-line.html">Line tabs</a></li>
                                    <li><a href="ui-pills.html">Pills</a></li>
                                    <li><a href="ui-tabs-bootstrap.html">Bootstrap tabs</a></li>
                                </ul>
                            </li>
                            <li><a href="ui-badges.html">Badges</a></li>
                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a href="ui-list-group.html">List Group</a></li>
                            <li><a href="ui-media-list.html">Media list</a></li>
                            <li><a href="ui-modal.html">Modal</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-progress.html">Progress</a></li>
                            <li><a href="ui-tooltips.html">Tooltips</a></li>
                            <li><a href="ui-popovers.html">Popovers</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-layers"></i><span class="nav-label">Cards</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="cards-basic.html">Basic Cards</a></li>
                            <li><a href="card-actions.html">Card Actions</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-package"></i><span class="nav-label">Extra Components</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="toastr-notifications.html">Toastr Notifications</a></li>
                            <li><a href="sweetalert2.html">SweetAlert2</a></li>
                            <li><a href="idle-timer.html">Idle timer</a></li>
                            <li><a href="session-timeout.html">Session Timeout</a></li>
                            <li><a href="tree-view.html">Tree View</a></li>
                            <li><a href="masonry.html">Masonry</a></li>
                            <li><a href="clipboard.html">Clipboard</a></li>
                            <li><a href="nestable-list.html">Nestable list</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-grid"></i><span class="nav-label">Tables</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="table-basic.html">Basic Tables</a></li>
                            <li><a href="datatables.html">DataTables</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-map"></i><span class="nav-label">Maps</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="google-maps.html">Google maps</a></li>
                            <li><a href="vector-maps.html">Vector maps</a></li>
                            <li><a href="datamaps.html">Datamaps</a></li>
                        </ul>
                    </li>
                    <li><a href="icons.html"><i class="sidebar-item-icon ft-layers"></i><span class="nav-label">Icons</span></a></li>
                    <li class="heading"><span>FORMS</span></li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-edit"></i><span class="nav-label">Form Controls</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="form-line-inputs.html">Line Inputs</a></li>
                            <li><a href="form-bootstrap-inputs.html">Bootstrap Inputs</a></li>
                            <li><a href="form-switch.html">Switch</a></li>
                            <li><a href="form-checkbox-radio.html">Checkbox &amp; Radio</a></li>
                            <li><a href="form-input-groups.html">Input Groups</a></li>
                        </ul>
                    </li>
                    <li><a href="form-layouts.html"><i class="sidebar-item-icon ft-edit"></i><span class="nav-label">Form Layouts</span></a></li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-edit"></i><span class="nav-label">Form Widgets</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="summernote-editor.html">Summernote Editor</a></li>
                            <li><a href="form-select2.html">Select2</a></li>
                            <li><a href="form-bootstrap-select.html">Bootstrap Select</a></li>
                            <li><a href="form-dual-listbox.html">Dual Listbox</a></li>
                            <li><a href="form-multiselect.html">Multiselect</a></li>
                            <li><a href="form-datepicker.html">Datepicker</a></li>
                            <li><a href="form-datetimepicker.html">Datetimepicker</a></li>
                            <li><a href="form-daterangepicker.html">Daterangepicker</a></li>
                            <li><a href="form-timepicker.html">Timepicker</a></li>
                            <li><a href="form-ion-range-slider.html">Ion Range Slider</a></li>
                            <li><a href="form-tags-input.html">Tags Input</a></li>
                            <li><a href="form-touchspin.html">Touchspin</a></li>
                            <li><a href="form-maxlength.html">Maxlength</a></li>
                            <li><a href="form-bootstrap-colorpicker.html">Bootstrap Colorpicker</a></li>
                            <li><a href="form-jquery-minicolors.html">jQuery MiniColors</a></li>
                        </ul>
                    </li>
                    <li><a href="form-input-masks.html"><i class="sidebar-item-icon ft-edit"></i><span class="nav-label">Form input masks</span></a></li>
                    <li><a href="form-validation.html"><i class="sidebar-item-icon ft-edit"></i><span class="nav-label">Form Validation</span></a></li>
                    <li><a href="form-dropzone.html"><i class="sidebar-item-icon ft-edit"></i><span class="nav-label">Dropzone File Upload</span></a></li>
                    <li><a href="image-cropping.html"><i class="sidebar-item-icon ft-edit"></i><span class="nav-label">Image Cropping</span></a></li>
                    <li><a href="form-autocomplete.html"><i class="sidebar-item-icon ft-edit"></i><span class="nav-label">Autocomplete</span></a></li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-edit"></i><span class="nav-label">Form Wizard</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="form-wizard-circle.html">Circle Steps</a></li>
                            <li><a href="form-wizard-pill.html">Pill Steps</a></li>
                        </ul>
                    </li>
                    <li class="heading"><span>CHARTS</span></li>
                    <li><a href="apexcharts.html"><i class="sidebar-item-icon ft-bar-chart"></i><span class="nav-label">Apex Charts</span></a></li>
                    <li><a href="chartjs.html"><i class="sidebar-item-icon ft-bar-chart"></i><span class="nav-label">Chart.js</span></a></li>
                    <li><a href="charts-flot.html"><i class="sidebar-item-icon ft-bar-chart"></i><span class="nav-label">Flot Charts</span></a></li>
                    <li><a href="charts-morris.html"><i class="sidebar-item-icon ft-bar-chart"></i><span class="nav-label">Morris Charts</span></a></li>
                    <li><a href="charts-c3.html"><i class="sidebar-item-icon ft-bar-chart"></i><span class="nav-label">C3 Charts</span></a></li>
                    <li><a href="charts-sparkline.html"><i class="sidebar-item-icon ft-bar-chart"></i><span class="nav-label">Sparkline Charts</span></a></li>
                    <li class="heading"><span>PAGES &amp; APPS</span></li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-lock"></i><span class="nav-label">Authentication</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login-2.html">Login v2</a></li>
                            <li><a href="login-3.html">Login v3</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                            <li><a href="forgot-password.html">Forgot password</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-sliders"></i><span class="nav-label">Pricing Tables</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="pricing-table-1.html">Pricing Table v1</a></li>
                            <li><a href="pricing-table-2.html">Pricing Table v2</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-user"></i><span class="nav-label">Profiles</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="profile-1.html">Profile v1</a></li>
                            <li><a href="profile-2.html">Profile v2</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-help-circle"></i><span class="nav-label">FAQS</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="faq-1.html">FAQ v1</a></li>
                            <li><a href="faq-2.html">FAQ v2</a></li>
                            <li><a href="faq-3.html">FAQ v3</a></li>
                        </ul>
                    </li>
                    <li><a href="knowledge-base.html"><i class="sidebar-item-icon ft-briefcase"></i><span class="nav-label">Knowledge Base</span></a></li>
                    <li><a href="search.html"><i class="sidebar-item-icon ft-search"></i><span class="nav-label">Search Results</span></a></li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-activity"></i><span class="nav-label">Timelines</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="timeline-lists.html">Timeline Lists</a></li>
                            <li><a href="timeline-vertical.html">Timeline Vertical</a></li>
                            <li><a href="timeline-horizontal.html">Timeline Horizontal</a></li>
                        </ul>
                    </li>
                    <li><a href="invoice.html"><i class="sidebar-item-icon ft-file-text"></i><span class="nav-label">Invoice</span></a></li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-alert-triangle"></i><span class="nav-label">Errors</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="error-404.html">404 error</a></li>
                            <li><a href="error-500.html">500 error</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;"><i class="sidebar-item-icon ft-anchor"></i><span class="nav-label">Menu Levels</span><i class="arrow la la-angle-right"></i></a>
                        <ul class="nav-2-level">
                            <!-- 2-nd level-->
                            <li><a href="javascript:;">Level 2</a></li>
                            <li><a href="javascript:;"><span class="nav-label">Level 2</span><i class="arrow la la-angle-right"></i></a><!-- 3-rd level-->
                                <ul class="nav-3-level">
                                    <li><a href="javascript:;">Level 3</a></li>
                                    <li><a href="javascript:;">Level 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- END: Sidebar-->
            <!-- BEGIN: Content-->
            <div class="content-area">
                <!-- BEGIN: Header-->
                <nav class="navbar navbar-expand navbar-light fixed-top header">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link navbar-icon sidebar-toggler" id="sidebar-toggler" href="#"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></li>
                        <li class="nav-item dropdown d-none d-sm-inline-block"><a class="nav-link dropdown-toggle megamenu-link" href="#" data-toggle="dropdown"><span>Apps<i class="ti-angle-down arrow ml-2"></i></span></a>
                            <div class="dropdown-menu nav-megamenu" style="min-width: 400px">
                                <div class="row m-0">
                                    <div class="col-6"><a class="mega-menu-item" href="#"><i class="ft-activity item-badge mb-4"></i>
                                            <h5 class="mb-2">Activity</h5>
                                            <div class="text-muted font-12">Lorem Ipsum dolar.</div></a></div>
                                    <div class="col-6"><a class="mega-menu-item bg-primary text-white" href="#"><i class="ft-globe item-badge mb-4 text-white"></i>
                                            <h5 class="mb-2">Customers</h5>
                                            <div class="text-white font-12">Lorem Ipsum dolar.</div></a></div>
                                    <div class="col-6"><a class="mega-menu-item" href="#"><i class="ft-layers item-badge mb-4"></i>
                                            <h5 class="mb-2">My Projects</h5>
                                            <div class="text-muted font-12">Lorem Ipsum dolar.</div></a></div>
                                    <div class="col-6"><a class="mega-menu-item" href="#"><i class="ft-shopping-cart item-badge mb-4"></i>
                                            <h5 class="mb-2">My Orders</h5>
                                            <div class="text-muted font-12">Lorem Ipsum dolar.</div></a></div>
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
                                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                                            <div class="media align-items-center"><i class="ti-server text-center font-20 text-primary mr-3" style="width: 40px"></i>
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <h6 class="mb-0 font-weight-bold">Server overloaded 91%</h6>
                                                        <div class="text-muted font-13">40 min</div>
                                                    </div>
                                                    <div class="font-13 text-muted">Lorem ipsum dolor sit amet ut.</div>
                                                </div>
                                            </div>
                                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                                            <div class="media align-items-center"><i class="ti-support text-center font-20 text-primary mr-3" style="width: 40px"></i>
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <h6 class="mb-0 font-weight-bold">New support request</h6>
                                                        <div class="text-muted font-13">1 hrs</div>
                                                    </div>
                                                    <div class="font-13 text-muted">Lorem ipsum dolor sit amet ut.</div>
                                                </div>
                                            </div>
                                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                                            <div class="media align-items-center"><i class="ti-info-alt text-center font-20 text-primary mr-3" style="width: 40px"></i>
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <h6 class="mb-0 font-weight-bold">System Warning</h6>
                                                        <div class="text-muted font-13">2 hrs</div>
                                                    </div>
                                                    <div class="font-13 text-muted">Lorem ipsum dolor sit amet ut.</div>
                                                </div>
                                            </div>
                                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                                            <div class="media align-items-center"><i class="ti-email text-center font-20 text-primary mr-3" style="width: 40px"></i>
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <h6 class="mb-0 font-weight-bold">You have 2 new messages</h6>
                                                        <div class="text-muted font-13">2 hrs</div>
                                                    </div>
                                                    <div class="font-13 text-muted">Lorem ipsum dolor sit amet ut.</div>
                                                </div>
                                            </div>
                                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                                            <div class="media align-items-center"><i class="ti-user text-center font-20 text-primary mr-3" style="width: 40px"></i>
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <h6 class="mb-0 font-weight-bold">24 new users registered</h6>
                                                        <div class="text-muted font-13">2 hrs</div>
                                                    </div>
                                                    <div class="font-13 text-muted">Lorem ipsum dolor sit amet ut.</div>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="px-3 py-2 text-center"><a class="hover-link font-13" href="javascript:;">view all</a></div>
                            </div>
                        </li>
                        <li class="nav-divider"></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle no-arrow d-inline-flex align-items-center" data-toggle="dropdown" href="#"><span class="d-none d-sm-inline-block mr-2">John Due</span><span class="position-relative d-inline-block"><img class="rounded-circle" src="assets/img/users/admin-image.png" alt="image" width="36" /><span class="badge-point badge-success avatar-badge"></span></span></a>
                            <div class="dropdown-menu dropdown-menu-right pt-0 pb-4" style="min-width: 280px;">
                                <div class="p-4 mb-4 media align-items-center text-white" style="background-color: #2c2f48;"><img class="rounded-circle mr-3" src="assets/img/users/admin-image.png" alt="image" width="55" />
                                    <div class="media-body">
                                        <h5 class="mb-1">Jonathan Due</h5>
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
                        <li><a class="nav-link navbar-icon quick-sidebar-toggler" href="javascript:;"><span class="ti-align-right"></span></a></li>
                    </ul>
                </nav><!-- END: Header-->

                <div class="page-content fade-in-up">
                    <!-- BEGIN: Page heading-->
                    <div class="page-heading">
                        <div class="page-breadcrumb">
                            <h1 class="page-title">Dashboard</h1>
                        </div>
                        <div class="subheader_daterange" id="subheader_daterange"><span class="subheader-daterange-label"><span class="subheader-daterange-title"></span><span class="subheader-daterange-date"></span></span><button class="btn btn-floating btn-sm rounded-0" type="button"><i class="ti-calendar"></i></button></div>
                    </div><!-- BEGIN: Page content-->
                    <div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-5">
                                            <div>
                                                <h5 class="box-title mb-2">Visitors Analytics</h5>
                                                <div class="text-muted font-13">Simple Subtitle</div>
                                            </div>
                                            <ul class="nav nav-pills nav-pills-links d-none d-sm-flex">
                                                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#pill-1">Weekly</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#pill-2">Monthly</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#pill-3">Yearly</a></li>
                                            </ul>
                                        </div>
                                        <div id="line_chart_1"></div>
                                        <div class="flexbox flex-wrap mt-5">
                                            <div class="d-flex mb-4 mb-sm-0">
                                                <div class="pr-4 pr-sm-5">
                                                    <h6 class="mb-2 font-15 text-muted">New Users</h6>
                                                    <div class="h4 mb-0 text-primary">+358</div>
                                                </div>
                                                <div class="pl-0 pl-sm-5">
                                                    <h6 class="mb-2 font-15 text-muted">Total Sales</h6>
                                                    <div class="h4 mb-0 text-danger">+$12.050</div>
                                                </div>
                                            </div><button class="btn btn-primary">Print Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-5">
                                            <div>
                                                <h5 class="box-title mb-2">Market info</h5>
                                                <div class="text-muted font-13">Simple Subtitle</div>
                                            </div><a class="text-muted" href="#"><i class="ti-info-alt"></i></a>
                                        </div>
                                        <div class="mb-5"><canvas id="donut_chart_1" style="height: 220px"></canvas></div>
                                        <div>
                                            <div class="flexbox mb-3">
                                                <div><span class="badge-point badge-warning rounded-0 mr-2"></span><span>All Sales</span></div><span class="h6 mb-0 font-16">+28%</span>
                                            </div>
                                            <div class="flexbox mb-3">
                                                <div><span class="badge-point badge-primary rounded-0 mr-2"></span><span>In-Store Sales</span></div><span class="h6 mb-0 font-16">$9570</span>
                                            </div>
                                            <div class="flexbox mb-2">
                                                <div><span class="badge-point badge-danger rounded-0 mr-2"></span><span>Online Sales</span></div><span class="h6 mb-0 font-16">$3540</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="box-title">Orders Distribution</h5>
                                        <div id="bar_gradient"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="box-title mb-0">Traffic Source</h5><a class="text-muted" href="#">View All</a>
                                        </div>
                                        <div class="table-responsive mb-4">
                                            <table class="table cols-align-middle">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Sales</th>
                                                        <th>Traffic</th>
                                                        <th>%</th>
                                                        <th>Rate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Direct</td>
                                                        <td>$4200</td>
                                                        <td>2.4K</td>
                                                        <td><span class="badge badge-primary">4.25</span></td>
                                                        <td class="text-success d-flex align-items-center"><i class="ft-arrow-up-right mr-2 font-20"></i>22%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ads</td>
                                                        <td>$3800</td>
                                                        <td>2.2K</td>
                                                        <td><span class="badge badge-primary">2.59</span></td>
                                                        <td class="text-danger d-flex align-items-center"><i class="ft-arrow-down-right mr-2 font-20"></i>12%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Affiliates</td>
                                                        <td>$3150</td>
                                                        <td>1.3K</td>
                                                        <td><span class="badge badge-primary">2.01</span></td>
                                                        <td class="text-success d-flex align-items-center"><i class="ft-arrow-up-right mr-2 font-20"></i>15%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Social</td>
                                                        <td>$2240</td>
                                                        <td>0.8K</td>
                                                        <td><span class="badge badge-danger">1.59</span></td>
                                                        <td class="text-danger d-flex align-items-center"><i class="ft-arrow-down-right mr-2 font-20"></i>8%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Google</td>
                                                        <td>$2100</td>
                                                        <td>0.6K</td>
                                                        <td><span class="badge badge-primary">1.25</span></td>
                                                        <td class="text-success d-flex align-items-center"><i class="ft-arrow-up-right mr-2 font-20"></i>22%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Yandex</td>
                                                        <td>$1800</td>
                                                        <td>0.5K</td>
                                                        <td><span class="badge badge-danger">1.12</span></td>
                                                        <td class="text-danger d-flex align-items-center"><i class="ft-arrow-down-right mr-2 font-20"></i>12%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h5 class="box-title mb-2">Social Accounts</h5>
                                                <div class="text-muted font-13">Simple Subtitle</div>
                                            </div><a class="text-muted font-18" href="#" data-toggle="tooltip" title="" data-original-title="Add New Account"><i class="ti-plus"></i></a>
                                        </div>
                                        <ul class="list-unstyled media-list-divider">
                                            <li class="media py-3 align-items-center"><a class="btn btn-sm btn-facebook btn-floating mr-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                                <div class="media-body flexbox">
                                                    <div>
                                                        <h6>Facebook</h6>
                                                        <div class="text-muted">Profile John Due</div>
                                                    </div><label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
                                                </div>
                                            </li>
                                            <li class="media py-3 align-items-center"><a class="btn btn-sm btn-dribbble btn-floating mr-3" href="#"><i class="fab fa-dribbble"></i></a>
                                                <div class="media-body flexbox">
                                                    <div>
                                                        <h6>Dribbble</h6>
                                                        <div class="text-muted">Profile John Due</div>
                                                    </div><label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
                                                </div>
                                            </li>
                                            <li class="media py-3 align-items-center"><a class="btn btn-sm btn-twitter btn-floating mr-3" href="#"><i class="fab fa-twitter"></i></a>
                                                <div class="media-body flexbox">
                                                    <div>
                                                        <h6>Twitter</h6>
                                                        <div class="text-muted">Profile John Due</div>
                                                    </div><label class="ui-switch switch-solid"><input type="checkbox"><span></span></label>
                                                </div>
                                            </li>
                                            <li class="media py-3 align-items-center"><a class="btn btn-sm btn-linkedin btn-floating mr-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <div class="media-body flexbox">
                                                    <div>
                                                        <h6>Linkedin</h6>
                                                        <div class="text-muted">Profile John Due</div>
                                                    </div><label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
                                                </div>
                                            </li>
                                            <li class="media py-3 align-items-center"><a class="btn btn-sm btn-youtube btn-floating mr-3" href="#"><i class="fab fa-youtube"></i></a>
                                                <div class="media-body flexbox">
                                                    <div>
                                                        <h6>Youtube</h6>
                                                        <div class="text-muted">Profile John Due</div>
                                                    </div><label class="ui-switch switch-solid"><input type="checkbox"><span></span></label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h5 class="box-title mb-0">Comments</h5>
                                                <div class="text-muted font-13"></div>
                                            </div><a class="text-muted" href="#">View All</a>
                                        </div>
                                        <div class="card-fullwidth-block">
                                            <div class="list-group list-group-flush"><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                                                    <div class="media">
                                                        <div class="mr-3 position-relative"><img class="rounded-circle align-self-center" src="assets/img/users/u1.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                                        <div class="media-body">
                                                            <div class="flexbox mb-2">
                                                                <h6 class="mb-0">John Due</h6>
                                                                <div class="text-muted font-13">2 days ago</div>
                                                            </div>
                                                            <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                                        </div>
                                                    </div>
                                                </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                                                    <div class="media">
                                                        <div class="mr-3 position-relative"><img class="rounded-circle align-self-center" src="assets/img/users/u2.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                                        <div class="media-body">
                                                            <div class="flexbox mb-2">
                                                                <h6 class="mb-0">John Due</h6>
                                                                <div class="text-muted font-13">2 days ago</div>
                                                            </div>
                                                            <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                                        </div>
                                                    </div>
                                                </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                                                    <div class="media">
                                                        <div class="mr-3 position-relative"><img class="rounded-circle align-self-center" src="assets/img/users/u3.jpg" alt="image" width="40" /><span class="badge-point badge-success avatar-badge"></span></div>
                                                        <div class="media-body">
                                                            <div class="flexbox mb-2">
                                                                <h6 class="mb-0">John Due</h6>
                                                                <div class="text-muted font-13">2 days ago</div>
                                                            </div>
                                                            <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                                        </div>
                                                    </div>
                                                </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                                                    <div class="media">
                                                        <div class="mr-3 position-relative"><img class="rounded-circle align-self-center" src="assets/img/users/u5.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                                        <div class="media-body">
                                                            <div class="flexbox mb-2">
                                                                <h6 class="mb-0">John Due</h6>
                                                                <div class="text-muted font-13">2 days ago</div>
                                                            </div>
                                                            <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-5">
                                            <div>
                                                <h5 class="box-title mb-2">Earnings</h5>
                                                <div class="text-muted font-13 mb-4">14.12 - 21.12</div>
                                                <div class="h2 mb-0 text-primary">+$7450.40</div>
                                            </div><i class="ti-arrow-up font-30 text-success"></i>
                                        </div>
                                        <div><canvas id="stacked_bars" style="height:250px;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="box-title mb-5">Sales By Country</h5>
                                <div class="row">
                                    <div class="col-md-8 mb-5 mb-md-0">
                                        <div id="world_map" style="height: 340px;"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-unstyled">
                                            <li class="flexbox mb-4"><span><img class="mr-3" src="assets/img/flags/us.png" width="30" alt="">USA</span><span class="h6 mb-0">$4200</span></li>
                                            <li class="flexbox mb-4"><span><img class="mr-3" src="assets/img/flags/India.png" width="30" alt="">India</span><span class="h6 mb-0">$3820</span></li>
                                            <li class="flexbox mb-4"><span><img class="mr-3" src="assets/img/flags/Brazil.png" width="30" alt="">Brazil</span><span class="h6 mb-0">$3350</span></li>
                                            <li class="flexbox mb-4"><span><img class="mr-3" src="assets/img/flags/France.png" width="30" alt="">France</span><span class="h6 mb-0">$2400</span></li>
                                            <li class="flexbox mb-4"><span><img class="mr-3" src="assets/img/flags/uk.png" width="30" alt="">United Kingdom</span><span class="h6 mb-0">$1900</span></li>
                                            <li class="flexbox mb-4"><span><img class="mr-3" src="assets/img/flags/Germany.png" width="30" alt="">Germany</span><span class="h6 mb-0">$1620</span></li>
                                        </ul>
                                        <div class="text-center"><a class="btn btn-outline-primary btn-sm" href="#">View All</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-4 pb-3"><i class="ti-briefcase text-muted font-40"></i></div>
                                        <h5 class="mb-3">Manage Projects</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore neque.</p>
                                        <div><a class="d-inline-flex align-items-center text-danger" href="javascript:;"><span class="mr-2">View More</span><i class="fas fa-angle-right font-16"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-4 pb-3"><i class="ti-announcement text-muted font-40"></i></div>
                                        <h5 class="mb-3">Manage Projects</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore neque.</p>
                                        <div><a class="d-inline-flex align-items-center text-danger" href="javascript:;"><span class="mr-2">View More</span><i class="fas fa-angle-right font-16"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-4 pb-3"><i class="ti-world text-muted font-40"></i></div>
                                        <h5 class="mb-3">Manage Projects</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore neque.</p>
                                        <div><a class="d-inline-flex align-items-center text-danger" href="javascript:;"><span class="mr-2">View More</span><i class="fas fa-angle-right font-16"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h5 class="mb-2">Daily Feeds</h5>
                                                <div class="text-muted font-13">From 14.12 - 21.12</div>
                                            </div><a class="text-muted" href="#"><i class="ti-more-alt"></i></a>
                                        </div>
                                        <div class="card-fullwidth-block p-4 mb-4 flexbox" style="background-color: #e9ecef;">
                                            <div class="font-18">You have 14 new feeds</div><a class="d-inline-flex align-items-center text-danger" href="#"><span class="mr-2">View More</span><i class="fas fa-angle-right font-16"></i></a>
                                        </div>
                                        <ul class="list-unstyled media-list-divider">
                                            <li class="media py-3">
                                                <div class="mr-3 position-relative"><img class="rounded-circle align-self-center" src="assets/img/users/u1.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div><strong>John Due</strong> liked on post <strong>Article Name</strong></div>
                                                        <div class="text-muted font-13 ml-3" style="min-width: 80px;">2 days ago</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media py-3">
                                                <div class="mr-3 position-relative"><img class="rounded-circle align-self-center" src="assets/img/users/u2.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div><strong>John Due</strong> commented on <strong>Article Name</strong></div>
                                                        <div class="text-muted font-13 ml-3" style="min-width: 80px;">2 days ago</div>
                                                    </div>
                                                    <div class="p-3 rounded" style="background-color: #e9ecef;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</div>
                                                </div>
                                            </li>
                                            <li class="media py-3">
                                                <div class="mr-3 position-relative"><img class="rounded-circle align-self-center" src="assets/img/users/u3.jpg" alt="image" width="40" /><span class="badge-point badge-success avatar-badge"></span></div>
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div><strong>John Due</strong> started following <strong>Eliza Francine</strong></div>
                                                        <div class="text-muted font-13 ml-3" style="min-width: 80px;">2 days ago</div>
                                                    </div>
                                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </li>
                                            <li class="media py-3">
                                                <div class="mr-3 position-relative"><img class="rounded-circle align-self-center" src="assets/img/users/u4.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div><strong>John Due</strong> add new review on <strong>Product</strong></div>
                                                        <div class="text-muted font-13 ml-3" style="min-width: 80px;">2 days ago</div>
                                                    </div>
                                                    <div class="mb-2"><span><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star-half text-warning"></i></span><span class="text-muted ml-2">for </span><strong class="font-weight-bold">design quality</strong></div>
                                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </li>
                                            <li class="media py-3">
                                                <div class="mr-3 position-relative"><img class="rounded-circle align-self-center" src="assets/img/users/u5.jpg" alt="image" width="40" /><span class="badge-point badge-success avatar-badge"></span></div>
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <div><strong>John Due</strong> started following <strong>Eliza Francine</strong></div>
                                                        <div class="text-muted font-13 ml-3" style="min-width: 80px;">2 days ago</div>
                                                    </div>
                                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                                    <div><a class="btn btn-primary btn-rounded btn-sm mr-2" href="#">View</a><a class="btn btn-outline-secondary btn-rounded btn-sm" href="#">Follow</a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="box-title mb-0">Your Activity</h5><a class="text-muted" href="#">View All</a>
                                        </div>
                                        <ul class="timeline timeline-default">
                                            <li class="timeline-item">2 Issue fixed<span class="font-13 text-muted ml-2">Just now</span></li>
                                            <li class="timeline-item"><span>15 New orders<span class="badge badge-primary badge-pill ml-2">important</span></span><span class="font-13 text-muted ml-2">5 mins</span></li>
                                            <li class="timeline-item">18 new orders sent<span class="font-13 text-muted ml-2">24 mins</span></li>
                                            <li class="timeline-item">15 New messages<span class="font-13 text-muted ml-2">45 mins</span></li>
                                            <li class="timeline-item">The invoice is ready<span class="font-13 text-muted ml-2">1 hrs</span></li>
                                            <li class="timeline-item"><span>Server Error<span class="badge badge-success badge-pill ml-2">resolved</span></span><span class="font-13 text-muted ml-2">2 hrs</span></li>
                                            <li class="timeline-item"><span>System Warning<a class="text-purple ml-2">Check</a></span><span class="font-13 text-muted ml-2">12:07</span></li>
                                            <li class="timeline-item">24 new users registered<span class="font-13 text-muted ml-2">12:30</span></li>
                                            <li class="timeline-item"><span>5 New Orders<span class="badge badge-warning badge-pill ml-2">important</span></span><span class="font-13 text-muted ml-2">13:45</span></li>
                                            <li class="timeline-item"><span class="flexbox">Production server up<i class="la la-arrow-circle-up font-18 ml-2 text-success"></i></span><span class="font-13 text-muted ml-2">1 days ago</span></li>
                                            <li class="timeline-item">Server overloaded 91%<span class="font-13 text-muted ml-2">2 days ago</span></li>
                                            <li class="timeline-item">Server error<span class="font-13 text-muted ml-2">2 days ago</span></li>
                                            <li class="timeline-item">2 Issue fixed<span class="font-13 text-muted ml-2">Just now</span></li>
                                            <li class="timeline-item"><span>15 New orders<span class="badge badge-primary badge-pill ml-2">important</span></span><span class="font-13 text-muted ml-2">5 mins</span></li>
                                            <li class="timeline-item">18 new orders sent<span class="font-13 text-muted ml-2">24 mins</span></li>
                                            <li class="timeline-item">15 New messages<span class="font-13 text-muted ml-2">45 mins</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h5 class="box-title mb-2">Tasks list</h5>
                                                <div class="text-muted font-13">Total 34 tasks</div>
                                            </div><button class="btn btn-floating btn-sm btn-danger" data-toggle="tooltip" title="Add New Task"><i class="ti-plus"></i></button>
                                        </div>
                                        <div class="card-fullwidth-block">
                                            <ul class="list-group list-group-flush tasks-list">
                                                <li class="list-group-item">
                                                    <div><label class="checkbox checkbox-danger checkbox-circle"><input type="checkbox"><span><span class="h6">Send message to John</span></span></label></div>
                                                    <div class="task-info mt-2 font-13"><i class="ti-time mr-2"></i>24 Dec 2018</div>
                                                    <div class="task-actions"><a class="text-muted" href="#"><i class="ti-pencil"></i></a><a class="text-danger" href="#"><i class="ti-close ml-2"></i></a></div>
                                                </li>
                                                <li class="list-group-item" style="background-color: #e9ecef;">
                                                    <div><label class="checkbox checkbox-danger checkbox-circle"><input type="checkbox" checked=""><span><span class="h6">Create Perfect Design</span></span></label></div>
                                                    <div class="task-info">
                                                        <div class="text-muted font-13">Lorem ipsum dolor sit amet.</div>
                                                        <div class="font-13 mt-2"><i class="ti-time mr-2"></i>24 Dec 2018</div>
                                                    </div>
                                                    <div class="task-actions"><a class="text-muted" href="#"><i class="ti-pencil"></i></a><a class="text-danger" href="#"><i class="ti-close ml-2"></i></a></div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div><label class="checkbox checkbox-danger checkbox-circle"><input type="checkbox"><span><span class="h6">Send Financial Reports, Lorem ipsum</span></span></label></div>
                                                    <div class="task-info mt-2 font-13"><i class="ti-time mr-2"></i>24 Dec 2018</div>
                                                    <div class="task-actions"><a class="text-muted" href="#"><i class="ti-pencil"></i></a><a class="text-danger" href="#"><i class="ti-close ml-2"></i></a></div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div><label class="checkbox checkbox-danger checkbox-circle"><input type="checkbox" checked=""><span><span class="h6">Send photos to Ann, Lorem ipsum</span></span></label></div>
                                                    <div class="task-info mt-2 font-13"><i class="ti-time mr-2"></i>24 Dec 2018</div>
                                                    <div class="task-actions"><a class="text-muted" href="#"><i class="ti-pencil"></i></a><a class="text-danger" href="#"><i class="ti-close ml-2"></i></a></div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div><label class="checkbox checkbox-danger checkbox-circle"><input type="checkbox"><span><span class="h6">Lorem ipsum dolor sit amet</span></span></label></div>
                                                    <div class="task-info mt-2 font-13"><i class="ti-time mr-2"></i>24 Dec 2018</div>
                                                    <div class="task-actions"><a class="text-muted" href="#"><i class="ti-pencil"></i></a><a class="text-danger" href="#"><i class="ti-close ml-2"></i></a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h5 class="box-title mb-2">Latest Transfers</h5>
                                                <div class="text-muted font-13">Simple Subtitle</div>
                                            </div><a class="text-muted" href="#">View All</a>
                                        </div>
                                        <ul class="list-unstyled media-list-divider">
                                            <li class="media py-3"><img class="mr-3 rounded-circle align-self-center" src="assets/img/users/u1.jpg" alt="image" width="45" />
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <div>
                                                            <h6 class="mb-1 font-16">Transfer to John Due</h6>
                                                            <div class="text-muted">22-11-18 14:0</div>
                                                        </div><span class="h4 mb-0 ml-3 text-danger">-$58</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media py-3"><img class="mr-3 rounded-circle align-self-center" src="assets/img/users/u2.jpg" alt="image" width="45" />
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <div>
                                                            <h6 class="mb-1 font-16">Transfer from John Due</h6>
                                                            <div class="text-muted">22-11-18 14:0</div>
                                                        </div><span class="h4 mb-0 ml-3 text-primary">+$240</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media py-3"><img class="mr-3 rounded-circle align-self-center" src="assets/img/users/u3.jpg" alt="image" width="45" />
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <div>
                                                            <h6 class="mb-1 font-16">Transfer to John Due</h6>
                                                            <div class="text-muted">22-11-18 14:0</div>
                                                        </div><span class="h4 mb-0 ml-3 text-danger">-$150</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media py-3"><img class="mr-3 rounded-circle align-self-center" src="assets/img/users/u4.jpg" alt="image" width="45" />
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <div>
                                                            <h6 class="mb-1 font-16">Transfer from John Due</h6>
                                                            <div class="text-muted">22-11-18 14:0</div>
                                                        </div><span class="h4 mb-0 ml-3 text-primary">+$480</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media py-3"><img class="mr-3 rounded-circle align-self-center" src="assets/img/users/u5.jpg" alt="image" width="45" />
                                                <div class="media-body">
                                                    <div class="flexbox">
                                                        <div>
                                                            <h6 class="mb-1 font-16">Transfer from John Due</h6>
                                                            <div class="text-muted">22-11-18 14:0</div>
                                                        </div><span class="h4 mb-0 ml-3 text-primary">+$480</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- END: Page content-->
                </div><!-- BEGIN: Footer-->
                <footer class="page-footer flexbox">
                    <div class="text-muted">2019 © <strong>Vaapthemes</strong>. All rights reserved</div><a class="btn btn-primary btn-rounded" href="https://vaapthemes.com/themes/reidius/" target="_blank">Buy Now</a>
                </footer><!-- END: Footer-->
            </div><!-- END: Content-->
        </div>
    </div><!-- BEGIN: Search form-->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="margin-top: 100px">
            <div class="modal-content">
                <form class="search-top-bar" action="#"><input class="form-control search-input" type="text" placeholder="Search..."><button class="reset input-search-icon" type="submit"><i class="ft-search"></i></button><button class="reset input-search-close" type="button" data-dismiss="modal"><i class="ft-x"></i></button></form>
            </div>
        </div>
    </div><!-- END: Search form-->
    <!-- BEGIN: Quick sidebar-->
    <div class="quick-sidebar" id="quick-sidebar"><button class="close quick-sidebar-close js-close-backdrop"><span aria-hidden="true">×</span></button>
        <div class="px-4 quick-sidebar-header">
            <ul class="nav nav-pills nav-pills-solid nav-justified w-100 mr-4">
                <li class="nav-item mr-2"><a class="nav-link active" data-toggle="pill" href="#sidenav-tab-messages">Messages</a></li>
                <li class="nav-item mr-2"><a class="nav-link" data-toggle="pill" href="#sidenav-tab-settings">Settings</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#sidenav-tab-log">Logs</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active h-100" id="sidenav-tab-messages">
                <div class="position-relative custom-scroll h-100">
                    <div class="flexbox px-4 mb-4 mt-3"><span class="text-muted">23 Messages</span><a href="mailbox.html">View All</a></div>
                    <div class="list-group list-group-flush"><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                            <div class="media">
                                <div class="mr-3 position-relative"><img class="rounded-circle" src="assets/img/users/u1.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                <div class="media-body">
                                    <div class="flexbox mb-2">
                                        <h6 class="mb-0">John Due</h6>
                                        <div class="text-muted font-13">2 days ago</div>
                                    </div>
                                    <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                </div>
                            </div>
                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                            <div class="media">
                                <div class="mr-3 position-relative"><img class="rounded-circle" src="assets/img/users/u2.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                <div class="media-body">
                                    <div class="flexbox mb-2">
                                        <h6 class="mb-0">John Due</h6>
                                        <div class="text-muted font-13">2 days ago</div>
                                    </div>
                                    <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                </div>
                            </div>
                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                            <div class="media">
                                <div class="mr-3 position-relative"><img class="rounded-circle" src="assets/img/users/u3.jpg" alt="image" width="40" /><span class="badge-point badge-success avatar-badge"></span></div>
                                <div class="media-body">
                                    <div class="flexbox mb-2">
                                        <h6 class="mb-0">John Due</h6>
                                        <div class="text-muted font-13">2 days ago</div>
                                    </div>
                                    <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                </div>
                            </div>
                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                            <div class="media">
                                <div class="mr-3 position-relative"><img class="rounded-circle" src="assets/img/users/u5.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                <div class="media-body">
                                    <div class="flexbox mb-2">
                                        <h6 class="mb-0">John Due</h6>
                                        <div class="text-muted font-13">2 days ago</div>
                                    </div>
                                    <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                </div>
                            </div>
                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                            <div class="media">
                                <div class="mr-3 position-relative"><img class="rounded-circle" src="assets/img/users/u8.jpg" alt="image" width="40" /><span class="badge-point badge-success avatar-badge"></span></div>
                                <div class="media-body">
                                    <div class="flexbox mb-2">
                                        <h6 class="mb-0">John Due</h6>
                                        <div class="text-muted font-13">2 days ago</div>
                                    </div>
                                    <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                </div>
                            </div>
                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                            <div class="media">
                                <div class="mr-3 position-relative"><img class="rounded-circle" src="assets/img/users/u4.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                <div class="media-body">
                                    <div class="flexbox mb-2">
                                        <h6 class="mb-0">John Due</h6>
                                        <div class="text-muted font-13">2 days ago</div>
                                    </div>
                                    <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                </div>
                            </div>
                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                            <div class="media">
                                <div class="mr-3 position-relative"><img class="rounded-circle" src="assets/img/users/u9.jpg" alt="image" width="40" /><span class="badge-point badge-success avatar-badge"></span></div>
                                <div class="media-body">
                                    <div class="flexbox mb-2">
                                        <h6 class="mb-0">John Due</h6>
                                        <div class="text-muted font-13">2 days ago</div>
                                    </div>
                                    <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                </div>
                            </div>
                        </a><a class="list-group-item list-group-item-action px-4 py-3" href="#">
                            <div class="media">
                                <div class="mr-3 position-relative"><img class="rounded-circle" src="assets/img/users/u6.jpg" alt="image" width="40" /><span class="badge-point badge-warning avatar-badge"></span></div>
                                <div class="media-body">
                                    <div class="flexbox mb-2">
                                        <h6 class="mb-0">John Due</h6>
                                        <div class="text-muted font-13">2 days ago</div>
                                    </div>
                                    <div class="font-13">Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor sed.</div>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
            <div class="tab-pane h-100 p-4" id="sidenav-tab-settings">
                <div class="position-relative custom-scroll h-100">
                    <h5 class="mb-4">App Settings</h5>
                    <div class="flexbox py-3">Enable notifications:<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label></div>
                    <div class="flexbox py-3">SMS notifications:<label class="ui-switch switch-solid"><input type="checkbox"><span></span></label></div>
                    <div class="flexbox py-3">Chat history:<label class="ui-switch switch-solid"><input type="checkbox"><span></span></label></div>
                    <div class="flexbox py-3">Show recent activity:<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label></div>
                    <div class="flexbox py-3">Users log:<label class="ui-switch switch-solid"><input type="checkbox"><span></span></label></div>
                    <div class="flexbox py-3">Site Tracking:<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label></div>
                    <h5 class="mb-4 mt-5">Orders Settings</h5>
                    <div class="flexbox py-3">Orders history:<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label></div>
                    <div class="flexbox py-3">Notify on new orders:<label class="ui-switch switch-solid"><input type="checkbox"><span></span></label></div>
                    <div class="flexbox py-3">Sales reports:<label class="ui-switch switch-solid"><input type="checkbox"><span></span></label></div>
                    <div class="flexbox py-3">Orders reports:<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label></div>
                    <div class="flexbox py-3">Order auto status:<label class="ui-switch switch-solid"><input type="checkbox"><span></span></label></div>
                </div>
            </div>
            <div class="tab-pane h-100 p-4" id="sidenav-tab-log">
                <div class="position-relative custom-scroll h-100">
                    <ul class="timeline timeline-default outline-points">
                        <li class="timeline-item">2 Issue fixed<span class="font-13 text-muted ml-2">Just now</span></li>
                        <li class="timeline-item"><span>15 New orders<span class="badge badge-primary badge-pill ml-2">important</span></span><span class="font-13 text-muted ml-2">5 mins</span></li>
                        <li class="timeline-item">18 new orders sent<span class="font-13 text-muted ml-2">24 mins</span></li>
                        <li class="timeline-item">15 New messages<span class="font-13 text-muted ml-2">45 mins</span></li>
                        <li class="timeline-item">The invoice is ready<span class="font-13 text-muted ml-2">1 hrs</span></li>
                        <li class="timeline-item"><span>Server Error<span class="badge badge-success badge-pill ml-2">resolved</span></span><span class="font-13 text-muted ml-2">2 hrs</span></li>
                        <li class="timeline-item"><span>System Warning<a class="text-purple ml-2">Check</a></span><span class="font-13 text-muted ml-2">12:07</span></li>
                        <li class="timeline-item">24 new users registered<span class="font-13 text-muted ml-2">12:30</span></li>
                        <li class="timeline-item"><span>5 New Orders<span class="badge badge-warning badge-pill ml-2">important</span></span><span class="font-13 text-muted ml-2">13:45</span></li>
                        <li class="timeline-item"><span class="flexbox">Production server up<i class="la la-arrow-circle-up font-18 ml-2 text-success"></i></span><span class="font-13 text-muted ml-2">1 days ago</span></li>
                        <li class="timeline-item">Server overloaded 91%<span class="font-13 text-muted ml-2">2 days ago</span></li>
                        <li class="timeline-item">Server error<span class="font-13 text-muted ml-2">2 days ago</span></li>
                        <li class="timeline-item">2 Issue fixed<span class="font-13 text-muted ml-2">Just now</span></li>
                        <li class="timeline-item"><span>15 New orders<span class="badge badge-primary badge-pill ml-2">important</span></span><span class="font-13 text-muted ml-2">5 mins</span></li>
                        <li class="timeline-item">18 new orders sent<span class="font-13 text-muted ml-2">24 mins</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div><!-- END: Page backdrops-->
    <!-- CORE PLUGINS-->
    <script src="{{ URL::to('admin/assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/metismenu/dist/metisMenu.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script><!-- PAGE LEVEL PLUGINS-->
    <script src="{{ URL::to('admin/assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script><!-- CORE SCRIPTS-->
    <script src="{{ URL::to('admin/assets/js/app.min.js') }}"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            var MONTHS_SH = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            var color = Chart.helpers.color;
            (function() {
                var dr = $('#subheader_daterange');
                if (dr.length) {
                    var t = moment();
                    var a = moment();
                    dr.daterangepicker({
                            startDate: t,
                            endDate: a,
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                            },
                        }, f),
                        f(t, a, "");
                }

                function f(t, a, r) {
                    var o = "",
                        n = "";
                    a - t < 100 || "Today" == r ?
                        (o = "Today:", n = t.format("MMM D")) :
                        "Yesterday" == r ? (o = "Yesterday:", n = t.format("MMM D")) :
                        n = t.format("MMM D") + " - " + a.format("MMM D"), dr.find(".subheader-daterange-date").html(n), dr.find(".subheader-daterange-title").html(o)
                }
            })();
            if ($('#line_chart_1').length) {
                var options = {
                    chart: {
                        height: 350,
                        width: "100%",
                        type: "line",
                    },
                    series: [{
                        name: "Series 1",
                        data: [34, 43, 31, 63, 45, 75, 50, 77],
                    }],
                    dataLabels: {
                        enabled: true,
                        offsetY: -3,
                    },
                    colors: [theme_color('purple'), theme_color('pink')],
                    stroke: {
                        curve: 'smooth',
                        width: 3,
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shade: 'dark',
                            type: "horizontal",
                            shadeIntensity: 0.5,
                            gradientToColors: [theme_color('pink')],
                            inverseColors: true,
                            opacityFrom: 1,
                            opacityTo: 1,
                            stops: [0, 50, 100],
                            colorStops: []
                        },
                    },
                };
                var chart = new ApexCharts(document.querySelector("#line_chart_1"), options);
                chart.render();
            }
            if ($('#bar_gradient').length) {
                var options = {
                    chart: {
                        height: 350,
                        type: 'bar',
                    },
                    plotOptions: {
                        bar: {
                            dataLabels: {
                                position: 'top', // top, center, bottom
                            },
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        formatter: function(val) {
                            return val + "%";
                        },
                        offsetY: -20,
                        style: {
                            fontSize: '12px',
                            colors: ["#304758"]
                        }
                    },
                    series: [{
                        name: 'Inflation',
                        data: [2.3, 3.1, 4.0, 10.1, 8.0, 6.5, 3.8, 2.8, 1.9, 1.2, 0.7, 0.4]
                    }],
                    xaxis: {
                        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        position: 'top',
                        labels: {
                            offsetY: -18,
                        },
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false
                        },
                        crosshairs: {
                            fill: {
                                type: 'gradient',
                                gradient: {
                                    colorFrom: '#D8E3F0',
                                    colorTo: '#BED1E6',
                                    stops: [0, 100],
                                    opacityFrom: 0.4,
                                    opacityTo: 0.5,
                                }
                            }
                        },
                        tooltip: {
                            enabled: true,
                            offsetY: -35,
                        }
                    },
                    colors: [theme_color('primary')],
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shade: 'light',
                            type: "vertical",
                            shadeIntensity: 0.2,
                            inverseColors: false,
                            opacityFrom: 1,
                            opacityTo: 1,
                            stops: [0, 50, 100],
                        },
                    },
                    yaxis: {
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false,
                        },
                        labels: {
                            show: false,
                            formatter: function(val) {
                                return val + "%";
                            }
                        }
                    },
                    title: {
                        text: 'Monthly Inflation in Argentina, 2002',
                        floating: true,
                        offsetY: 320,
                        align: 'center',
                        style: {
                            color: '#444'
                        }
                    },
                }
                var chart = new ApexCharts(
                    document.querySelector("#bar_gradient"),
                    options
                );
                chart.render();
            }
            if ($('#donut_chart_1').length) {
                var ctx = document.getElementById("donut_chart_1").getContext("2d");
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ["In-Store Sales", 'Online Sales', 'Other sources'],
                        datasets: [{
                            data: [57, 21, 22],
                            backgroundColor: [
                                theme_color('primary'),
                                theme_color('danger'),
                                color(theme_color('primary')).alpha(0.4).rgbString(),
                            ],
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },
                        cutoutPercentage: 65,
                    }
                });
            }
            if ($('#stacked_bars').length) {
                var ctx = document.getElementById("stacked_bars").getContext("2d");
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [1, 2, 3, 4, 5],
                        datasets: [{
                                label: 'Dataset 1',
                                backgroundColor: theme_color('primary'),
                                stack: 'Stack 0',
                                data: [30, 55, 70, 45, 32],
                            },
                            {
                                label: 'Dataset 2',
                                backgroundColor: theme_color('danger'),
                                stack: 'Stack 0',
                                data: [10, 15, 15, 35, 30],
                            },
                            {
                                label: 'Dataset 3',
                                backgroundColor: color(theme_color('primary')).alpha(0.5).rgbString(),
                                stack: 'Stack 1',
                                data: [10, 15, 25, 15, 25],
                            }
                        ],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                stacked: true,
                                gridLines: false,
                            }],
                            yAxes: [{
                                stacked: true,
                                display: false,
                            }]
                        },
                        legend: {
                            display: false
                        },
                    }
                });
            }
            if ($('#world_map').length) {
                var markers = [{
                        latLng: [55.524010, 105.318756],
                        name: 'Russia',
                        visits: 1000
                    },
                    {
                        latLng: [60.128161, 18.643501],
                        name: 'Sweden',
                        visits: 1000
                    },
                    {
                        latLng: [35.861660, 104.195397],
                        name: 'China',
                        visits: 1000
                    },
                    {
                        latLng: [37.090240, -95.712891],
                        name: 'USA(Neda Shine)',
                        visits: 1000
                    },
                    {
                        latLng: [52.130366, -92.346771],
                        name: 'Canada',
                        visits: 1000
                    },
                    {
                        latLng: [-25.274398, 133.775136],
                        name: 'Austrlia(Neda Shine)',
                        visits: 1000
                    },
                    {
                        latLng: [51.165691, 10.451526],
                        name: 'Germany',
                        visits: 1000
                    },
                    {
                        latLng: [26.02, 50.55],
                        name: 'Bahrain',
                        visits: 1000
                    },
                    {
                        latLng: [-3, -61.38],
                        name: 'Brazil',
                        visits: 1000
                    },
                ];
                $('#world_map').vectorMap({
                    map: 'world_mill_en',
                    backgroundColor: 'transparent',
                    scale: 5,
                    focusOn: {
                        scale: 1,
                        x: 0.5,
                        y: 0.5,
                    },
                    regionStyle: {
                        initial: {
                            fill: '#DADDE0',
                        }
                    },
                    markers: markers,
                    markerStyle: {
                        initial: {
                            fill: theme_color('primary'), // '#ff4081',
                            stroke: '#b9d0ff', // '#ffc6d9',
                            "stroke-width": 5,
                            r: 8
                        },
                        hover: {
                            fill: theme_color('primary'),
                            stroke: '#b9d0ff',
                        }
                    },
                    onMarkerTipShow: function(e, label, index) {
                        label.html('' + markers[index].name + ' (Visits - ' + markers[index].visits);
                    },
                });
            }
        });
    </script>
</body>
</html>
