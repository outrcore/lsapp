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

/*
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/users/{id}/{name}', function($id, $name) {
    return 'This is user '.$name.' with an id of '.$id;
});

/* Load profile view this way?
Route::get('/users/{id}/profile', function($id) {
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');

