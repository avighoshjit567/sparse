<div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu menu-with-icon">
                    <li><a href="{{ route('home') }}"><i class="icon-home"></i>Home</a></li>
                    @php
                        $Categories = App\Models\Category::get();
                    @endphp
                    <li>
                        <a href="#" class="sf-with-ul"><i class="sicon-badge"></i>Categories</a>
                        <ul>
                            @foreach ($Categories as $Category)
                            @php
                                $category_name = str_replace(" ","-",$Category->name);
                            @endphp
                                <li><a href="{{ URL::to('categorywise-product') }}/{{ $category_name }}/{{ $Category->id }}">{{ $Category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="sf-with-ul"><i class="sicon-envelope"></i>Pages</a>
                        <ul>
                            <li>
                                <a href="{{ route('cart') }}">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="{{ route('checkout') }}">Checkout</a>
                            </li>
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li><a href="blog.html"><i class="sicon-book-open"></i>Blog</a></li>
                    <li><a href="demo1-about.html"><i class="sicon-users"></i>About Us</a></li> --}}
                </ul>

                <ul class="mobile-menu">
                    <li><a href="#">My Account</a></li>
                    {{-- <li><a href="demo1-contact.html">Contact Us</a></li> --}}
                    {{-- <li><a href="wishlist.html">My Wishlist</a></li> --}}
                    {{-- <li><a href="#">Site Map</a></li> --}}
                    <li><a href="{{ route('cart') }}">Cart</a></li>
                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->
