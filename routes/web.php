<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\RestController;
use App\Http\Controllers\ClientController;

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
    return view('home/index');
});
Route::get('client', [ClientController::class, 'index']);
//method function standard
// Route::resource('post', PostController::class);
//method function custom
Route::apiResource('rest', RestController::class);
Route::controller(PostController::class)->group(function () {
    Route::get('post/', 'index');
    Route::get('post/create', 'create');
    Route::post('post/store', 'store');
    Route::get('post/{id}/edit', 'edit');
    Route::put('post/{id}', 'update');
    Route::delete('post/{id}', 'destroy');
});
