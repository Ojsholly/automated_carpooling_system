@extends('layouts.layout')

@section('content')

<main class="content-wrapper">
    @php
    $name = explode(' ', (Auth::user()->name) )
    @endphp
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
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Personal Information</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            name="first_name" type="text" value="{{ $name[0] }}">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">First
                                                    Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            name="last_name" type="text" value="{{ $name[1] }}">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Last
                                                    Name</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            value="{{ Auth::user()->email }}" type="email" name="email">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Email
                                                    Address</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" name="dob" type="date"
                                            max="{{ date('Y-m-d') }}" value="{{ Auth::user()->dob }}" required
                                            id="text-field-hero-input">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Date of
                                                    Birth</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" id="text-field-hero-input" required
                                            name="phone" value="{{ Auth::user()->phone }}" type="tel" value="">
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                                <label for="text-field-hero-input" class="mdc-floating-label">Phone
                                                    Number</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-text-field mdc-text-field--outlined">
                                        <select name="country_code" value="{{ Auth::user()->country_code }}" required
                                            class="select">
                                            <option selected disabled>Select Country Code</option>
                                            @foreach($country_codes as $country_code)
                                            <option value="+{{ $country_code->phonecode }}" @if( Auth::user()->email ==
                                                '+'.$country_code->phonecode ) selected
                                                @endif>{{ $country_code->nicename }}
                                                (+{{ $country_code->phonecode }})</option>
                                            @endforeach()
                                        </select>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                    <div class="mdc-form-field">
                                        <div class="mdc-radio mdc-radio--touch">
                                            <input @if( Auth::user()->gender == 'Male' ) checked @endif
                                            class="mdc-radio__native-control" type="radio"
                                            value="Male" id="radio-1" name="gender">
                                            <div class="mdc-radio__background">
                                                <div class="mdc-radio__outer-circle"></div>
                                                <div class="mdc-radio__inner-circle"></div>
                                            </div>
                                            <div class="mdc-radio__ripple"></div>
                                        </div>
                                        <label for="radio-1">Male</label>
                                    </div>
                                    <div class="mdc-form-field">
                                        <div class="mdc-radio">
                                            <input @if( Auth::user()->gender == 'Female' ) checked @endif
                                            class="mdc-radio__native-control" type="radio"
                                            value="Female" id="radio-1" name="gender">
                                            <div class="mdc-radio__background">
                                                <div class="mdc-radio__outer-circle"></div>
                                                <div class="mdc-radio__inner-circle"></div>
                                            </div>
                                            <div class="mdc-radio__ripple"></div>
                                        </div>
                                        <label for="radio-1">Female</label>
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
                        <h6 class="card-title">Brief Introduction</h6>
                        <p>Introduce yourself to other members (min. 10 characters).</p>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <textarea name="intro" min="10" max="500" class="mdc-text-field__input"
                                        id="text-field-hero-input" required>{{ Auth::user()->intro }}</textarea>
                                </div>
                            </div>
                                    <p class="font-weight-bold text-center">Include why people should travel with you. Please
                                        don't
                                        include any personal details here.</p>
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
                            <button type="reset" class="mdc-button mdc-button--raised filled-button--light">
                                Reset
                            </button>
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
