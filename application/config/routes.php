<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "portal";
$route['login'] = 'login/login';
$route['camaras/condeuba/(:any)'] = 'camaras/condeuba/$1';
$route['portal'] = 'portal';
$route['portal/cidades/camaras/(:any)'] = 'cidades/camaras/$1';
$route['usuario/(:num)'] = "usuario/usuario/$1";
$route['financeiro/(:num)'] = "financeiro/financeiro/$1";
$route['entidade/(:num)'] = "entidade/entidade/$1";
$route['vereador/(:num)'] = "vereador/vereador/$1";
$route['noticia/(:num)'] = "noticia/noticia/$1";
$route['aviso/(:num)'] = "aviso/aviso/$1";
$route['Um3Um/(:num)'] = "Um3Um/Um3Um/$1";
$route['relatorios/(:num)'] = "relatorios/relatorios/$1";
$route['publicacoes/(:num)'] = "publicacoes/publicacoes/$1";
$route['publicar/(:num)'] = "publicar/publicar/$1";
$route['404_override'] = '';
