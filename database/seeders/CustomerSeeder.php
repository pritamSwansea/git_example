<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customer;
        $customer->customerName = "Test";
        $customer->customerAddress = "Swansea SA1, City center";
        $customer->taxId = 1234;
        $customer->save();
        Customer::factory()->count(5)->create();
    }
}
