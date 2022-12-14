@extends('layouts.manage')

@section('content')

<div class="flex-container p-l-25">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Edit Permission Details</h1>
        </div>

        <div class="column">
            <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-edit m-r-10"></i> Edit Permissions</a>
        </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('permissions.update', $permission->id)}}" method="POST">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="field">
            <label for="display_name" class="label">Display Name</label>
            <p class="control">
                <input type="text" class="input" name="display_name" id="display_name" value="{{$permission->display_name}}">
            </p>
        </div>

        <div class="field">
            <label for="name" class="label">Slug <small>(cannot be changed)</small></label>
            <p class="control">
                <input type="input" class="input" name="name" id="name" value="{{$permission->name}}" disabled>
            </p>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
            <p class="control">
              <input type="text" class="input" name="description" id="description" value="{{$permission->description}}" placeholder="Describe what permission does">
            </p>

        </div>

        <button class="button is-primary"><i class="fa fa-save m-r-10"></i> Save Changes</button>

    </form>


</div>

@endsection
