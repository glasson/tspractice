<?php

namespace App\Http\Controllers;
use Laravel\Cashier\Invoice;
use App\Models\Plan;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function download_invoice(Request $request, $invoiceId){
        return $request->user()->downloadInvoice($invoiceId);
    }
}
