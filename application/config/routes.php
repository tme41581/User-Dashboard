<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Users';


//Users Controller
$route['register'] = "Users/register";
$route['login'] = "Users/login";


// Dashboards Controller
$route['dashboards'] = "Dashboards/index";
$route['/users/show/(:any)'] = "Users/show/$1";
$route['messages/create'] = "Dashboard/create_messages";
$route['comments/create'] = "Dashboard/create_comments";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['support1'] = "Dashboards/show_support1";
$route['support2'] = "Dashboards/show_support2";
$route['support3'] = "Dashboards/show_support3";