<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getPost(){

        // $all_post = DB::table('posts')->get();
        
        $all_post = Post::all();

            return view ('post',compact('all_post'));
    }

   
}

