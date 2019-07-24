<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest()->paginate(6);

        return view('all_post', compact('posts'));

    }
    public function details($slug){
        $posts  = Post::where('slug',$slug)->first();

        return view('post_page', compact('posts'));
    }
}
