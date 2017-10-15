<?php

namespace App\Http\Controllers;

use App\Post;
use Falur\Breadcrumbs\BreadcrumbsItem;
use Falur\Breadcrumbs\Contracts\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;

class CosmeticsController extends Controller
{
    public function index()
    {
        $all_posts = Post::all();
        return view('cosmetics.index',compact('all_posts'));
    }

    public function post(Post $post, Breadcrumbs $breadcrumbs)
    {

        $breadcrumbs->addArray([
            new BreadcrumbsItem('Главная', route('main')),
            new BreadcrumbsItem('Косметика', route('cosmetics')),
        ]);
        return view('cosmetics.post',compact('post'));
    }

    public function create(Breadcrumbs $breadcrumbs)
    {
        $breadcrumbs->addArray([
            new BreadcrumbsItem('Главная', route('main')),
            new BreadcrumbsItem('Личный кабинет', route('home')),
        ]);
        $post = new Post;
        return view('cosmetics.create',compact('post'));
    }

    public function post_create(Request $request)
    {

        $newPost = new Post;
//        $newPost->fill(Input::all());
        $newPost->company_name = $request->company_name;
        $newPost->title = $request->title;
        $newPost->content = $request->content;

        $newPost->save();
        Session::flash('success','Пост добавлен');
        return redirect(route('cosmetics'));
    }

    public function post_edit(Request $request, Post $post)
    {
        return view('cosmetics.update',compact('post'));
    }
}
