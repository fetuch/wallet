<?php

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

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'invoke'])->name('homepage');

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', \App\Http\Controllers\DashboardController::class)
        ->name('dashboard');

    Route::get('/transactions', [\App\Http\Controllers\TransactionsController::class, 'index'])
        ->name('transactions.index');
});


require __DIR__.'/auth.php';
