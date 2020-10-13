<?php

namespace App\Controllers;

session_start();

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class LoginController extends BaseController
{
    private $cate;
    function __construct()
    {
        $this->cate = Category::where('show_menu', 1)->get();
        $this->pro = Product::all();

        if (isset($_SESSION['user_name'])) {
            \header('location:' . \bsUrl);
        }
    }
    function index()
    {
        if (isset($_POST['btn'])) {
            $us = $_POST['user_name'];
            $ps = $_POST['password'];
            $userr = "";
            $pserr = "";
            if ($ps == "") {
                $err = 1;
                $pserr = "Mật khẩu không được để trống";
            }
            if ($us == "") {
                $err = 1;
                $userr = "Tên tài khoản không được để trống";
            } else {
                $checkUs = User::where('name', $us)->first();
                if ($checkUs != \false) {
                    if (\password_verify($ps, $checkUs->password)) {
                        $_SESSION['user_name'] = $checkUs->name;
                        $_SESSION['email'] = $checkUs->email;
                        $_SESSION['role'] = $checkUs->role;
                        \header('location:' . \bsUrl);
                    } else {
                        $err = 1;
                        $pserr = "Mật khẩu chưa chính xác";
                    }
                } else {
                    $err = 1;
                    $userr = "Tên tài khoản chưa chính xác";
                }
            }
            if ($err == 1) {
                $this->render('login', [
                    'cate' => $this->cate,
                    'userr' => $userr,
                    'pserr' => $pserr,
                ]);
            }
        } else {
            $this->render('login', [
                'cate' => $this->cate,
            ]);
        }
    }
    function logout()
    {
        if (isset($_SESSION['user_name'])) {
            unset($_SESSION['user_name']);
            \header('location:' . \bsUrl . 'login');
        }
    }
}
