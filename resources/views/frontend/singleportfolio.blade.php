@extends('frontend.layouts.main')
@section('main-content')
    <!-- Start Blog
    ============================================= -->
    <div id="blog" class="blog-area bg-gray full-width single default-padding">
        <div class="container">
            <div class="row">
                {{-- <div class="blog-items">

                </div> --}}
                <div class="col-xl-12 col-lg-12">
                    <div class="item">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset('uploads/portfolio/large/'.$item->image)}}" alt="Thumb">
                                    <div class="post-type">
                                    <i class="fas fa-images"></i>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <h3>
                                <a href="#">{{$item->title}}</a>
                            </h3>
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="fas fa-calendar-alt "></i> {{ date('d M, Y', strtotime($item->created_at)) }}</a></li>
                                    <li><a href="#"><i class="fas fa-flag"></i>HELLOBIZER </a></li>
                                </ul>
                            </div>
                            {!!$item->desc!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
