<?php
namespace App\Services; 
use App\Services\ICustomerIdGenerator;

class CustomerIdGenerator implements ICustomerIdGenerator{
    public static function generateCustomerId() {
        do {
            $customerId = hash('sha256', uniqid(mt_rand(), true));
        } while (\App\Models\User::where('customer_id', $customerId)->exists());
        
        return $customerId;
    }


}