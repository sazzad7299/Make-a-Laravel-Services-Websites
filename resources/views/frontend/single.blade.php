@extends('frontend.layouts.main')
@section('main-content')
    <!-- Start Blog
    ============================================= -->
    <div id="blog" class="blog-area bg-gray full-width single default-padding">
        <div class="container">
            <div class="row">
                {{-- <div class="blog-items">

                </div> --}}
                <div class="col-xl-9 col-lg-8">
                    <div class="item">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset('uploads/blog/large/'.$post->image)}}" alt="Thumb">
                                    <div class="post-type">
                                    <i class="fas fa-images"></i>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <h3>
                                <a href="#">{{$post->title}}</a>
                            </h3>
                            <div class="meta">
                                <ul>
                                    <li><a href="#"><i class="fas fa-calendar-alt "></i> {{ date('d M, Y', strtotime($post->created_at)) }}</a></li>
                                    <li><a href="#"><i class="fas fa-flag"></i> {{$post->category->name}}</a></li>
                                </ul>
                            </div>
                            {!!$post->description!!}
                            <div class="post-pagi-area">
                               @if(!empty($previous))
                               <a href="{{ route('singlepost', [$previous->slug]) }}" class="float-left"><i class="fas fa-arrow-left"></i> Previus Post</a>
                               @endif
                               @if(!empty($next))
                               <a href="{{ route('singlepost', [$next->slug]) }}" class="float-right">Next Post <i class="fas fa-arrow-right"></i></a>
                               @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 sidebar">
                    <div class="info">
                        <section class="site-heading">
                            <h2 style="font-size: 20px">Categories</h2>
                            <ul>
                                @foreach ($categories as $cat)
                                <li style="border-bottom: 1px dashed #4ac4f3; "><a href="{{route('singleCat',[$cat->slug])}}">{{$cat->name}}</a></li>
                                @endforeach
                            </ul>
                        </section><!-- .widget -->
                    </div>
                    <div class="info mt-5">
                        <section class="site-heading">
                            <h2 style="font-size: 20px">Recent Post</h2>
                            <ul>
                                @foreach ($blogs as $recent)
                                <li style="border-bottom: 1px dashed #4ac4f3;">
                                    <a href="{{route('singlepost',[$recent->slug])}}">{{ $recent->title }}<br><span>{{ date('d M, Y', strtotime($recent->created_at)) }}</span>
                                    </a>
                                </li>
                                @endforeach


                            </ul>
                        </section><!-- .widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
