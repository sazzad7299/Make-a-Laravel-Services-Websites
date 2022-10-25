@extends('frontend.layouts.main')
@section('frontcss')
<style>
    .no-background .nav  li a{
            color:white!important;
        }
        .no-background .nav .dropdown-menu li a{
            color: #333333!important;
        }
</style>
@stop
@section('main-content')
        <!-- Start Banner
    ============================================= -->
    <div class="banner-area shape-index transparent-nav content-double text-medium text-center">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items thumb-140">
                        <div class="row align-center">
                            <div class="col-lg-12 left-info default-padding">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h1>One Stop Solution for Your Business</h1>
                                </div>
                                {{-- Search Area --}}
                                <div class="subscribe-area   text-center">
                                    <div class="subscribe col-md-8 col-sm-12 col-md-auto">
                                        <form action="#">
                                            <div class="input-group stylish-input-group">
                                                <select class="form-control">
                                                    <option value="">Digital Marketing</option>
                                                    <option value="">Digital Marketing</option>
                                                    <option value="">Digital Marketing</option>
                                                    <option value="">Digital Marketing</option>
                                                    <option value="">Digital Marketing</option>
                                                </select>
                                                <input type="email" placeholder="Your Services" class="form-control"
                                                    name="email">
                                                <span class="input-group-addon">
                                                    <button type="submit">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- Search Area End--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wavesshape">
                    <img src="assets/img/4.jpg" alt="Shape">
                </div>

            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!--======================Start Services======================= -->
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>What We Offer</h2>
                        <p>We are here to provide the services to grow your business up. Here, you can find the support
                            of Graphics, Branding, Marketing, Software’s & More</p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">
                        <!-- Single Item -->

                        @foreach ($frontServices as $serv)
                        @if ($serv->parent_id == NULL)
                        <a href="{{route('singleService',[$serv->slug])}}">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{asset('uploads/service/icon/'.$serv->ico)}}" alt="">
                                    <h5>{{$serv->title}}</h5>
                                    <p>
                                        {{ Str::limit(strip_tags( $serv->description)) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                        @endif
                        @endforeach
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- start Emi Banner Area -->
    <div id="emi-banner">
        <div class="container default-padding">
            <img src="assets/img/emi.webp" alt="">
        </div>
    </div>
    <!-- End Emi Banner Area -->

<!--  ====================Start Branding========================= -->
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>For Your Digital Marketing</h2>
                        <p>We are here to provide the services to grow your business up. Here, you can find the support
                            of Graphics, Branding, Marketing, Software’s & More</p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">
                        @foreach ($frontServices as $serv)
                        @if ($serv->parent_id == 9)
                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{asset('uploads/service/icon/'.$serv->ico)}}" alt="">
                                    <h5>{{$serv->title}}</h5>
                                    <p>
                                        {{ Str::limit(strip_tags( $serv->description)) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Services -->

<!--=====================Start Best Deals ======================== -->
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Today's Offer</h2>
                        <p>We are here to provide the services to grow your business up. Here, you can find the support
                            of Graphics, Branding, Marketing, Software’s & More</p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <div class="services-carosul owl-carousel owl-theme text-center">
                        @foreach ($frontServices as $serv)
                        <a href="">
                            <div class="single-item">
                                <div class="item">
                                    <img src="{{asset('uploads/service/icon/'.$serv->ico)}}" alt="">
                                    <h5>{{$serv->title}}</h5>
                                    <p>
                                        {{ Str::limit(strip_tags( $serv->description)) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Services -->
<!-- ====================Start Why Chose Us========================= -->
    <div id="about" class="choseus-area default-padding">
        <div class="container">
            <div class="choseus-items">
                <div class="row">
                    <div class="col-lg-6 thumb">
                        <img src="{{asset('assets/img/illustration/1.png')}}" alt="Thumb">
                    </div>
                    <div class="col-lg-6 info">
                        <h2>Create your app page <br>with expert developer</h2>
                        <p>
                            If you think your business needs to grow, then get started with us.
                        </p>
                        <ul>
                            <li>Cultivated an up solicitude mr unpleasant. </li>
                            <li>Improved own provided blessing</li>
                            <li>Moment led family.</li>
                            <li>Opinions property the supplied. </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="customer">
                <div class="col-lg-4 col-md-4 item">
                    <div class="fun-fact">
                        <div class="timer" data-to="230" data-speed="5000"></div>
                        <span class="medium">Satisfied customers</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 item">
                    <div class="fun-fact">
                        <div class="timer" data-to="89" data-speed="5000"></div>
                        <span class="medium">Professional agents</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 item">
                    <div class="fun-fact">
                        <div class="timer" data-to="89" data-speed="5000"></div>
                        <span class="medium">Professional agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Why Us -->

<!--=====================Start Work Process Area======================== -->
    <div class="work-process-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>{{$titles->progress_title}}</h2>
                        <p>
                            {{$titles->progress_text}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="works-process-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-chess"></i>
                                <span>01</span>
                            </div>
                            <div class="info">
                                <h4>Discussion</h4>
                                <p>
                                    Evening do forming observe spirits is in. Country hearted be of justice sending. On
                                    so they as with room cold
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-bong"></i>
                                <span>02</span>
                            </div>
                            <div class="info">
                                <h4>Strategy & Testing</h4>
                                <p>
                                    Evening do forming observe spirits is in. Country hearted be of justice sending. On
                                    so they as with room cold
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-copy"></i>
                                <span>03</span>
                            </div>
                            <div class="info">
                                <h4>Reporting</h4>
                                <p>
                                    Evening do forming observe spirits is in. Country hearted be of justice sending. On
                                    so they as with room cold
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
<!--=====================Start Work Process End======================== -->

 <!-- ======================Start Blog======================= -->
    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>{{$titles->blog_title}}</h2>
                        <p>
                            {{$titles->blog_text}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{url('news/'.$blog->slug)}}">
                                    <img src="{{asset('uploads/blog/medium/'.$blog->image)}}" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{url('news/'.$blog->slug)}}">{{$blog->title}}</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt "></i>  {{ date('d M, Y', strtotime($blog->created_at)) }}</a></li>
                                        <li><a href="{{route('singleCat',[$blog->category->slug])}}"><i class="fas fa-flag"></i> {{$blog->category->name}}</a></li>
                                    </ul>
                                </div>
                                <p style="display: block;overflow:hidden">
                                    {{ Str::limit(strip_tags( $blog->description)) }}
                                    <a href="{{url('news/'.$blog->slug)}}">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <a class="btn circle btn-theme effect btn-sm m-auto" href="{{route('blog')}}">Load More</a>

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading single text-center">
                        <h2>{{$titles->testimonial_title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-items text-center">
                        <div class="carousel slide" data-ride="carousel" data-interval="500000"
                            id="testimonial-carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <span class="quote"></span>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Junl Sarukh</h4>
                                    <span>CEO of Softing</span>
                                </div>
                                <div class="carousel-item">
                                    <span class="quote"></span>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Anil Spia</h4>
                                    <span>Director of Softing</span>
                                </div>
                                <div class="carousel-item">
                                    <span class="quote"></span>
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick
                                        round it or order. Add past see west felt did any. Say out noise you taste merry
                                        plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Paul Munni</h4>
                                    <span>Developer of Softing</span>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="1">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>
                                <li data-target="#testimonial-carousel" data-slide-to="2">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->



    <!-- Start Contact Area-->
     @include('frontend.getintouch')
    <!-- End Contact -->
@endsection


