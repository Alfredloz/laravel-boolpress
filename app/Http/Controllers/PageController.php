<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
    
    public function post_api()
    {
        return view('spa.posts');
    }
    public function posts_php()
    {
        $posts = Post::latest()->get();
        return view('pages.posts', compact('posts'));
    }
}
