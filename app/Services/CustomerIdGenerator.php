<?php
namespace App\Services; 
use App\Services\ICustomerIdGenerator;

class CustomerIdGenerator implements ICustomerIdGenerator{
    public static function generateCustomerId() {
        do {
            $customerId = hash('sha256', uniqid(mt_rand(), true));
        } while (\App\Models\User::where('customerId', $customerId)->exists()); // генерация уникального ид, используется при регистрации
        
        return $customerId;
    }


}