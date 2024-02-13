<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CustomerIdComponent;
use App\Livewire\PaymentComponent;

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

Route::get('/home/customerid', CustomerIdComponent::class)->name('customerid');

Route::get('/home/payment', PaymentComponent::class)->name('payment');

Route::get('/test', function () {
    return view('test');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});
