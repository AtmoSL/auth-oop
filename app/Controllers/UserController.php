<?php

namespace app\Controllers;

use app\Models\User;
use service\Viewer;

class UserController
{
    public function login()
    {
        Viewer::view('login');
    }

    public function register()
    {
        Viewer::view('register');
    }

    public function profile()
    {
        Viewer::view('profile');
    }
}