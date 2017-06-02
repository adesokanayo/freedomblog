<?php $__env->startSection('content'); ?>


<div class="col-lg-8 lead">

<h1> Display  Posts </h1>


                
                <h1> <a href="/posts/<?php echo e($post->id); ?>"> <?php echo e($post->title); ?> </a>  </h1>
         
                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap within my Laravel</a>
                </p>

                

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> <?php echo e($post->created_at->toFormattedDateString()); ?></p>

                

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

          

                <!-- Post Content -->
                <p class="lead"> <?php echo e($post->body); ?></p>
      
                   
                <hr>  
             
  
  <h3>Post Comment</h3> 
  <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="comments list-group-item">
  <ul>

 <strong>

<?php echo e($comment->created_at->diffForHumans()); ?>:
 </strong>

  
  <?php echo e($comment->body); ?>


   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 

    </ul>
  </div> 
<!-- Add comment sections-->
<hr>
  <div class= "cards">

  <div class= "card-block">
  
  <div class= "form-group">
  
  <form method="POST" action="/post/comment"> 
 <textarea name="body" Placeholder="Enter comment here" class="form-control"></textarea><br>
 <button type="submit" class="btn btn-primary">Add Comment</button>
  </form>
  </div>
  </div>
  </div>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>