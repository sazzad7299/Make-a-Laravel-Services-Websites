@extends('admin.layouts.admin_design')
@push('admincss')
@endpush
@section('content')
<!-- Bordered Table -->
<div class="col-sm-12">
    <div class="panel panel-default card-view">
        <div class="panel-heading">
            <div class="pull-left">
                <h6 class="panel-title txt-dark">Edit Category: <strong>{{$category->name}}</strong></h6>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.category.index') }}" class="btn btn-success">All List</a>
            </div>
        </div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <form action="{{ route('admin.category.update', [$category->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group  @error('name') has-error has-danger has-feedback @enderror">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
                        @error('name')
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <p class='text-danger'>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" rows="5" class="form-control">{{$category->description}}</textarea>
                    </div>
                    <button class="btn btn-primary btn-sm"> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Bordered Table -->

@endsection
