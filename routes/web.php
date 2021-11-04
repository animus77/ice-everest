<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PromotionController;

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
    return view('everest');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group( function () {
    Route::view('equipments', 'admin.equipment');
    Route::view('products', 'admin.product');

    Route::get('users/profile/{user}', [ClientController::class, 'profile']);
    Route::get('users/purchase/{user}', [ClientController::class, 'purchase']);

    Route::resource('sells', SellsController::class);
    Route::resource('promotions', PromotionController::class);
});