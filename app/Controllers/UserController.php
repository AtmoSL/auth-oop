<?php

namespace app\Controllers;

use app\Models\User;
use app\Validators\UserValidator;
use service\Auth;
use service\Router;
use service\Viewer;

class UserController
{
    public function login()
    {
        if(Auth::isAuth()){
            header("location: /profile");
            return false;
        }

        Viewer::view('login');
    }

    public function register()
    {
        if(Auth::isAuth()){
            header("location: /profile");
            return false;
        }

        Viewer::view('register');
    }

    public function profile()
    {
        if(!Auth::isAuth()){
            header("location: /login");
            return false;
        }

        Viewer::view('profile');
    }

    public function createuser($userData)
    {
        if(Auth::isAuth()){
            header("location: /profile");
            return false;
        }
        array_map("trim", $userData);

        $validation = UserValidator::registerValidate($userData);

        if(!$validation){
            header("location: /register");
            return false;
        }

        unset($userData["password-repeat"]);
        $userData["password"] = md5($userData["password"]);


        User::create($userData);

        $user = User::where(["email" => $userData["email"]], ["id"]);

        Auth::auth($user[0]->id);

        header("location: /profile");
    }
}