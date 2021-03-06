@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registration Code') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registration_code_submit') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="reg_code" class="col-md-4 col-form-label text-md-right">{{ __('Registration Code') }}</label>

                            <div class="col-md-6">
                                <input id="reg_code" class="form-control @error('reg_code') is-invalid @enderror" name="reg_code" value="{{ old('reg_code') }}" required autocomplete="reg_code" autofocus>

                                @error('reg_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Check') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Resend Code?') }}
                                    </a>
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
