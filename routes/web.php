<?php

use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'index'])->name('user.index');

// User Resource, kecuali index (karena index sudah di /)
Route::resource('user', UserController::class)->except(['index']);

// Grouping untuk Bank Accounts di bawah Users
Route::prefix('user/{user}')->name('user.')->group(function () {
    Route::resource('bank-accounts', BankAccountController::class)->except(['show']);
});
