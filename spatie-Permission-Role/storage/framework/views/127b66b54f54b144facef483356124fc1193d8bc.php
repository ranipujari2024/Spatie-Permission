
<?php $__env->startSection('content'); ?>
<!-- content @s  -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <?php echo $__env->make('layouts.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">All Permissions</h3>
            
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">

                                        <?php if(Auth::user()->hasDirectPermission('add permission')): ?>
                                        <li class="nk-block-tools-opt d-none d-sm-block">
                                            <a href="<?php echo e(url('permissions/create')); ?>" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Permission</span></a>
                                        </li>
                                        <?php endif; ?>
                                        <li class="nk-block-tools-opt d-block d-sm-none">
                                            <a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">

                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Action</th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($permi -> id); ?></td>
                                        <td><?php echo e($permi -> name); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('permissions/'.$permi->id.'/edit')); ?>" class="btn btn-success">Edit</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp_workspace\htdocs\spatie-Permission-Role\resources\views/role-permission/permission/index.blade.php ENDPATH**/ ?>