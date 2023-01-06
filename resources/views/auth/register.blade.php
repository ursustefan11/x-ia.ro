@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h2 class="title">Creează un cont</h2>

                <form action="{{ route('register') }}" method="POST" role="form">

                    {{csrf_field()}}
                    <div class="field">
                        <label for="name" class="label">Nume</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('name') ? 'is-danger' : ''}}" id="name" name="name" required>
                        </p>
                        @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label for="email" class="label">Adresa de email</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" id="email" name="email" value = "{{ old('email') }}" required>
                        </p>
                        @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="password" class="label">Parola</label>
                                <p class="control">
                                    <input type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" id="password" name="password" required>
                                </p>
                                @if ($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="password_confirmation" class="label">Confirmă Parola</label>
                                <p class="control">
                                    <input type="password" class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" id="password_confirmation" name="password_confirmation" required>
                                </p>
                                @if ($errors->has('password_confirmation'))
                                <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>


                    <button class="button is-primary is-outlined is-fullwidth m-t-30">Creează!</button>
                </form>
            </div><!-- end card-content -->
        </div><!-- end card -->
        <h5 class="has-text-centered m-t-20"><a href="{{ route('login') }}" class="is-muted">Ai deja un cont?</a></h5>
    </div>
</div>
@endsection
