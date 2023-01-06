@extends('layouts.manage')

@section('content')
  <div class="flex-container">
      <div class="columns m-t-10">
          <div class="column">
              <h1 class="title">Manage Categories</h1>
          </div>
          <div class="column">
              <a href="{{route('categories.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>Create New Category</a>
          </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th>Category ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category Parent</th>
                <th>Published</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->description}}</td>
                  <td>{{$category->parent_id}}</td>
                  <td>{{$category->created_at->toFormattedDateString()}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

  </div><!--end of flex container-->
@endsection
