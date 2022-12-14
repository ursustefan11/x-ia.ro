@extends('layouts.manage')

@section('content')

<div class="flex-container p-l-25">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Permissions</h1>
        </div>
        <div class="column">
            <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>Create New Permission</a>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="card">
        <div class="card-content">
            <table class="table is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Display Name</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td><a href="{{route('permissions.show', $permission->id)}}">{{$permission->name}}</a></td>
                        <td>{{$permission->display_name}}</td>
                        <td>{{$permission->description}}</td>
                        <td>
                            <a href="{{route('permissions.edit', $permission->id)}}" class="button is-outlined m-r-5">Edit</a>
                            <a href="{{route('permissions.show', $permission->id)}}" class="button is-outlined-m-r-5">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--end of the card-->


</div>

@endsection
