<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    protected $user;
    protected $userr;
    protected $pserr;
    protected $emailerr;
    function __construct()
    {
        if (!isset($_SESSION[AUTH])) {
            \header('location:' . \bsUrl . 'login');
        } else {
            if ($_SESSION[AUTH]['role'] == 1) {
                \header('location:' . \bsUrl);
            }
        }
        $this->user = User::all();
    }
    function index()
    {

        $this->render('admins.users.index', [
            'user' => $this->user
        ]);
    }
    function add()
    {
        if (isset($_POST['btn'])) {
            $data = $_POST;
            if ($_FILES['avatar']['size'] > 0) {
                $filename = $_FILES['avatar']['name'];
                \move_uploaded_file($_FILES['avatar']['tmp_name'], './public/images/users/' . $filename);
                $data['avatar'] = './public/images/users/' . $filename;
            } else {
                $data['avatar'] = "";
            }
            if ($data['email'] == "") {
                $err = 1;
                $this->emailerr = "Email không được để trống";
            }
            if ($data['password'] == "") {
                $err = 1;
                $this->pserr = "Mật khẩu không được để trống";
            }
            if ($data['name'] == "") {
                $err = 1;
                $this->userr = "Tên tài khoản không được để trống";
            } else {
                // \var_dump($data['name']);
                // die;
                $usCheck = User::where('name', $data['name'])->get();
                if ($usCheck) {
                    $err = 1;
                    $this->userr = "Tên tài khoản đã được sử dụng";
                } else {
                    $data['password'] = password_hash($data['password'], \PASSWORD_DEFAULT);
                    $model = new User();
                    $model->fill($data);
                    $model->save();
                    \header('location:' . \bsUrl . 'admin-users-list');
                    die;
                }
            }
            if ($err == 1) {
                $this->render('admins.users.add', [
                    'userr' => $this->userr,
                    'pserr' => $this->pserr,
                    'emailerr' => $this->emailerr
                ]);
            }
        } else {
            $this->render('admins.users.add');
        }
    }
}
