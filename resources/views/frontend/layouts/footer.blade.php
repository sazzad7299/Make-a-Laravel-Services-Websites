<!-- Start Footer
    ============================================= -->
    <footer class="footer-padding bg-light">
        <div class="container">
            <div class="f-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item">
                            <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
                            <p>
                                One Stop Solution for Your Business
                            </p>
                            <h4>Social Address</h4>
                                <ul class="social">
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <section class="site-heading">
                            <h2 style="font-size: 18px">Qwick Link</h2>
                            <ul>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('service')}}">Service</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('portfolio')}}">Portfolio</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('project')}}">Project</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('about')}}">About</a>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a class="smooth-menu" href="{{route('contact')}}">Contact</a>
                                </li>
                                <li >
                                    <a class="smooth-menu" href="{{route('blog')}}">Blog</a>
                                </li>
                            </ul>
                        </section><!-- .widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <section class="site-heading">
                            <h2 style="font-size: 18px">Recent Post</h2>
                            <ul>
                                @foreach ($recentBlogs as $recent)
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{route('singlepost',[$recent->slug])}}">{{ $recent->title }}
                                    </a>
                                </li>
                                @endforeach


                            </ul>
                        </section><!-- .widget -->
                    </div>
                    <div class="col-lg-4 col-md-6 item f-item">

                        <section class="site-heading address">
                            <h2 style="font-size: 18px">Contact info</h2>
                            <ul>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <div class="icon">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                    </div>
                                    <div class="info">
                                        <p>Location:</p>
                                        <span>Level- 02, BTI Premier Shopping Complex, Shahajadpur, Dhaka -1212
                                        </span>
                                    </div>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <p>Email:</p>
                                        <span>support@validtheme.com</span>
                                    </div>
                                </li>
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <p>Phone:</p>
                                        <span>+44-20-7328-4499</span>
                                    </div>
                                </li>

                            </ul>
                        </section><!-- .widget -->
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>&copy; Copyright 2022, Develop by <a herf="#">HelloBizer</a></a></p>
                        </div>
                        <div class="col-lg-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Polices</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->
