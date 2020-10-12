
<?php $__env->startSection('title', 'Thêm sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <br> <br>
                    <label for="formGroupExampleInput">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Ảnh</label>
                    <input style="border: none;" type="file" class="form-control" name="image">
                </div>
                <div class=" form-group">
                    <label for="formGroupExampleInput2">Giá</label>
                    <input type="text" class="form-control" name="price">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <br><br>
                    <label for="formGroupExampleInput">Sao</label>
                    <input type="text" class="form-control" name="star">
                </div>
                <div class=" form-group">
                    <label for="formGroupExampleInput2">Lượt xem</label>
                    <input type="text" class="form-control" name="views">
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
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <br> <br>
                            <label for="formGroupExampleInput">Tiêu đề</label> <br>
                            <textarea name="short_desc" id="desc" cols="90" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <br><br>
                        <div class=" form-group">
                            <label for="formGroupExampleInput2">Chi tiết</label> <br>
                            <textarea name="detail" id="detail" cols="90" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" name="btn" class="btn btn-outline-success">Thêm</button>
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

<?php echo $__env->make('admins.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/admins/products/add.blade.php ENDPATH**/ ?>