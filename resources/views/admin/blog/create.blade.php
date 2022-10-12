@extends('admin.layouts.admin_design')
@push('admincss')
<!-- Summernote css -->
<link rel="stylesheet" href="{{asset('backend/vendors/bower_components/summernote/dist/summernote.css')}}" />
<!-- bootstrap-tagsinput CSS -->
<link href="{{asset('backend/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css"/>
<!-- switchery CSS -->
<link href="{{asset('backend/vendors/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- Bootstrap Switches CSS -->
<link href="{{asset('backend/vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">

                    <div class="panel-body">
                        <div class="form-wrap">
                            <div class="row">
                                <form action="{{ url('admin/blog')}}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group @error('title') has-error has-danger has-feedback @enderror">
                                        <label for="title">Title</label>
                                        <input type="text" placeholder="Title" class="form-control" name="title" id="title" value="{{old('title')}}">
                                        @error('title')
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                        <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group @error('content') has-error has-danger has-feedback @enderror">
                                        <label for="content">Description:</label>
                                        <textarea name="content" id="content" class="summernote" >{{old('content')}}</textarea>
                                        @error('content')
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                        <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group @error('image') has-error has-danger has-feedback @enderror">
                                        <label for="tag">Image:</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        @error('image')
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                        <p class='text-danger'>{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <label for="tag">Video(url):</label>
                                        <input type="tex" name="video" id="video" class="form-control">

                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <label for="tag">Tag:</label>
                                        <br>
                                        <input type="text" value="HelloBizer,Online Services,PageExpert" data-role="tagsinput" placeholder="add tags" name="tag" class="form-control">
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        {{-- <input type="checkbox" name="ststus1" id="status1" > --}}
                                        <label class="control-label mb-10">Status</label>
                                            <div>
                                                <input id="check_box_switch" type="checkbox" data-off-text="Inactive" data-on-text="Active"  class="bs-switch"  name="status" checked>
                                            </div>
                                    </div>
                                    </div>

                                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary" >
                                   </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('adminjs')
<!-- Bootstrap Tagsinput JavaScript -->
<script src="{{ asset('backend/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{asset('backend/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
<script src="{{asset('backend/vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('backend/vendors/bower_components/summernote/dist/summernote.min.js')}}"></script>

<!-- Summernote Wysuhtml5 Init JavaScript -->
<script src="{{asset('backend/dist/js/summernote-data.js')}}"></script>

@endpush
