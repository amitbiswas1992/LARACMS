<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    // Route model binding example inside the getPost method

    public function getPost(){          

        // $all_post = DB::table('posts')->get();
        
         $posts = Post::all();

            return view ('post',compact('posts'));

    }

   public function create()
   {
        return view('/create');

   }
public function post()
{

    $posts=Post::all();
     return view ('post',compact('posts'));

}

   public function store()
   {
    $this->validate(request(), [
        'title'=>'required| min:8 ',
        'body'=>'required | min:10'
        ]);

        Post::create(request(['title','body']));

       return redirect('/');

   }
}

