<?php

namespace service;

class Auth
{
    public static function isAuth()
    {
        if(empty($_SESSION['auth'])) return false;
        return true;
    }

    public static function auth($id)
    {
        $_SESSION['auth'] = ["user_id" => $id];
    }

    public static function logout()
    {
        unset($_SESSION['auth']);
    }
}