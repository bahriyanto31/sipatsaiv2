<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/dashboard';
$route['login'] = 'admin/login';
$route['admin/logout'] = 'admin/login/logout';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
