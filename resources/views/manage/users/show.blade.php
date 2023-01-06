@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">{{ $user->name }}</h1>
            <h4 class="subtitle">View User Details</h4>
        </div>
        <!--end of column-->
        <div class="column">
            <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i>Edit User</a>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
        <div class="column">
            <div class="field">
                <label for="name" class="label">First Name</label>
                <pre>{{$user->first_name}}</pre>
            </div>

            <div class="field">
                <label for="name" class="label">Last Name</label>
                <pre>{{$user->last_name}}</pre>
            </div>


            <div class="field">
                <label for="email" class="label">Email</label>
                <pre>{{$user->email}}</pre>
            </div>

            <div class="field">
                <label for="email" class="label">Roles</label>
                <ul>
                    {{$user->roles->count() == 0 ? "This user has no current roles" : ""}}
                    @foreach ($user->roles as $role)
                    <li>{{$role->display_name}} <em>({{$role->description}})</em>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</div>

@endsection
