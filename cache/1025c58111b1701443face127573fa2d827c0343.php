
<?php $__env->startSection('title', 'Sửa tài khoản'); ?>
<?php $__env->startSection('content'); ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-4 offset-3" style="margin: auto">
                <br>
                <h3 class="text-center text-info">SỬA TÀI KHOẢN</h3>
                <div class="form-group">
                    <br>
                    <label for="name">Tên tài khoản</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>">
                    <small class="form-text text-danger">
                        <?php if(isset($userr)): ?>
                            <?php echo e($userr); ?>

                        <?php endif; ?>
                    </small>
                </div>
                <div class="form-group">
                    <br>
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo e($user->email); ?>">
                    <small class="form-text text-danger">
                        <?php if(isset($emailerr)): ?>
                            <?php echo e($emailerr); ?>

                        <?php endif; ?>
                    </small>
                </div>
                <div class="form-group">
                    <br>
                    <label for="password">Mật khẩu</label>
                    <input type="text" class="form-control" name="password">
                    <small class="form-text text-danger">
                        <?php if(isset($pserr)): ?>
                            <?php echo e($pserr); ?>

                        <?php endif; ?>
                    </small>
                </div>
                <div class="form-group">
                    <br>
                    <label for="password">Ảnh đại diện</label><br>
                    <img src="<?php echo e($user->avatar); ?>" alt="" width="100px">
                    <input type="hidden" name="avatar" value="<?php echo e($user->avatar); ?>">
                    <input style="border: none" type="file" class="form-control" name="avatar">
                </div>
                <div class="form-group">
                    <label for="password">Vai trò</label>
                    <br>
                    <select name="role" id="">
                        <option value="900">Admin</option>
                        <option value="700">Nhân viên</option>
                        <option value="1">Khách hàng</option>
                    </select>
                </div>
                <div class="form-group">
                    <br>
                    <button type="submit" name="btn" class="btn btn-outline-success">Cập nhật</button>
                </div>

            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/admins/users/edit.blade.php ENDPATH**/ ?>