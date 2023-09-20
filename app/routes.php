<?php

use service\Router;

Router::addRoute('/login', 'UserController', 'login');
Router::addRoute('/register', 'UserController', 'register');
Router::addRoute('/profile', 'UserController', 'profile');
Router::addRoute('/logout', 'UserController', 'logout');
Router::post('/createuser', 'UserController', 'createuser');

