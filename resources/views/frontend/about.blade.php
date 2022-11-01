@extends('frontend.layouts.main')
@section('main-content')

    <!-- End Header -->
    <!-- Start Banner
    ============================================= -->
    <div class="banner-area content-double shape-line bg-theme-small normal-text">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items">
                        <div class="row align-center">
                            <div class="col-lg-5 left-info simple-video">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h1>{{$about->heading}}</h1>
                                    <p>
                                        {{$about->desc}}
                                    </p>

                                </div>
                            </div>
                            <div class="col-lg-7 right-info">
                                <img src="{{asset('uploads/pages/'.$about->banner)}}" alt="Thumb">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wavesshape">
                    <img src="assets/img/waves-shape.svg" alt="Shape">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
    <div id="about" class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 default info">
                    <h4>Story about us</h4>
                    <h2>Our Vision</h2>
                    <div class="bottom-info">
                        <ul>
                            <li>
                                <i class="fas fa-check"></i> <span>Elderly is detract tedious assured private</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i> <span>Do travelling companions contrasted</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i> <span>Mistress strongly remember up</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i> <span>Branched is on an ecstatic directly it</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 services-info">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                                <i class="flaticon-ticket"></i>
                                <h4>Vision 1</h4>
                                <p>
                                    Downs those still witty an balls so chief so. Moment an little remain no lively
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                                <i class="flaticon-speech-bubble"></i>
                                <h4>Vision 2</h4>
                                <p>
                                    Downs those still witty an balls so chief so. Moment an little remain no lively
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                                <i class="flaticon-email"></i>
                                <h4>Vision 3</h4>
                                <p>
                                    Downs those still witty an balls so chief so. Moment an little remain no lively
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="item">
                                <i class="flaticon-file"></i>
                                <h4>Vision 4</h4>
                                <p>
                                    Downs those still witty an balls so chief so. Moment an little remain no lively
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

        <!-- Start About Bizer Area
    ============================================= -->
    <div id="pricing" class="pricing-area default-padding bg-gray bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>About HelloBizer</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="pricing pricing-simple text-center">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="pricing-item">
                            <ul>
                                <li class="pricing-header">
                                    <h4>WE Are HelloBizer</h4>
                                </li>
                                <p>We are the people who eat, drink, sleep and play with SE0 and development. We don’t do work for money, we love this work and that’s why we earn money. We love to work collaboratively with our clients to ensure that the objectives are met by our proven strategies.</p>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pricing-item active">
                            <ul>
                                <li class="pricing-header">
                                    <h4>How We Formed</h4>

                                </li>
                                <p>When we started we had nothing more than few computers, now have 18 members in our team. How we did it? We formed with very easy calculation, gradually with 1,2,3,4…..18 by satisfying over 300 clients for SEO, SMM and Development Projects for the last six years.</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Bizer Area -->


    <!-- Start Team
    ============================================= -->
    <div id="team" class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Innovative Team</h2>
                        <p>
                            Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.
                        </p>
                    </div>
                </div>
            </div>
            <div class="team-items">
                <div class="row">
                    @forelse ($teams as $team)
                    <div class="col-lg-3 col-md-3">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset('uploads/team/'.$team->image)}}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>{{$team->name}}</h4>
                                <span>{{$team->title}}</span>
                            </div>
                        </div>
                    </div>

                    @empty
                    <p class="text-danger"> No team Available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->

    @include('frontend.getintouch')
@endsection

