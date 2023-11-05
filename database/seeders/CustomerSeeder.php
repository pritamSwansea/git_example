<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $customer = new Customer;
        // $customer->customerName = "Test";
        // $customer->customerAddress = "Swansea SA1, City center";
        // $customer->taxId = 1234;
        // $customer->save();

        Customer::factory()
            ->count(5)
            ->has(
                Order::factory()
                    ->count(2)
                // ->has(
                //     OrderDetails::factory()
                //         ->count(2)
                // )

            )
            ->create();
    }
}
