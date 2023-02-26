<?php

namespace App\Http\Controllers;
use App\Models\posts;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getProducts(){
    $posts =   posts::get();
    dd($posts);
    }
}
