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

// $route['posts/index']='posts/index';
// $route['posts/create']='posts/create';
// $route['posts/update']='posts/update';
// $route['posts/(:any)']='posts/view/$1';
// $route['posts'] = 'posts/index';

// $route['categories/create']='categories/create';
// $route['categories/posts/(:any)']='categories/posts/$1';
// $route['categories']='categories/index';
// $route['(:any)']='page/view/$1';

// career item view
$route['career/(:any)']='career/view/$1'; 
$route['admin/career']='career/admin';
$route['admin/career/create']='career/create';
$route['admin/career/edit/(:any)']='career/edit/$1';
$route['admin/career/delete/(:any)']='career/delete/$1';

// news pagination and breadcrumb
$route['news/index']='news/index/$1';
// news item view
$route['news/(:any)']='news/view/$1'; 
// news admin crud
$route['admin/news']='news/admin';
$route['admin/news/create']='news/create';
$route['admin/news/edit/(:any)']='news/edit/$1';
$route['admin/news/delete/(:any)']='news/delete/$1';


// regulation pagination and breadcrumb
$route['regulation/index']='regulation/index/$1';
// regulation item view
$route['regulation/(:any)']='regulation/view/$1'; 
// regulation admin crud
$route['admin/regulation']='regulation/admin';
$route['admin/regulation/create']='regulation/create';
$route['admin/regulation/edit/(:any)']='regulation/edit/$1';
$route['admin/regulation/delete/(:any)']='regulation/delete/$1';

$route['admin/user']='user/admin';
$route['admin/user/create']='user/create';
$route['admin/user/edit/(:any)']='user/edit/$1';
$route['admin/user/delete/(:any)']='user/delete/$1';
$route['admin/user/changepassword/(:any)']='user/changepassword/$1';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
