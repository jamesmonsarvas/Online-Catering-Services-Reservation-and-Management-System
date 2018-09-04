<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['admin/(:any)'] = 'admin/view/$1';

// $route['auth/login'] = 'auth/login';
// $route['auth/index'] = 'auth/index';
// $route['auth/register'] = 'auth/create_user';
// $route['auth/forgot-password'] = 'auth/create_user';

<<<<<<< HEAD
$route['admin/packages/update'] = 'admin/packages/update';
$route['admin/packages/create'] = 'admin/packages/create';
$route['admin/packages'] = 'admin/packages/index';
=======
$route['admin'] = 'admin/dashboard';
>>>>>>> 22452f9f7fb18cd561795e30b314916bd3b9c814

$route['admin/services/update'] = 'admin/services/update';
$route['admin/services/create'] = 'admin/services/create';
$route['admin/services'] = 'admin/services/index';

// $route['reservation/update'] = 'reservation_output/update';
// $route['reservation/create'] = 'reservation_output/create';

$route['reservation'] = 'reservation_output/view';
$route['services'] = 'services_output/view';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

