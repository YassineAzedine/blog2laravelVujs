<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
 public function index()
 {
    Carbon::setlocale('fr');
     $posts = Post::latest()->paginate(8);
      return response()->json($posts);
  

 
    }
}
