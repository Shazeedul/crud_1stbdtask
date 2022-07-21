
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Comments</div>
        <div class="card-body">
            <a href="<?php echo e(route('comments.create')); ?>" class="btn btn-success btn-sm" title="Add New Contact">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br/>
            <br/>

            
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Comment</th>
                            <th>Post</th>
                            <th>User Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i=1;
                    ?>
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($item->comment); ?></td>
                        <td><?php echo e($item->post->title); ?></td>
                        <td><?php echo e($item->post->customer->name); ?></td>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Documents\crud-app\resources\views/comments/index.blade.php ENDPATH**/ ?>