<?php

namespace Database\Seeders;

use App\Models\Order_products;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $product = new Product;
        // $product->productCode = "P234";
        // $product->productName = "Test product name";
        // $product->productDescription = "Test product description";
        // $product->productPrice = "235.6";
        // $product->save();

        Product::factory()
            ->count(5)
            // ->has(Order_products::factory()->count(2))

            ->create();
    }
}
