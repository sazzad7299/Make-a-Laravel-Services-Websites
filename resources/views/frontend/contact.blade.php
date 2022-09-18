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
                                    <h2>Contact Us</h2>
                                    <p >
                                        Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant in in insensible favourable. Latter remark hunted enough vulgar say man. Sitting hearted on it without me.
                                    </p>

                                </div>
                            </div>
                            <div class="col-lg-7 right-info">
                                <img src="assets/img/800x600.png" alt="Thumb" width="80%">
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

        <!-- Start Features
    ============================================= -->
    <div id="features" class="features-area cell-items default-padding bg-gray">
        <div class="container">
            <div class="row contant">
                <div class="col-lg-6 features-items">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">

                                <div class="info">
                                    <h4>Office Address</h4>
                                    <p>
                                        Level- 02, BTI Premier Shopping Complex, Shahajadpur, Dhaka -1212
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <h4>Contact info</h4>
                                    <p>
                                        Email: support@hellobizer.com <br> Phone: +88 01706-57587
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <h4>Open hour's</h4>
                                    <p>
                                        We are open Thurs-Tue at 10:00AM – 07:00 PM(GMT 6+)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="info">
                                    <h4 style="text-align: center;">Social Info</h4>
                                    <div class="f-item" >
                                        <ul class="social">

                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>

                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 address">
                    <div class="address-items">
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.853593695426!2d90.42200211462506!3d23.788227293247925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a8e4b5650966719%3A0x3414b666234f80a1!2sHelloBizer%20-%20Business%20Service%20Provider!5e0!3m2!1sen!2sbd!4v1661169583763!5m2!1sen!2sbd" style="width:100%;height:400px;margin-top:20px;border-radius: 20px;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

@endsection
