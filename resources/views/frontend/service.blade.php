@extends('frontend.layouts.main')
@section('main-content')
        <!-- Start Services
    ============================================= -->
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>{{$titles->service_title}}</h2>
                        <p>
                            {{$titles->service_text}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <!-- Single Item -->


                        @forelse ( $categories2 as $cat )
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
                             <p>No Services Avaiable</p>
                            @endforelse

                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


@endsection
