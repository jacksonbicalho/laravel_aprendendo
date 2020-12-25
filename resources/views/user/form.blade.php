@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" name="email" type="email"
        value="{{ old('email', $user->email ?? '') }}"
            class="form-control @error('email') is-invalid @enderror"
        >
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" name="password" type="password"
        value="{{ old('password', $user->password ?? '') }}"
            class="form-control @error('password') is-invalid @enderror"
        >
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="form-group">
        <label for="password-confirmation">{{ __('Confirm Password') }}</label>
        <input id="password-confirmation" name="password_confirmation" type="password"
        value="{{ old('password_confirm', $user->password_confirmation ?? '') }}"
            class="form-control @error('password_confirmation') is-invalid @enderror"
        >
        @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>

</form>

@endsection
