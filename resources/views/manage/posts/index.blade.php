@extends('layouts.manage')

@section('content')
<div class="flex-container p-l-25">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Manage Posts</h1>
        </div>
        <div class="column">
            <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>Create New Post</a>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="card">
        <div class="card-content">
            <table class="table is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imaginea</th>
                        <th>Titlu</th>
                        <th>Descriere</th>
                        <th>Categorie</th>
                        <th>Data publicarii</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img src="{{asset('storage/post_image/' . $post->background_image)}}" style="height: 50px; width: 50px; object-fit: cover;"></td>
                        <td><a href="{{route('posts.show', $post->slug)}}">{{Str::limit($post->title, '50')}}</td>
                        <td>{{ Str::limit($post->description, '50')}}</td>
                        <td>
                        @foreach ($post->category_post_test as $category)
                            <li style="list-style-type: none;">{{$category->name}}</li>
                        @endforeach
                        </td>
                        <td>{{$post->published_at->formatLocalized('%d %B %Y')}}, {{$post->user->first_name}}</td>
                        <td class="has-text-right">
                            {{ Form::open([ 'method'  => 'delete', 'route' => [ 'posts.destroy', $post->id ] ]) }}
                            {{ Form::submit('Delete', ['class' => 'button is-danger is-light']) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
<!--end of flex container-->
@endsection
