<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/hello/{year}', function ($year) {
    return 'Hello year:  '.$year;
});

Route::get('/shipping/{filter}', function ($filter) {
    // http://10.100.1.94:8080/wisstest01/public/api/shipping/pds=123&from=2022-01-17&to=2022-01-17
    return 'Search '.$filter;
});



