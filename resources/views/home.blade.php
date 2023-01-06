@extends('layouts.app')

@section('meta-tags')
<meta name="title" content="Exponential">
<meta property="og:title" content="Exponential">
<meta property="og:type" content="website">
<meta property="og:description" content="Exponential - Pagina principala">
<meta property="description" content="Exponential - Pagina principala">
<meta property="og:image" content="http://x-ia.ro/images/exponential.png">
<meta property="fb:app_id" content="515820289059531">
<title>Acasă | Exponential</title>
@endsection

@section('content')
<section class="hero">
    <div class="hero-body p-b-0">
        <div class="container">
            <div class="columns is-centered">
                @foreach ($first_row as $first)
                <div class="column is-two-fifths">
                    <a href="/tehno_monitor/{{$first->slug}}" style="display:block">
                        <div class="card">
                            <div class="card-image">
                                <img data-src="{{ asset('storage/post_image/'.$first->background_image) }}" class="lazyload" style="height: 240px; width: 523px; max-height: 240px; object-fit: cover;" alt = '{{$first->description}}'>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h1 class="title is-5 m-b-0">{{ Str::limit($first->title, '48')}}</h1>
                                    <p>{{ Str::limit($first->description, '64')}}</p>
                                    <p>
                                    @foreach ($first->category_post_test as $category)
                                    <span class="tag is-light p-l-5 p-r-5">{{$category->name}}</span>
                                    @endforeach 
                                    </p>
                                    <p>{{$first->user->first_name}} {{$first->user->last_name}} <time>{{$first->published_at->formatLocalized("%d %B %Y")}}</time></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="hero">
    <div class="hero-body p-b-0">
        <div class="container">
            <div class="columns is-centered">
                @foreach ($second_row as $second)
                <div class="column is-one-fifth">
                    <a href="/tehno_monitor/{{$second->slug}}" style="display: block">
                        <div class="card">
                            <div class="card-image">
                                <img data-src="{{asset('storage/post_image/'.$second->background_image)}}" class="lazyload" style="height: 100%; width: 100%; max-height: 150px; object-fit: cover;" alt = '{{$second->description}}'>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h1 class="title is-6 m-b-0">{{ Str::limit($second->title, '24')}}</h1>
                                    <p>{{ Str::limit($second->description, '47')}}</p>
                                    <p>{{$second->user->first_name}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="hero">
    <div class="hero-body">
        <div class="container">
            @foreach ($other_row as $other)
            <div class="columns is-centered">
                <div class="column is-four-fifths">
                    <a href="/tehno_monitor/{{$other->slug}}" style="display: block;">
                        <div class="box">
                            <article class="media">
                                <div class="media-left">
                                    <figure>
                                        <img data-src="{{asset('storage/post_image/'.$other->background_image)}}" class="lazyload" style="height: 80px; width: 80px; object-fit: cover;" alt = '{{$other->description}}'>
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                            <h1 class="title is-6 m-b-0">{{$other->title}}</h1>
                                            <p>{{$other->description}}</p>
                                    </div>
                                    <div class="level">
                                        <div class="level-left">  
                                        </div>
                                        <div class="level-right">
                                        <p>{{$other->user->first_name}} {{$other->user->last_name}} <time>{{$other->published_at->formatLocalized('%d %B %Y')}}</time></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
