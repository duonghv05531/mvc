<?php

require_once './vendor/autoload.php';
require_once './config/db.php';
require_once './config/helpers.php';

use App\Controllers\ProductController;
use App\Controllers\Admins\HomeController;
use App\Controllers\Admins\CategoryController;
use App\Controllers\Admins\UserController;
// Đọc về eloquent model
// https://laravel.com/docs/8.x/eloquent#retrieving-single-models

$url = isset($_GET['url']) ? $_GET['url'] : "/";
$id = isset($_GET['id']) ? $_GET['id'] : "";

// var_dump($id);
// die;

switch ($url) {
    case '/';
        $ctr = new ProductController();
        $ctr->index();
        break;
    case 'procate';
        $ctr = new ProductController();
        $ctr->proCate($id);
        break;
    case 'admin-products-list';
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'admin-products-add';
        $ctr = new HomeController();
        $ctr->add();
        break;
    case 'admin-products-edit';
        $ctr = new HomeController();
        $ctr->edit();
        break;
    case 'admin-products-delete';
        $ctr = new HomeController();
        $ctr->delete();
        break;
    case 'admin-categories-list';
        $ctr = new CategoryController();
        $ctr->index();
        break;
    case 'admin-categories-add';
        $ctr = new CategoryController();
        $ctr->add();
        break;
    case 'admin-categories-edit';
        $ctr = new CategoryController();
        $ctr->edit();
        break;
    case 'admin-categories-delete';
        $ctr = new CategoryController();
        $ctr->delete();
        break;
    case 'admin-users-list';
        $ctr = new UserController();
        $ctr->index();
        break;
    default:
        # code...
        break;
}
