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



    <!-- Start Contact Area
    ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Contact Us</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited
                            exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                            out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 address">
                    <div class="address-items">
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.853593695426!2d90.42200211462506!3d23.788227293247925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a8e4b5650966719%3A0x3414b666234f80a1!2sHelloBizer%20-%20Business%20Service%20Provider!5e0!3m2!1sen!2sbd!4v1661169583763!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 contact-form">
                    <h2>Let's lalk about your idea</h2>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Tell Us About Project *" rows="4" cols="50"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
