@extends('layouts.master')

@section('content')

<div class="col-lg-8 lead">

<h1>Login </h1>

<form method="POST" action="/login">

{{csrf_field()}}



    <div class ="form-group">

    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control">
   
   </div>
    <div class ="form-group">

    <label for="email">Password</label>
    <input type="password" name="password" class="form-control">
   
   </div>

      
    <button type="submit" value="submit" class ="btn btn-primary">Login</button>
    @include('layouts.errors')
    </div>
    
</form>

</div>
@endsection

