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
                        <span>Thẻ quà tặng</span>
                        <span>Theo dõi đơn</span>
                        <div class="lang d-inline-flex">
                            <span>Ngôn ngữ </span>
                            <ul class="lang-dropdown">
                                <li>Tiếng Anh</li>
                                <li>Tiếng Việt</li>
                            </ul>
                        </div>
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
                    <li><a href="#">Dịch vụ</a></li>
                    <li><a href="#">Dự án</a></li>
                    <li><a href="<?php echo e(bsUrl . 'admin-products-list'); ?>">Đăng nhập</a></li>
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


    <section class="instagram">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sec-heading">
                        <h3 class="sec-title">Theo dõi chúng tôi</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="images/instagram/1.jpg" alt="" />
                        <i class="ti-instagram"></i>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="images/instagram/2.jpg" alt="" />
                        <i class="ti-instagram"></i>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="images/instagram/3.jpg" alt="" />
                        <i class="ti-instagram"></i>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="images/instagram/4.jpg" alt="" />
                        <i class="ti-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/layouts/main.blade.php ENDPATH**/ ?>