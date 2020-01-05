<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use FarhanWazir\GoogleMaps\GMaps;

//Route::get('/', function () {
//
//    $config['center'] = 'Air Canada Centre, Toronto';
//    $config['zoom'] = '14';
//    $config['map_height'] = '500px';
//    $config['scrollwheel'] = false;
//    //$config['geocodeCaching'] = true;
//
//    $gmap = new GMaps();
//    $gmap->initialize($config);
//
//    $map = $gmap->create_map();
//
//    return view('pages.home', compact('map'))->name('home');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/property', 'PropertiesController');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
