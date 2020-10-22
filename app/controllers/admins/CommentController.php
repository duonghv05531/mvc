<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use App\Models\Comment;

class CommentController extends BaseController
{
    protected $comments;
    function __construct()
    {
        if (!isset($_SESSION[AUTH])) {
            \header('location:' . \bsUrl . 'login');
        } else {
            if ($_SESSION[AUTH]['role'] == 1) {
                \header('location:' . \bsUrl);
            }
        }
        $this->comments = Comment::all();
    }

    function index()
    {
        $count = count($this->comments);
        $this->render('admins.comments.index', [
            'comment' => $this->comments,
            'total' => $count
        ]);
    }
}
