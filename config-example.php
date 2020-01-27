<?php

/*
* Database Settings
*/

define('DB_TYPE', 'mysql');
define('DB_HOST', 'q');
define('DB_NAME', 'WRMS');
define('DB_USER', 'root');
define('DB_PASS', '');

/*
* Base URL
*/

define('URL', 'http://localhost/WRMS/');

/*
* Auditor Login Info
*/

define('USERNAME', 'auditor');
define('PASSWORD', 'password');

/*
* Error Reporting
* References:
* 0 => Turn off error reporting
* -1 => Report all PHP errors
* E_ALL => Report all PHP errors
* E_ERROR | E_WARNING | E_PARSE => Report simple running errors
*
*/

error_reporting(E_ALL);
ini_set('display_errors','On');