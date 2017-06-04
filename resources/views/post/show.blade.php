@extends ('layouts.master')


@section ('content')


<div class="col-lg-8 lead">

<h1> Display  Posts </h1>


                
                <h1> <a href="/posts/{{$post->id}}"> {{$post->title}} </a>  </h1>
         
                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap within my personal Laravel</a>
                </p>

                

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->toFormattedDateString()}}</p>

                

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

          

                <!-- Post Content -->
                <p class="lead"> {{$post->body}}</p>
      
                   
                <hr>  
             
  
  <h3>Post Comment</h3> 
    <div class="comments list-group-item">
    
  @foreach($post->comments as $comment)

 
 <strong>

{{$comment->created_at->diffForHumans()}}:
 </strong>
 
  {{ $comment->body }}
  <br><br>

  <hr>
     @endforeach
       </ul>

  </div> 


<br>
  <div class= "cards">

  <div class= "card-block">
  
  <div class= "form-group">
  
  
  <form method="POST" action="/posts/{{$post->id}}/comments">
  {{csrf_field()}} 
 <textarea name="body" Placeholder="Enter comment here" class="form-control" required></textarea><br>
 <button type="submit" class="btn btn-primary">Add Comment</button>
  </form>
  </div>
  <div> @include('layouts.errors')</div> 
  </div>
  </div>
</div>
 
@endsection

