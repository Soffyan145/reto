<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ==========================================================================================
// Admin
// @npic restaurant
// ==========================================================================================

$route['a/dashboard']                     = 'admin/dashboard';

$route['a/slider']                          = 'admin/data_slider';
$route['a/slider/add']                      = 'admin/data_slider/add';
$route['a/slider/edit/']                    = 'admin/data_slider/edit';
$route['a/slider/delete/']                    = 'admin/data_slider/delete';

$route['a/shop']                            = 'admin/dashboard';
$route['a/food']                            = 'admin/data_menu';
$route['a/user']                            = 'admin/data_user';
$route['a/table']                           = 'admin/data_table';
$route['a/salary']                          = 'admin/data_salary';
$route['a/salary/choose_employee']          = 'admin/data_salary/choose_employee';
$route['a/logout']                          = 'auth/logout';
$route['a/setting']                         = 'admin/setting';
$route['a/profile']                         = 'admin/data_account';
$route['a/employee']                        = 'admin/data_employee';
$route['a/position']                        = 'admin/data_posittion';
$route['a/food_type']                       = 'admin/data_type';
$route['a/reservation']                     = 'admin/dashboard';
$route['a/transaction']                     = 'admin/invoice';
$route['a/edit_profile']                    = 'admin/data_account/edit';
$route['a/food_category']                   = 'admin/data_kategori';
$route['a/change_password']                 = 'admin/data_account/change_password';
$route['a/food_not_available']              = 'admin/menu_not_available';
