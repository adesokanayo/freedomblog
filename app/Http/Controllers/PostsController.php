<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{

public function __construct(){

$this->middleware('auth')->except(['index','show']);

}

    public function index(){

       $posts =  Post::latest()->get();

        return view('post.index', compact('posts'));
    }

    public function show( $id){

      $post =  Post::find($id);

        return view ('post.show', compact('post'));
    }

    public function create(){

        return view ('post.create');
      
    }

    public function store(Request $request){

        $this->validate(request(),[

            'title'=> 'required|min:5',
            'body' => 'required'

        ] );


       $post = new Post;
       $user = new User;

      // $post->title = request('title');
      // $post->body =  request('body');

      // $post->save();
   

       $post::create([
           
           
           'title' => request('title'),
           'body'=> request('body'),
           'user_id' => auth()->id()
           //request(['title','body']),
       
       
        // 'user_id'=> Auth()->user()->id
       
       ]);

       return redirect('/');
     }
    

    public function about(){

        return ("This is about page");
    }

    public function latest(){

       return  $this->orderBy($column,'desc');
    }

}
