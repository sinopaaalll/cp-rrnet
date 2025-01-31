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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'LandingPageController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Landing Page
$route['beranda'] = 'LandingPageController/index';
$route['tentang'] = 'LandingPageController/tentang';
$route['paket'] = 'LandingPageController/paket';
// $route['layanan/detail/(:any)'] = 'LandingPageController/layananDetail/$1';
$route['galeri/(:num)'] = 'LandingPageController/galeri/$1';
$route['galeri'] = 'LandingPageController/galeri';
$route['kontak'] = 'LandingPageController/kontak';


// Auth
$route['login'] = 'AuthController/index';
$route['logout'] = 'AuthController/logout';

// Control Management System
$route['admin'] = 'HomeController/index';
$route['admin/dashboard'] = 'HomeController/index';

$route['admin/slider'] = 'SliderController/index';
$route['admin/slider/tambah'] = 'SliderController/create';
$route['admin/slider/edit/(:num)'] = 'SliderController/edit/$1';
$route['admin/slider/hapus/(:num)'] = 'SliderController/destroy/$1';

$route['admin/paket'] = 'PaketController/index';
$route['admin/paket/tambah'] = 'PaketController/create';
$route['admin/paket/edit/(:num)'] = 'PaketController/edit/$1';
$route['admin/paket/hapus/(:num)'] = 'PaketController/destroy/$1';

$route['admin/detail_paket'] = 'DetailPaketController/index';
$route['admin/detail_paket/tambah'] = 'DetailPaketController/create';
$route['admin/detail_paket/edit/(:num)'] = 'DetailPaketController/edit/$1';
$route['admin/detail_paket/hapus/(:num)'] = 'DetailPaketController/destroy/$1';


$route['admin/galeri'] = 'GaleriController/index';
$route['admin/galeri/tambah'] = 'GaleriController/create';
$route['admin/galeri/edit/(:num)'] = 'GaleriController/edit/$1';
$route['admin/galeri/hapus/(:num)'] = 'GaleriController/destroy/$1';

$route['admin/tentang'] = 'TentangController/index';
$route['admin/kontak'] = 'KontakController/index';
$route['admin/konfigurasi'] = 'KonfigurasiController/index';
$route['admin/user'] = 'UserController/index';
