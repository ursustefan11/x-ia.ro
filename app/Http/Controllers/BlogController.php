<?php

namespace App\Http\Controllers;

use App\Post;
use Butschster\Head\Facades\Meta;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('published_at', 'desc');
        return view('blog.index')->withPost($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      if(isset($slug)) {
        $post = Post::where('slug', $slug)->first();
        // $og = new \Butschster\Head\Packages\Entities\OpenGraphPackage('cescriuaici');
        // $og->setTitle($post->title)
        //     ->setDescription($post->description)
        //     ->addImage('http://x-ia.ro/storage/post_image/' . $post->background_image)
        //     ->setUrl('http://x-ia.ro/');
        // Meta::registerPackage($og);
        // Meta::prependTitle($post->title);
        // Meta::setDescription($post->description);
        // Meta::setCanonical('http://x-ia.ro/');
        return view('blog.show')->withPost($post);
      }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tehno_monitor()
    {
      $post = Post::orderBy('published_at', 'desc');

      return view('blog.index');
    }
}
