@extends('layouts.layout')

@section('content')
<div class="content-body">

    <form method="post" action="{{ route('cars/add-new-car') }}" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Car Make and Model</h4>
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Make</label>
                                        <select name="car_make" value="{{ old('car_make') }}" id="make" required
                                            class="select form-control">
                                            <option></option>
                                            @foreach ($car_makes as $make)
                                            <option value="{{ $make->make }}">{{ $make->make }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Model</label>
                                        <select name="car_model" value="{{ old('car_model') }}" id="model" required
                                            class="select form-control">

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Model</label>
                                        <select name="model_year" value="{{ old('model
                                        -year') }}" id="model_year" required class="select form-control">

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Color</label>
                                        <input name="color" value="{{ old('color') }}" type="color" required
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Registration Information</h4>
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Country of Registration</label>
                                        <select class="select" value="{{ old('registration_country') }}"
                                            name="registration_country" required>
                                            <option></option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Plate Number</label>
                                        <input type="text" class="form-control" name="plate_number"
                                            value="{{ old('plate_number') }}" required placeholder="AB 123 XYZ">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Date of Registration</label>
                                        <input type="date" required max="{{date('Y-m-d')}}"
                                            value="{{ old('registration_date') }}" name="registration_date"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Insurance and Quality Assurance</h4>
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Vehicle Inspection Report</label>
                                        class="form-control">
                                        <input name="inspection_report" value="{{ old('inspection_report') }}"
                                            class="form-control file_input" required type="file">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Vehicle Insurance </label>
                                        <input name="insurance" value="{{ old('insurance') }}"
                                            class="form-control file_input" required type="file">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Road Worthiness Certificate</label>
                                        <input name="road_worthiness" value="{{ old('road_worthiness') }}"
                                            class="form-control file_input" required type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Upload Images of the Car</h4>
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input name="images[]" value="{{ old('images[]') }}" multiple
                                            class="form-control file_input" required type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <p class="font-weight-bold text-center">Make sure all uploaded images are of
                                            clear
                                            resolution and not more than 2MB each.</p>
                                    </div>
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
                                <button type="submit" class="btn mb-1 btn-primary">Add Car</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </mai>
    @endsection
