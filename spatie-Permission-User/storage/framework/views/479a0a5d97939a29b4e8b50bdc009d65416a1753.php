
<?php $__env->startSection('content'); ?>

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title"></h3>
                        </div>
                    </div>
                </div>
                <div class="nk-block nk-block-lg">

                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <form method="POST" action="<?php echo e(url('users/'.$data->id.'/give-permissions')); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Permissions</label>
                                            <?php $__errorArgs = ['permission'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert" style="display:block;">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <div class="row">
                                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $per): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-lg-3">
                                                    <input type="checkbox"  name="permission[]"  <?php if($per->is_present ==1): ?> checked <?php endif; ?> id="labelfor<?php echo e($per->id); ?>" value="<?php echo e($per->name); ?>">  <?php echo e($per->name); ?>

                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp_workspace\htdocs\spatie-Permission-User\resources\views/role-permission/role/add-permission.blade.php ENDPATH**/ ?>