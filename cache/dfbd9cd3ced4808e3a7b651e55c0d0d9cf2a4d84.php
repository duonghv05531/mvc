

<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?>

<?php $__env->startSection('content'); ?>

    <section class="feat-product">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img style="width: 400px" src="<?php echo e($info->image); ?>" alt="">
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h3 class="sec-title"><?php echo e($info->name); ?></h3>
                                <p><?php echo e($info->price); ?> $</p>
                                <p><?php echo e($info->short_desc); ?></p>
                                <p><?php echo e($info->detail); ?></p>
                                <button class="btn-sm btn-success" style="border: none">Mua </button>
                            </div>
                            <?php if(isset($_SESSION[AUTH])): ?>
                                <div class="col-md-6">
                                    <br>
                                    <form action="<?php echo e(bsUrl . 'comment?id=' . $info->id); ?>" method="POST">
                                        <input type="text" name="content">
                                        <button style="border: none" type="submit" class="btn-sm btn-success"
                                            name="btn-comment">Bình luận</button>
                                    </form>
                                </div>
                            <?php endif; ?>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <br>
                                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p><strong><?php echo e($c->name); ?></strong> <br> <?php echo e($c->content); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/products/info.blade.php ENDPATH**/ ?>