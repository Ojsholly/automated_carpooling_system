@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">
    <style type="text/css">
    .form-control {
        min-height: 41px;
		box-shadow: none;
		border-color: #e1e4e5;
	}
    .form-control:focus {
		border-color: #5fcaba;
	}
    .form-control, .btn {
        border-radius: 3px;
    }
	.signup-form {
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #9ba5a8;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
    .signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
</style>
<div class="signup-form">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2>Sign Up</h2>
        <p>It's free and only takes a minute.</p>
        <hr>
        <div class="form-group">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name"
                required="required">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" required="required" value="{{ old('email') }}" autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required="required" autocomplete="new-password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                required="required" autocomplete="new-password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">{{ __('Register') }}</button>
        </div>
        <div class="form-group">
            <a href="{{ route('login.provider', 'twitter') }}"
                                                class="btn btn-block btn-social btn-twitter text-center">
                                                <span class="fa fa-twitter"></span> {{ __('Sign in with Twitter') }}
                                            </a>
        </div>
        <div class="form-group">
            <a href="{{ route('login.provider', 'facebook') }}"
                                                class="btn btn-block btn-social btn-facebook text-center">
                                                <span class="fa fa-facebook"></span>
                                                {{ __('Sign in with Facebook') }}
                                            </a>
        </div>
        <div class="form-group">
            <a href="{{ route('login.provider', 'google') }}"
                                                class="btn btn-block btn-social btn-google text-center">
                                                <span class="fa fa-google"></span> {{ __('Sign in with Google') }}
                                            </a>
        </div>
    </form>
<div class="text-center">Already have an account? <a href="{{ url('login') }}">Login here</a></div>
</div>


@endsection
