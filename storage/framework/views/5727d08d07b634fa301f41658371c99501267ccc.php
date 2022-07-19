
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Create Post Page</div>
  <div class="card-body">
    <div class="pull-right">
      <a class="btn btn-primary btn-sm" href="<?php echo e(route('posts.index')); ?>" title="Go back"> <i class="fas fa-backward "></i>Go Back </a>
    </div>
    <br>
      <form action="<?php echo e(route('posts.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label>Title</label></br>
        <input type="text" name="title" id="postTitle" class="form-control"></br>
        <label>Description</label></br>
        <textarea name="description" id="" class="form-control" ></textarea></br>
        <label>Customer Name</label>
            <select class="form-control" id="customername" name="customer_id">
                <option selected>Open this select menu</option>
                <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        <label class="custom-file-label" for="image">Choose file</label></br>
        <input type="file" class="custom-file-input" id="image" name="post_img"></br></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Documents\crud-app\resources\views/posts/create.blade.php ENDPATH**/ ?>