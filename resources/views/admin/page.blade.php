@extends('admin.layouts.admin_design')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<form action="{{route('admin.pages',[$page->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$page->id}}">
    <div class="form-group">
        <label for="heading"><strong class="text-uppercase">{{$page->name}} Heading</strong></label>
        <input type="text" name="heading" id="heading" value="{{$page->heading}}" class="form-control">

    </div>
    <div class="form-group">
        <label for="desc"><strong class="text-uppercase"> {{$page->name}}  Shot Desctiption:</strong></label>
        <textarea name="desc" id="desc" rows="5" class="form-control">{{$page->desc}}</textarea>
    </div>
   <div class="form-group">
         <label class="form-label" for="customFile"><strong class="text-uppercase"> {{$page->name}}  Banner:</strong></label>
        <input type="file" class="form-control" id="customFile" name="banner" />
   </div>
    <button class="btn btn-primary btn-md"> Update</button>
</form>

@endsection
