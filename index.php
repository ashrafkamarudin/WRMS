<?php

session_start();

//User Autoloader
require_once $_SERVER['DOCUMENT_ROOT'].'libs/Router.php';
require_once $_SERVER['DOCUMENT_ROOT'].'libs/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'].'libs/View.php';
require_once $_SERVER['DOCUMENT_ROOT'].'libs/Model.php';

//Library
require_once $_SERVER['DOCUMENT_ROOT'].'libs/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'].'libs/auth/authregister.php';
require_once $_SERVER['DOCUMENT_ROOT'].'libs/auth/authlogin.php';
require_once $_SERVER['DOCUMENT_ROOT'].'libs/Flash.php';
require_once $_SERVER['DOCUMENT_ROOT'].'libs/Test.php';

require_once $_SERVER['DOCUMENT_ROOT'].'config.php';

//Testing
require_once $_SERVER['DOCUMENT_ROOT'].'test/ConsoleWrite.php';

$app = new Route();

require_once 'route.php';

$app->run();