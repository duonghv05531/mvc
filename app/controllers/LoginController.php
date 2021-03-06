<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\User;

class LoginController extends BaseController
{
    protected $cate;
    function __construct()
    {
        $this->cate = Category::where('show_menu', 1)->get();

        if (isset($_SESSION['user_name'])) {
            \header('location:' . \bsUrl);
        }
    }
    function index()
    {
        if (isset($_POST['btn'])) {
            $us = $_POST['name'];
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
                $checkUs = User::where('name', $us)
                    ->where('status', '1')
                    ->first();
                if ($checkUs != \false) {
                    if (\password_verify($ps, $checkUs->password)) {
                        $data = [
                            'id' => $checkUs->id,
                            'name' => $checkUs->name,
                            'email' => $checkUs->email,
                            'role' => $checkUs->role,
                            'avatar' => $checkUs->avatar
                        ];
                        $_SESSION[AUTH] = $data;
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
        if (isset($_SESSION[AUTH])) {
            unset($_SESSION[AUTH]);
            \header('location:' . \bsUrl . 'login');
        }
    }
    function logup()
    {
        $pserr = "";
        $userr = "";
        $emailerr = "";
        $err = "";
        $avatarerr = "";
        if (isset($_SESSION[AUTH])) {
            \header('location:' . \bsUrl);
        }

        if (isset($_POST['btn'])) {
            $data = $_POST;
            if ($data['password'] == "") {
                $err = 1;
                $pserr = "Mật khẩu không được để trống";
            }
            if ($data['email'] == "") {
                $err = 1;
                $emailerr = "Email không được để trống";
            }
            if ($data['name'] == "") {
                $err = 1;
                $userr = "Tên đăng nhập không được để trống";
            } else {
                $userCheck = User::where('name', $data['name'])->first();
                if ($userCheck) {
                    $err = 1;
                    $userr = "Tên đăng nhập đã được sử dụng";
                }
            }
            if ($_FILES['avatar']['size'] == 0) {
                $err = 1;
                $avatarerr = "Chưa tải lên ảnh đại diện";
            }
            if ($err != 1) {
                $model = new User();
                $filename = $_FILES['avatar']['name'];
                \move_uploaded_file($_FILES['avatar']['tmp_name'], './public/images/users/' . $filename);
                $avatar = './public/images/users/' . $filename;
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $data['avatar'] = $avatar;
                $data['role'] = 1;
                $model->fill($data);
                $model->save();
                \header('location:' . \bsUrl . 'login');
            } else {
                $this->render('logup', [
                    'cate' => $this->cate,
                    'userr' => $userr,
                    'emailerr' => $emailerr,
                    'passworderr' => $pserr,
                    'avatarerr' => $avatarerr
                ]);
            }
        } else {
            $this->render('logup', [
                'cate' => $this->cate
            ]);
        }
    }
}
