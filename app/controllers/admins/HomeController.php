<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use App\Models\Product;
use App\Models\Category;

class HomeController extends BaseController
{
    private $pro;
    private $cate;
    function __construct()
    {
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
            if ($_FILES['image']['size'] > 0) {
                $filename = $_FILES['image']['name'];
                \move_uploaded_file($_FILES['image']['tmp_name'], './public/images/' . $filename);
                $image = './public/images/' . $filename;
            } else {
                $image = "";
            }
            $data = $_POST;
            $model = new Product();
            $model->fill($data);
            $model->image = $image;
            $model->save();
            \header('location:' . \bsUrl . 'admin-products-list');
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
            // $this->render('admins.products.index', [
            //     'cate' => $this->cate,
            //     'pro' => $this->pro
            // ]);
        } else {
            if (isset($_POST['btn'])) {

                if ($_FILES['image']['size'] > 0) {
                    $filename = $_FILES['image']['name'];
                    \move_uploaded_file($_FILES['image']['tmp_name'], './public/images/' . $filename);
                    $image = './public/images/' . $filename;
                } else {
                    $image = $_REQUEST['image'];
                }
                $data = $_POST;
                $model = Product::find($id);
                $model->fill($data);
                $model->image = $image;
                $model->save();
                \header('location:' . \bsUrl . 'admin-products-list');
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
