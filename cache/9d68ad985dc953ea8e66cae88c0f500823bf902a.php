
<?php $__env->startSection('title', 'Quản trị danh muc'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Tên</th>
            <th>Slug</th>
            <th>Mô tả</th>
            <th>Hiển thị</th>
            <th>Tổng sản phẩm</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Người tạo</th>
            <th>Hành động
                <br>
                <a class="btn btn-outline-success" href="<?php echo e(bsUrl . 'admin-categories-add'); ?>">Thêm</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($c->id); ?></td>
                    <td><?php echo e($c->cate_name); ?></td>
                    <td><?php echo e($c->slug); ?></td>
                    <td><?php echo e($c->desc); ?></td>
                    <td><?php echo e($c->show_menu == 1 ? 'yes' : 'no'); ?></td>
                    <td><?php echo e(count($c->products)); ?></td>
                    <td><?php echo e($c->created_at); ?></td>
                    <td><?php echo e($c->updated_at); ?></td>
                    <td><?php echo e($c->created_by); ?></td>
                    <td>

                        <a class="btn btn-sm btn-danger"
                            onclick="confirmRemove('<?php echo e(bsUrl . 'admin-categories-delete?id=' . $c->id); ?>')"
                            href="javascript:;">Xóa</a>
                        <br> <br>
                        <a class="btn btn-sm btn-success" href="<?php echo e(bsUrl . 'admin-categories-edit?id=' . $c->id); ?>">Sửa</a>
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
                'Bạn chắc chắn muốn xóa sản phẩm này ?',
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

<?php echo $__env->make('admins.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/admins/categories/index.blade.php ENDPATH**/ ?>