<?php

namespace App\Http\Controllers;
use Laravel\Cashier\Invoice;
use App\Models\Plan;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function download_invoice(Request $request, $subscription_type){
        $user = $request->user();
        $invoice = $user->subscription('8');
        // foreach ($invoices as $invoice){
        //     if ($invoice->type==$subscription_type)
        //         return $user->downloadInvoice($invoice->id);
        // }
        // return $invoices;
        
    }
}
