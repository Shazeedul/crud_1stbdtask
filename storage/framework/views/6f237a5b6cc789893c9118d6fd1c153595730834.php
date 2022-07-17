
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">Posts</div>
    <div class="card-body">
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success btn-sm" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br/>
        <br/>

        
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Customer Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                
                <tr>
                    <td>1</td>
                    <td>Laravel</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laboriosam at nesciunt esse temporibus consequatur libero tempore placeat ad non eum, maiores, illo dolorem rerum distinctio deserunt ab voluptate tempora.</td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Deactive</button></td>
                    <td>
                        <a href="#" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="#" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <button class="btn btn-danger btn-sm" title="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Documents\crud-app\resources\views/posts/index.blade.php ENDPATH**/ ?>