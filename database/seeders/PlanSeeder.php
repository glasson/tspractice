<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run()
    {
        $plans = [
            [
                'name' => 'Start Up', 
                'slug' => 'startup', 
                'stripe_plan' => 'price_1Ojz44GSPtCfphQVLrQOsXTl', 
                'price' => 250, 
                'description' => '-'
            ],
            [
                'name' => 'Small Business', 
                'slug' => 'small-business', 
                'stripe_plan' => 'price_1Ojz4XGSPtCfphQVb8MsRUC2', 
                'price' => 750, 
                'description' => '-'
            ],
            [
                'name' => 'Enterprise', 
                'slug' => 'enterprise', 
                'stripe_plan' => 'price_1Ojz51GSPtCfphQV8XFSyxzA', 
                'price' => 1500, 
                'description' => '-'
            ],
        ];
   
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
