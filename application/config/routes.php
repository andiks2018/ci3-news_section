<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news'] = 'news';

$route['default_controller'] = 'halaman/view';
$route['(:any)'] = 'halaman/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
