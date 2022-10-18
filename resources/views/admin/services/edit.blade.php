@extends('admin.layouts.admin_design')
@push('admincss')
    <!-- Summernote css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/bower_components/summernote/dist/summernote.css') }}" />
    <!-- bootstrap-tagsinput CSS -->
    <link href="{{ asset('backend/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('backend/dist/css/swetchy.css') }}">
@endpush

@section('content')
<div class="col-sm-12">
    <div class="panel panel-default card-view">
        <div class="panel-heading">
            <div class="pull-left">
                <h6 class="panel-title txt-dark">Edit Service: <strong>{{$service->title}}</strong></h6>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.service.index') }}" class="btn btn-success">All List</a>
            </div>
        </div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body mt-20">
                <form action="{{ route('admin.service.update',[$service->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div
                        class="col-md-6 col-sm-6 col-xs-6 form-group @error('title') has-error has-danger has-feedback @enderror">
                        <label for="title">Title</label>
                        <input type="text" placeholder="Title" class="form-control" name="title"
                            id="title" value="{{ old('title',$service->title) }}">
                        @error('title')
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <p class='text-danger'>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label for="tag">Heading:</label>
                        <input type="tex" name="heading" id="heading" class="form-control" value="{{ old('heading',$service->heading) }}">

                    </div>
                    <div
                        class="col-md-6 col-sm-6 col-xs-6 form-group @error('parent_id') has-error has-danger has-feedback @enderror">
                        <label for="title">Main Service</label>
                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="" style="display: none" selected>Select Category</option>
                            @foreach ($parent as $c)
                                <option value="{{ $c->id }}" @if ($service->parent_id == $c->id) selected @endif> {{ $c->title }} </option>
                            @endforeach
                        </select>

                        @error('parent_id')
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <p class='text-danger'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 form-group @error('icon') has-error has-danger has-feedback @enderror">
                        <label for="icon">Icon:</label>
                        <input type="file" name="icon" id="icon" class="form-control">
                        @error('icon')
                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            <p class='text-danger'>{{ $message }}</p>
                        @enderror

                    </div>

                    <div
                        class="col-md-12 col-sm-12 col-xs-12 form-group @error('content') has-error has-danger has-feedback @enderror">
                        <label for="content">Description:</label>
                        <textarea name="content" id="content" class="summernote">{{ old('title',$service->description) }}</textarea>
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
                        <label for="tag">Tag:</label>
                        <br>
                        <input type="text"
                            value="@foreach ($tags as $tag)
                        {{ $tag->name }}, @endforeach"
                            data-role="tagsinput" placeholder="add tags" name="tag"
                            class="form-control">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">

                        <section title=".slideThree" style="width: 200px" >
                            <!-- .slideThree -->
                            <span>Status:</span>
                            <div class="slideThree">

                                <input type="checkbox" value="1" id="slideThree" name="status"
                                    checked />
                                <label for="slideThree"></label>
                            </div>
                            <!-- end .slideThree -->
                        </section>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('adminjs')
    <!-- Bootstrap Tagsinput JavaScript -->
    <script src="{{ asset('backend/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}">
    </script>

    <script src="{{ asset('backend/vendors/bower_components/summernote/dist/summernote.min.js') }}"></script>

    <!-- Summernote Wysuhtml5 Init JavaScript -->
    <script src="{{ asset('backend/dist/js/summernote-data.js') }}"></script>
@endpush
