<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="admin template, angular admin template, bootstrap admin template, modern admin template, modern design admin template, dashboard template, responsive admin template, angular web app, crypto dashboard, bitcoin dashboard">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin | Dashboard</title>
    <!-- GLOBAL VENDORS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/feather-icons/feather.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/themify-icons/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" /><!-- PAGE LEVEL VENDORS-->
    <link href="{{ URL::to('admin/assets/vendors/DataTables/datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" /><!-- THEME STYLES-->
    <link href="{{ URL::to('admin/assets/vendors/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/vendors/animate.css/animate.min.css') }}" rel="stylesheet" /><!-- THEME STYLES-->
    <link href="{{ URL::to('admin/assets/css/app.min.css') }}" rel="stylesheet" /><!-- PAGE LEVEL STYLES-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="{{ URL::to('admin/assets/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    {{-- font-awesome cdn --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            @include('admin.sidebar')
            <!-- BEGIN: Content-->
            <div class="content-area">
                @include('admin.header')

                <div class="page-content fade-in-up">
                    @yield('content')
                </div>
                <!-- BEGIN: Footer-->
                <footer class="page-footer flexbox">
                    <div class="text-muted"><?php echo date('Y') ?> © <strong>copyrights</strong>. All rights reserved</div><a class="btn btn-primary btn-rounded" href="" target="_blank">Design & Developed By IT Plan BD</a>
                </footer><!-- END: Footer-->
            </div><!-- END: Content-->
        </div>
    </div>
    <!-- BEGIN: Search form-->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document" style="margin-top: 100px">
            <div class="modal-content">
                <form class="search-top-bar" action="#"><input class="form-control search-input" type="text" placeholder="Search..."><button class="reset input-search-icon" type="submit"><i class="ft-search"></i></button><button class="reset input-search-close" type="button" data-dismiss="modal"><i class="ft-x"></i></button></form>
            </div>
        </div>
    </div><!-- END: Search form-->

    <!-- BEGIN: Page backdrops-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div><!-- END: Page backdrops-->
    <!-- CORE PLUGINS-->
    <script src="{{ URL::to('admin/assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/DataTables/datatables.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/metismenu/dist/metisMenu.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script><!-- PAGE LEVEL PLUGINS-->
    <script src="{{ URL::to('admin/assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script><!-- CORE SCRIPTS-->
    <script src="{{ URL::to('admin/assets/vendors/sweetalert2/dist/sweetalert2.all.min.js') }}"></script><!-- CORE SCRIPTS-->
    <script src="{{ URL::to('admin/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::to('admin/assets/js/scripts/sweetalert-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ URL::to('admin/assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

            });
            $('.summernote').summernote({
                tabsize: 2,
                height: 200
            });
        });

        formSuccess = function(responseText, statusText, xhr, $form) {
            swal("Congratulations!", responseText.message, "success");
        };

        formError = function(xhr, status, error, $form) {

            var obj = JSON.parse(xhr.responseText);
            //swal({
              //  title: "Errors!",
               // text: obj.message,
               // icon: "error"
            //});

            swal("Errors!", obj.message, "error");

            // removeLoadingButton($form.find("button[type=submit]"));

            $.each(obj.errors, function(key, error) {
                if (document.getElementById(key)) {
                    if ($form.find(":input[id=" + key + "]")) {
                        displayErrorMessage($form.find(":input[id=" + key + "]"), error[0]);
                    } else if ($form.find(":select[id=" + key + "]")) {
                        displayErrorMessage($form.find(":select[id=" + key + "]"), error[0]);
                    } else if ($form.find(":textarea[id=" + key + "]")) {
                        displayErrorMessage($form.find(":textarea[id=" + key + "]"), error[0]);
                    }
                } else {
                    if ($form.find(":input[name=" + key + "]")) {
                        displayErrorMessage($form.find(":input[name=" + key + "]"), error[0]);
                    } else if ($form.find(":select[name=" + key + "]")) {
                        displayErrorMessage($form.find(":select[name=" + key + "]"), error[0]);
                    } else if ($form.find(":textarea[name=" + key + "]")) {
                        displayErrorMessage($form.find(":textarea[name=" + key + "]"), error[
                            0]);
                    }
                }
            });
        };

        displayErrorMessage = function(element, message) {
            element.addClass('form-control-danger').removeClass('form-control-success');
            if (typeof message !== "undefined") {
                element.after(
                    $("<div class='form-control-feedback'>" + message + "</div>")
                );
            }
        };

    </script>
    <!-- PAGE LEVEL SCRIPTS-->
    @yield('script')
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
