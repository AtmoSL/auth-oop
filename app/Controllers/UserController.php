<?php

namespace app\Controllers;

use service\Viewer;

class UserController
{
    public function login()
    {
        Viewer::view('test');
    }
}