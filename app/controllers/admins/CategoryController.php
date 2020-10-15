<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends BaseController
{
    private $cate;
    function __construct()
    {
        if (!isset($_SESSION[AUTH])) {
            \header('location:' . \bsUrl . 'login');
        } else {
            if ($_SESSION[AUTH]['role'] == 1) {
                \header('location:' . \bsUrl);
            }
        }
        $this->pro = Product::all();
        $this->cate = Category::all();
    }
    function index()
    {
        $this->cate->load([
            'products'
        ]);
        $this->render('admins.categories.index', [
            'cate' => $this->cate
        ]);
    }
    function add()
    {
        if (isset($_POST['btn'])) {
            $data = $_POST;
            $cate_nameerr = "";
            $descerr = "";
            if ($data['cate_name'] == "") {
                $err = 1;
                $cate_nameerr = "Tên danh mục không được để trống";
            }
            if ($data['desc'] == "") {
                $err = 1;
                $descerr = "Mô tả không được để trống";
            }
            if ($err == 1) {
                $this->render('admins.categories.add', [
                    'cate_nameerr' => $cate_nameerr,
                    'descerr' => $descerr
                ]);
            } else {
                $model = new Category();
                $model->fill($data);
                $model->created_by = $_SESSION['user_name'];
                $model->save();
                \header('location:' . \bsUrl . 'admin-categories-list');
            }
        } else {
            $this->render('admins.categories.add', []);
        }
    }

    function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id == "") {
            \header('location:' . \bsUrl . 'admin-categories-list');
        } else {
            if (isset($_POST['btn'])) {
                $data = $_POST;
                $model = Category::find($id);
                $cate_nameerr = "";
                $descerr = "";
                if ($data['cate_name'] == "") {
                    $err = 1;
                    $cate_nameerr = "Tên danh mục không được để trống";
                }
                if ($data['desc'] == "") {
                    $err = 1;
                    $descerr = "Mô tả không được để trống";
                }
                if ($err == 1) {
                    $this->render('admins.categories.edit', [
                        'cate' => $model,
                        'cate_nameerr' => $cate_nameerr,
                        'descerr' => $descerr,

                    ]);
                } else {
                    $data['show_menu'] = isset($data['show_menu']) ? $data['show_menu'] : "";
                    $model->fill($data);
                    $model->save();
                    \header('location:' . \bsUrl . 'admin-categories-list');
                }
            } else {
                $cate = Category::find($id);
                if ($cate) {
                    $this->render('admins.categories.edit', [
                        'cate' => $cate
                    ]);
                } else {
                    \header('location:' . \bsUrl . 'admin-categories-list');
                }
            }
        }
    }
    function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id == "") {
            \header('location:' . \bsUrl . 'admin-categories-list');
        } else {
            $model = Category::find($id);
            $model->delete();
            \header('location:' . \bsUrl . 'admin-categories-list');
        }
    }
    //end class
}
