@extends('layouts.manage')

@section('content')
<section class="hero">
    <div class="container">
        <div class="columns is-vcentered m-t-10">
            <div class="column">
                <h1 class="title">{{ $post->title }}</h1>
                <h4 class="subtitle is-5 m-b-0">{{$post->description}}</h4>
                <h5 class="subtitle is-5">{{$post->created_at->formatLocalized('%d %B %Y')}}</h5>
            </div>
            <div class="column">
                <h1 class="title">Categorie:</h1>
                <h3 class="subtitle is-4">
                    @foreach ($post->category_post_test as $category)
                    <li style="list-style-type: none;">{{$category->name}}</li>
                    @endforeach
                </h1>
            </div>
            <!--end of column-->
            <div class="column">
                <a href="{{route('posts.edit', $post->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i>Edit Post</a>
                <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right m-r-15"><i class="fa fa-user m-r-10"></i>Create New Post</a>
            </div>
        </div>
        <hr class="m-t-0">
 
        <section class="section">
            <div class="columns is-centered">
                <div class="column is-three-quarters">
                    {!!$post->content!!}
                </div>
            </div>
            <div class="columns is-centered">
                <div class="column is-three-quarters">
                    <img src="{{asset('storage/post_image/'.$post->background_image)}}" style="object-fit: cover;">
                </div>
            </div>
        </section>
    </div>
</section>
@endsection
