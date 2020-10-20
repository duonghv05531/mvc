
<?php $__env->startSection('title', 'Quản trị sản phẩm'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Danh mục</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Tiêu đề</th>
            <th>Chi tiết</th>
            <th>Số sao</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Người tạo</th>
            <th>Lượt xem</th>
            <th>Hành động
                <br>
                <a class="btn btn-sm btn-outline-success" href="<?php echo e(bsUrl . 'admin-products-add'); ?>">Thêm</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($p->id); ?></td>
                    <td><?php echo e($p->getCateName()); ?></td>
                    <td><a href="<?php echo e(bsUrl . 'info?id=' . $p->id); ?>"><?php echo e($p->name); ?></a></td>
                    <td><img src="<?php echo e($p->image); ?>" alt="" width="100px"></td>
                    <td><?php echo e($p->price); ?></td>
                    <td><?php echo e($p->short_desc); ?></td>
                    <td><?php echo e($p->detail); ?></td>
                    <td><?php echo e($p->star); ?></td>
                    <td><?php echo e($p->created_at); ?></td>
                    <td><?php echo e($p->updated_at); ?></td>
                    <td><?php echo e($p->updated_by); ?></td>
                    <td><?php echo e($p->views); ?></td>
                    <td>
                        <a class="btn btn-sm btn-danger"
                            onclick="confirmRemove('<?php echo e(bsUrl . 'admin-products-delete?id=' . $p->id); ?>')"
                            href="javascript:;">Xóa</a>
                        <br> <br>
                        <a class="btn btn-sm btn-success" href="<?php echo e(bsUrl . 'admin-products-edit?id=' . $p->id); ?>">Sửa</a>
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

<?php echo $__env->make('admins.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/admins/products/index.blade.php ENDPATH**/ ?>