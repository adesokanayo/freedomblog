@extends('layouts.master')

@section('content')

<div class="col-lg-8 lead">

<h1> User Registration  </h1>

<form method="POST" action="/register">

{{csrf_field()}}



<div class="form-group">

   <label for="name">Name</label>
   <input type="text" class ="form-control" id="name" name="name">
    
    </div>

    <div class ="form-group">

    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control">
   
   </div>
    <div class ="form-group">

    <label for="email">Password</label>
    <input type="password" name="password" class="form-control">
   
   </div>

       <div class ="form-group">

    <label for="email">Password Confirmation </label>
    <input type="password" name="password_confirmation" class="form-control">
   
   </div>
    <button type="submit" value="submit" class ="btn btn-primary">Register</button>
    @include('layouts.errors')
    </div>
    
</form>

</div>
@endsection

