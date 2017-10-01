<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CosmeticsController extends Controller
{
    public function index()
    {
        $all_posts = Post::all();
        return view('cosmetics.index',compact('all_posts'));
    }

    public function post(Post $post)
    {
        return view('cosmetics.post',compact('post'));
    }

    public function create()
    {
        return view('cosmetics.create');
    }


}
