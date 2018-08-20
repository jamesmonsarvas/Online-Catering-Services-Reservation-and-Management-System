<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['admin/(:any)'] = 'admin/view/$1';

$route['login'] = 'auth/login';
$route['dashboard'] = 'auth/index';
$route['register'] = 'auth/create_user';

$route['admin/(:any)'] = 'admin/view/$1';

$route['services/create'] = 'services/create';
$route['services'] = 'services/index';
$route['services/(:any)'] = 'services/view/$1';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

