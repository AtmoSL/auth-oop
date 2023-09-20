<?php

require_once 'service/Loader.php';

use service\Loader;
use service\Router;

$loader = new Loader();

spl_autoload_register([$loader, 'load']);

require_once 'app/routes.php';
Router::start();
