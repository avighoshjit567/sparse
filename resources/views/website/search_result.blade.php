@extends('website.web_master')
@section('content')
<style>
    .heading-border {
        display: flex;
        display: -ms-flexbox;
        align-items: center;
        -ms-flex-align: center;
        margin: 0 -8px
    }

    .heading-border:after,
    .heading-border:before {
        content: "";
        margin: 0 8px;
        flex: 1;
        -ms-flex: 1;
        height: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1)
    }

    .heading-border.section-title {
        margin: 0 -2rem 1.9rem;
        letter-spacing: -0.02em;
        line-height: 1.4
    }

    .heading-border.section-title:after,
    .heading-border.section-title:before {
        margin: 0 1.5rem;
        margin-top: 2px
    }

</style>
<main class="main home">
    <div class="container mb-2">
        <div class="row">
            <!-- Featured Product Sections -->
            @if($ProductsCount > 0)
            <div class="col-lg-12">
                <h2 class="section-title heading-border ls-20 border-0">Search Result</h2>

                <div class="row">
                    @foreach ($Products as $key=> $NewArrival)
                    @php
                    $Category = App\Models\Category::where('id',$NewArrival->category_id)->first();
                    $category_name = str_replace(" ","-",$Category->name);
                    $ProductImageQueryCount = App\Models\ProductImages::where('product_id',$NewArrival->id)->orderBy('id','asc')->count();
                    $ProductImageQuery = App\Models\ProductImages::where('product_id',$NewArrival->id)->orderBy('id','asc')->take(2)->get();
                    // dd($ProductImageQuery);
                    $new_product_name = str_replace(" ","-",$NewArrival->name);

                    @endphp
                    <div class="col-6 col-sm-3">
                        <div class="product-default" style="height:420px;">
                            <figure>
                                @if($ProductImageQueryCount > 0)
                                <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $NewArrival->id }}">
                                    <img src="{{ asset($ProductImageQuery[0]->image) }}" width="280" height="280" alt="product" />
                                    @if($ProductImageQueryCount > 1)
                                    <img src="{{ asset($ProductImageQuery[1]->image) }}" width="280" height="280" alt="product" />
                                    @endif
                                </a>
                                @else
                                <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $NewArrival->id }}">
                                    <img src="{{ asset('images/no-image.jpg') }}" width="280" height="280" alt="product" />
                                </a>
                                @endif

                                {{-- <div class="label-group">
                                                    <div class="product-label label-hot">HOT</div>
                                                    <div class="product-label label-sale">-20%</div>
                                                </div> --}}
                            </figure>

                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{ URL::to('categorywise-product') }}/{{ $category_name }}/{{ $Category->id }}" class="product-category">{{ $Category->name }}</a>
                                    </div>
                                </div>

                                <h3 class="product-title">
                                    <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $NewArrival->id }}">{{ $NewArrival->name }}</a>
                                </h3>

                                {{-- <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:75%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div> --}}
                                <!-- End .product-container -->

                                <div class="price-box">
                                    @if($NewArrival->discount_amount)
                                    <span class="old-price">৳{{ $NewArrival->sale_price }}</span>
                                    <span class="product-price">৳{{ number_format($NewArrival->sale_price - $NewArrival->discount_amount,2) }}</span>
                                    @else
                                    <span class="product-price">৳{{ $NewArrival->sale_price }}</span>
                                    @endif
                                </div>
                                <!-- End .price-box -->

                                <div class="product-action">
                                    {{-- <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                            class="icon-heart"></i></a>
                                                    <a href="product.html" class="btn-icon btn-add-cart"><i
                                                            class="fa fa-arrow-right"></i><span>SELECT
                                                            OPTIONS</span></a> --}}
                                    <a href="javascript:void(0);" class="btn-icon btn-add-cart add-to-cart" data-id="{{ $NewArrival->id }}"><i class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                    <a href="javascript:void(0);" class="btn-icon btn-add-cart buy-now" data-id="{{ $NewArrival->id }}"><i class="icon-shopping-cart"></i><span>BUY NOW</span></a>
                                    {{-- <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> --}}
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    @endforeach
                    <!-- End .col-sm-4 -->

                </div>
                <hr class="mt-1 mb-3 pb-2">
                <div class="feature-boxes-container">
                    <div class="row">
                        <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">
                            <div class="feature-box  feature-box-simple text-center">
                                <i class="icon-earphones-alt"></i>

                                <div class="feature-box-content p-0">
                                    <h3 class="mb-0 pb-1">Customer Support</h3>
                                    <h5 class="mb-1 pb-1">Need Assistance?</h5>

                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p> --}}
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="400">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-credit-card"></i>

                                <div class="feature-box-content p-0">
                                    <h3 class="mb-0 pb-1">Secured Payment</h3>
                                    <h5 class="mb-1 pb-1">Safe & Fast</h5>

                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p> --}}
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="600">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-action-undo"></i>

                                <div class="feature-box-content p-0">
                                    <h3 class="mb-0 pb-1">Returns</h3>
                                    <h5 class="mb-1 pb-1">Easy & Free</h5>

                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p> --}}
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .feature-boxes-container -->
            </div>
            @else
            <div class="col-lg-12">
                <div class="alert alert-warning">
                    {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
                    <strong>Oops Sorry!</strong> No Item Found.
                </div>
            </div>
            @endif

        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
<!-- End .main -->
@endsection

@section('script')

@endsection
