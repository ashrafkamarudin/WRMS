<?php

/*
|----------------------------------------------------------------
| Routing File
|----------------------------------------------------------------
|
| This is where you register your web routes of your application
|
*/

/*
| Routes for Web Apps
*/

// Index / Main Page
$app->get('/', ['path' => 'Index/Index', 'controller' => 'Index']);

$app->get('/authenticate', ['path' => 'Authenticate', 'controller' => 'Authenticate']);
$app->get('/published', ['path' => 'Published', 'controller' => 'Published']);

if (Login::isUserLoggedIn() == true) {
	$app->get('/company', ['path' => 'ManageCompany', 'controller' => 'ManageCompany']);
	$app->get('/submission', ['path' => 'ManageSubmission', 'controller' => 'ManageSubmission']);
	$app->get('/report', ['path' => 'report', 'controller' => 'report']);
}
