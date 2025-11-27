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
            ['customer_name' => 'Petru Svet',    'comment' => "Very Good Quality!", 'quantity' => 6, 'order_date' => $currentTimestamp],
            ['customer_name' => 'D-BO',          'comment' => "Slammed them all in an hour! would reccommend", 'quantity' => 12, 'order_date' => $currentTimestamp],
            ['customer_name' => 'Luca D GOAT',   'comment' => "Nice Evening with 4 cans, W purchase", 'quantity' => 4,  'order_date' => $currentTimestamp],
            ['customer_name' => 'John Sinnott',  'comment' => "Got Moldy", 'quantity' => 10, 'order_date' => $currentTimestamp],
            ['customer_name' => 'KonRod',        'comment' => "W Beer", 'quantity' => 2, 'order_date' => $currentTimestamp],
        ]);
    }
}
