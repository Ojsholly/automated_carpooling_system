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
                                    <div class="form-group col-md-4">
                                        <label>Pickup Location</label>
                                        <input required type="text" id="pickup_location" name="pickup_location"
                                            class="form-control location" placeholder="Enter Address" autofocus>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Destination</label>
                                        <input required type="text" id="destination" name="destination"
                                            class="form-control location" placeholder="Enter Address" autofocus>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Date and Time</label>
                                        <input required type="datetime-local" id="date_and_time" class="form-control datetime"
                                            name="datetime">
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
                                    <div class="form-group col-md-4">
                                        <label>Select Car</label>
                                        <select class="select" name="car" required>
                                            <option></option>
                                            @foreach ($cars as $car)
                                        <option value="{{ $car->id }}"> {{ $car->make }} {{ $car->model }} {{ $car->model_year }} <span class="fa fa-car" style="background-color:{{ $car->color }}"></span></option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Number of Seats</label>
                                        <input required type="number" step="1" min="1" st placeholder="Number of available seats" name="number_of_seats" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Price</label>
                                        <input required type="number" min="0" name="price" step="5" class="form-control" placeholder="Price per passenger">
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
                                <div class="vol-md-12">
                                    <div class="form-group">
                                        <label>Additional Info</label>
                                        <textarea class="form-control h-150px" rows="6" name="info" id="info" placeholder="Please state any additional information or rules you would like your passengers to know about."></textarea>
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
