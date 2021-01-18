@extends('layouts.layout')
@section('content')
<main class="content-wrapper">
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <h6 class="card-title">Car Make and Model</h6>
                    <div class="template-demo">
                        <div class="mdc-layout-grid__inner">
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop text-center">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" id="text-field-hero-input" name="car_make"
                                        value="{{ $car_details->make }}" type="text" readonly>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="text-field-hero-input" class="mdc-floating-label">Make</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop text-center">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" value="{{ $car_details->model }}" readonly
                                        id="text-field-hero-input" name="car_model" type="text">
                                    <div class="mdc-notched-outline" readonly>
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="text-field-hero-input" class="mdc-floating-label">Car
                                                Model</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop text-center">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" value="{{ $car_details->model_year }}"
                                        id="text-field-hero-input" name="model_year" readonly type="text">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="text-field-hero-input" class="mdc-floating-label">Model
                                                Year</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop text-center">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" id="text-field-hero-input" name="color"
                                        type="color" value="{{  $car_details->color }}" disabled>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="text-field-hero-input" class="mdc-floating-label">Color</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <h6 class="card-title">Registration Information</h6>
                    <div class="template-demo">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" id="text-field-hero-input" readonly
                                        value="{{ $car_details->registration_country }}" name="registration_country"
                                        type="text">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="text-field-hero-input" class="mdc-floating-label">Registration
                                                Country</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" id="text-field-hero-input" name="plate_number"
                                        value="{{ $car_details->plate_number }}" readonly type="text">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="text-field-hero-input" class="mdc-floating-label">Plate
                                                Number</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                <div class="mdc-text-field mdc-text-field--outlined">
                                    <input class="mdc-text-field__input" name="registration_date" type="date"
                                        value="{{ $car_details->registration_date }}" readonly
                                        id="text-field-hero-input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="text-field-hero-input" class="mdc-floating-label">Date of
                                                Registration</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <h6 class="card-title">Vehicle Quality Assurance and Insurance</h6>
                    <div class="template-demo">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                <img src="{{ asset('uploads/cars/inspection_report/'.$car_details->inspection_report) }}"
                                    style="height:300px; width:300px">
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                <img src="{{ asset('uploads/cars/insurance/'.$car_details->insurance) }}"
                                    style="height:300px; width:300px;">
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                <img src="{{ asset('uploads/cars/road_worthiness/'.$car_details->road_worthiness) }}"
                                    style="height:300px; width:300px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <h6 class="card-title">Images of the Car</h6>
                    <div class="template-demo">
                        <div class="mdc-layout-grid__inner">
                            @php($images = explode("-", $car_details->images))
                            @foreach ($images as $image)
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                <img src="{{ asset('uploads/cars/image/'.$image) }}" style="height:300px; width:300px;">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <div class="template-demo text-center">
                        <a href="{{ url('cars/edit-car/'.$car_details->id) }}"
                            class="mdc-button mdc-button--raised mdc-button--warning">
                            Edit
                        </a>
                        <a class="mdc-button mdc-button--raised mdc-button--danger">
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
