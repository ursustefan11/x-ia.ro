<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\CategoryPost;
use DB;
use Butschster\Head\Facades\Meta;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Jenssegers\Date\Date;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category_post = CategoryPost::all();
        $category = Category::all();
        $first_row = Post::orderBy('published_at', 'desc')->skip(0)->take(2)->get();
        $second_row = Post::orderBy('published_at', 'desc')->skip(2)->take(4)->get();
        $other_row = Post::orderBy('published_at', 'desc')->skip(6)->take(10)->get();
        // paginate
        return view('home')
              ->with('category', $category)
              ->with('category_post', $category_post)
              ->with('first_row', $first_row)
              ->with('second_row', $second_row)
              ->with('other_row', $other_row);
    }

    public function resurse()
    {
      return view('resurse');
    }

    public function cinesunt()
    {
      return view('cinesunt');
    }

    public function cookies()
    {
      return view('cookies');
    }

    public function contact()
    {
      return view('contact');
    }
}
