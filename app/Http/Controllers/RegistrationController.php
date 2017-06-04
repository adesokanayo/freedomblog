<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class RegistrationController extends Controller
{
    //

    public function create(){

        return view('sessions.create');
    }



    public function store(){
    
    //validate form

    $this->validate(request(),[
    'name'=> 'required',
    'email'=> 'required|email',
    'password'=> 'required|confirmed'


    ]);


    //create

    

   $user = User::create([
       
       
       'name' => request('name'),
'email' => request('email'),
'password' => bcrypt(request('password'))
       
       ]);

    //sign them in

    Auth()->login($user);

    //{{Auth::user()->name}}


    //redirect to home page

   return  redirect()->home();


    }
}
