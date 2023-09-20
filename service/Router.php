<?php

namespace service;

class Router
{
    private static $links = [];

    public static function addRoute($uri, $controller, $action)
    {
        self::$links[$uri] = [
            "controller" => $controller,
            "action" => $action,
            "method" => null
        ];
    }

    public static function post($uri, $controller, $action)
    {
        self::$links[$uri] = [
            "controller" => $controller,
            "action" => $action,
            "method" => "post"
        ];
    }

    public static function start()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        if (isset(self::$links[$route])) {
            $controllerName = "app\\Controllers\\" . self::$links[$route]["controller"];
            $action = self::$links[$route]['action'];

            $controllerObject = new $controllerName();
            if(self::$links[$route]["method"] === "post"){
                $controllerObject->$action($_POST);
            }else{
                $controllerObject->$action();
            }

        } else {
            http_response_code(404);
            Viewer::view('404');
        }
    }

    public static function redirect($uri)
    {
        header("location: ". $uri);
    }
}