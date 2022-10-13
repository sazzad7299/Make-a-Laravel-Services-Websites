
@extends('admin.layouts.admin_design')
@section('content')

    <!-- Row -->
    <!-- Bordered Table -->
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Category</h6>
                </div>
                <div class="pull-right">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-success">Add New</a>
                </div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap mt-30">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $cat )

                                    <tr>
                                        <td>{{$cat->name}}</td>
                                        <td>{{ Str::limit($cat->description, 50) }}</td>
                                        <td class="d-flex">

                                            <a href="{{ route('admin.category.edit', [$cat->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <form action="{{ route('admin.category.destroy', [$cat->id]) }}" class="mr-5 pull-left" method="POST">
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
