@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create Post</h1>
        </div>
    </div>
    <hr class="m-t-0">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('categories.store')}}" method="POST">
        {{csrf_field()}}

        <div class="columns">
          <div class="column is-half-desktop">

            <div class="field">
              <label for="category_name" class="label">Category Name</label>
              <input type="text" name="category_name" id="category_name" class="input">
            </div>
            <div class="field">
              <label for="category_description" class="label">Category Description</label>
              <input type="text" name="category_description" id="category_description" class="input">
            </div>
            <div class="field">
              <div class="control">
                <div class="select is-primary">
                  <select name="category_option">
                    <option value="1">Create New Category</option>
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <button class="button is-primary">Create Category</button>

          </div><!--end of column.is-half-desktop-->
        </div><!--end of columns-->

    </form>

</div>
@endsection

@section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data: {}
    });
</script>
@endsection
