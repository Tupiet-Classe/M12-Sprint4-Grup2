<?php

use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;
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

Route::get('/andrei', function () {
    return view('andrei');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/my', function() {
    return view('wall_personal');
});

Route::get('/api', [PublicationController::class, 'get_data_from_reference']);
Route::get('/user-data', [UserController::class, 'index']);
Route::get('/post-data', [PublicationController::class, 'index']);
Route::get('/posts', [PublicationController::class, 'get_posts']);
Route::post('/post', [PublicationController::class, 'store']);