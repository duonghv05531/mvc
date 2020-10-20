
<?php $__env->startSection('title', 'Quản trị danh muc'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Tên</th>
            <th>Avatar</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Kích hoạt</th>
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
                    <td><img src="<?php echo e($u->avatar); ?>" alt="" width="100px"></td>
                    <td><?php echo e($u->email); ?></td>
                    <td><?php echo e($u->role); ?></td>
                    <td><?php echo e($u->status == 1 ? 'yes' : 'no'); ?></td>
                    <td><?php echo e($u->created_at); ?></td>
                    <td><?php echo e($u->update_at); ?></td>
                    <td>
                        <a class="btn btn-sm btn-danger"
                            onclick="confirmRemove('<?php echo e(bsUrl . 'admin-users-disable?id=' . $u->id); ?>')" href="javascript:;">
                            <?php echo e($u->status == 1 ? 'Dissable' : 'Enable'); ?>

                        </a>
                        <br> <br>
                        <a class="btn btn-sm btn-success" href="<?php echo e(bsUrl . 'admin-users-edit?id=' . $u->id); ?>">Sửa</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        function confirmRemove(removeurl) {
            alertify.confirm(
                'Thông báo',
                'Đổi trạng thái của tài khoản này ?',
                function() {
                    window.location.href = removeurl;
                },
                function() {
                    alertify.confirm().close();
                }
            );
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/admins/users/index.blade.php ENDPATH**/ ?>