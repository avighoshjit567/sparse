@extends('website.web_master')
@section('content')

<main class="main">
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ URL::to('/') }}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
            </ol>
        </nav>

        <div class="product-single-container product-single-default">


            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        {{-- <div class="label-group">
                            <div class="product-label label-hot">HOT</div>

                            <div class="product-label label-sale">
                                -16%
                            </div>
                        </div> --}}

                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                            @foreach ($ProductImages as $ProductImage)
                                <div class="product-item">
                                    <img class="product-single-image" src="{{ asset($ProductImage->image) }}" data-zoom-image="{{ asset($ProductImage->image) }}" width="468" height="468" alt="product" />
                                </div>
                            @endforeach

                        </div>
                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>

                    <div class="prod-thumbnail owl-dots">
                        @foreach ($ProductImages as $ProductImage)
                            <div class="owl-dot">
                                <img src="{{ asset($ProductImage->image) }}" width="110" height="110" alt="product-thumbnail" />
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- End .product-single-gallery -->

                <div class="col-lg-7 col-md-6 product-single-details">
                    <h1 class="product-title unique-product-name">{{ $Products->name }}</h1>

                    {{-- <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:60%"></span>

                            <span class="tooltiptext tooltip-top"></span>
                        </div>

                        <a href="#" class="rating-link">( 6 Reviews )</a>
                    </div> --}}
                    <!-- End .ratings-container -->

                    <hr class="short-divider">

                    <div class="price-box">
                        @if($Products->discount_amount)
                            <span class="old-price">৳{{ $Products->sale_price }}</span>
                            <span class="product-price unique-product-price">৳{{ number_format($Products->sale_price - $Products->discount_amount,2) }}</span>
                        @else
                            <span class="product-price unique-product-price">৳{{ $Products->sale_price }}</span>
                        @endif
                    </div>
                    <!-- End .price-box -->

                    <div class="product-desc">
                        <p>
                            {{ $Products->short_description }}
                        </p>
                    </div>
                    <!-- End .product-desc -->

                    <ul class="single-info-list">

                        <li>
                            CATEGORY: <strong><a href="#" class="product-category">{{ $Products->Category ? $Products->Category->name:'' }}</a></strong>
                        </li>

                        <li>
                            BRAND: <strong><a href="#" class="product-category">{{ $Products->Brand ? $Products->Brand->name:'' }}</a></strong>
                        </li>
                    </ul>

                    <div class="product-action">
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control" type="text">
                        </div>
                        <!-- End .product-single-qty -->
                        @if ($Products->size)
                            <div class="form-group ">
                                <label><strong>Choose Model</strong></label>
                                <div class="select-custom">
                                    <select class="form-control form-control-sm" name="size_id" id="size_id">
                                        <option value="">Select Model</option>
                                        @foreach ($explodes as $explode)
                                            @php
                                                $sizeQuery = App\Models\Size::where('id',$explode)->first();
                                            @endphp
                                            <option value="{{ $explode }}">{{ $sizeQuery->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="btn btn-dark add-to-cart-two mr-2" data-id="{{ $Products->id }}" title="Add to Cart">Add to
                            Cart</button>
                            <button type="button" class="btn btn-dark buy-now-two mr-2" data-id="{{ $Products->id }}" title="Buy now">BUY NOW</button>
                        @else

                        <button type="button" class="btn btn-dark add-to-cart mr-2" data-id="{{ $Products->id }}" title="Add to Cart">Add to
                            Cart</button>
                        <button type="button" class="btn btn-dark buy-now mr-2" data-id="{{ $Products->id }}" title="Buy now">BUY NOW</button>

                        @endif

                        <a href="{{ route('cart') }}" class="btn btn-gray view-cart d-none">View cart</a>
                    </div>
                    <!-- End .product-action -->

                    <hr class="divider mb-0 mt-0">

                    <div class="product-single-share mb-3">
                        <label class="sr-only">Share:</label>

                        <div class="social-icons mr-2">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                            <a href="#" class="social-icon social-gplus fab fa-instagram" target="_blank" title="Instagram"></a>
                            <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                        </div>
                        <!-- End .social-icons -->

                        {{-- <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i class="icon-wishlist-2"></i><span>Add to
                                Wishlist</span></a> --}}
                    </div>
                    <!-- End .product single-share -->
                </div>
                <!-- End .product-single-details -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .product-single-container -->

        <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                        Information</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (1)</a>
                </li> --}}
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <p>{!! $Products->long_description !!}</p>
                    </div>
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                    {!! $Products->additional_info !!}
                </div>
                <!-- End .tab-pane -->

                {{-- <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                    <div class="product-reviews-content">
                        <h3 class="reviews-title">1 review for Men Black Sports Shoes</h3>

                        <div class="comment-list">
                            <div class="comments">
                                <figure class="img-thumbnail">
                                    <img src="assets/images/blog/author.jpg" alt="author" width="80" height="80">
                                </figure>

                                <div class="comment-block">
                                    <div class="comment-header">
                                        <div class="comment-arrow"></div>

                                        <div class="ratings-container float-sm-right">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>

                                        <span class="comment-by">
                                            <strong>Joe Doe</strong> – April 12, 2018
                                        </span>
                                    </div>

                                    <div class="comment-content">
                                        <p>Excellent.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="add-product-review">
                            <h3 class="review-title">Add a review</h3>

                            <form action="#" class="comment-form m-0">
                                <div class="rating-form">
                                    <label for="rating">Your rating <span class="required">*</span></label>
                                    <span class="rating-stars">
                                        <a class="star-1" href="#">1</a>
                                        <a class="star-2" href="#">2</a>
                                        <a class="star-3" href="#">3</a>
                                        <a class="star-4" href="#">4</a>
                                        <a class="star-5" href="#">5</a>
                                    </span>

                                    <select name="rating" id="rating" required="" style="display: none;">
                                        <option value="">Rate…</option>
                                        <option value="5">Perfect</option>
                                        <option value="4">Good</option>
                                        <option value="3">Average</option>
                                        <option value="2">Not that bad</option>
                                        <option value="1">Very poor</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Your review <span class="required">*</span></label>
                                    <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                </div>
                                <!-- End .form-group -->


                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="save-name" />
                                            <label class="custom-control-label mb-0" for="save-name">Save my
                                                name, email, and website in this browser for the next time I
                                                comment.</label>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                        <!-- End .add-product-review -->
                    </div>
                    <!-- End .product-reviews-content -->
                </div> --}}
                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>
        <!-- End .product-single-tabs -->

        <div class="products-section pt-0">
            <h2 class="section-title">Related Products</h2>

            <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                @foreach ($Related_products as $Related_product)
                    @php
                        $Category = App\Models\Category::where('id',$Related_product->category_id)->first();
                        $category_name = str_replace(" ","-",$Category->name);
                        $ProductImageQueryCount = App\Models\ProductImages::where('product_id',$Related_product->id)->orderBy('id','asc')->count();
                        $ProductImageQuery = App\Models\ProductImages::where('product_id',$Related_product->id)->orderBy('id','asc')->take(2)->get();
                        // dd($ProductImageQuery);
                        $new_product_name = str_replace(" ","-",$Related_product->name);

                    @endphp
                    <div class="product-default">
                        <figure>
                                @if($ProductImageQueryCount > 0)
                                <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $Related_product->id }}">
                                    <img src="{{ asset($ProductImageQuery[0]->image) }}" width="280" height="280" alt="product" />
                                    @if($ProductImageQueryCount > 1)
                                        <img src="{{ asset($ProductImageQuery[1]->image) }}" width="280" height="280" alt="product" />
                                    @endif
                                </a>
                                @else
                                <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $Related_product->id }}">
                                    <img src="{{ asset('images/no-image.jpg') }}" width="280" height="280" alt="product" />
                                </a>
                                @endif

                                {{-- <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-20%</div>
                                </div> --}}
                        </figure>
                        <div class="product-details">
                            <div class="category-list">
                                <a href="{{ URL::to('categorywise-product') }}/{{ $category_name }}/{{ $Category->id }}" class="product-category">{{ $Category->name }}</a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ URL::to('product-details') }}/{{ $new_product_name }}/{{ $Related_product->id }}">{{ $Related_product->name }}</a>
                            </h3>
                            {{-- <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div> --}}
                            <!-- End .product-container -->
                            <div class="price-box">
                                @if($Related_product->discount_amount)
                                    <span class="old-price">৳{{ $Related_product->sale_price }}</span>
                                    <span class="product-price">৳{{ number_format($Related_product->sale_price - $Related_product->discount_amount,2) }}</span>
                                @else
                                    <span class="product-price">৳{{ $Related_product->sale_price }}</span>
                                @endif
                            </div>
                            <!-- End .price-box -->
                            <div class="product-action">
                                <a href="javascript:void(0);" class="btn-icon btn-add-cart add-to-cart" data-id="{{ $Related_product->id }}"><i class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                <a href="javascript:void(0);" class="btn-icon btn-add-cart buy-now" data-id="{{ $Related_product->id }}"><i class="icon-shopping-cart"></i><span>BUY NOW</span></a>
                            </div>
                        </div>
                        <!-- End .product-details -->
                    </div>
                @endforeach
            </div>
            <!-- End .products-slider -->
        </div>
        <!-- End .products-section -->
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
<!-- End .main -->

@endsection
@section('script')

@endsection
