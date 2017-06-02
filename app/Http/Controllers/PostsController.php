<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //

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
       //return ('hello all');
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

       $post::create(request(['title','body']));

       return redirect('/');
     }
    

    public function about(){

        return ("This is about page");
    }

    public function latest(){

       return  $this->orderBy($column,'desc');
    }



    public function addcomment(){




        
    }

}
