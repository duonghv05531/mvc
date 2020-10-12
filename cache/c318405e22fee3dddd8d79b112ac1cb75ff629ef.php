
<?php $__env->startSection('title', 'Quản trị danh muc'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Avatar</th>
            <th>Email</th>
            <th>Email verified at</th>
            <th>Role</th>
            <th>Password |
                <br>
                Remember Token
            </th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Hành động
                <br>
                <a class="btn btn-outline-success" href="<?php echo e(bsUrl . 'admin-users-add'); ?>">Thêm</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($u->id); ?></td>
                    <td><?php echo e($u->name); ?></td>
                    <td><?php echo e($u->avatar); ?></td>
                    <td><?php echo e($u->email); ?></td>
                    <td><?php echo e($u->email_verified_at); ?></td>
                    <td><?php echo e($u->role); ?></td>
                    <td><?php echo e($u->password); ?>

                        <?php echo e($u->remember_token); ?>

                    </td>
                    <td><?php echo e($u->created_at); ?></td>
                    <td><?php echo e($u->update_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/admins/users/index.blade.php ENDPATH**/ ?>