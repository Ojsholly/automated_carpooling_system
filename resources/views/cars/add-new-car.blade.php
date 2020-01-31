@extends('layouts.layout')

@section('content')
<main class="content-wrapper">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="{{ route('cars/add-new-car') }}" enctype="multipart/form-data">
        @csrf
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Car Make and Model</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop text-center">
                                    <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                                        <input required type="hidden" name="car_make" id="car_make">
                                        <i class="mdc-select__dropdown-icon"></i>
                                        <div class="mdc-select__selected-text"></div>
                                        <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                            <ul class="mdc-list">
                                                <li class="mdc-list-item mdc-list-item--selected" data-value=""
                                                    aria-selected="true">
                                                </li>
                                                @foreach ($car_makes as $make)
                                                <li class="mdc-list-item make" data-value="{{ $make->make }}">
                                                    {{ $make->make }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <span class="mdc-floating-label">Make</span>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop text-center">
                                    <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                                        <input required type="hidden" name="car_model" id="car_model">
                                        <i class="mdc-select__dropdown-icon"></i>
                                        <div class="mdc-select__selected-text"></div>
                                        <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                            <ul class="mdc-list car_model_list">
                                            </ul>
                                        </div>
                                        <span class="mdc-floating-label">Model</span>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop text-center">
                                    <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                                        <input required type="hidden" name="model_year" id="model_year">
                                        <i class="mdc-select__dropdown-icon"></i>
                                        <div class="mdc-select__selected-text"></div>
                                        <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                            <ul class="mdc-list model_years">
                                            </ul>
                                        </div>
                                        <span class="mdc-floating-label">Year</span>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                </div>
                                <div
                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop text-center">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            name="color" type="color">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input"
                                                    class="mdc-floating-label">Color</label>
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
                                    <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                                        <input type="hidden" name="registration_country" required>
                                        <i class="mdc-select__dropdown-icon"></i>
                                        <div class="mdc-select__selected-text"></div>
                                        <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                            <ul class="mdc-list">
                                                <li class="mdc-list-item mdc-list-item--selected" data-value=""
                                                    aria-selected="true">
                                                </li>
                                                @foreach ($countries as $country)
                                                <li class="mdc-list-item" data-value="{{ $country->nicename }}">
                                                    {{ $country->nicename }}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <span class="mdc-floating-label">Country of Registration</span>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            name="plate_number" type="text">
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
                                            max="{{ date('Y-m-d') }}" required id="text-field-hero-input">
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
                <div class="mdc-layout-grid__cell--span-4">
                    <div class="mdc-card">
                        <h6 class="card-title">Vehicle Inspection Report</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <input class="mdc-text-field__input file_input" id="text-field-hero-input" required
                                        name="inspection_report" type="file">
                                </div>
                            </div>
                            <p class="font-weight-bold text-small text-center">Please Make Sure the Plate Number is
                                very visible.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell--span-4">
                    <div class="mdc-card">
                        <h6 class="card-title">Vehicle Insurance</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <input class="mdc-text-field__input file_input" id="text-field-hero-input" required
                                        name="insurance" type="file" multiple>
                                </div>
                            </div>
                            <p class="font-weight-bold text-small text-center">Please Make Sure the Plate Number is
                                very visible.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell--span-4">
                    <div class="mdc-card">
                        <h6 class="card-title">Road Worthiness Certificate</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <input class="mdc-text-field__input file_input" id="text-field-hero-input" required
                                        name="road_worthiness" type="file">
                                </div>
                            </div>
                            <p class="font-weight-bold text-small text-center">Please Make Sure the Plate Number is
                                very visible.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Upload Images of the Car</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <input class="mdc-text-field__input file_input" id="text-field-hero-input" required
                                        name="images[]" type="file" multiple>
                                </div>
                            </div>
                            <p class="font-weight-bold text-small text-center">Please Make Sure the Plate Number is
                                very visible.
                            </p>
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
                            <button type="submit" class="mdc-button mdc-button--raised mdc-button--dense">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection
