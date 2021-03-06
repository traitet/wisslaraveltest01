<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;

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

// link with controller
Route::resource('products', ProductController::class);
// link with controller (below are same command)
// Route::resource('contacts', 'App\Http\Controllers\ContactController');
Route::resource('contacts', ContactController::class);


Route::post('main',[MainController::class,'getData']);

Route::view('report','main');
