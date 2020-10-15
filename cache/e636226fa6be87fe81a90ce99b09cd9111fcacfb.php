

<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?>

<?php $__env->startSection('content'); ?>

    <section class="feat-product">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sec-heading">
                        <h3 class="sec-title">Sản phẩm nổi bật</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-4">
                        <div class="product-item">
                            <figure class="product-thumb">
                                <img src="<?php echo e(bsUrl . $p->image); ?>" alt="" />
                                <div class="action-links">
                                    <a href="<?php echo e(bsUrl . 'info?id=' . $p->id); ?>" class="quick-view icon"><i
                                            class="ti-eye"></i></a>
                                    <a href="#" class="wishlist icon"><i class="ti-heart"></i></a>
                                    <a href="#" class="add-cart icon"><i class="ti-shopping-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#"><?php echo e($p->name); ?></a></h5>
                                <div class="ratings">
                                    <?php for($i = 0; $i < $p->star; $i++): ?>
                                        <a href="#"><i class="ti-star"></i></a>
                                    <?php endfor; ?>
                                </div>
                                <p class="price"><?php echo e($p->price); ?> $</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/products/list.blade.php ENDPATH**/ ?>