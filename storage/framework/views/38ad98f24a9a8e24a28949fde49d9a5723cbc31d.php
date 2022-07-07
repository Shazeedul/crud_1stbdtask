
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Customers</div>
                    <div class="card-body">
                        <a href="<?php echo e(route('customers.create')); ?>" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>

                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1;
                                ?>
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><img src="<?php echo e(asset('storage/'.$item->image)); ?>" widh="50" height="50" alt="" title=""></td>
                                    <td>
                                        <?php if($item->status==0): ?>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Deactive</button>
                                        <?php else: ?>
                                            <button class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Active</button>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                            <a href="<?php echo e(route('customers.show', $item->id)); ?>" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(route('customers.edit', $item->id)); ?>" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form action="<?php echo e(route('customers.destroy', $item->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="btn btn-danger btn-sm" title="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customers.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Documents\crud-app\resources\views/projects/index.blade.php ENDPATH**/ ?>