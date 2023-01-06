<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;
use App\CategoryPost;
use DB;
use Exception;
use Auth;
use Carbon\Carbon;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class PostController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('role:superadministrator|administrator|editor|author|contributor');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_post = CategoryPost::all();
        $category = Category::all();
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('manage.posts.index')
                    ->withPosts($posts)
                    ->with('category_post', $category_post)
                    ->with('category', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('parent_id', 2)->get();
        return view('manage.posts.create')->withCategory($category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
          'title' => 'required|max:255',
          'slug' => 'sometimes|max:255',
          'description' => 'sometimes|max:255',
          'content' => 'required',
          'categories' => 'required',
          'file_upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $post = new Post();
        $optimizerChain = OptimizerChainFactory::create();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->description = $request->description;
        $post->content = $request->content;
        $imageFileName = $post->slug . '.' . $request->file_upload->getClientOriginalExtension();
        $request->file_upload->storeAs('post_image/', $imageFileName);
        $optimizerChain->optimize(public_path('storage\post_image/') . $imageFileName);
        $post->published_at = Carbon::now();
        $post->user_id = Auth::id();
        $post->background_image = $imageFileName;
        $post->save();

        foreach (explode(',', $request->categories) as $c_option) {

            $posts = Post::whereRaw('id = (select max(`id`) from posts)')->first();

            $categorypost = new CategoryPost();
            $categorypost->post_id = $posts->id;
            $categories_n = Category::where('id', $c_option)->first();
            $categorypost->category_id = $c_option;
            $categorypost->save();
        }

        if ($post->save() && $categorypost->save()) {
            return redirect()->route('posts.show', $post->slug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category_post = CategoryPost::all();
        $category = Category::all();
        $post = Post::where('slug', $slug)->first();

        return view('manage.posts.show')
                ->with('category', $category)
                ->with('category_post', $category_post)        
                ->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('parent_id', 2)->get();
        $post = Post::where('id', $id)->with('category_post_test')->first();
        
        return view('manage.posts.edit')
                    ->withPost($post)
                    ->withCategory($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'content' => 'required',
          'category' => 'required'
        ]);

        $post = Post::findOrFail($id);
        $post->content = $request->content;
        $post->updated_at = now();

        $category_edit = $request->category;

        $post->save();

        $post->category_post_test()->sync(explode(',', $category_edit));

        return redirect()->route('posts.show', $post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::findOrFail($slug);
        Storage::disk('local')->delete('post_image/', $post->background_image);
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function apiCheckUnique(Request $request)
    {
        return json_encode(!Post::where('slug', '=', $request->slug)->exists());
    }

    public function mergeDatabases()
    {
        $query_select = DB::select('SELECT * FROM exponential.posts');

        $query_test = json_decode(json_encode($query_select), true);

        foreach ($query_test as $query) {
            DB::table('xiaro_exponential.posts')
                    ->insertGetId([
                    'user_id' => $query['user_id'],
                    'slug' => $query['slug'],
                    'title' => $query['title'],
                    'content' => $query['content'],
                    'description' => $query['description'],
                    'background_image' => $query['background_image'],
                    'published_at' => $query['published_at'],
                    'created_at' => $query['created_at'],
                    'updated_at' => $query['updated_at']
                ]);
        }
    }

    public function assignCategory()
    {
        //
    }
}