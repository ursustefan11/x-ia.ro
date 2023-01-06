@extends('layouts.app')

@section('meta-tags')
<meta property="og:image" content="http://x-ia.ro/images/exponential.png">
<meta property="og:description" content="Exponential - Contact">
<meta property="description" content="Exponential - Contact">

<title>Contact | Exponential</title>
@endsection

@section('content')
<section class="hero is-medium  ">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-3 has-text-left">Contact</h1>
            <div class="columns">
                <div class="column is-one-third has-text-left">
                    <div class="buttons">
                        <a href="mailto:contact@x-ia.ro" class="button is-fullwidth is-medium">
                          <span class="icon is-medium">
                              <i class="fas fa-envelope"></i>
                          </span>
                          <span>contact@x-ia.ro</span>
                        </a>
                    </div>
                </div>
                <div class="column is-one-third has-text-left">
                    <div class="buttons">
                        <a href="https://www.facebook.com/exponential.iacob/" target="_blank" rel="noreferrer" class="button is-fullwidth is-medium">
                            <span class="icon is-medium">
                                <i class="fab fa-facebook"></i>
                            </span>
                            <span>Pagina de Facebook</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
