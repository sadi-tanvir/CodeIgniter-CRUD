<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['about'] =  'welcome/demo';

$route['myName/(:any)'] = 'sadi/full_name/$1';
$route['employee'] = 'frontend/EmployeeController/index';
$route['employee/add'] = 'frontend/EmployeeController/add';
$route['employee/store'] = 'frontend/EmployeeController/store';
$route['employee/edit/(:any)'] = 'frontend/EmployeeController/edit/$1';
$route['employee/update/(:any)'] = 'frontend/EmployeeController/update/$1';
$route['employee/print'] = 'frontend/EmployeeController/print';