<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/packages'] = 'admin/packages/index';
$route['admin/packages/create_packages'] = 'admin/packages/create_packages';
$route['admin/packages/add_content'] = 'admin/packages/add_content';
$route['admin/packages/package_content_index'] = "admin/packages/package_content_index";
$route['admin/packages/package_content_index/insert_content'] = "admin/packages/package_content_index/insert_content";

$route['admin/packages/list_of_menu'] = "admin/packages/list_of_menu";

$route['admin'] = 'admin/dashboard';

$route['admin/services/update'] = 'admin/services/update';
$route['admin/services/create'] = 'admin/services/create';
$route['admin/services'] = 'admin/services/index';

$route['reservation'] = 'reservation_output/view';
$route['reservation/create'] = 'reservation_output/create';
$route['reservation/view_reference'] = 'reservation_output/view_reference';

$route['reservation/index'] = 'admin/reservation/approve_reservation';
$route['reservation/index'] = 'admin/reservation/cancel_reservation';
$route['reservation/index'] = 'admin/reservation/delete';

$route['contact/create'] = 'pages/create';

$route['feedback/index'] = 'admin/feedback/update_feature';

$route['events/index'] = 'admin/feedback/update_event';

// URL = Controller/Function/(Paramaters)

$route['services'] = 'services_output/view';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

