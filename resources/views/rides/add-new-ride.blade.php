@extends('layouts.layout')
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <form method="post" action="{{ route('rides/add-new-ride') }}">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Trip Details</h4>
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Pickup Location</label>
                                        <input type="text" id="pickup_location" name="pickup_location"
                                            class="form-control location" placeholder="Enter Address" autofocus>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Destination</label>
                                        <input type="text" id="destination" name="destination"
                                            class="form-control location" placeholder="Enter Address" autofocus>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <div class="basic-form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Date and Time</label>
                                        <input type="datetime-local" id="date_and_time" class="form-control datetime"
                                            name="datetime">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Destination</label>
                                        <input type="text" id="destination" class="form-control location"
                                            placeholder="Enter Address" autofocus>
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
                                <button type="submit" class="btn mb-1 btn-primary">Add Trip</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection
