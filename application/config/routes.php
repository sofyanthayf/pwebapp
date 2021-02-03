<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['rooms/(:any)'] = 'room/roomlist/$1';
$route['rooms'] = 'room/roomlist';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
