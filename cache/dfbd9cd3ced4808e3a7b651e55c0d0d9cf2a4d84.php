

<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?>

<?php $__env->startSection('content'); ?>

    <section class="feat-product">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img style="width: 400px" src="<?php echo e($info->image); ?>" alt="">
                </div>
                <div class="col-6">
                    <h3 class="sec-title"><?php echo e($info->name); ?></h3>
                    <p><?php echo e($info->price); ?> $</p>
                    <p><?php echo e($info->short_desc); ?></p>
                    <p><?php echo e($info->detail); ?></p>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/products/info.blade.php ENDPATH**/ ?>