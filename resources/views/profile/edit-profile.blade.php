@extends('layouts.layout')

@php
$name = explode(' ', (Auth::user()->name) )
@endphp

@section('content')

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ route('profile/edit-profile') }}">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Personal Information</h4>
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>First Name</label>
                                        <input name="first_name" type="text" value="{{ $name[0] }}" required
                                            class="form-control" placeholder="John">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Last Name</label>
                                        <input name="last_name" type="text" value="{{ $name[1] }}" required
                                            class="form-control" placeholder="Doe">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Gender</label><br><br>
                                        <input required class="radio-inline mr-3" type="radio" name="gender"
                                            value="Male" @if( Auth::user()->gender ==
                                        'Male' ) checked @endif>Male
                                        <input required class="radio-inline mr-3" type="radio" name="gender"
                                            value="Female" @if( Auth::user()->gender
                                        == 'Female' ) checked @endif>Female
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Date of Birth</label>
                                        <input name="dob" type="date" value="{{ Auth::user()->dob }}" required
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Country Code</label>
                                        <select name="country_code" required class="select form-control">
                                            <option></option>
                                            @foreach($country_codes as $country_code)
                                            <option value="+{{ $country_code->phonecode }}">
                                                {{ $country_code->nicename }}
                                                (+{{ $country_code->phonecode }})</option>
                                            @endforeach()
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Phone Number</label>
                                        <input name="phone" type="tel" value="{{ Auth::user()->phone }}" required
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Email Address</label>
                                        <input name="email" type="email" value="{{ Auth::user()->email }}" required
                                            class="form-control" placeholder="johndoe@carpoolingsystem.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Brief Introduction</h4>
                            <div class="basic-form">
                                <div class="form-group">
                                    <label>Introduce yourself to other members (min. 30 characters).</label>
                                    <textarea class="form-control h-150px" name="intro" rows="6" min="30" max="500"
                                        id="comment" required>{{ Auth::user()->intro }}</textarea>
                                    <p class="font-weight-bold">Include why people should travel with you. Please don't
                                        include any personal details here.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="general-button text-center">
                                <button type="reset" class="btn mb-1 btn-light">Reset</button>
                                <button type="submit" class="btn mb-1 btn-primary">Save Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection
