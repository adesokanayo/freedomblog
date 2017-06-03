<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    
    public function store(Request $request, $post_id){


   $comment = New Comment;




  $comment::create([
    'body'=> $request->input('body'),
    'post_id'=> $post_id
    ]);

       return back();

    }



}
