@extends('website.web_master')
@section('content')
<link rel="stylesheet" href="{{ URL::to('public/assets/css/style.min.css') }}">

<main class="main main-test">
            <div class="container checkout-container">
                <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                    <li>
                        <a href="{{ route('cart') }}">Shopping Cart</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('checkout') }}">Checkout</a>
                    </li>
                    <li class="disabled">
						<a href="#">Order Complete</a>
					</li>
                </ul>

                <div class="login-form-container">
                    <h4>Returning customer?
                        <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link btn-toggle">Login</button>
                    </h4>

                    <div id="collapseOne" class="collapse">
                        <div class="login-section feature-box">
                            <div class="feature-box-content">
                                <form action="#" id="login-form">
                                    <p>
                                        If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing & Shipping section.
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0 pb-1">Username or email <span
                                                        class="required">*</span></label>
                                                <input type="email" class="form-control" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0 pb-1">Password <span
                                                        class="required">*</span></label>
                                                <input type="password" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn">LOGIN</button>

                                    <div class="form-footer mb-1">
                                        <div class="custom-control custom-checkbox mb-0 mt-0">
                                            <input type="checkbox" class="custom-control-input" id="lost-password" />
                                            <label class="custom-control-label mb-0" for="lost-password">Remember
                                                me</label>
                                        </div>

                                        <a href="#" class="forget-password">Lost your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-7">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Billing details</h2>
                                {{-- @if (session('message'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ session('message') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif --}}
                                @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session('message') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                <form id="add_sale_form" action="{{ route('web.order.product.add') }}" accept-charset="utf-8" enctype="multipart/form-data" method="post" class="form-horizontal validatable">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="form-control" name="name" placeholder="Name*" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="form-control" name="mobile" placeholder="Phone*" required />
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email address
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <input type="email" name="email" class="form-control" required />
                                            </div>
                                        </div> --}}
                                    </div>


                                    {{-- <input type="checkbox" class="" name="createAccount" id="ifCreateAccount" onclick="ifCreateAccountFunction()" />
                                    <label>Create an account?</label> --}}


                                    {{-- <div class="form-group mb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ifCreateAccount" />
                                            <label class="custom-control-label" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree" for="create-account">Create an
                                                account?</label>
                                        </div>
                                    </div> --}}

                                    {{-- <div id="pwd" class="">
                                        <div class="form-group">
                                            <label>Create account password
                                                <abbr class="required" title="required">*</abbr></label>
                                            <input type="password" placeholder="Password" name="password" class="form-control"/>
                                        </div>
                                    </div> --}}


                                    {{-- <div class="form-group ">
                                        <label><strong>Shipping Address</strong></label>
                                        <div class="select-custom">
                                            <select class="form-control form-control-sm" name="division" id="division">
                                                <option value="">Select Divisions</option>
                                                @foreach ($Divisions as $Division)
                                                    <option value="{{ $Division->id }}">{{ $Division->name.'-'.$Division->bn_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="select-custom">
                                            <select class="form-control form-control-sm" name="district" id="district">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="select-custom">
                                            <select class="form-control form-control-sm" name="upazila" id="upazila">

                                            </select>
                                        </div>
                                    </div> --}}

                                    <div class="form-group ">
                                        <label>Adress <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="form-control form-control-sm" name="address"
                                            placeholder="Adress*">
                                    </div>

                                    <div class="form-group">
                                        <label class="order-comments">Order notes (optional)</label>
                                        <textarea class="form-control" name="note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                    <input class="form-check-input " type="hidden" name="shipping_charge" value="{{$shipping}}">
                                    <button type="submit" class="btn btn-dark btn-place-order">
                                        Place order
                                    </button>
                                    {{-- <button type="submit" class="btn btn-shop btn-update-total">
                                        Return to Cart
                                    </button> --}}
                                    {{-- <a href="{{ route('cart') }}">Return to Cart</a> --}}

                            </li>
                        </ul>
                    </div>
                    <!-- End .col-lg-8 -->

                    <div class="col-lg-5">
                        <div class="order-summary">
                            <h3>YOUR ORDER</h3>
                            @php $total = 0 @endphp
                            <table class="table table-mini-cart">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (session('cart'))
                                        @foreach (session('cart') as $id => $details)
                                            <input type="hidden" class="unique_product_id" value="{{ $details['product_id'] }}">
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            <tr>
                                                <td class="product-col">
                                                    <h3 class="product-title">
                                                        {{ $details['name'] }} ({{ $details['size_name'] }}) ×
                                                        <span class="product-qty">{{ $details['quantity'] }}</span>
                                                    </h3>

                                                </td>

                                                <td class="price-col">
                                                    <span>৳{{ $details['price'] * $details['quantity'] }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <h4>Subtotal</h4>
                                        </td>

                                        <td class="price-col">
                                            <span>৳{{ $total }}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-shipping">
                                        <td class="text-left" colspan="2">
                                            <h4 class="m-b-sm">Shipping</h4>

                                            <div class="form-group form-group-custom-control" @if ($shipping == 100)  style="display: none" @else  checked @endif>
												<div class="custom-control custom-radio">
													<input type="radio" class="custom-control-input flexRadioDefault1" name="radio" data-id="0" value="0" id="flexRadioDefault1" @if ($shipping == 100)  @else  checked @endif>
													<label class="custom-control-label">Inside Dhaka <span id="shippingCharge" style="float: right;font-size: 15px;">৳{{$shipping}}</span></label>
												</div><!-- End .custom-checkbox -->
											</div>

											<div class="form-group form-group-custom-control mb-0" @if ($shipping == 60) style="display: none" @else  @endif>
												<div class="custom-control custom-radio mb-0">
													<input type="radio" name="radio" class="custom-control-input flexRadioDefault1" data-id="1" value="1" id="flexRadioDefault2" @if ($shipping == 60)  @else  checked @endif>
													<label class="custom-control-label">Outside Dhaka <span id="shippingCharge" style="float: right;font-size: 15px;">৳{{$shipping}}</span></label>
												</div><!-- End .custom-checkbox -->
											</div>

                                        </td>

                                    </tr>

                                    <tr class="order-total">
                                        <td>
                                            <h4>Total</h4>
                                        </td>
                                        <td>
                                            <b class="total-price"><span>৳{{ $total + $shipping }}</span></b>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="payment-methods">
                                <h4 class="">Payment methods</h4>
                                <div class="info-box with-icon p-0">
                                    <p>
                                        CASH ON DELIVERY (COD)
                                    </p>
                                </div>
                            </div>
                            </form>
                            {{-- <button type="submit" class="btn btn-dark btn-place-order">
                                Place order
                            </button> --}}
                        </div>
                        <!-- End .cart-summary -->
                    </div>
                    <!-- End .col-lg-4 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->

@endsection
@section('script')
    <script>
        ifCreateAccountFunction();
        function ifCreateAccountFunction() {
            var checkBox = document.getElementById("ifCreateAccount");
            if (checkBox.checked == true) {
                $('#pwd').show();
            } else {
                $('#pwd').hide();
            }
        }

        $(document).ready(function() {

            $(document).on('change', '#division', function () {
                let Id = $(this).val();
                // alert(Id);
                $.ajax({
                    data: {
                        "id": Id,
                    },
                    method: 'GET',
                    dataType: 'json',
                    url: "{{route('district_get')}}",
                    success: function (responseText) {
                        var $memberInvestent = $('#district');
                        $memberInvestent.empty();
                        $memberInvestent.append(
                            '<option value="">Select District</option>');
                        for (var i = 0; i < responseText.data.length; i++) {
                            $memberInvestent.append('<option value=' + responseText.data[i].id +
                                '>' + responseText.data[i].name + ' - ' + responseText.data[i].bn_name +
                                '</option>');
                        }
                        $memberInvestent.change();
                    }
                });
            });

            $(document).on('change', '#district', function () {
                let Dis_Id = $(this).val();
                // alert(Id);
                $.ajax({
                    data: {
                        "id": Dis_Id,
                    },
                    method: 'GET',
                    dataType: 'json',
                    url: "{{route('upazila_get')}}",
                    success: function (responseText) {
                        var $memberInvestent = $('#upazila');
                        $memberInvestent.empty();
                        $memberInvestent.append(
                            '<option value="">Select Upazila</option>');
                        for (var i = 0; i < responseText.data.length; i++) {
                            $memberInvestent.append('<option value=' + responseText.data[i].id +
                                '>' + responseText.data[i].name + ' - ' + responseText.data[i].bn_name +
                                '</option>');
                        }
                        $memberInvestent.change();
                    }
                });
            });

            $(".flexRadioDefault1").click(function(e) {
                var dd = $(this).data('id');
                if(dd==0){
                $('#shippingCharge').html(60);
                $('input[name^="shipping_charge"]').val(60);
                }
                else{
                $('#shippingCharge').html(100);
                $('input[name^="shipping_charge"]').val(100);
                }
            });

        });
    </script>
@endsection
