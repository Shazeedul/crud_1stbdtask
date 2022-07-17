
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Customer Edit Page</div>
    <div class="card-body">
        <form action="<?php echo e(route('customers.update',$customer->id)); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php echo method_field("PUT"); ?>
          <input type="hidden" name="id" id="id" value="<?php echo e($customer->id); ?>" id="id" />
          <label>Name</label></br>
          <input type="text" name="name" id="name" value="<?php echo e($customer->name); ?>" class="form-control"></br>
          <label>Email</label></br>
          <input type="email" name="email" id="email" value="<?php echo e($customer->email); ?>" class="form-control"></br>
          <div class="form-group row">
            <label for="colFormLabe2" class="col-sm-2 font-weight-bold col-form-label">
                <h5> Status </h5>
            </label>
            <div class="form-group ">
                <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" <?php echo e(($customer->status=="1")? "checked" : ""); ?> name="status">
                        <label class="form-check-label">Active</label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" <?php echo e(($customer->status=="0")? "checked" : ""); ?> name="status">
                        <label class="form-check-label">Deactive</label>
                </div>
            </div>
          </div></br>
          
          <img src="<?php echo e(asset('storage/'.$customer->image)); ?>" widh="70" height="70"></br>
          <input type="file" accept="image/png, image/gif, image/jpeg" class="col-lg-10 form-control" id="image" placeholder="Image" name="image"></br></br>
          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
    
    </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Documents\crud-app\resources\views/projects/edit.blade.php ENDPATH**/ ?>