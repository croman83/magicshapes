<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BaseController extends Controller
{
    public function posts() {
        $posts = Post::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('pages.posts', [
            'posts' => $posts
        ]);
    }

    public function post($slug) {
        $post = Post::where('status', 1)->where('slug', $slug)->firstOrFail();
        return view('pages.post', [
            'post' => $post
        ]);
    }
}
