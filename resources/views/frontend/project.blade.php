@extends('frontend.layouts.main')
@section('main-content')



    @foreach ($project as $item )
    <div class="banner-area content-double banner-top-padding text-dark  small-text" @if ($loop->iteration % 2==0)
        style="background-color: #f1f1f1 ;"
    @endif >
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items">
                        <div class="row align-center">
                            <div class="col-lg-6 left-info simple-video">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h1>{{$item->title}}</h1>
                                    <p>
                                        {!! Str::limit(strip_tags( $item->desc),500) !!}
                                    </p>
                                    <a class="btn circle btn-gray effect btn-sm" href="{{route('singleProject',[$item->slug])}}">View More</a>

                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                                <img src="{{asset('uploads/project/large/'.$item->image)}}" alt="Thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach
    <!-- End Banner -->


@endsection
