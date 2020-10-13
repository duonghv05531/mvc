
<?php $__env->startSection('title', 'Sửa sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <br> <br>
                    <label for="formGroupExampleInput">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($pro->name); ?>">
                    <?php if(isset($nameerr)): ?>
                        <small class="text-danger"><?php echo e($nameerr); ?></small>
                    <?php endif; ?>
                </div>

                <div class=" form-group">
                    <label for="formGroupExampleInput2">Giá</label>
                    <input type="text" class="form-control" name="price" value="<?php echo e($pro->price); ?>">
                    <?php if(isset($priceerr)): ?>
                        <small class="text-danger"><?php echo e($priceerr); ?></small>
                    <?php endif; ?>
                </div>
                <div class=" form-group">
                    <label for="formGroupExampleInput2">Danh mục</label>
                    <br>
                    <select style="border-color:#ced4da;border-radius:3px" name="cate_id">
                        <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($c->id); ?>"><?php echo e($c->cate_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <br><br>
                    <label for="formGroupExampleInput">Sao</label>
                    <input type="text" class="form-control" name="star" value="<?php echo e($pro->star); ?>">
                    <?php if(isset($starerr)): ?>
                        <small class="text-danger"><?php echo e($starerr); ?></small>
                    <?php endif; ?>
                </div>
                <div class=" form-group">
                    <label for="formGroupExampleInput2">Lượt xem</label>
                    <input type="text" class="form-control" name="views" value="<?php echo e($pro->views); ?>">
                    <?php if(isset($viewserr)): ?>
                        <small class="text-danger"><?php echo e($viewserr); ?></small>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-12">

                <div class="form-group">
                    <label for="formGroupExampleInput">Ảnh</label>
                    <br>
                    <?php if($pro->image != ''): ?>
                        <input type="hidden" name="image" value="<?php echo e($pro->image); ?>">
                        <img src="<?php echo e($pro->image); ?>" alt="" width="200px">
                    <?php endif; ?>
                    <input style="border: none;" type="file" class="form-control" name="image">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tiêu đề</label>
                            <textarea name="short_desc" id="desc" cols="90" rows="10"><?php echo e($pro->short_desc); ?></textarea>
                            <?php if(isset($short_descerr)): ?>
                                <small class="text-danger"><?php echo e($short_descerr); ?></small>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" form-group">
                            <label for="formGroupExampleInput2">Chi tiết</label> <br>
                            <textarea name="detail" id="detail" cols="90" rows="10"><?php echo e($pro->detail); ?></textarea>
                            <?php if(isset($detailerr)): ?>
                                <small class="text-danger"><?php echo e($detailerr); ?></small>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <button type="submit" name="btn" class="btn btn-outline-success">Lưu</button>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        CKEDITOR.replace('desc');
        CKEDITOR.replace('detail');

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/admins/products/edit.blade.php ENDPATH**/ ?>