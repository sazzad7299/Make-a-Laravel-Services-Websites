@extends('frontend.layouts.main')
@section('main-content')
    <!-- Start Blog
    ============================================= -->
    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>{{$titles->portfolio_title}}</h2>
                        <p>{{$titles->portfolio_text}} </p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">

                    @foreach ($portfolio as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('singlePortfolio',[$item->slug])}}">
                                    <img src="{{asset('uploads/portfolio/medium/'.$item->image)}}" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{route('singlePortfolio',[$item->slug])}}">{{$item->title}}</a>
                                </h4>
                                <p>
                                    {{ Str::limit(strip_tags( $item->desc)) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
