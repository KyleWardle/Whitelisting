@extends('layouts.master')

@section('content')
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background-color:#f4476b;background-image:url(&quot;assets/img/mrbean.gif&quot;);"></div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password (confirm)" required></div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="agree" id="agree" required type="checkbox">I agree to the license terms.</label>
                    </div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a href="#" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
@endsection
