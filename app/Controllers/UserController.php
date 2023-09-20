<?php

namespace app\Controllers;

use app\Models\User;
use app\Validators\UserValidator;
use service\Router;
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

    public function createuser($userData)
    {
        array_map("trim", $userData);

        $validation = UserValidator::registerValidate($userData);

        if(!$validation){
            header("location: /register");
            return false;
        }

        unset($userData["password-repeat"]);
        $userData["password"] = md5($userData["password"]);


        User::create($userData);
        header("location: /");
    }
}