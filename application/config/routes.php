<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['get_list/(:num)'] = 'app/get_list/$1';

$route['default_controller'] = 'app';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
