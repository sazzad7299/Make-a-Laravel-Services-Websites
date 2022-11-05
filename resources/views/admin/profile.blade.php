@extends('admin.layouts.admin_design')
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Update Profile</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form action="{{route('admin.profile')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label mb-10" for="email_de">Name:</label>
                                    <input type="text" name="name" class="form-control" id="text" value="{{$user->name}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10" for="pwd_de">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"  value="{{$user->email}}" required>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-success">Update Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Update Password</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            <form class="form-horizontal" action="{{route('admin.updatepassword')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label mb-10 col-sm-2" for="current">Current Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="current" name="currentpassword" required>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 col-sm-2" for="pwd_hr">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback text-danger" >
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10 col-sm-2" for="pwd_hr">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success">Update Account</button>
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
@endsection
