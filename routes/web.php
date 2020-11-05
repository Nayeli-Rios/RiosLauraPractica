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

Route::get('/plantilla','Cont@plant');
Route::get('/frid',[
    'uses'=>'Cont@fri',
    'as'=>'frida'
]);

Route::get('/cordelia',[
    'uses'=>'Cont@cord',
    'as'=>'cordelia'
]);

Route::get('/diego',[
    'uses'=>'Cont@dig',
    'as'=>'diego'
]);

Route::get('/emilia',[
    'uses'=>'Cont@emi',
    'as'=>'emilia'
]);

Route::get('/mathias',[
    'uses'=>'Cont@mati',
    'as'=>'mathi'
]);
