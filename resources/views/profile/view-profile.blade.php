@extends('layouts.layout')

@section('content')

<main class="content-wrapper">
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <h6 class="card-title mb-2">Your Profile</h6>
                    <div class="template-demo typography-demo">
                        <div class="mdc-layout-grid__inner align-items-center">
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-1 text-muted tx-14">
                                Name
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-5">
                                <h1 class="mdc-typography--headline1">{{ Auth::user()->name }}</h1>
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-1 text-muted tx-14">
                                Gender
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
                                <h1 class="mdc-typography--headline3">{{ Auth::user()->gender }}</h1>
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-1 text-muted tx-14">
                                Age
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
                                <h1 class="mdc-typography--headline3">{{ $age." years" }}</h1>
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-1 text-muted tx-14">
                                Email
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                                <h1 class="mdc-typography--headline3">{{ Auth::user()->email }}</h1>
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-1 text-muted tx-14">
                                Phone
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                <h1 class="mdc-typography--headline3">
                                    {{ Auth::user()->country_code." ".Auth::user()->phone }}</h1>
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-1 text-muted tx-14">
                                Date of Birth
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-2">
                                <h1 class="mdc-typography--headline3">{{ Auth::user()->dob }}</h1>
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4 text-muted tx-14">
                                Profile Introduction
                            </div>
                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                                <h1 class="mdc-typography--headline3">{{ Auth::user()->intro }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ripple Enabled Buttons Ends -->
        </div>
    </div>
</main>
@endsection