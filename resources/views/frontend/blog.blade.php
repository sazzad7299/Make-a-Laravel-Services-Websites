@extends('frontend.layouts.main')
@section('main-content')
    <!-- Start Blog
    ============================================= -->
    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Blog</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.
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
                                        <li><a href="#"><i class="fas fa-flag"></i> {{$blog->category->name}}</a></li>
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

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
