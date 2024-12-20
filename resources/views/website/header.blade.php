
<header class="header home">
            <div class="header-top bg-primary text-uppercase">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#" class="pl-0"><i class="flag-us flag"></i>ENG</a>
                            <!-- <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div> -->
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <div class="header-dropdown ml-3 pl-1">
                            <a href="#">BDT</a>
                            <!-- <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div> -->
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto">
                        <p class="top-message mb-0 d-none d-sm-block">Welcome To {{ $CompanySetting->business_name }}!</p>
                        <div class="header-dropdown dropdown-expanded mr-3">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
                                    {{-- <li><a href="#">আপনাকে স্পারসে তে স্বাগতম!</a></li> --}}
                                    <!-- <li><a href="demo1-contact.html">Contact Us</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="#" class="login-link">Log In</a></li> -->
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="{{$CompanySetting->facebook}}" class="social-icon social-facebook icon-facebook ml-0" target="_blank"></a>
                            <a href="{{$CompanySetting->whatsapp}}" class="social-icon social-facebook fab fa-whatsapp ml-0" target="_blank"></a>
                            <!-- <a href="#" class="social-icon social-twitter icon-twitter ml-0" target="_blank"></a> -->
                            <a href="{{$CompanySetting->instagram}}" class="social-icon social-instagram icon-instagram ml-0" target="_blank"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle text-dark sticky-header">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ URL::to($CompanySetting->logo) }}" width="111" height="44" alt="Sparse Logo">
                            {{-- <img src="{{ URL::to('public/assets/images/logo.png') }}" width="111" height="44" alt="Sparse Logo"> --}}
                        </a>
                    </div>
                    <!-- End .header-left -->
                    @php
                        $Categories = App\Models\Category::get();
                    @endphp

                    <div class="header-right w-lg-max pl-2">
                        <div class="header-search header-icon header-search-inline header-search-category w-lg-max">
                            {{-- <a href="" method="" class="search-toggle" role="button"><i class="icon-search-3"></i></a> --}}
                            <form action="{{ route('search-process') }}" method="post">
                                @csrf
                                <div class="header-search-wrapper">
                                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="category_id">
                                            <option value="All">All Categories</option>
                                            @foreach ($Categories as $Category)
                                                <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex align-items-center pr-xl-5 mr-5 mr-xl-3 ml-5">
                            <i class="icon-phone-2"></i>
                            <h6 class="pt-1 line-height-1">Call us now<a href="tel:#" class="d-block text-dark ls-10 pt-1">{{ $CompanySetting->hotline }}</a></h6>
                        </div>
                        <!-- End .header-contact -->

                        <!-- <a href="{{ URL::to('login') }}" class="header-icon header-icon-user"><i class="icon-user-2"></i></a> -->

                        <!-- <a href="wishlist.html" class="header-icon"><i class="icon-wishlist-2"></i></a> -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle" id="cart-total-qty">{{ count((array) session('cart')) }}</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="javascript:void(0)" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                        <div class="dropdown-cart-products">
                                            <div id="cart-all-item">
                                                @if (session('cart'))
                                                    @foreach (session('cart') as $id => $details)
                                                        <div class="product-details">
                                                            <h4 class="product-title">
                                                                <a href="#">{{ $details['name'] }}</a> <br>
                                                                @if($details['size_name'])
                                                                    <a href="#">Model: {{ $details['size_name'] }}</a>
                                                                @endif
                                                            </h4>
                                                            <span class="cart-product-info">
                                                                <span class="cart-product-qty">{{ $details['quantity'] }}</span> × ৳{{ $details['price'] }}
                                                            </span>
                                                        </div>
                                                        <figure class="product-image-container">
                                                            <a href="#" class="product-image">
                                                                <img src="{{ URL::asset($details['image']) }}" alt="product" width="80" height="80">
                                                            </a>
                                                            <a href="javascript:void(0)" class="btn-remove cart_remove" data-id="{{ $id }}" title="Remove Product"><span>×</span></a>
                                                        </figure>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>

                                    <!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">
                                            @php $total = 0 @endphp
                                            @foreach ((array) session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            @endforeach
                                            {{ $total }}
                                        </span>
                                    </div>
                                    <!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{ URL::to('cart') }}" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="{{ URL::to('checkout') }}" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->
        </header>
        <!-- End .header -->

