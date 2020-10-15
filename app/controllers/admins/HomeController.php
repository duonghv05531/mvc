<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use App\Models\Product;
use App\Models\Category;

class HomeController extends BaseController
{
    private $pro;
    private $cate;
    private $nameerr;
    private $priceerr;
    private $imageerr;
    private $short_descerr;
    private $detailerr;
    private $starerr;
    private $viewserr;
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
        $this->render('admins.products.index', [
            'pro' => $this->pro
        ]);
    }
    function add()
    {
        if (isset($_POST['btn'])) {
            // \var_dump($_REQUEST);
            // die;
            $data = $_POST;
            if ($data['name'] == "") {
                $err = 1;
                $this->nameerr = "Tên sản phẩm không được để trống";
            }

            if ($_FILES['image']['size'] > 0) {
                $filename = $_FILES['image']['name'];
                \move_uploaded_file($_FILES['image']['tmp_name'], './public/images/products/' . $filename);
                $image = './public/images/products/' . $filename;
            } else {
                $err = 1;
                $this->imageerr = "Ảnh sản phẩm không được để trống";
            }
            if ($data['price'] == "") {
                $err = 1;
                $this->priceerr = "Giá sản phẩm không được để trống";
            }
            if ($data['short_desc'] == "") {
                $err = 1;
                $this->short_descerr = "Tiêu đề không được để trống";
            }
            if ($data['detail'] == "") {
                $err = 1;
                $this->detailerr = "Mô tả không được để trống";
            }
            if ($data['star'] == "") {
                $err = 1;
                $this->starerr = "Số sao không được để trống";
            }
            if ($data['views'] == "") {
                $err = 1;
                $this->viewserr = "Luợt xem không được để trống";
            }

            if ($err != 1) {
                $model = new Product();
                $model->fill($data);
                $model->image = $image;
                $model->created_by = $_SESSION['user_name'];
                $model->save();
                \header('location:' . \bsUrl . 'admin-products-list');
            } else {
                $this->render('admins.products.add', [
                    'cate' => $this->cate,
                    'nameerr' => $this->nameerr,
                    'imageerr' => $this->imageerr,
                    'priceerr' => $this->priceerr,
                    'short_descerr' => $this->short_descerr,
                    'detailerr' => $this->detailerr,
                    'starerr' => $this->starerr,
                    'viewserr' => $this->viewserr
                ]);
            }
        } else {
            $this->render('admins.products.add', [
                'cate' => $this->cate
            ]);
        }
    }
    function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id == "") {
            \header('location:' . \bsUrl . 'admin-products-list');
        } else {
            if (isset($_POST['btn'])) {

                $data = $_POST;
                if ($data['name'] == "") {
                    $err = 1;
                    $this->nameerr = "Tên sản phẩm không được để trống";
                }

                if ($data['price'] == "") {
                    $err = 1;
                    $this->priceerr = "Giá sản phẩm không được để trống";
                }
                if ($data['short_desc'] == "") {
                    $err = 1;
                    $this->short_descerr = "Tiêu đề không được để trống";
                }
                if ($data['detail'] == "") {
                    $err = 1;
                    $this->detailerr = "Mô tả không được để trống";
                }
                if ($data['star'] == "") {
                    $err = 1;
                    $this->starerr = "Số sao không được để trống";
                }
                if ($data['views'] == "") {
                    $err = 1;
                    $this->viewserr = "Luợt xem không được để trống";
                }

                if ($_FILES['image']['size'] > 0) {
                    $filename = $_FILES['image']['name'];
                    \move_uploaded_file($_FILES['image']['tmp_name'], './public/images/products/' . $filename);
                    $image = './public/images/products/' . $filename;
                } else {
                    $image = $_REQUEST['image'];
                }

                if ($err != 1) {
                    $model = Product::find($id);
                    $model->fill($data);
                    $model->image = $image;
                    $model->save();
                    \header('location:' . \bsUrl . 'admin-products-list');
                } else {
                    $pro = Product::find($id);
                    $this->render('admins.products.edit', [
                        'pro' => $pro,
                        'cate' => $this->cate,
                        'nameerr' => $this->nameerr,
                        'imageerr' => $this->imageerr,
                        'priceerr' => $this->priceerr,
                        'short_descerr' => $this->short_descerr,
                        'detailerr' => $this->detailerr,
                        'starerr' => $this->starerr,
                        'viewserr' => $this->viewserr
                    ]);
                }
            } else {
                $pro = Product::find($id);
                if ($pro) {
                    $this->render('admins.products.edit', [
                        'pro' => $pro,
                        'cate' => $this->cate
                    ]);
                } else {
                    \header('location:' . \bsUrl . 'admin-products-list');
                }
            }
        }
    }
    function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";

        if ($id == "") {
            $this->render('admins.products.index', [
                'pro' => $this->pro
            ]);
        } else {
            $model = Product::find($id);
            $model->delete();
            \header('location:' . \bsUrl . 'admin-products-list');
        }
    }

    // het class
}
