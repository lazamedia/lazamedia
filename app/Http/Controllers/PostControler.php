<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostControler extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title =' ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title =' by ' . $author->name;
        }

        return view('posts', [
            "title" => "Semua Postingan " .$title,
            "active" => 'posts',
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    // with(['author', 'category'])->
    public function show(Post $post)
    {
        return view('post', [
            "title"  => "Single Post",
            "active" => 'posts',
             "post" => $post
        ]);
    }
}
