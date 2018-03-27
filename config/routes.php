<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'mcontrol';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'mcontrol/index';
$route['login'] = 'mcontrol/login';
//data
$route['data_home'] = 'mcontrol/dataplayer';
$route['data_team'] = 'mcontrol/datateam';
$route['player_profile/(:num)'] = 'mcontrol/playerprofile';
$route['data_matches'] = 'mcontrol/datamatches';
//broadcast
$route['broadcast_home'] = 'mcontrol/broadcasthome';
$route['broadcast_page'] = 'match_idmatch/create_match';
//analyse
$route['analyse_home'] = 'mcontrol/analysehome';
$route['analyse_map'] = 'mcontrol/analysemapping';
$route['analyse_page'] = 'mcontrol/analysepage';
$route['analyse_page_attrib/(:num)'] = 'mcontrol/attribanalysepage';
//test
$route['test'] = 'mcontrol/test';

