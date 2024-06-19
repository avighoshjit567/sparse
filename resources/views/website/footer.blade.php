<footer class="footer bg-dark position-relative">
            <div class="footer-middle">
                <div class="container position-static">
                    <div class="footer-ribbon">Get in touch</div>

                    <div class="row">
                        <div class="col-lg-5 col-sm-6 pb-2 pb-sm-0">
                            <div class="widget">
                                <h4 class="widget-title">About Us</h4>
                                <a href="{{ URL::to('/') }}">
                                    <img src="{{ URL::to($CompanySetting->footer_logo) }}" alt="Logo" class="logo-footer">
                                    {{-- <img src="{{ URL::to('public/assets/images/logo.png') }}" alt="Logo" class="logo-footer"> --}}
                                </a>
                                <p class="m-b-4">{{$CompanySetting->footer_about_us}}</p>
                                {{-- <a href="#" class="read-more text-white">read more...</a> --}}
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-5 col-sm-6 pb-4 pb-sm-0">
                            <div class="widget mb-2">
                                <h4 class="widget-title mb-1 pb-1">Contact Info</h4>
                                <ul class="contact-info m-b-4">
                                    <li>
                                        <span class="contact-info-label">Address:</span>{{$CompanySetting->address}}
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span><a href="tel:{{$CompanySetting->mobile}}">{{$CompanySetting->mobile}}</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:{{$CompanySetting->email}}">{{$CompanySetting->email}}</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Working Days/Hours:</span> Sat - Fri / 9:00 AM - 9:00 AM
                                        <br> 24 Hours / 7 Days
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="{{$CompanySetting->facebook}}" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                    <a href="{{$CompanySetting->whatsapp}}" class="social-icon social-whatsapp fab fa-whatsapp" target="_blank" title="Whatsapp"></a>
                                </div>
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-2 col-sm-6 pb-2 pb-sm-0">
                            <div class="widget">
                                <h4 class="widget-title pb-1">Customer Service</h4>

                                <ul class="links">
                                    <li><a href="#">Help & FAQs</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">© Sparse eCommerce. 2024. All Rights Reserved</span>
                    </div>

                </div>
            </div>
            <!-- End .footer-bottom -->
        </footer>
        <!-- End .footer -->
