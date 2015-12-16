<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function () {
    return view('layouts.introduccion');
});

Route::get('/cap2', function () {
    return view('cap2');
});

Route::get('/cap3', function () {
    return view('cap3');
});
Route::get('/cap5', function () {
    return view('cap5');
});


Route::get('/cap6', function () {
    return view('cap6');
});

Route::get('/cap7', function () {
    return view('cap7');
});

Route::get('/cap8', function () {
    return view('cap8');
});

Route::get('/cap9', function () {
    return view('cap9');
});

Route::get('/cap10', function () {
    return view('cap10');
});