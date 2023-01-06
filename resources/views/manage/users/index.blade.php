@extends('layouts.manage')

@section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Manage Users</h1>
        </div>
        <div class="column">
            <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>Create New User</a>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="card">
        <div class="card-content">
            <table class="table is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><a href="{{route('users.show', $user->id)}}">{{$user->first_name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->toFormattedDateString()}}</td>
                        <td class="has-text-right">
                            <a href="{{route('users.edit', $user->id)}}" class="button is-outlined m-r-5">Edit</a>
                            <a href="{{route('users.show', $user->id)}}" class="button is-outlined-m-r-5">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--end of the card-->

    {{$users->links()}}

</div>

@endsection
