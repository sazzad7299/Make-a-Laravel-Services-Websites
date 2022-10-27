@extends('admin.layouts.admin_design')
@push('admincss')
@endpush
@section('content')
<!-- Bordered Table -->
<div class="col-sm-12">
    <div class="panel panel-default card-view">

         <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <form action="{{route('admin.settings')}}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_title"><strong>Website Title:</strong></label>
                                <input type="text" name="site_title" id="site_title" value="{{$titles->site_title}}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="service_text"><strong>Website Meta Title:</strong></label>
                                <textarea name="site_des" id="site_des" rows="2" class="form-control">{{$titles->site_des}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_title"><strong>Service Title:</strong></label>
                                <input type="text" name="service_title" id="service_title" value="{{$titles->service_title}}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="service_text"><strong>Service Shot Desctiption:</strong></label>
                                <textarea name="service_text" id="service_text" rows="2" class="form-control">{{$titles->service_text}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="portfolio_title"><strong>Portfolio Title:</strong></label>
                                <input type="text" name="portfolio_title" id="portfolio_title" value="{{$titles->portfolio_title}}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="portfolio_text"><strong>Portfolio Shot Desctiption:</strong></label>
                                <textarea name="portfolio_text" id="portfolio_text" rows="2" class="form-control">{{$titles->portfolio_text}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="testimonial_title"><strong>Testimonail Title:</strong></label>
                                <input type="text" name="testimonial_title" id="testimonial_title" value="{{$titles->testimonial_title}}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="testimonial_text"><strong>Testimonail Shot Desctiption:</strong></label>
                                <textarea name="testimonial_text" id="testimonial_text" rows="2" class="form-control">{{$titles->testimonial_text}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="team_title"><strong>Team Title:</strong></label>
                                <input type="text" name="team_title" id="team_title" value="{{$titles->team_title}}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="team_text"><strong>Team Shot Desctiption:</strong></label>
                                <textarea name="team_text" id="team_text" rows="2" class="form-control">{{$titles->team_text}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="progress_title"><strong>Progress  Title:</strong></label>
                                <input type="text" name="progress_title" id="progress_title" value="{{$titles->progress_title}}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="progress_text"><strong>Progress Shot Desctiption:</strong></label>
                                <textarea name="progress_text" id="progress_text" rows="2" class="form-control">{{$titles->progress_text}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="blog_title"><strong>Blog Title:</strong></label>
                                <input type="text" name="blog_title" id="blog_title" value="{{$titles->blog_title}}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="blog_text"><strong>Blog Shot Desctiption:</strong></label>
                                <textarea name="blog_text" id="blog_text" rows="2" class="form-control">{{$titles->blog_text}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_info"><strong>Contact Info:</strong></label>
                                <textarea name="contact_info" id="contact_info" rows="2" class="form-control">{{$titles->contact_info}}</textarea>

                            </div>
                            <div class="form-group">
                                <label for="address"><strong>Address:</strong></label>
                                <textarea name="address" id="address" rows="2" class="form-control">{{$titles->address}}</textarea>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="blog_text"><strong>Social Link</strong></label>
                                <textarea name="social" id="social" rows="5" class="form-control">{{$titles->social}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="map"><strong>Website Map(iframe):</strong></label>
                                <textarea name="map" id="map" rows="5" class="form-control">{{$titles->map}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm"> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Bordered Table -->

@endsection
