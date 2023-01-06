@extends('layouts.app')

@section('content')


<div class="flex-container">
  <div class="columns is-centered m-t-10">
    <div class="column is-two-thirds">

    </div>
  </div>
</div>

<div class="flex-container">
    <div class="columns is-centered m-t-10">
        <div class="column is-two-thirds">
            <div class="columns is-centered">
                <div class="column is-four-fifths">

                    <figure class="image is-2by1">
                        <img src="{{asset('storage/post_image/'.$post->background_image)}}">
                    </figure>

                    <h1 class="title is-2">{{$post->title}}</h1>
                    <h6 class="subtitle is-6">{{$post->published_at->toFormattedDateString()}}, {{$post->user->name}}</h3>
                    <hr class="m-t-0">

                        <p class="has-text-centered">{!!$post->content!!}</p>

                </div>
                <!--end of column.is-four.fifths-->
            </div>
            <!--end of columns.is-centered-->
        </div>
        <!--end of column.is-two-thirds-->
    </div>
    <!--end of .columns.is-centered.m-t-10-->
</div>

@endsection
