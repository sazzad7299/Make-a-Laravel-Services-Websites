@extends('frontend.layouts.main')
@section('main-content')
    <!-- Start Banner
    ============================================= -->
    <div class="banner-area with-carousel content-double transparent-nav bg-theme-small normal-text">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items">
                        <div class="row align-center">
                            <div class="col-lg-5 left-info">
                                <div class="site-heading" data-animation="animated fadeInUpBig">
                                    <h2>{{$contact->heading}}</h2>
                                    <p >
                                       {{$contact->desc}}
                                    </p>

                                </div>
                            </div>
                            <div class="col-lg-7 right-info">
                                <img src="{{asset('uploads/pages/'.$contact->banner)}}" alt="Thumb" width="80%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->


    <!-- Start Contact Area
    ============================================= -->
    <div id="contact" class="contact-us-area default-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Get In Touch</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited
                            exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                            out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('sendmessage')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="message" name="message"
                                        placeholder="Tell Us About Project *" rows="4" cols="50"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit c">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            @if(Session::has('success'))
                            <p>{!! Session('success') !!}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- End Contact -->

        <!-- Start Features
    ============================================= -->
    <div id="features" class="features-area cell-items default-padding bg-gray">
        <div class="container">
            <div class="row contant">
                {!! $titles->map!!}
            </div>
        </div>
    </div>
    <!-- End Features -->

@endsection
