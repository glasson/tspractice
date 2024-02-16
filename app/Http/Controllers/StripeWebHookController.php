<?php

namespace App\Http\Controllers;

use Laravel\Cashier\Http\Controllers\WebhookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StripeWebHookController extends Controller
{
    public function handle(Request $request) {
        Log::info($request);
        $endpoint_secret = 'whsec_5a0d8f43dff3f9bd0f53dbf3929b3e078cda6fce2cd82174ac765641da172161';

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
        $event = \Stripe\Webhook::constructEvent(
            $payload, $sig_header, $endpoint_secret
        );
        } catch(\UnexpectedValueException $e) {
        // Invalid payload
        http_response_code(400);
        exit();
        } catch(\Stripe\Exception\SignatureVerificationException $e) {
        // Invalid signature
        http_response_code(400);
        exit();
        }

        // Handle the event
        switch ($event->type) {
        case 'payment_intent.succeeded':
            $paymentIntent = $event->data->object;
        // ... handle other event types
        default:
            echo 'Received unknown event type ' . $event->type;
        }

        http_response_code(200);
    }
}
