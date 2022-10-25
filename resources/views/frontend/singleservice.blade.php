@extends('frontend.layouts.main')
@section('main-content')


    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{$serv->title}}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('service')}}">Services</a></li>
                        <li class="active">{{$serv->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start 404
    ============================================= -->
    <!-- Start Banner
    ============================================= -->
    <div class="banner-area with-carousel content-double transparent-nav  normal-text">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items">
                        <div class="row align-center">
                            <div class="col-lg-5 left-info">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h1>{{$serv->heading}}</h1>
                                    <p>
                                        {!! $serv->description !!}
                                    </p>
                                    <a class="btn circle btn-theme effect btn-sm popup-youtube" href="{{route('quote2')}}">Get a Free Quote <i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-7 right-info">
                                <img src="{{asset('uploads/service/large/'.$serv->image)}}" alt="Thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
<!--===================Start Services========================== -->
    @if ($count>0)
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>For Your {{$serv->title}}</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <!-- Single Item -->

                        @foreach ($frontServices as $sub)
                         @if ($sub->parent_id == $serv->id)
                         <div class="col-lg-3 col-md-6 single-item">
                            <a href="{{route('singleService',[$sub->slug])}}">
                                <div class="single-item">
                                    <div class="item">
                                        <img src="{{asset('uploads/service/icon/'.$sub->ico)}}" alt="">
                                        <h5>{{$sub->title}}</h5>
                                        <p>
                                            {{ Str::limit(strip_tags( $sub->description)) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                            </div>
                         @endif
                        @endforeach

                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- End Services -->
    <!-- End 404 -->

    <!-- Start Footer
@endsection
