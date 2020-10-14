<?php

namespace App\Controllers;


use App\Models\Product;
use App\Models\Category;

class ProductController extends BaseController
{
    protected $pro;
    protected $cate;
    function __construct()
    {
        $this->pro = Product::join('categories', 'products.cate_id', '=', 'categories.id')->where('show_menu', 1)->get();
        $this->cate = Category::where('show_menu', 1)->get();
    }
    function index()
    {
        // $pro = Product::all()->join('categories', 'products.cate_id', '=', 'categories.id');

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
        $this->render('products.info', [
            'cate' => $this->cate,
            'info' => $info
        ]);
    }
}
