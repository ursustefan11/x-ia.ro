@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h2 class="title">Log In</h2>

                <form action="{{route('login')}}" method="POST" role="form">

                    {{csrf_field()}}

                    <div class="field">
                        <label for="email" class="label">Adresa de email</label>
                        <p class="control">
                            <input type="text" class="input {{$errors->has('email') ? 'is-danger' : ''}}" id="email" name="email" placeholder="name@example.com" value = {{ old('email') }}>
                        </p>
                        @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password" class="label">Parola</label>
                        <p class="control">
                            <input type="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}" id="password" name="password">
                        </p>
                        @if ($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif
                    </div>

                    <!-- <div class="field">
                        <b-checkbox name="remember" class="m-t-20">Remember me</b-checkbox>
                    </div> -->

                    <button class="button is-primary is-outlined is-fullwidth m-t-30">Intra în cont!</button>
                </form>
            </div><!-- end card-content -->
        </div><!-- end card -->
        <h5 class="has-text-centered m-t-20"><a href="{{ route('password.request') }}" class="is-muted">Ai uitat parola?</a></h5>
    </div>
</div>
@endsection

@section('scripts')
<script>
var app = new Vue({
    el: '#app',
    data: {}
})
</script>
<script defer src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
@endsection
