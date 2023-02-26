<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function getPosts()
    {
        $Posts = Posts::get();
        return view('post', ['posts' => $Posts]);
        //dd($Posts);
    }
    public function getOnePost($id) {
        $post = Posts::find($id);
        //dd($post);
        return view('viewOnePost', ['post' => $post]);
    }
}
