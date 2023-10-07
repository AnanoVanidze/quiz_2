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
    return 'Anano';
});

Route::get('/name', function () {
    return 'Anano';
});


Route::get('/lastName', function () {
    return 'Vanidze';
});


Route::get('/age', function () {
    return 21;
});

Route::get('/hobby', function () {
    return "reading";
});

Route::post('/save', function () {
    return response()->json([
        "msg" => "saved!"
    ]);
});


Route::put('/add', function () {
    return response()->json([
        "msg" => "added!"
    ]);
});
