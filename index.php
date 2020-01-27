<?php

session_start();

//User Autoloader
require_once 'libs/router.php';
require_once 'libs/Controller.php';
require_once 'libs/View.php';
require_once 'libs/Model.php';

//Library
require_once 'libs/Database.php';
require_once 'libs/auth/authregister.php';
require_once 'libs/auth/authlogin.php';
require_once 'libs/Flash.php';
require_once 'libs/Test.php';

require_once 'config.php';

//Testing
require_once 'test/ConsoleWrite.php';

$app = new Route();

require_once 'route.php';

$app->run();