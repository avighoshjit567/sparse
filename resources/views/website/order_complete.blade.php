@extends('website.web_master')
@section('content')
@php
    $shipping = 0;
@endphp
<link rel="stylesheet" href="{{ URL::to('public/assets/css/style.min.css') }}">
    @if($latestOrder)
    <main class="main main-test">
        <div class="container checkout-container">
            <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                <li class="disabled">
                    <a href="#">Shopping Cart</a>
                </li>
                <li class="disabled">
                    <a href="#">Checkout</a>
                </li>
                <li class="active">
                    <a href="#">Order Complete</a>
                </li>
            </ul>

            <div class="row">
                @if (session('message'))
                <div class="col-lg-12">
                    <h2 class="step-title" style="text-align:center;font-size:28px;">Order Placed Successfully!</h2>
                    <p style="text-align:center;font-weight:bold;font-size:20px;">Your Order Summary</p>
                </div>
                @endif
                <div class="col-lg-6">
                    <ul class="checkout-steps">
                        <li>
                            {{-- @if (session('message'))
                                <h2 class="step-title" style="text-align:center;">{{ session('message') }}</h2>
                            @endif --}}
                            {{-- @if (session('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Order Complete Successfully!</strong>
                                    <strong>{{ session('message') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('message') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name </label>
                                        <input type="text" class="form-control" name="name" value="{{ $latestOrder->name }}" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input type="text" class="form-control" name="mobile" value="{{ $latestOrder->mobile }}" readonly />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label>Adress </label>
                                        <input type="text" class="form-control form-control-sm" name="address"
                                        value="{{ $latestOrder->address }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label>Adress </label>
                                        <input type="text" class="form-control form-control-sm" name="address"
                                        value="{{ $latestOrder->order_note }}" readonly>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="col-1"></div>
                <!-- End .col-lg-6 -->
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
                                @if ($latestOrderDetails)
                                    @foreach ($latestOrderDetails as $id => $details)
                                        @php
                                            $product = App\Models\Product::where('id',$details->product_id)->first();
                                            if($product->discount_amount){
                                                $product_price = $product->sale_price - $product->discount_amount;
                                                $total += $product_price * $details->quantity;
                                            }else{
                                                $product_price = $product->sale_price;
                                                $total += $product_price * $details->quantity;
                                            }
                                        @endphp
                                        <input type="hidden" class="unique_product_id" value="{{ $details->product_id }}">

                                        <tr>
                                            <td class="product-col">
                                                <h3 class="product-title">
                                                    {{ $product->name }} ×
                                                    <span class="product-qty">{{ $details->quantity }}</span>
                                                </h3>

                                            </td>

                                            <td class="price-col">
                                                <span>৳{{ $product_price * $details->quantity }}</span>
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
                                <tr class="cart-subtotal">
                                    <td>
                                        <h4>Shipping</h4>
                                    </td>

                                    <td class="price-col">
                                        <span>৳{{ $latestOrder->shipping_charge }}</span>
                                    </td>
                                </tr>
                                {{-- <tr class="order-shipping">
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
                                        <input class="form-check-input " type="hidden" name="shipping_charge" value="{{$shipping}}">
                                    </td>

                                </tr> --}}
                                <tr class="order-total">
                                    <td>
                                        <h4>Total</h4>
                                    </td>
                                    <td>
                                        <b class="total-price"><span>৳{{ $total + $latestOrder->shipping_charge }}</span></b>
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
    @endif

@endsection
@section('script')
    <script>



    </script>
@endsection
