<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_products;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = Order::all();
        $product = Product::all();
        $orders->each(function ($order) use ($product) {
            Order_products::factory(5)->create([
                'order_id' => $order->id,
                'product_id' => $product->random()->id
            ]);
        });
    }
}
