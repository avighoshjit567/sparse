<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SPARSE</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sparse Sparsebd Sparse Gadget Iphone cover in bangladesh">
    <meta name="author" content="Pranto  Saha">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ URL::to('public/assets/images/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TM6WG4HN');</script>
    <!-- End Google Tag Manager -->

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800', 'Playfair+Display:900', 'Shadows+Into+Light:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script')
                , s = d.scripts[0];
            wf.src = '{{ URL::to("public/assets/js/webfont.js") }}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);

    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ URL::to('public/assets/css/bootstrap.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ URL::to('public/assets/css/demo1.min.css') }}">

    {{-- <link rel="stylesheet" href="{{ URL::to('public/assets/css/demo4.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />
</head>

<body>
    <div class="page-wrapper">
        @php
            $CompanySetting = App\Models\CompanySetting::first();
        @endphp

        @include('website.header')

        @yield('content')

        @include('website.footer')

    </div>
    <!-- End .page-wrapper -->

    {{-- <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> --}}

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    @include('website.mobile_menu')

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="{{ URL::to('/') }}">
                <i class="icon-home"></i>Home
            </a>
        </div>
        {{-- <div class="sticky-info">
            <a href="#" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div> --}}
        {{-- <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div> --}}
        <div class="sticky-info">
            <a href="#" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{ route('cart') }}" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">{{ count((array) session('cart')) }}</span>
                </i>Cart
            </a>
        </div>
    </div>

    <!-- <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url({{ URL::to('public/assets/images/newsletter_popup_bg.jpg') }})">
        <div class="newsletter-popup-content">
            <img src="assets/images/logo.png" width="111" height="44" alt="Logo" class="logo-newsletter">
            <h2>Subscribe to newsletter</h2>

            <p>
                Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div>
        <!- End .newsletter-popup-content -->

    <!-- <button title="Close (Esc)" type="button" class="mfp-close">
            ×
        </button> -->
    </div>
    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ URL::to('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('public/assets/js/plugins.min.js') }}"></script>
    <script src="{{ URL::to('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('public/assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ URL::to('public/assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ URL::to('public/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });

        $(".add-to-cart-two").click(function(e) {
            var id = $(this).data('id');
            var size_id = $('#size_id').val();
            if(size_id == ''){
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.error('Please Choose Model For Add To Cart');
                return false;
            }
            // alert(id);
            //var url = '{{ route('add.to.cart', ':id') }}';
            var url = '{{ route('add.to.cart.two', [':id', ':size_id']) }}';
            url = url.replace(':id', id).replace(':size_id', size_id);
            $.ajax({
                type: "GET"
                , url: url
                , success: function(response) {
                    console.log(response);
                    toastr.options.positionClass = 'toast-bottom-right';
                    if (response == "success") {
                        toastr.success('Cart Added Successfull.');
                    } else {
                        toastr.error('This status has been changed to Inactive.');
                    }
                    cartCheckTwo();
                }
            });
        });

        $(".add-to-cart").click(function(e) {
            var id = $(this).data('id');

            // alert(id);
            var url = '{{ route('add.to.cart', ':id') }}';
            //var url = '{{ route('add.to.cart', [':id', ':size_id']) }}';
            url = url.replace(':id', id);
            $.ajax({
                type: "GET"
                , url: url
                , success: function(response) {
                    console.log(response);
                    toastr.options.positionClass = 'toast-bottom-right';
                    if (response == "success") {
                        toastr.success('Cart Added Successfull.');
                    } else {
                        toastr.error('This status has been changed to Inactive.');
                    }
                    cartCheck();
                }
            });
        });

        $(".buy-now").click(function(e) {
            var id = $(this).data('id');

            let loc = window.location.origin;
            var url = '{{ route('add.to.cart', ':id') }}';
            //var url = '{{ route('add.to.cart', [':id', ':size_id']) }}';
            url = url.replace(':id', id);
            $.ajax({
                type: "GET"
                , url: url
                , success: function(response) {
                    console.log(response);
                    toastr.options.positionClass = 'toast-bottom-right';
                    if (response == "success") {
                        toastr.success('Cart Added Successfull.');
                        window.location.href = '{{ route("cart") }}';
                    } else {
                        toastr.error('This status has been changed to Inactive.');
                    }
                    cartCheck();
                }
            });
        });

        $(".buy-now-two").click(function(e) {
            var id = $(this).data('id');
            var size_id = $('#size_id').val();
            if(size_id == ''){
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.error('Please Choose Model For Add To Cart');
                return false;
            }
            let loc = window.location.origin;
            //var url = '{{ route('add.to.cart', ':id') }}';
            var url = '{{ route('add.to.cart.two', [':id', ':size_id']) }}';
            url = url.replace(':id', id).replace(':size_id', size_id);
            $.ajax({
                type: "GET"
                , url: url
                , success: function(response) {
                    console.log(response);
                    toastr.options.positionClass = 'toast-bottom-right';
                    if (response == "success") {
                        toastr.success('Cart Added Successfull.');
                        window.location.href = '{{ route("cart") }}';
                    } else {
                        toastr.error('This status has been changed to Inactive.');
                    }
                    cartCheckTwo();
                }
            });
        });

        function cartCheck() {

            // alert("Load was performed.");
            $.get("{{ route('get.total.cart') }}", function(data) {
                // $(".result").html(data);
                // console.log(data);
                // $('#cart-all-item').html(data.jobs);
                var appendString = "";

                // var obj = JSON.parse(data);
                var obj = Object.values(data.jobs);
                var total = 0;
                // console.log( obj);
                // for(var i in obj)
                //     res.push(obj[i]);

                // down.innerHTML = "Array of values - ["
                //                 + res + "]";
                for (var i = 0; i < obj.length; i++) {
                    console.log(obj[i]);
                    let loc = window.location.origin;
                    total = total + (Number(obj[i]['quantity']) * Number(obj[i]['price']));

                    appendString += '<div class="product-details"><h4 class="product-title"><a href="#">' + obj[i]['name'] + '</a></h4><span class="cart-product-info"><span class="cart-product-qty">' + obj[i]['quantity'] + '</span> × ৳' + obj[i]['price'] + '</span></div><figure class="product-image-container"><a href="#" class="product-image"><img src="{{ asset('') }}/' + obj[i]['image'] + '" alt="product" width="80" height="80"></a><a href="javascript:void(0)" class="btn-remove cart_remove" data-id="'+i+'" title="Remove Product"><span>×</span></a></figure></div>';

                }
                $('#cart-all-item').empty().append(appendString);
                $('#cart-total-qty').html(data.total);
                $('#cart-total').html(total);
            });
        }

        function cartCheckTwo() {

            // alert("Load was performed.");
            $.get("{{ route('get.total.cart') }}", function(data) {
                // $(".result").html(data);
                // console.log(data);
                // $('#cart-all-item').html(data.jobs);
                var appendString = "";

                // var obj = JSON.parse(data);
                var obj = Object.values(data.jobs);
                var total = 0;
                // console.log( obj);
                // for(var i in obj)
                //     res.push(obj[i]);

                // down.innerHTML = "Array of values - ["
                //                 + res + "]";
                for (var i = 0; i < obj.length; i++) {
                    console.log(obj[i]);
                    let loc = window.location.origin;
                    total = total + (Number(obj[i]['quantity']) * Number(obj[i]['price']));

                    appendString += '<div class="product-details"><h4 class="product-title"><a href="#">' + obj[i]['name'] + '<br>'+ obj[i]['size_name'] + '</a></h4><span class="cart-product-info"><span class="cart-product-qty">' + obj[i]['quantity'] + '</span> × ৳' + obj[i]['price'] + '</span></div><figure class="product-image-container"><a href="#" class="product-image"><img src="{{ asset('') }}/' + obj[i]['image'] + '" alt="product" width="80" height="80"></a><a href="javascript:void(0)" class="btn-remove cart_remove" data-id="'+i+'" title="Remove Product"><span>×</span></a></figure></div>';

                }
                $('#cart-all-item').empty().append(appendString);
                $('#cart-total-qty').html(data.total);
                $('#cart-total').html(total);
            });
        }

        $(".cart_remove").click(function(e) {
            e.preventDefault();
            var ele = $(this).data('id');
            Swal.fire({
                title: 'Do you want to Delete This Item?',
                showCancelButton: true,
                confirmButtonText: `Delete`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('remove.from.cart') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele
                        },
                        success: function(response) {
                            Swal.fire('Delete!', '', 'success')
                            window.location.reload();
                        }
                    });

                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        });

    </script>

    @yield('script')

    <!-- Main JS File -->
    <script src="{{ URL::to('public/assets/js/main.min.js') }}"></script>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'8086f024ca6078b7',t:'MTY5NTAxMjMxMi44NDIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/8370c0b3/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();

    </script>
</body>

</html>
