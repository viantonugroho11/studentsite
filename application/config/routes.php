<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'Page/about';
$route['berita'] = 'Page/berita';
$route['pendaftaran'] = 'Page/pendaftaran';
$route['pendaftaran2'] = 'Page/pendaftaran2';
$route['proses_pendaftaran'] = 'Page/proses_pendaftaran';
$route['proses_pendaftaran2'] = 'Page/proses_pendaftaran2';
$route['berita/(:any)'] = 'Page/detail/$1';
$route['login'] = 'Auth';
$route['logout'] = 'Auth/logout';
$route['cekLogin'] = 'Auth/cekLogin';
$route['register'] = 'Auth/register';
$route['prosesRegister'] = 'Auth/prosesRegister';

// ADMIN
$route['admin/db'] = 'admin/Dashboard';
$route['admin/db'] = 'admin/Admin';
$route['admin/edit/(:any)'] = 'admin/Admin/editAdmin/$1';
$route['admin/delete/(:any)'] = 'admin/Admin/delete/$1';
$route['admin/add-new-data-admin'] = 'admin/Admin/addNewAdmin';

$route['admin/add-new-data-santri'] = 'admin/Santri/addNewSantri';
$route['admin/add-new-data-list-santri'] = 'admin/ListSantri/addNewSantri';
$route['admin/list-santri'] = 'admin/ListSantri';
$route['list-santri/edit/(:any)'] = 'admin/ListSantri/edit/$1';
$route['list-santri/delete/(:any)'] = 'admin/ListSantri/delete/$1';

$route['admin/list_santribaru'] = 'admin/ListSantriBaru';
$route['list-santribaru/edit/(:any)'] = 'admin/ListSantriBaru/edit/$1';
$route['list-santribaru/delete/(:any)'] = 'admin/ListSantriBaru/delete/$1';
$route['admin/add-new-data-list-santribaru'] = 'admin/ListSantriBaru/addNewSantriBaru';

// ADMIN CONTROLLER list-teacher 
$route['admin/list-teacher'] = 'admin/ListTeacher';
$route['list-teacher/edit/(:any)'] = 'admin/ListTeacher/editTeacher/$1';
$route['list-teacher/delete/(:any)'] = 'admin/ListTeacher/delete/$1';
$route['admin/add-new-data-teacher'] = 'admin/ListTeacher/addNewTeacher';

// ADMIN CONTROLLER Post 
$route['admin/posts'] = 'admin/Post';
$route['admin/add-new-data-post'] = 'admin/Post/addNewPost';
$route['admin/posts/edit/(:any)'] = 'admin/Post/edit/$1';
$route['admin/posts/delete/(:any)'] = 'admin/Post/delete/$1';


// CETAK
$route['cetak-list-santri'] = 'admin/ListSantri/cetak';
$route['cetak-list-teacher'] = 'admin/ListTeacher/cetak';


//bacaselengkapnya
$route['bacaselengkapnya'] = 'Page/bacaselengkapnya';
