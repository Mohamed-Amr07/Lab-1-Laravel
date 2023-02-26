<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class viewPostsController extends Controller
{
    //
    public function getOnePost($id) {
        $post = Posts::find($id);
    
        return view('post', ['posts' => $post]);
    }
}
