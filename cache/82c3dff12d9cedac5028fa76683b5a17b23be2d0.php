
<?php $__env->startSection('title', 'Thêm sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="col-md-9" style="margin: auto">
            <div class="row">
                <div class="col-md-9" style="margin: auto">
                    <br>
                    <h3 class="text-center text-info">TẠO MỚI DANH MỤC</h3>
                </div>
                <div class="col-4" style="margin: auto">
                    <div class="form-group">
                        <br><br>
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" id="name">
                        <?php if(isset($nameerr)): ?>
                            <small class="text-danger"><?php echo e($nameerr); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group" style=" margin:0">
                        <label for="image">Ảnh</label>
                        <input style="border: none;" type="file" class="form-control" name="image" id="image">
                        <?php if(isset($imageerr)): ?>
                            <small class="text-danger"><?php echo e($imageerr); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="price">Giá</label>
                        <input type="text" class="form-control" name="price" id="price">
                        <?php if(isset($priceerr)): ?>
                            <small class="text-danger"><?php echo e($priceerr); ?></small>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-4" style="margin: auto">
                    <div class="form-group">
                        <br><br>
                        <label for="star">Sao</label>
                        <input type="text" class="form-control" name="star" id="star">
                        <?php if(isset($starerr)): ?>
                            <small class="text-danger"><?php echo e($starerr); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="cate_id">Danh mục</label>
                        <br>
                        <select style="border-color:#ced4da;border-radius:3px;" name="cate_id" id="cate_id">
                            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->cate_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="views">Lượt xem</label>
                        <input type="text" class="form-control" name="views" id="views">
                        <?php if(isset($viewserr)): ?>
                            <small class="text-danger"><?php echo e($viewserr); ?></small>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="col-md-12" style="margin: auto">
                    <div class="row">
                        <div class="col-4" style="margin: auto">
                            <div class="form-group">
                                <br> <br>
                                <label for="short_desc">Tiêu đề</label> <br>
                                <textarea name="short_desc" id="shortdesc" cols="45" rows="10"></textarea>
                                <?php if(isset($short_descerr)): ?>
                                    <small class="text-danger"><?php echo e($short_descerr); ?></small>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-4" style="margin: auto">
                            <br><br>
                            <div class=" form-group">
                                <label for="detail">Chi tiết</label> <br>
                                <textarea name="detail" id="detail" cols="45" rows="10"></textarea>
                                <?php if(isset($detailerr)): ?>
                                    <small class="text-danger"><?php echo e($detailerr); ?></small>
                                <?php endif; ?>
                            </div>

                        </div>
                        <div class="col-10" style="margin: auto">
                            <button type="submit" name="btn" class="btn btn-outline-success">Thêm</button>
                            <br>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/admins/products/add.blade.php ENDPATH**/ ?>