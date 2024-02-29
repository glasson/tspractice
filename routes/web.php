<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PlanController;    
use Illuminate\Support\Facades\Route;
use App\Livewire\CustomerIdComponent;
use App\Http\Controllers\StripeWebHookController;
use Illuminate\Http\Request;
use App\Models\Subscription;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-req', function (Request $request) {
    $user = $request->user();
    $sub = Subscription::where('user_id', $user->id)->latest()->first();
    $sub->remaining_requests = $sub->remaining_requests - 1;
    $sub->save();
    
    return redirect('/user/profile');
});

Route::post('/stripe/webhook', [StripeWebHookController::class, 'handle']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function() {return view('home');})->name('home');
    Route::get('/home/customerid', CustomerIdComponent::class)->name('customerid'); //получение ид
    Route::get('/plans', [PlanController::class, 'index'])->name('plans'); 
    Route::get('/plans/{plan}', [PlanController::class, 'payment'])->name("plan.payment"); // 
    Route::post('/subscription', [PlanController::class, 'subscription'])->name("subscription.create"); // создание подписки
    Route::get('/download/invoice/{id}', [InvoiceController::class, 'download_invoice'])->name("download.invoice");
    Route::get('/cancel/subscription/{id}', [PlanController::class, 'cancel_subscription'])->name('cancel.subscription');
    Route::get('/subscription/update/{new_plan}', [PlanController::class, 'swap_subscription'])->name('subscription.update');
});


