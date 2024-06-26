<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\OrdersController;
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

Route::middleware(['auth', 'verified'])
->name('admin.')
->prefix('admin')
->group(function(){
    //rotte amministrazione
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/products', ProductsController::class)->parameters([
        'products' => 'product:slug'
    ]);
    Route::resource('/users', UsersController::class);
    Route::resource('/orders', OrdersController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
