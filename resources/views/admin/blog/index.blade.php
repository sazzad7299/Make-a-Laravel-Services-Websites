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
                <h6 class="panel-title txt-dark">Bordered Table</h6>
            </div>
            <div class="pull-right">
                <a href="{{url('admin/blog/create')}}" class="btn btn-success">Add New</a>
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
                            <th>Status</th>
                            <th class="text-nowrap">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$blog->title}}</td>
                                <td>{!! $blog->content !!}</td>
                                <td>July 11, 2015</td>
                                <td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a> </td>
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
