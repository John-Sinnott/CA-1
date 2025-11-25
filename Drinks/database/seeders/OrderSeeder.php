<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        // Create timestamp BEFORE inserting
        $currentTimestamp = now();

        Order::insert([
            ['customer_name' => 'Petru Svet',    'quantity' => 2,  'order_date' => $currentTimestamp],
            ['customer_name' => 'D-BO',          'quantity' => 12, 'order_date' => $currentTimestamp],
            ['customer_name' => 'Luca D GOAT',   'quantity' => 6,  'order_date' => $currentTimestamp],
            ['customer_name' => 'John Sinnott',  'quantity' => 1,  'order_date' => $currentTimestamp],
            ['customer_name' => 'KonRod',        'quantity' => 10, 'order_date' => $currentTimestamp],
        ]);
    }
}
