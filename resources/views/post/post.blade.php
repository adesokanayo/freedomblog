
<div class="col-lg-8 lead">

                <!-- Blog Post -->

                <!-- Title -->

                @foreach ($posts as $post)
                
                <h1> <a href="/posts/{{$post->id}}"> {{$post->title}} </a>  </h1>
         
                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap within my Laravel</a>
                </p>

                

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->toFormattedDateString()}}</p>

                

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

          

                <!-- Post Content -->
                <p class="lead"> {{$post->body}}</p>
      
                     @endforeach   
                    </div>
             