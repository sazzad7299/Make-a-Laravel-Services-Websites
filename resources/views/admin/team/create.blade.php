@extends('admin.layouts.admin_design')
@push('admincss')
@endpush
@section('content')
<!-- Bordered Table -->
<div class="col-sm-12">
    <div class="panel panel-default card-view">
        <div class="panel-heading">
            <div class="pull-left">
                <h6 class="panel-title txt-dark"></h6>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.team.index') }}" class="btn btn-success">All List</a>
            </div>
        </div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <form action="{{route('admin.team.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group  @error('name') has-error has-danger has-feedback @enderror">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <p class='text-danger'>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-sm"> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Bordered Table -->

@endsection
