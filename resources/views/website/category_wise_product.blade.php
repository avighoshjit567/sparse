@extends('website.web_master')
@section('content')

<main class="main">
            <div class="category-banner-container bg-gray">
                <div class="category-banner banner text-uppercase" style="background: no-repeat 60%/cover url('{{ asset('assets/images/banners/banner-top.jpg') }}');">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="pl-lg-5 pb-5 pb-md-0 col-md-5 col-xl-4 col-lg-4 offset-1">
                                <h3>SPARSE Gadget<br>Deals</h3>
                                <a href="#" class="btn btn-dark">Get Yours!</a>
                            </div>
                            <div class="pl-lg-3 col-md-4 offset-md-0 offset-1 pt-3">
                                <div class="coupon-sale-content">
                                    <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">Exclusive OFFER
                                    </h4>
                                    <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0"><i class="ls-0">UP TO</i><b class="text-dark">৳1000</b> OFF</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                {{-- <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Men</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                    </ol>
                </nav>

                <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                    <div class="toolbox-left">
                        <a href="#" class="sidebar-toggle"><svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32"
								xmlns="http://www.w3.org/2000/svg">
								<line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
								<line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
								<line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
								<line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
								<line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
								<line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
								<path d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
									class="cls-2"></path>
								<path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
								<path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
								<path d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
									class="cls-2"></path>
							</svg>
							<span>Filter</span>
						</a>

                        <div class="toolbox-item toolbox-sort">
                            <label>Sort By:</label>

                            <div class="select-custom">
                                <select name="orderby" class="form-control">
									<option value="menu_order" selected="selected">Default sorting</option>
									<option value="popularity">Sort by popularity</option>
									<option value="rating">Sort by average rating</option>
									<option value="date">Sort by newness</option>
									<option value="price">Sort by price: low to high</option>
									<option value="price-desc">Sort by price: high to low</option>
								</select>
                            </div>
                            <!-- End .select-custom -->


                        </div>
                        <!-- End .toolbox-item -->
                    </div>
                    <!-- End .toolbox-left -->

                    <div class="toolbox-right">
                        <div class="toolbox-item toolbox-show">
                            <label>Show:</label>

                            <div class="select-custom">
                                <select name="count" class="form-control">
									<option value="12">12</option>
									<option value="24">24</option>
									<option value="36">36</option>
								</select>
                            </div>
                            <!-- End .select-custom -->
                        </div>
                        <!-- End .toolbox-item -->

                        <div class="toolbox-item layout-modes">
                            <a href="{{ URL::to('categorywise-product') }}/{{ $category_name }}/{{ $Category->id }}" class="layout-btn btn-grid active" title="Grid">
                                <i class="icon-mode-grid"></i>
                            </a>
                            <a href="category-list.html" class="layout-btn btn-list" title="List">
                                <i class="icon-mode-list"></i>
                            </a>
                        </div>
                        <!-- End .layout-modes -->
                    </div>
                    <!-- End .toolbox-right -->
                </nav> --}}
                <br><br>
                <div class="row" style="">
                    @foreach ($Products as $Product)
                    @php
                    $Category = App\Models\Category::where('id',$Product->category_id)->first();
                    $category_name = str_replace(" ","-",$Category->name);
                    $ProductImageQueryCount = App\Models\ProductImages::where('product_id',$Product->id)->orderBy('id','asc')->count();
                    $ProductImageQuery = App\Models\ProductImages::where('product_id',$Product->id)->orderBy('id','asc')->take(2)->get();
                    // dd($ProductImageQuery);
                    $new_product_name = str_replace(" ","-",$Product->name);
                    @endphp
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default" style="height:420px;">
                                <figure>
                                    @if($ProductImageQueryCount > 0)
                                    <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $Product->id }}">
                                        <img src="{{ asset($ProductImageQuery[0]->image) }}" width="280" height="280" alt="product" />
                                        @if($ProductImageQueryCount > 1)
                                            <img src="{{ asset($ProductImageQuery[1]->image) }}" width="280" height="280" alt="product" />
                                        @endif
                                    </a>
                                    @else
                                    <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $Product->id }}">
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

                                    <h3 class="product-title"> <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $Product->id }}">{{ $Product->name }}</a>
                                    </h3>

                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        @if($Product->discount_amount)
                                            <span class="old-price">৳{{ $Product->sale_price }}</span>
                                            <span class="product-price">৳{{ $Product->sale_price - $Product->discount_amount }}</span>
                                        @else
                                            <span class="product-price">৳{{ $Product->sale_price }}</span>
                                        @endif
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="javascript:void(0);" class="btn-icon btn-add-cart add-to-cart" data-id="{{ $Product->id }}"><i class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
                    @endforeach

                </div>
                <!-- End .row -->

                {{-- <nav class="toolbox toolbox-pagination">
                    {!! $Products->links() !!}
                </nav> --}}
            </div>
            <!-- End .container -->
            <

        </main>
        <!-- End .main -->

@endsection
@section('script')

@endsection
