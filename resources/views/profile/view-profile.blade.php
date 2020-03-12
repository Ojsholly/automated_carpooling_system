@extends('layouts.layout')

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <p>Name</p>
                                <p class="font-weight-bold">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="col-md-3">
                                <p>Gender</p>
                                <p class="font-weight-bold">{{ Auth::user()->gender }}</p>
                            </div>
                            <div class="col-md-3">
                                <p>Date of Birth</p>
                                <p class="font-weight-bold">{{ Auth::user()->dob }}</p>
                            </div>
                            <div class="col-md-3">
                                <p>Age</p>
                                <p class="font-weight-bold">{{ $age." years" }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <p>Phone Number</p>
                                <p class="font-weight-bold">{{ Auth::user()->country_code." ".Auth::user()->phone }}</p>
                            </div>
                            <div class="col-md-3">
                                <p>Email</p>
                                <p class="font-weight-bold">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="col-md-3">
                                <p>Bank</p>
                                <p class="font-weight-bold"></p>
                            </div>
                            <div class="col-md-3">
                                <p>Account Number</p>
                                <p class="font-weight-bold"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Brief Introduction</p>
                                <p class="font-weight-bold">{{ Auth::user()->intro }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <a class="btn btn-primary btn-md" href="{{ url('profile/edit-profile') }}">Edit
                                        Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection
