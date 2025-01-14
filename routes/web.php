<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportController;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::get('/chart', 'ChartJSController@indeks')->name('chart','chart2');

Route::get('/file-import',[ImportController::class,'importView'])->name('import-view');
Route::post('/import',[ImportController::class,'import'])->name('import');