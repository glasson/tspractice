<?php
namespace App\Services; 
use App\Services\ICustomerIdGenerator;

class CustomerIdGenerator implements ICustomerIdGenerator{
    public static function generateCustomerId() {
        return hash('sha256', uniqid(mt_rand(), true));
    }
}