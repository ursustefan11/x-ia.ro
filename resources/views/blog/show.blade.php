@extends('layouts.app')

@section('meta-tags')
<meta name="title" content="{{$post->title}}">
<meta name="description" content="{{$post->description}}" />
<meta property="og:title" content="{{$post->title}}" />
<meta property="og:type" content="article">
<meta property="og:description" content="{{$post->description}}" />
<meta property="description" content="{{$post->description}}" />
<meta property="og:image" content="http://x-ia.ro/storage/post_image/{{$post->background_image}}" />
<meta property="og:url" content="http://x-ia.ro/tehno_monitor/{{$post->slug}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{$post->title}} | Exponential</title>
@endsection

@section('content')
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-8 is-offset-2">
                    <figure class="image is-16by9">
                        <img src="{{asset('storage/post_image/'.$post->background_image)}}" style="object-fit: cover;" alt = '{{$post->description}}'>
                    </figure>
                </div>
            </div>

            <section class="section">
                <div class="columns">
                    <div class="column is-8 is-offset-2">
                        <div class="content is-medium">
                            <h2 class="subtitle is-5">{{$post->published_at->formatLocalized("%d %B %Y")}}, de {{$post->user->first_name}} {{$post->user->last_name}}</h2>
                            <h1 class="title m-b-10">{{$post->title}}</h1>
                            <p>{{$post->description}}</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-8 is-offset-2">
                        <div class="content is-size-5 is-size-6-mobile">
                        {!!$post->content!!}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</section>
@endsection
