@extends('layouts.manage')

@section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create New Role</h1>
        </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('roles.store')}}" method="POST">
        {{csrf_field()}}
        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h1 class="title">Role Details:</h1>
                                <div class="field">
                                    <label for="display_name" class="label">Display Name</label>
                                    <p class="control">
                                        <input type="text" class="input" name="display_name" id="display_name" value="{{old('display_name')}}">
                                    </p>
                                </div>
                                <div class="field">
                                    <label for="name" class="label">Slug <small>(cannot be edited)</small></label>
                                    <p class="control">
                                        <input type="text" class="input" name="name" id="name" value="{{old('name')}}">
                                    </p>
                                </div>
                                <div class="field">
                                    <label for="description" class="label">Description</label>
                                    <p class="control">
                                        <input type="text" class="input" name="description" id="description" value="{{old('description')}}">
                                    </p>
                                </div>
                                <input type="hidden" class="input" :value="permissionsSelected" name="permissions">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                                <h1 class="title">Permissions:</h1>
                                <ul>
                                    @foreach ($permissions as $permission)
                                    <div class="field">
                                        <b-checkbox v-model="permissionsSelected" native-value="{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
                                    </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <button class="button is-primary"><i class="fa fa-user m-r-10"></i>Create new user</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')

<script>
    var app = new Vue({
        el: '#app',
        data: {
            permissionsSelected: []
        }
    });
</script>

@endsection
