<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    function index()
    {
        $user = User::all();
        $this->render('admins.users.index', [
            'user' => $user
        ]);
    }
}
