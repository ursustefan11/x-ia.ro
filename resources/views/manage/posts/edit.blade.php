@extends ('layouts.manage')

@section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Edit Post</h1>
        </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('posts.update', $post->id)}}" method="POST">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="columns">
          <div class="column is-three-quarters">
            <div class="field">
              <label for="name" class="label">Edit Title</label>
              <p class="control">
                <input type="text" class="input" name="title" id="title" v-model="title" disabled>
              </p>
            </div>

            <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @slug-changed="updateSlug"></slug-widget>

            <b-field label="Edit Content" class="m-t-10">
                <b-input name="content" type="textarea" placeholder="Compose your masterpiece" rows="20" value="{{$post->content}}"></b-input>
            </b-field>
          </div><!--end of column.is-three-quarters-->
          <div class="column is-one-quarter-desktop">
            <label for="categories" class="label">Categorii</label>
                    <input type="hidden" class="input" name="category" :value="categoriesSelected">
                    @foreach ($category as $category_select)
                      <div class="field">
                        <b-checkbox v-model="categoriesSelected" native-value="{{$category_select->id}}">{{$category_select->name}}</b-checkbox>
                      </div>
                    @endforeach
            </div>
        </div><!--end of columns-->
        <hr>
        <button class="button is-primary">Edit Post</button>
    </form>

</div>

@endsection

@section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data: {
          title: '{{$post->title}}',
          slug: '{{$post->slug}}',
          categoriesSelected: {!! $post->category_post_test->pluck('id')!!},
          api_token: '{{Auth::user()->api_token}}'
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
        "insertdatetime media table paste media"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
@endsection
