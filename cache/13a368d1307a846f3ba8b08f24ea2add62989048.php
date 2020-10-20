

<?php $__env->startSection('title', 'Đăng ký'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-6 offset-3">
        <br>
        <br>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="user_name">Tên đăng nhập</label>
                <input type="text" class="form-control" name="name" id="user_name">
                <?php if(isset($userr)): ?>
                    <small id="userHelp" class="form-text text-muted"><?php echo e($userr); ?></small>
                <?php else: ?>
                    <small id="userHelp" class="form-text text-muted">Không chia sẻ tài khoản cho bất cứ ai để tránh bị mất
                        tài
                        khoản</small>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="user_name">Email</label>
                <input type="text" class="form-control" name="email" id="user_name">
                <?php if(isset($emailerr)): ?>
                    <small id="userHelp" class="form-text text-muted"><?php echo e($emailerr); ?></small>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                <?php if(isset($pserr)): ?>
                    <small id="passwordHelp" class="form-text text-muted"><?php echo e($pserr); ?></small>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="password">Avatar</label>
                <input type="file" name="avatar" class="form-control" id="avatar" style="border: none">
                <?php if(isset($pserr)): ?>
                    <small id="passwordHelp" class="form-text text-muted"><?php echo e($pserr); ?></small>
                <?php endif; ?>
            </div>
            
            <button type="submit" name="btn" class="btn btn-danger">Đăng ký</button>
            <br><br>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/logup.blade.php ENDPATH**/ ?>