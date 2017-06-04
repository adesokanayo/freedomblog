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

   $user = User::create(request(['name','email','password']));

    //sign them in

    Auth()->login($user);


    //redirect to home page

   return  redirect()->home();


    }
}
