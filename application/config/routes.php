<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/packages/update'] = 'admin/packages/update';
$route['admin/packages/create'] = 'admin/packages/create';
$route['admin/packages'] = 'admin/packages/index';
$route['admin/packages/package_content_index'] = "admin/packages/package_content_index";
$route['admin/packages/list_of_menu'] = "admin/packages/list_of_menu";

$route['admin'] = 'admin/dashboard';

$route['admin/services/update'] = 'admin/services/update';
$route['admin/services/create'] = 'admin/services/create';
$route['admin/services'] = 'admin/services/index';


$route['reservation'] = 'reservation_output/view';
$route['reservation/create'] = 'reservation_output/create';

$route['services'] = 'services_output/view';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

