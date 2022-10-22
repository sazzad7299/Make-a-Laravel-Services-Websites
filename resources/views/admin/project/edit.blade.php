@extends('admin.layouts.admin_design')
@push('admincss')
    <link rel="stylesheet" href="{{ asset('backend/vendors/bower_components/summernote/dist/summernote.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/dist/css/swetchy.css') }}">
@endpush
@section('content')
<!-- Bordered Table -->
<div class="col-sm-12">
    <div class="panel panel-default card-view">
        <div class="panel-heading">
            <div class="pull-left">
                <h6 class="panel-title txt-dark">Edit Portfolio: <strong>{{$project->title}}</strong></h6>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.project.index') }}" class="btn btn-success">All List</a>
            </div>
        </div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <form action="{{ route('admin.project.update',[$project->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group  @error('title') has-error has-danger has-feedback @enderror">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title',$project->title) }}">
                        @error('title')
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <p class='text-danger'>{{ $message }}</p>
                        @enderror
                    </div>
                    <div
                        class="col-md-12 col-sm-12 col-xs-12 form-group @error('content') has-error has-danger has-feedback @enderror">
                        <label for="content">Description:</label>
                        <textarea name="content" id="content" class="summernote">{{ old('content',$project->desc) }}</textarea>
                        @error('content')
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <p class='text-danger'>{{ $message }}</p>
                        @enderror
                    </div>
                    <div
                        class="col-md-6 col-sm-12 col-xs-12 form-group @error('image') has-error has-danger has-feedback @enderror">
                        <label for="tag">Image:</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <p class='text-danger'>{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">

                        <section title=".slideThree">
                            <!-- .slideThree -->
                            <div class="slideThree">
                                <input type="checkbox" value="1"  id="slideThree" name="status"
                                   @if ($project->status ==1)  checked @endif />
                                <label for="slideThree"></label>
                            </div>
                            </div>
                            <!-- end .slideThree -->
                        </section>
                    </div>
                    <button class="btn btn-primary btn-sm"> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Bordered Table -->

@endsection
@push('adminjs')
    <script src="{{ asset('backend/vendors/bower_components/summernote/dist/summernote.min.js') }}"></script>
    <!-- Summernote Wysuhtml5 Init JavaScript -->
    <script src="{{ asset('backend/dist/js/summernote-data.js') }}"></script>
@endpush
