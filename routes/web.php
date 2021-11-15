<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    OrderController
};

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'orders/'], function() {
    Route::get('/', [OrderController::class, 'index'])
    ->name('orders.index');

    Route::get('/create', [OrderController::class, 'create'])
    ->name('orders.create');

    Route::post('/create', [OrderController::class, 'store'])
    ->name('order.store');

});

