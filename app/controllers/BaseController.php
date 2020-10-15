<?php

namespace App\Controllers;

use Jenssegers\Blade\Blade;

class BaseController
{
    function __construct()
    {
    }
    protected function render($flie, $data = [])
    {
        $blade = new Blade('./app/views', './cache');
        echo $blade->make($flie, $data)->render();
    }
}
