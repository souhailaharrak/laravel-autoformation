<?php

namespace App\Http\Controllers;
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

Route::get('/poste/{id}/{lasteName?}','App\Http\Controllers\HomeConteroller@blog')->name('route_name');

Route::get('/User',\App\Http\Controllers\UserController::class);

Route::get('/',"App\Http\Controllers\HomeConteroller@home")->name('home');

 