<?php

namespace service;

class Viewer
{
    static function view($view, $params = [])
    {
        extract($params);
        require_once "./app/views/" . $view . ".php";
    }
}