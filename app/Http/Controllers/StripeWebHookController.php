<?php

namespace App\Http\Controllers;

use Laravel\Cashier\Http\Controllers\WebhookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StripeWebHookController extends Controller
{
    public function handle(Request $request) {
        
    }
}
