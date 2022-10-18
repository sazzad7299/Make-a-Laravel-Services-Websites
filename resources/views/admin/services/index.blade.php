@section('css')

@endsection
@extends('admin.layouts.admin_design')
@section('content')
<!-- Row -->
<!-- Row -->
<!-- Bordered Table -->
<div class="col-sm-12">
    <div class="panel panel-default card-view">
        <div class="panel-heading">
            <div class="pull-left">
                <h6 class="panel-title txt-dark">service List</h6>
            </div>
            <div class="pull-right">
                <a href="{{route('admin.service.create')}}" class="btn btn-success">Add New</a>
            </div>
        </div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <div class="table-wrap mt-30">
                    <div class="table-responsive">
                      <table class="table table-hover table-bordered mb-0">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Heading</th>
                            <th>Status</th>
                            <th class="text-nowrap">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td><img src="{{asset('uploads/service/small/'.$service->image)}}" alt=""></td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->heading}}</td>
                                <td>@if ($service->status==1) <span class="label label-primary">Active</span>@else<span class="label label-danger">Inactive</span> @endif</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.service.edit', [$service->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <form action="{{ route('admin.service.destroy', [$service->id]) }}" class="mr-5 pull-left" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-close text-white"></i> </button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach

                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Bordered Table -->

<!-- /Row -->
@endsection

<!-- /Row -->
