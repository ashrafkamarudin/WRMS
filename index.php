<?php

session_start();

//User Autoloader
require 'libs/router.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Model.php';

//Library
require 'libs/Database.php';
require 'libs/auth/authregister.php';
require 'libs/auth/authlogin.php';
require 'libs/Flash.php';
require 'libs/Test.php';

require'config.php';

//Testing
require 'test/ConsoleWrite.php';

$app = new Route();

require 'route.php';

$app->run();