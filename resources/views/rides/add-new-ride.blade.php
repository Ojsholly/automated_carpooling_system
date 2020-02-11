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

    <form method="post" action="{{ route('profile/change-avatar') }}" enctype="multipart/form-data">
        @csrf
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-6">
                    <div class="mdc-card">
                        <h6 class="card-title">Add Ride Details</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="location" name="location">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input"
                                                    class="mdc-floating-label">Location</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input"
                                                    class="mdc-floating-label">Destination</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" type="datetime" id="text-field-hero-input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Date and
                                                    Time</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input"
                                                    class="mdc-floating-label">Location</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div class="mdc-card">
                                        <div class="template-demo">
                                            <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                                                <input type="hidden" name="enhanced-select">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text"></div>
                                                <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                                                    <ul class="mdc-list">
                                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""
                                                            aria-selected="true">
                                                        </li>
                                                        <li class="mdc-list-item" data-value="grains">
                                                            Bread, Cereal, Rice, and Pasta
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="mdc-floating-label">Select a saved car</span>
                                                <div class="mdc-line-ripple"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Number of
                                                    Seats</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input"
                                                    class="mdc-floating-label">Price</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div class="mdc-form-field">
                                        <div class="mdc-checkbox">
                                            <input type="checkbox" id="basic-disabled-checkbox"
                                                class="mdc-checkbox__native-control" checked />
                                            <div class="mdc-checkbox__background">
                                                <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                    <path class="mdc-checkbox__checkmark-path" fill="none"
                                                        d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                            </div>
                                        </div>
                                        <label for="basic-disabled-checkbox" id="basic-disabled-checkbox-label">Women
                                            Only</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell--span-12">
                                    <div class="mdc-card">
                                        <h6 class="card-title">Passenger Rules</h6>
                                        <div class="template-demo">
                                            <div class="mdc-layout-grid__inner">
                                                <div
                                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                                    <textarea name="intro" min="10" max="500"
                                                        class="mdc-text-field__input" id="text-field-hero-input"
                                                        required>{{ Auth::user()->intro }}</textarea>
                                                </div>
                                            </div>
                                            <p class="font-weight-bold text-center">State the rules you want your
                                                passengers to follow.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell--span-6">
                    <div class="mdc-card">
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <div id="map" style="height:100%; width:100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</main>
@endsection
