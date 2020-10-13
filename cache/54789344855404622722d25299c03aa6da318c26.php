
<?php $__env->startSection('title', 'Thêm danh mục'); ?>
<?php $__env->startSection('content'); ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-4 offset-3" style="margin: auto">
                <br>
                <h3 class="text-center text-info">TẠO MỚI DANH MỤC</h3>
                <div class="form-group">
                    <br>
                    <label for="cate_name">Tên danh mục:</label>
                    <input type="text" class="form-control" name="cate_name">
                    <small class="form-text text-danger">
                        <?php if(isset($cate_nameerr)): ?>
                            <?php echo e($cate_nameerr); ?>

                        <?php endif; ?>
                    </small>
                </div>
                <div class="form-group">
                    <label for="slug">Slug:</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="form-group">
                    <label for="desc">Mô tả:</label>
                    <input type="text" class="form-control" name="desc">
                    <small class="form-text text-danger">
                        <?php if(isset($descerr)): ?>
                            <?php echo e($descerr); ?>

                        <?php endif; ?>
                    </small>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="show_menu" type="checkbox" value="1" id="show_menu">
                    <label class="form-check-label" for="show_menu">Hiển thị tại menu</label>
                </div>
                <div class="form-group">
                    <br>
                    <button type="submit" name="btn" class="btn btn-outline-success">Thêm</button>
                </div>

            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/admins/categories/add.blade.php ENDPATH**/ ?>