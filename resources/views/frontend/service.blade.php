@extends('frontend.layouts.main')
@section('main-content')
        <!-- Start Services
    ============================================= -->
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>What We Do</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <!-- Single Item -->

                        @foreach ($frontServices as $serv)
                        <div class="col-lg-3 col-md-6 single-item">
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
                        </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


@endsection
