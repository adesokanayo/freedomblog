<?php $__env->startSection('content'); ?>


<div class="col-sm-8">

<h1> Create a Post </h1>

<form method="POST" action="/posts">

<?php echo e(csrf_field()); ?>




<div class="form-group">

   <label for="title">Title:</label>
   <input type="text" class ="form-control" id="title" name="title">
    
    </div>

    <div class ="form-group">

    <label for="body">Body:</label>
    <textarea id="body"name="body" class="form-control"></textarea>
   
   </div>

    <button type ="submit" value="Publish" class ="btn btn-default">Publish</button>
    </div>
</form>

<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>