<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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

      // $post->title = request('title');
      // $post->body =  request('body');

      // $post->save();
      $user_id =auth()->user()->id;

       $post::create(request(['title','body','user_id']));

       return redirect('/');
     }
    

    public function about(){

        return ("This is about page");
    }

    public function latest(){

       return  $this->orderBy($column,'desc');
    }

}
