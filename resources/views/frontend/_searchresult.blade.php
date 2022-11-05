@extends('frontend.layouts.main')
@section('main-content')


    <!-- Start Breadcrumb
    ============================================= -->

<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                @empty($search)

                @else
                <div class="col-lg-12 col-md-12">
                    <h1>Search Result For: <span style="color: #4ac4f3">{{$search}}</span></h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('service')}}">Services</a></li>
                        <li class="active"></li>
                    </ul>
                </div>
                @endempty

            </div>
        </div>
    </div>
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="services-box text-center">
                <div class="row">
                    <!-- Single Item -->


                            @forelse ( $services as $cat )
                              <div class="col-lg-3 col-md-6 single-item">
                                <a href="{{route('singleService',[$cat->slug])}}">
                                    <div class="single-item">
                                        <div class="item">
                                            <img src="{{asset('uploads/service/icon/'.$cat->ico)}}" alt="">
                                            <h5>{{$cat->title}}</h5>
                                            <p>
                                                {{ Str::limit(strip_tags( $cat->description)) }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            @empty
                             <h2>No Services Avaiable</h2>
                             <div class="banner-area">
                                <div class="form-group col-md-12 col-sm-12 col-lg-12">
                                    <div class="subscribe">
                                        <form action="{{route('service.search')}}" method="POST">
                                            @csrf
                                            <div class="input-group stylish-input-group">
                                                <input type="text" placeholder="Find your Solution" class="form-control" name="search"id="email">
                                                <span class="input-group-addon">
                                                    <button type="submit">
                                                        <i class="fa fa-paper-plane"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                             </div>
                            @endforelse

                </div>
            </div>
        </div>
    </div>

@endsection
