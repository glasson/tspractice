<?php

use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;
use App\Livewire\CustomerIdComponent;
use App\Livewire\PaymentComponent;
use App\Http\Controllers\WebHookController;
use Illuminate\Http\Request;
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



Route::get('/test', function () {
    return view('test');
});

Route::get('/stripe/webhook', [WebHookController::class, 'handle']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function() {return view('home');})->name('home');

    Route::get('/home/customerid', CustomerIdComponent::class)->name('customerid'); 
    Route::get('/plans', [PlanController::class, 'index'])->name('plans');
    Route::get('/plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('/subscription', [PlanController::class, 'subscription'])->name("subscription.create");
});
