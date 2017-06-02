
<div class="col-lg-8 lead">

                <!-- Blog Post -->

                <!-- Title -->

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
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
      
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                    </div>
             