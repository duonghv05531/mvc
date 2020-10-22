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
    protected $avatarerr;
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

                $usCheck = User::where('name', $data['name'])->count();


                if ($usCheck == 0) {
                    // var_dump(1);
                    // die;
                    $data['password'] = password_hash($data['password'], \PASSWORD_DEFAULT);
                    $model = new User();
                    $model->fill($data);
                    $model->save();
                    \header('location:' . \bsUrl . 'admin-users-list');
                    die;
                } else {
                    // var_dump(2);
                    // die;
                    $err = 1;
                    $this->userr = "Tên tài khoản đã được sử dụng";
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
    function edit($id)
    {
        if (!isset($id)) {
            \header('location:' . \bsUrl . 'admin-users-list');
        } else {
            if (isset($_POST['btn'])) {
                $data = $_POST;
                if ($_FILES['avatar']['size'] > 0) {
                    $filename = $_FILES['avatar']['name'];
                    \move_uploaded_file($_FILES['avatar']['tmp_name'], './public/images/users/' . $filename);
                    $data['avatar'] = './public/images/users/' . $filename;
                } else {
                    $err = 1;
                    $this->avatarerr = "Avatar chưa tải lên";
                }
                if ($data['email'] == "") {
                    $err = 1;
                    $this->emailerr = "Email không được để trống";
                }
                if ($data['name'] == "") {
                    $err = 1;
                    $this->userr = "Tên tài khoản không được để trống";
                } else {
                    // \var_dump($data['name']);
                    // die;
                    $usCheck = User::where('name', $data['name'])
                        ->where('id', '!=', $id)
                        ->count();
                    if ($usCheck == 0) {
                        $model = User::find($id);
                        if ($data['password'] == "") {
                            $data['password'] = $model->password;
                        } else {
                            $data['password'] = password_hash($data['password'], \PASSWORD_DEFAULT);
                        }
                        $model->fill($data);
                        $model->save();
                        \header('location:' . \bsUrl . 'admin-users-list');
                        die;
                    } else {
                        $err = 1;
                        $this->userr = "Tên tài khoản đã được sử dụng";
                    }
                }
                if ($err == 1) {
                    $user = User::find($id);
                    $this->render('admins.users.edit', [
                        'user' => $user,
                        'userr' => $this->userr,
                        'pserr' => $this->pserr,
                        'emailerr' => $this->emailerr,
                        'avatar' => $this->avatarerr
                    ]);
                }
            } else {
                $user = User::find($id);
                $this->render('admins.users.edit', [
                    'user' => $user
                ]);
            }
        }
    }
    function disable($id)
    {
        $model = User::find($id);
        if ($model->status == 1) {
            $model->status = 0;
        } else {
            $model->status = 1;
        }
        $model->save();
        \header('location:' . \bsUrl . 'admin-users-list');
    }
}
