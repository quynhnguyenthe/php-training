<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('cms')->group(function () {
    Route::get('/', '\App\Http\Controllers\AuthController@index');
    Route::get('login', '\App\Http\Controllers\AuthController@index');
    Route::get('register', '\App\Http\Controllers\AuthController@register');
});

Route::get('/string-response', [\App\Http\Controllers\ResponseDemoController::class, 'stringBasicResponse']);
Route::get('/array-response', [\App\Http\Controllers\ResponseDemoController::class, 'arrayBasicResponse']);
Route::get('/obj-response', [\App\Http\Controllers\ResponseDemoController::class, 'OBJResponse']);
Route::get('/view-response', [\App\Http\Controllers\ResponseDemoController::class, 'viewResponse']);
