<?php

use App\Http\Controllers\DeviceController;
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

Route::get('/', 'MainController@index') -> name('home-peripherals');

Route::get('/show/{id}', 'MainController@show') -> name('peripherals-show');

Route::get('/create', 'MainController@create') -> name('peripherals-create');

Route::post('/store', 'MainController@store') -> name('store-peripherals');