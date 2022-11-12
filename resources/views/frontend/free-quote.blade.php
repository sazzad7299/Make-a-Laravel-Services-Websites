@extends('frontend.layouts.main')
@section('main-content')
    <!-- Start Contact Area
        ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Find Out How We Can Increase Your Profit</h2>
                        <p>Schedule a meeting to discuss how Bizcope can help you to double, triple or quadruple your sales
                            and revenue. So, tell us what you want – simply fill in the form below and we’ll be in touch
                            with you shortly 😎
                            Phone: +8801636787936
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="form-header">
                        <h3>Schedule a Brief Meeting to Discuss

                        </h3>
                    </div> -->
                <div class="pricing-item">
                    <ul>
                        <li class="pricing-header">
                            <h2>Schedule a Brief Meeting to Discuss</h2>
                            @if (Session::has('success'))
                                <p style="font-size: 20px; color: green;padding-top: 20px;">{!! Session('success') !!}</p>
                            @endif
                        </li>
                        <form action="{{ route('freequotesend') }}" class="free-quote" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" placeholder="Your Name"name="name" required>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" placeholder="Facebook Page/Website Url"
                                        name="url" required>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <select name="mainservice" id="mainservice" class="form-control" rel="2" required>
                                        <option value="" style="display: none" selected>Select Services</option>
                                        @foreach ($frontServices as $service)
                                            @if ($service->parent_id == null)
                                                <option value="{{ $service->id }}" rel="{{ $service->id }}"
                                                    class="mainservice"> {{ $service->title }}</option>
                                            @endif
                                        @endforeach


                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <select name="subservice" id="subservice" class="form-control">


                                    </select>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *" rows="5"></textarea>
                                </div>
                            </div>
                            <li class="footer">
                                <button class="btn circle btn-theme border btn-sm">Send</button>
                            </li>
                        </form>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
