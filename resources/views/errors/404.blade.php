@extends('frontend.layouts.main')
@section('main-content')


    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Error Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start 404
    ============================================= -->
    <div class="error-page-area bg-gray text-center default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>404</h1>
                    <h2>Sorry Page Was Not Found!</h2>
                    <p>
                        Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth. Certain law age brother sending amongst why covered.
                    </p>
                    <a class="btn btn-theme effect btn-md" href="{{route('home')}}">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

    <!-- Start Footer
@endsection
