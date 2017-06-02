<?php $__env->startSection('content'); ?> 

       
    <!-- Page Content -->
    <div class="container">

        <div class="row">

<?php echo $__env->make('post.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Blog Post Content Column -->
       
           

<?php $__env->stopSection(); ?>
   </div>


 </div>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>