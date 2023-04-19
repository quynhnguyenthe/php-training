<?php
namespace App\Http\Controllers;
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

Route::get('/page/{page}/id/{id}', [HomeController::class, 'index']);

Route::get('/dashboard', 'App\Http\Controllers\ShowDashboard');

Route::prefix('cms')->group(function () {
    Route::get('/', '\App\Http\Controllers\AuthController@index');
    Route::get('login', '\App\Http\Controllers\AuthController@index');
    Route::get('register', '\App\Http\Controllers\AuthController@register');
});

Route::get('/string-response', [ResponseDemoController::class, 'stringBasicResponse']);
Route::get('/array-response', [ResponseDemoController::class, 'arrayBasicResponse']);
Route::get('/obj-response', [ResponseDemoController::class, 'OBJResponse']);
Route::get('/view-response', [ResponseDemoController::class, 'viewResponse']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/show/{id}', [PostController::class, 'show']);

Route::post('/post', [PostController::class, 'store']);

