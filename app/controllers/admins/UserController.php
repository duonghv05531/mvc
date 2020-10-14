<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    function __construct()
    {
        if (!isset($_SESSION['user_name'])) {
            \header('location:' . \bsUrl . 'login');
        } else {
            if ($_SESSION['role'] == 1) {
                \header('location:' . \bsUrl);
            }
        }
    }
    function index()
    {
        $user = User::all();
        $this->render('admins.users.index', [
            'user' => $user
        ]);
    }
}
