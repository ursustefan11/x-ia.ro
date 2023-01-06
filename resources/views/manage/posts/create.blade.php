@extends('layouts.manage')

@section('content')
<div class="flex-container p-l-25">
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
            <li class="is-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="columns">
            <div class="column is-three-quarters-desktop">

                <b-field label="Post Title">
                    <b-input type="text" placeholder="Post Title" v-model="title" name="title"></b-input>
                </b-field>

                <slug-widget url="{{url('/')}}" subdirectory="tehno_monitor" :title="title" @slug-changed="updateSlug"></slug-widget>

                <b-field label="Post Description">
                    <b-input type="text" placeholder="Description" name="description" value="{{ old('description') }}"></b-input>
                </b-field>

                <b-field label="Post Content">
                    <b-input name="content" type="textarea" placeholder="Compose your masterpiece" rows="10" value="{{ old('content') }}"></b-input>
                </b-field>

                <b-field class="file field">
                    <b-upload name="file_upload" v-model="file">
                        <a class="button is-info">
                            <i class="fas fa-upload m-r-10  "></i>
                            <span>Click to upload</span>
                        </a>
                    </b-upload>
                    <span class="file-name" v-if="file">
                        @{{file.name}}</span>
                </b-field>
                <!--end of .file-->
            </div>
            <!--end of .column.is-three-quarters-desktop-->
            <div class="column is-one-quarter-desktop">
            <label for="categories" class="label">Categorii</label>
                    <input type="hidden" class="input" name="categories" :value="categoriesSelected">
                    @foreach ($category as $category_select)
                      <div class="field">
                        <b-checkbox v-model="categoriesSelected" native-value="{{$category_select->id}}">{{$category_select->name}}</b-checkbox>
                      </div>
                    @endforeach
            <button class="button is-primary is-fullwidth">Postează</button>
            </div>
        </div>
        <!--end of columns-->
    </form>
</div>
@endsection

@section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data: {
            title: '',
            slug: '',
            api_token: '{{Auth::user()->api_token}}',
            file: null,
            categoriesSelected: []
        },
        methods: {
            updateSlug: function(val) {
                this.slug = val;
            }
        }
    });
</script>
<script src="https://cdn.tiny.cloud/1/m4rwwyesj4efu6b8ptkusbsrd0ipgyk5uj7ns8uyldcpbm51/tinymce/5/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        extended_valid_elements: [
          'p[class=has-text-justified]',
          'iframe[class=has-ratio]'
        ]
    });
</script>
@endsection
