<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- All CSS -->
    <link rel="stylesheet" href="<?php echo e(bsUrl . 'public/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo e(bsUrl . 'public/css/themify-icons.css'); ?>" />
    <link rel="stylesheet" href="<?php echo e(bsUrl . 'public/css/owl.carousel.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo e(bsUrl . 'public/css/style.css'); ?>" />
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <!-- Header strat -->
    <header class="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span>Hoteline: +01 256 25 235</span>
                        <span>email: info@eiser.com</span>
                    </div>
                    <div class="col text-right">
                        <?php if(isset($_SESSION[AUTH])): ?>
                            <?php if($_SESSION[AUTH]['role'] != 1): ?>
                                <span><a href="<?php echo e(bsUrl . 'admin-products-list'); ?>">Quản trị</a></span>
                            <?php endif; ?>
                            <span><a href="<?php echo e(bsUrl . 'logout'); ?>">Đăng xuất</a></span>
                        <?php else: ?>
                            <span><a href="<?php echo e(bsUrl . 'login'); ?>">Đăng nhập</a></span>
                            <span><a href="<?php echo e(bsUrl . 'logup'); ?>">Đăng ký</a></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <nav class="navbar">
                <!-- Site logo -->
                <a href="home-01.html" class="logo">
                    <img src="<?php echo e(bsUrl . 'public/images/logo.png'); ?>" alt="" />
                </a>
                <a href="javascript:void(0);" id="mobile-menu-toggler">
                    <i class="ti-align-justify"></i>
                </a>
                <ul class="navbar-nav">
                    <li><a href="<?php echo e(bsUrl); ?>">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li class="current-menu-item has-menu-child">
                        <a href="index.html">Sản phẩm</a>
                        <ul class="sub-menu">
                            <!--can sua-->
                            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(bsUrl . 'procate?id=' . $c->id); ?>"><?php echo e($c->cate_name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li><a href="form.html">Liên hệ</a></li>
                </ul>

                <div class="d-inline-flex align-items-center">
                    <a href="#" class="search-icon icon">
                        <!-- <img src="images/icons/search.png" alt=""> -->
                        <i class="ti-search"></i>
                    </a>
                    <a href="#" class="cart-bag icon">
                        <!-- <img src="images/icons/bag.png" alt=""> -->
                        <i class="ti-shopping-cart"></i>
                        <span class="itemCount">0</span>
                    </a>
                    <a href="#" class="wishlist icon">
                        <i class="ti-heart"></i>
                        <span class="itemCount">09</span>
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header strat -->

    <!-- Banner section start -->
    <section class="banner" style="background-image: url(<?php echo e(bsUrl . 'public/images/bg-1.jpg'); ?>)">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-0">
                    <div class="banner-content">
                        <span class="tagline">Bộ sưu tập</span>
                        <h1>Bộ sưu tập nữ</h1>
                        <a href="#" class="btn-default">Mua ngay</a>
                    </div>
                </div>
                <div class="col-md-6 order-0 order-md-1">
                    <div class="ban-img">
                        <img src="<?php echo e(bsUrl . 'public/images/ban-1.png'); ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content start -->
    <?php echo $__env->yieldContent('content'); ?>


    <!-- Instagram end -->

    <!-- Footer strat -->
    <footer class="footer">
        <div class="container foo-top">
            <div class="row">
                <div class="col-md-2 col-sm-6">
                    <div class="widget widget-navigation">
                        <h4 class="widget-title">Về chúng tôi</h4>
                        <ul>
                            <li><a href="#">Chúng tôi là ai</a></li>
                            <li><a href="#">Đồng hành cùng chúng tôi</a></li>
                            <li><a href="#">Trở thành nhà cung cấp</a></li>
                            <li><a href="#">Quan hệ đầu tư</a></li>
                            <li><a href="#">Thiết bị của chúng tôi</a></li>
                            <li><a href="#">Chương trình tiếp thị liên kết</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="widget widget-navigation">
                        <h4 class="widget-title">Thông tin thêm</h4>
                        <ul>
                            <li><a href="#">Chúng tôi là ai</a></li>
                            <li><a href="#">Đồng hành cùng chúng tôi</a></li>
                            <li><a href="#">Trở thành nhà cung cấp</a></li>
                            <li><a href="#">Quan hệ đầu tư</a></li>
                            <li><a href="#">Thiết bị của chúng tôi</a></li>
                            <li><a href="#">Chương trình tiếp thị liên kết</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 offset-md-1 col-sm-6">
                    <div class="widget widget-navigation">
                        <h4 class="widget-title">Mua hàng online</h4>
                        <ul>
                            <li><a href="#">Chúng tôi là ai</a></li>
                            <li><a href="#">Đồng hành cùng chúng tôi</a></li>
                            <li><a href="#">Trở thành nhà cung cấp</a></li>
                            <li><a href="#">Quan hệ đầu tư</a></li>
                            <li><a href="#">Thiết bị của chúng tôi</a></li>
                            <li><a href="#">Chương trình tiếp thị liên kết</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1 col-sm-6">
                    <div class="widget widget-app">
                        <h4 class="widget-title">Ứng dụng trên di động</h4>
                        <div class="app-btn">
                            <a href="#" class="google-play">
                                <i class="ti-android"></i>
                                <p><span>Tải trên </span>Goole play</p>
                            </a>
                            <a href="#" class="app-store">
                                <i class="ti-apple"></i>
                                <p><span>Tải trên </span>app store</p>
                            </a>
                        </div>
                    </div>
                    <div class="widget widget-social">
                        <h4 class="widget-title">Mua sắm online</h4>
                        <div class="social-media">
                            <a href="#"><i class="ti-facebook"></i></a><a href="#"><i class="ti-twitter-alt"></i></a><a
                                href="#"><i class="ti-pinterest"></i></a><a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <p class="copyright">
                Copyright © 2019 <a href="#">themeies.com</a>. All rights reserved.
            </p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- JS -->
    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/layouts/main.blade.php ENDPATH**/ ?>