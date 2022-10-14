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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["urun-listesi"] = "home/product_list";
$route["urun-detay/(:any)"] = "home/product_detail/$1";

$route["portfolyo-listesi"] = "home/portfolio_list";
$route["portfolyo-detay/(:any)"] = "home/portfolio_detail/$1";

$route["egitim-listesi"] = "home/course_list";
$route["egitim-detay/(:any)"] = "home/course_detail/$1";

$route["proje-listesi"] = "home/project_list";

$route["referanslar"] = "home/reference_list";

$route["markalar"] = "home/brand_list";

$route["hizmetlerimiz"] = "home/service_list";

$route["hakkimizda"] = "home/about_us";

$route["iletisim"] = "home/contact";
$route["mesaj-gonder"] = "home/send_contact_message";
$route["abone-ol"] = "home/make_me_member";

$route["haberler"] = "home/news_list";
$route["haber/(:any)"] = "home/news/$1";

$route["bir-daha-gosterme"] = "home/popup_never_show_again";

$route["fotograf-galerisi"] = "home/image_gallery_list";
$route["fotograf-galerisi/(:any)"] = "home/image_gallery_list/$1";
$route["video-galerisi"] = "home/video_gallery_list";
$route["video-galerisi/(:any)"] = "home/video_gallery_list/$1";
$route["dosya-galerisi"] = "home/file_gallery_list";
$route["dosya-galerisi/(:any)"] = "home/file_gallery_list/$1";



