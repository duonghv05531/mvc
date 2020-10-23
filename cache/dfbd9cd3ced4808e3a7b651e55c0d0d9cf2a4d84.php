

<?php $__env->startSection('title', 'Thông tin sản phẩm'); ?>

<?php $__env->startSection('content'); ?>
    <section class="feat-product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <img style="width: 400px" src="<?php echo e($info->image); ?>" alt="">
                        </div>
                        <div class="col-6">
                            <h3 class="sec-title"><?php echo e($info->name); ?></h3>
                            <p><?php echo e($info->price); ?> $</p>
                            <p><?php echo e($info->short_desc); ?></p>
                            <p><?php echo e($info->detail); ?></p>
                            <button class="btn-sm btn-default" style="border: none">Mua ngay
                            </button>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php if(isset($_SESSION[AUTH])): ?>
                            <div class="col-md-6">
                                <br>
                                <h4>Để lại đánh giá</h4>
                                <form action="<?php echo e(bsUrl . 'comment?id=' . $info->id); ?>" method="POST">
                                    <label for="content"><?php echo e($_SESSION[AUTH]['name']); ?></label> <br>
                                    <input type="text" name="content">
                                    <br><br>
                                    <button style="border: none" type="submit" class="btn-sm btn-default"
                                        name="btn-comment">Bình luận</button>
                                </form>
                            </div>
                        <?php endif; ?>
                        <div class="col-md-6">
                            <br>
                            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="<?php echo e($c->avatar); ?>" alt="" style="width: 100%">
                                    </div>
                                    <div class="col-md-9">

                                        <p><strong><?php echo e($c->name); ?></strong>
                                        </p>
                                        <p><?php echo e($c->content); ?></p>
                                        <p>
                                            <?php if(isset($_SESSION[AUTH]['name']) && $c->uid == $_SESSION[AUTH]['id']): ?>
                                                <a class="btn-sm btn-danger"
                                                    onclick="confirmRemove('<?php echo e(bsUrl . 'comment-delete?id=' . $c->id . '&pid=' . $info->id); ?>')"
                                                    href="javascript:;">Xóa</a>
                                                <button class="btn-sm btn-success cmt">Sửa</button>
                                                <form class=" comment" name="comment" style="display: none"
                                                    action="<?php echo e(bsUrl . 'comment-edit?id=' . $c->id . '&pid=' . $info->id); ?>"
                                                    method="POST">
                                                    <input type="text" name="content" id="content">
                                                    <button name="btn-comment" class="btn-sm btn-success">Lưu</button>
                                                </form>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        var cmt = document.getElementsByClassName("cmt");
        var content = document.getElementsByClassName("comment");

        for (i = 0; i < cmt.length; i++) {
            cmt[i].onclick = function() {
                content[i].style.display = "block"
            }
        }


        // var c = document.forms["comment"].elements[0];
        // // var b = document.forms["comment"]["tbn"];
        // c.style.backgroundColor = "red";
        // c.setAttribute("type", "text");
        // b.style.display = "block";

    </script>
    <script>
        function confirmRemove(removeurl) {
            alertify.confirm(
                'Thông báo',
                'Bạn chắc chắn muốn xóa bình luận này ?',
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/products/info.blade.php ENDPATH**/ ?>