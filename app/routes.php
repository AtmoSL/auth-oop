<?php

use service\Router;

Router::addRoute('/login', 'UserController', 'login');
Router::addRoute('/register', 'UserController', 'register');
Router::addRoute('/profile', 'UserController', 'profile');
Router::post('/createuser', 'UserController', 'createuser');

