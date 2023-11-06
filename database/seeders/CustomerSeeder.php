<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\CustomerDetails;
use App\Models\Order;
use App\Models\Order_products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
            ->count(5)
            ->has(Order::factory()->count(2))
            ->has(CustomerDetails::factory()->count(1))
            ->create();
    }
}
