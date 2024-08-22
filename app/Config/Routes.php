<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['as' => 'home']);

$routes->get('lang/{locale}','Language::index');


$routes->get('/article','Article::index',['as' => 'article', 'filter' => 'permission:article.create']);

$routes->post('/article','Article::articleCreate',['as' => 'article.create', 'filter' => 'permission:article.create']);

$routes->get('samplearticle','Article::sampleArticle');

$routes->get('articledelete/(:num)','Article::delete/$1');

$routes->group('user',static function($routes){
    $routes->get('panel','Panel::index',['as' => 'user.panel' , 'namespace' => 'App\Controllers\User' , 'filter' => 'permission:article.create']);
    $routes->get('userdelete/(:num)','Panel::delete/$1',['namespace' => 'App\Controllers\User' , 'filter' => 'permission:users.delete']);
});

$routes->group('admin',static function($routes){
    $routes->get('panel','Panel::index',['as' => 'admin.panel' , 'namespace' => 'App\Controllers\Admin' ,'filter' => 'group:superadmin']);
});

$routes->group('{locale}', static function($routes) {
    service('auth')->routes($routes);
});
