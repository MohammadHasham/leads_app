<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PurchaseController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('auth/google',[LoginController::class,'googlepage']);

route::get('auth/google/callback',[LoginController::class,'googlecallback']);


Route::middleware(['deductCredit'])->group(function () {
    Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
});

Route::get('/insufficient-credits', [LeadController::class, 'insufficientCredits'])->name('insufficient.credits');

Route::get('/purchase-credits', [PurchaseController::class, 'purchaseCredits'])->name('purchase.credits');