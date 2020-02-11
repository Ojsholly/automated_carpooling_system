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
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Upload Profile Avatar</h6>
                        <div class="template-demo">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                                    <input class="mdc-text-field__input avatar" id="text-field-hero-input" required
                                        name="avatar" type="file">
                                </div>
                            </div>
                            <p class="font-weight-bold text-small text-center">Kindly limit the size of uploads to 2MB
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