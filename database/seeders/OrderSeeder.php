<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Order::factory()->count(2)
        //     ->has(OrderDetails::factory()->count(2))
        //     ->create();
    }
}
