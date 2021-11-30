<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\contactController;

use App\Models\Promotion;

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
    return view('frontend.index');
});

Route::view('promociones', 'frontend.promotions', [
    'promotions' => Promotion::where('available', 1)->get()
]);

Route::view('privacidad', 'frontend.privacidad');
Route::view('contacto', 'frontend.contacto');
Route::view('servicios', 'frontend.servicios');
Route::view('productos', 'frontend.productos');
Route::view('requisitos', 'frontend.requisitos');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group( function () {
    Route::view('equipments', 'admin.equipment')->middleware('permission:equipments');
    Route::view('products', 'admin.product')->middleware('permission:products');
    Route::view('users', 'admin.users')->middleware('permission:users');

    Route::get('user/profile/{user}', [ClientController::class, 'profile'])->name('user.profile');
    Route::get('user/purchase/{user}', [ClientController::class, 'purchase'])->name('user.purchase');
    Route::get('user/{user}', [ClientController::class, 'edit'])->name('user.edit');
    Route::put('user/{user}', [ClientController::class, 'update'])->name('user.update');

    Route::resource('users', UserController::class)->only([
        'edit', 'update'
    ]);

    Route::resource('contact', contactController::class)->only([
        'index', 'store', 'destroy'
    ]);
    
    Route::resource('sells', SellsController::class);
    Route::resource('promotions', PromotionController::class);
});