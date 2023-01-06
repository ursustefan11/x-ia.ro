@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="notification is-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h2 class="title">Resetează-ți parola!</h2>

                <form action="{{ route('password.email') }}" method="POST" role="form">

                    {{csrf_field()}}

                    <div class="field">
                        <label for="email" class="label">Adresa de email</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" id="email" name="email" value = {{ old('email') }}>
                        </p>
                        @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>

                    <button class="button is-primary is-outlined is-fullwidth m-t-30">Resetează parola</button>
                </form>
            </div><!-- end card-content -->
        </div><!-- end card -->
        <h5 class="has-text-centered m-t-20"><a href="{{ route('login') }}" class="is-muted">Înapoi la login</a></h5>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
@endsection
