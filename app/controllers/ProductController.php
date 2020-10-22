<?php

namespace App\Controllers;


use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;

class ProductController extends BaseController
{
    protected $pro;
    protected $cate;
    function __construct()
    {
        $this->pro = Product::join('categories', 'products.cate_id', '=', 'categories.id')
            ->select('products.id', 'products.name', 'products.image', 'products.price', 'products.short_desc', 'categories.cate_name')
            ->where('show_menu', 1)
            ->get();
        $this->cate = Category::where('show_menu', 1)->get();
    }
    function index()
    {
        // $pro = Product::all()->join('categories', 'products.cate_id', '=', 'categories.id');
        // echo "<pre>";
        // \var_dump($this->pro);
        // die;
        $this->render('products.list', [
            'pro' => $this->pro,
            'cate' => $this->cate
        ]);
    }
    function proCate($cate_id)
    {
        // var_dump($cate_id);
        // die;
        $procate = Product::where('cate_id', '=', $cate_id)->get();
        if ($procate == "") {
            $nofi = "Không có sản phẩm nào trong danh mục này";
        } else {
            $nofi = "";
        }
        $this->render('products.procate', [
            'procate' => $procate,
            'cate' => $this->cate,
            'nofi' => $nofi
        ]);
    }

    function info($id)
    {
        $info = Product::find($id);
        $comments = Comment::join('users', 'comments.user_id', '=', 'users.id')
            ->select('users.id as uid', 'users.name', 'users.avatar', 'comments.content', 'comments.id')
            ->where('comments.pro_id', $id)
            ->orderBy('id', 'desc')
            ->get();
        $this->render('products.info', [
            'cate' => $this->cate,
            'info' => $info,
            'comments' => $comments
        ]);
    }
    function comment($id)
    {
        $data = $_POST;
        $model = new Comment();
        $model->user_id = $_SESSION[\AUTH]['id'];
        $model->pro_id = $id;
        $model->content = $data['content'];
        $model->save();
        \header('location:' . bsUrl . 'info?id=' . $id);
    }
    // sua comment

    function editcom($id)
    {
        if ($id == "") {
        }
    }
    function deletecom($id)
    {
        $pid = $_GET['pid'];
        if ($id == "") {
            header('location:' . bsUrl);
            die;
        } else {
            $model = Comment::find($id);
            $model->delete();
            header('location:' . bsUrl . 'info?id=' . $pid);
        }
    }
}
