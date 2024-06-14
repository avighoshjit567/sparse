@extends('website.web_master')
@section('content')
<link rel="stylesheet" href="{{ URL::to('public/assets/css/style.min.css') }}">
<main class="main">
			<div class="container">
				<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
					<li class="active">
						<a href="{{ route('cart') }}">Shopping Cart</a>
					</li>
					<li>
						<a href="{{ route('checkout') }}">Checkout</a>
					</li>
					<li class="disabled">
						<a href="#">Order Complete</a>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Product</th>
										<th class="size-col">Size</th>
										<th class="price-col">Price</th>
										<th class="qty-col">Quantity</th>
										<th class="text-right">Subtotal</th>
									</tr>
								</thead>
								<tbody>
                                @php $total = 0 @endphp
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        <tr class="product-row">
                                            <td>
                                                <figure class="product-image-container">
                                                    <a href="#" class="product-image">
                                                        <img src="{{ URL::asset($details['image']) }}" alt="product">
                                                    </a>

                                                    <a href="javascript:void(0)" class="btn-remove icon-cancel cart_remove" data-id="{{ $id }}" title="Remove Product"></a>
                                                </figure>
                                            </td>
                                            <td class="product-col">
                                                <h5 class="product-title">
                                                    <a href="#">{{ $details['name'] }}</a>
                                                </h5>
                                            </td>
                                            <td class="size-col">
                                                {{ $details['size_name'] }}
                                            </td>
                                            <td>৳{{ $details['price'] }}</td>
                                            <td>
                                                <div class="product-single-qty">
                                                    <input data-ids="{{ $id }}" id="quantity-{{ $id }}" class="horizontal-quantity form-control cart_update_quantity" type="text" value="{{ $details['quantity'] }}">
                                                    <span class="minus-cart cart_update" data-ids="{{ $id }}"></span>
                                                            <span class="plus-cart  cart_update" data-ids="{{ $id }}"></span>
                                                </div><!-- End .product-single-qty -->
                                            </td>
                                            <td class="text-right"><span class="subtotal-price">৳{{ $details['price'] * $details['quantity'] }}</span></td>
                                        </tr>
                                    @endforeach
                                @endif

								</tbody>


								<tfoot>
									<tr>
										<td colspan="5" class="clearfix">
											{{-- <div class="float-left">
												<div class="cart-discount">
													<form action="#">
														<div class="input-group">
															<input type="text" class="form-control form-control-sm"
																placeholder="Coupon Code" required>
															<div class="input-group-append">
																<button class="btn btn-sm" type="submit">Apply
																	Coupon</button>
															</div>
														</div>
													</form>
												</div>
											</div> --}}
                                            <!-- End .float-left -->

											<div class="float-left">
												<a href="{{ URL::to('/') }}" class="btn btn-shop btn-update-cart">
													Continue Shopping
												</a>
											</div><!-- End .float-right -->
										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>CART TOTALS</h3>

							<table class="table table-totals">
								<tbody>
									<tr>
										<td>Subtotal</td>
										<td>৳{{ $total }}</td>
									</tr>

									<tr>
										<td colspan="2" class="text-left">
											<h4>Shipping Charge</h4>

											<div class="form-group form-group-custom-control">
												<div class="custom-control custom-radio">
													<input type="radio" class="custom-control-input flexRadioDefault1" name="radio" data-id="0" value="0" id="flexRadioDefault1">
													<label class="custom-control-label">Inside Dhaka</label> <label style="float: right;margin-top: 15px;font-size: 16px;" id="shippingCharge"></label>
												</div><!-- End .custom-checkbox -->
											</div>

											<div class="form-group form-group-custom-control mb-0">
												<div class="custom-control custom-radio mb-0">
													<input type="radio" name="radio" class="custom-control-input flexRadioDefault1" data-id="1" value="1" id="flexRadioDefault2">
													<label class="custom-control-label">Outside Dhaka</label>
												</div><!-- End .custom-checkbox -->
											</div>

												<input class="form-check-input " type="hidden" name="shipping_charge">
												{{-- <label id="shippingCharge"></label> --}}


											{{-- <form action="#">
												<div class="form-group form-group-sm">
													<label>Shipping to <strong>NY.</strong></label>
													<div class="select-custom">
														<select class="form-control form-control-sm" id="division">
															<option value="">Select Divisions</option>
                                                            @foreach ($Divisions as $Division)
															    <option value="{{ $Division->id }}">{{ $Division->name.'-'.$Division->bn_name }}</option>
                                                            @endforeach
														</select>
													</div>
												</div>

												<div class="form-group form-group-sm">
													<div class="select-custom">
														<select class="form-control form-control-sm" id="district">

														</select>
													</div>
												</div>

                                                <div class="form-group form-group-sm">
													<div class="select-custom">
														<select class="form-control form-control-sm" id="upazila">

														</select>
													</div>
												</div>

												<div class="form-group form-group-sm">
													<input type="text" class="form-control form-control-sm"
														placeholder="Town / City">
												</div>

												<div class="form-group form-group-sm">
													<input type="text" class="form-control form-control-sm"
														placeholder="ZIP">
												</div>

												<button type="submit" class="btn btn-shop btn-update-total">
													Update Totals
												</button>
											</form> --}}
										</td>
									</tr>
								</tbody>

								<tfoot>
									<tr>
										<td>Total</td>
                                        <input type="hidden" name="total-amnt" value="{{ $total }}">
										<td id="total">{{ $total }}</td>
									</tr>
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href="{{ route('checkout') }}" class="btn btn-block btn-dark">Proceed to Checkout
									<i class="fa fa-arrow-right"></i></a>
							</div>
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->

@endsection
@section('script')
<script>
$(document).ready(function() {
    $(".cart_update_quantity").change(function(e) {
        e.preventDefault();

        var ele = $(this).data('ids');
        console.log(ele);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele,
                quantity: $("#quantity-" + ele).val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

    $(".cart_update").click(function(e) {
        e.preventDefault();
        var ele = $(this).data('ids');
        console.log(ele);
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele,
                quantity: $("#quantity-" + ele).val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

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
            var type = $(this).data('id');
            let amnt = 0;
            if (type == 0) {
                amnt = 60;
                $('#shippingCharge').html(60);
                $('input[name^="shipping_charge"]').val(60);
            } else {
                amnt = 100;
                $('#shippingCharge').html(100);
                $('input[name^="shipping_charge"]').val(100);
            }
            var total = $('input[name^="total-amnt"]').val();
            $('#total').html(Number(total) + Number(amnt));
            $.ajax({
                url: '{{ route('update.shipping.charge') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    amount: amnt
                },
                success: function(response) {
                    // window.location.reload();
                }
            });
        });

});
</script>
@endsection
