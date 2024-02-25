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
            <div class="col-lg-9">
                <div class="home-slider slide-animate owl-carousel owl-theme mb-2" data-owl-options="{
                            'loop': false,
                            'dots': true,
                            'nav': false
                            }">
                    @foreach ($Sliders as $Slider)

                    <div class="home-slide home-slide1 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                        <img class="slide-bg" style="background-color: #2699D0;" src="{{ asset($Slider->image) }}" width="880" height="428" alt="home-slider">

                        <!-- End .banner-layer -->
                    </div>
                    <!-- End .home-slide -->
                    @endforeach




                </div>
                <!-- End .home-slider -->
            </div>
            <!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle custom-sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
            <aside class="sidebar-home col-lg-3 order-lg-first mobile-sidebar">
                <div class="side-menu-wrapper text-uppercase mb-2 d-none d-lg-block">
                    <h2 class="side-menu-title bg-gray ls-n-25">Categories</h2>

                    <nav class="side-nav">
                        <ul class="menu menu-vertical sf-arrows">

                            {{-- <li class="active"><a href="demo1.html"><i class="icon-home"></i>Home</a></li> --}}
                            @foreach ($Categories as $Category)
                            @php
                                $category_name = str_replace(" ","-",$Category->name);
                            @endphp
                                <li><a href="{{ URL::to('categorywise-product') }}/{{ $category_name }}/{{ $Category->id }}"><i class="sicon-star"></i>{{ $Category->name }}</a></li>
                            @endforeach
                            {{-- <li><a href="#"><i class="sicon-star"></i>Smart Phone</a></li> --}}

                            {{-- <li>
                                        <a href="demo1-shop.html" class=""> <i class="sicon-badge"></i>Home Appliences</a>
                                        <a href="demo1-shop.html" class="sf-with-ul">
                                        <i class="sicon-badge"></i>Home Appliences</a>

                                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="submenu">
                                                        <li><a href="{{ URL::to('categorywise-product') }}/{{ $category_name }}/{{ $Category->id }}">Refrigerator</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End .megamenu -->
                                    </li> --}}

                            <!-- <li><a href="https://1.envato.market/DdLk5" target="_blank"><i
                                                class="sicon-star"></i>Buy Porto!<span
                                                class="tip tip-hot">Hot</span></a></li> -->
                        </ul>
                    </nav>
                </div>
                <!-- End .side-menu-container -->

                <!-- End .widget -->
            </aside>
            <!-- End .col-lg-3 -->

            <!-- Featured Product Sections -->
            <div class="col-lg-12">
                <h2 class="section-title heading-border ls-20 border-0">New Arrivals</h2>

                <div class="row">
                    @foreach ($NewArrivals as $key=> $NewArrival)
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
                                    {{-- <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> --}}
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    @endforeach
                    <!-- End .col-sm-4 -->

                </div>
                <!-- End .row -->
                <h2 class="section-title heading-border ls-20 border-0">All Products</h2>

                <div class="row">
                    @foreach ($AllProducts as $key=> $AllProduct)
                    @php
                    $Category2 = App\Models\Category::where('id',$AllProduct->category_id)->first();
                    $category_name = str_replace(" ","-",$Category2->name);
                    $ProductImageQueryCount = App\Models\ProductImages::where('product_id',$AllProduct->id)->orderBy('id','asc')->count();
                    $ProductImageQuery = App\Models\ProductImages::where('product_id',$AllProduct->id)->orderBy('id','asc')->take(2)->get();
                    // dd($ProductImageQuery);
                    $new_product_name = str_replace(" ","-",$AllProduct->name);

                    @endphp
                    <div class="col-6 col-sm-3">
                        <div class="product-default">
                            <figure>
                                @if($ProductImageQueryCount > 0)
                                <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $AllProduct->id }}">
                                    <img src="{{ asset($ProductImageQuery[0]->image) }}" width="280" height="280" alt="product" />
                                    @if($ProductImageQueryCount > 1)
                                        <img src="{{ asset($ProductImageQuery[1]->image) }}" width="280" height="280" alt="product" />
                                    @endif
                                </a>
                                @else
                                <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $AllProduct->id }}">
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
                                        <a href="{{ URL::to('categorywise-product') }}/{{ $category_name }}/{{ $Category2->id }}" class="product-category">{{ $Category2->name }}</a>
                                    </div>
                                </div>

                                <h3 class="product-title">
                                    <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $AllProduct->id }}">{{ $AllProduct->name }}</a>
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
                                    @if($AllProduct->discount_amount)
                                    <span class="old-price">৳{{ $AllProduct->sale_price }}</span>
                                    <span class="product-price">৳{{ number_format($AllProduct->sale_price - $AllProduct->discount_amount,2) }}</span>
                                    @else
                                    <span class="product-price">৳{{ $AllProduct->sale_price }}</span>
                                    @endif
                                </div>
                                <!-- End .price-box -->

                                <div class="product-action">
                                    {{-- <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                            class="icon-heart"></i></a>
                                    <a href="product.html" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i><span>SELECT
                                            OPTIONS</span></a> --}}
                                    <a href="javascript:void(0)" class="btn-icon btn-add-cart add-to-cart" data-id="{{ $AllProduct->id }}"><i class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                    {{-- <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> --}}
                                </div>
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    @endforeach
                    <!-- End .col-sm-4 -->

                </div>
                <!-- End .row -->


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

        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
<!-- End .main -->
@endsection

@section('script')

@endsection
