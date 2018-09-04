<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['admin/(:any)'] = 'admin/view/$1';

// $route['auth/login'] = 'auth/login';
// $route['auth/index'] = 'auth/index';
// $route['auth/register'] = 'auth/create_user';
// $route['auth/forgot-password'] = 'auth/create_user';

$route['admin/packages/update'] = 'admin/packages/update';
$route['admin/packages/create'] = 'admin/packages/create';
$route['admin/packages'] = 'admin/packages/index';

$route['admin/services/update'] = 'admin/services/update';
$route['admin/services/create'] = 'admin/services/create';
$route['admin/services'] = 'admin/services/index';

$route['services'] = 'services_output/index';

$route['admin'] = 'admin/dashboard';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

