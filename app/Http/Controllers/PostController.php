<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        $title = "";

        if(request("category")){
            $category = Category::firstWhere("slug", request("category"));
            $title = $category->name;
        }

        if(request("author")){
            $author = User::firstWhere("username", request("author"));
            $title = $author->name;
        }

        return view('posts', [
            "title" => $title . " Posts",
            "active" => "posts",
            "posts" => Post::latest()->filter(request(["searchPost", "category", "author"]))->paginate(7)
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Page",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
