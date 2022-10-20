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
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <div class="row">
                                <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div
                                        class="col-md-6 col-sm-6 col-xs-6 form-group @error('title') has-error has-danger has-feedback @enderror">
                                        <label for="title">Title</label>
                                        <input type="text" placeholder="Title" class="form-control" name="title"
                                            id="title" value="{{ old('title') }}">
                                        @error('title')
                                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                            <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div
                                        class="col-md-6 col-sm-6 col-xs-6 form-group @error('category') has-error has-danger has-feedback @enderror">
                                        <label for="title">Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="" style="display: none" selected>Select Category</option>
                                            @foreach ($categories as $c)
                                                <option value="{{ $c->id }}"> {{ $c->name }} </option>
                                            @endforeach
                                        </select>

                                        @error('category')
                                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                            <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div
                                        class="col-md-12 col-sm-12 col-xs-12 form-group @error('content') has-error has-danger has-feedback @enderror">
                                        <label for="content">Description:</label>
                                        <textarea name="content" id="content" class="summernote">{{ old('content') }}</textarea>
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
                                        <label for="tag">Video(url):</label>
                                        <input type="tex" name="video" id="video" class="form-control">

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

                                        <section title=".slideThree">
                                            <!-- .slideThree -->
                                            <div class="slideThree">
                                                <input type="checkbox" value="1" id="slideThree" name="status"
                                                    checked />
                                                <label for="slideThree"></label>
                                            </div>
                                            <!-- end .slideThree -->
                                        </section>

                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
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
    <script src="{{ asset('backend/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}">
    </script>

    <script src="{{ asset('backend/vendors/bower_components/summernote/dist/summernote.min.js') }}"></script>

    <!-- Summernote Wysuhtml5 Init JavaScript -->
    <script src="{{ asset('backend/dist/js/summernote-data.js') }}"></script>
@endpush
