@extends('frontend.layouts.main')
@section('main-content')
    <!-- Start Blog
    ============================================= -->
    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Project Overview</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.
                        </p>
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
