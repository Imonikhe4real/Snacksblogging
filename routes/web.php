<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/page2','Index1Controller@page2');
Route::get('/page3','Index2Controller@page3');
Route::get('/page2_2','Index1Controller@page2_2');
Route::get('/page3_3','Index2Controller@page3_3');
Route::get('/homes','HomesController@homes');




Route::get('buns','SnacksController@buns');
Route::get('burger','SnacksController@burger');
Route::get('cake','SnacksController@cake');
Route::get('chinchin','SnacksController@chinchin');
Route::get('springroll','SnacksController@springroll');
Route::get('donought','SnacksController@donut');
Route::get('fishroll','SnacksController@fishroll');
Route::get('hotdog','SnacksController@hotdog');
Route::get('meatpie','SnacksController@meatpie');
Route::get('pizza','SnacksController@pizza');
Route::get('puffpuff','SnacksController@puff');
Route::get('samosa','SnacksController@samosa');



Route::get('/buns','BunsController@create');
Route::post('/buns','BunsController@store');
Route::get('/buns','BunsController@index');

Route::get('/burger','BurgersController@create');
Route::post('/burger','BurgersController@store');
Route::get('/burger','BurgersController@index');

Route::get('/cake','CakesController@create');
Route::post('/cake','CakesController@store');
Route::get('/cake','CakesController@index');

Route::get('/chinchin','ChinchinsController@create');
Route::post('/chinchin','ChinchinsController@store');
Route::get('/chinchin','ChinchinsController@index');

Route::get('/donought','DonoughtsController@create');
Route::post('/donought','DonoughtsController@store');
Route::get('/donought','DonoughtsController@index');

Route::get('/fishroll','FishrollsController@create');
Route::post('/fishroll','FishrollsController@store');
Route::get('/fishroll','FishrollsController@index');


Route::get('/hotdog','HotdogsController@create');
Route::post('/hotdog','HotdogsController@store');
Route::get('/hotdog','HotdogsController@index');

Route::get('/meatpie','MeatpiesController@create');
Route::post('/meatpie','MeatpiesController@store');
Route::get('/meatpie','MeatpiesController@index');

Route::get('pizza','PizzasController@create');
Route::post('/pizza','PizzasController@store');
Route::get('/pizza','PizzasController@index');


Route::get('/puffpuff','PuffpuffsController@create');
Route::post('/puffpuff','PuffpuffsController@store');
Route::get('/puffpuff','PuffpuffsController@index');

Route::get('/samosa','SamosasController@create');
Route::post('/samosa','SamosasController@store');
Route::get('/samosa','SamosasController@index');


Route::get('/springroll','SpringrollsController@create');
Route::post('/springroll','SpringrollsController@store');
Route::get('/springroll','SpringrollsController@index');


Route::get('/contact','ContactsController@create');
Route::post('/contact','ContactsController@store');