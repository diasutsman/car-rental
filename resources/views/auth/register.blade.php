@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 40px;padding-bottom: 40px;">
        <div class="row" style="display: flex;justify-content: center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="font-size: 32px;font-weight: bold;">{{ __('Register') }}</div>
                    @if (session('errors'))
                        {{ session('errors') }}
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3" style="margin-bottom: 12px;">
                                <label for="username"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" style="margin-bottom: 12px;">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" style="margin-bottom: 12px;">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" style="color: red;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3" style="margin-bottom: 12px;">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3" style="margin-bottom: 12px;">
                                <label for="phone_number" class="col-md-4 form-label">Phone Number</label>
                                <div class="col-md-6">
                                    <input class="form-control @error('phone_number') is-invalid @enderror"
                                        name="phone_number" type="tel" id="phone_number" required
                                        value="{{ old('phone_number') }}">
                                </div>
                            </div>

                            <div class="row mb-3" style="margin-bottom: 12px;">
                                <label for="address" class="col-md-4 form-label">Address</label>
                                <div class="col-md-6">
                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" rows="10" id="address"
                                        style="resize: none" required>{{ old('address') }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3" style="margin-bottom: 12px;">
                                <label for="photo" class="col-md-4 form-label">Photo</label>

                                <div class="col-md-6">
                                    <input class="filepond" name="photo" type="file" id="photo" required
                                        @if (old('photo') === null) data-img={{ old('photo') }} @endif>
                                </div>

                            </div>

                            <div class="row mb-3" style="margin-bottom: 12px;">
                                <label for="id_card_photo" class="col-md-4 form-label">ID Card Photo</label>
                                <div class="col-md-6">
                                    <input class="filepond" name="id_card_photo" type="file" id="id_card_photo" required>
                                </div>
                            </div>

                            <div class="row mb-3" style="margin-bottom: 12px;">
                                <label for="driving_license_photo" class="col-md-4 form-label">Driving License
                                    Photo</label>
                                <div class="col-md-6">
                                    <input class="filepond" name="driving_license_photo" type="file"
                                        id="driving_license_photo" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>

                                    @if (Route::has('login'))
                                        <span style="margin-left: 16px;">Already login?
                                            <a class="btn-link" href="{{ route('login') }}">
                                                {{ __('Login') }}
                                            </a></span>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
