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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::middleware(['auth'])->group(function() {
    Route::get('/home', \App\Http\Controllers\HomeController::class)
        ->name('home');

    Route::get('/investments', \App\Http\Controllers\InvestmentsController::class)
        ->name('investments.index');

    Route::get('/investments/assets', [\App\Http\Controllers\Investments\AssetsController::class, 'index'])
        ->name('investments.assets.index');

    Route::get('/investments/transactions', [\App\Http\Controllers\TransactionsController::class, 'index'])
        ->name('investments.transactions.index');

    Route::get('investments/transactions/create', [\App\Http\Controllers\TransactionsController::class, 'create'])
        ->name('transactions.create');
});

Route::get('nbp/{day?}', function($day = null) {
    (new \App\Services\NBPCurrenciesService())->fetch($day);
    //(new \App\Services\NBPCurrenciesService())->fetchPeriod('2021-04-19', '2021-04-25');
});

require __DIR__.'/auth.php';
