<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $currentTimestamp = now();

        $orders = [
            [
                'customer_name' => 'Petru Svet',
                'comment' => 'Very Good Quality!',
                'quantity' => 'Single',
                'order_date' => $currentTimestamp,
                'drinks' => [1], 
            ],
            [
                'customer_name' => 'D-BO',
                'comment' => 'Slammed them all in an hour! would recommend',
                'quantity' => 'Four Pack',
                'order_date' => $currentTimestamp,
                'drinks' => [2],
            ],
            [
                'customer_name' => 'Luca D GOAT',
                'comment' => 'Nice Evening with 4 cans, W purchase',
                'quantity' => 'Six Pack',
                'order_date' => $currentTimestamp,
                'drinks' => [3],
            ],
            [
                'customer_name' => 'John Sinnott',
                'comment' => 'Got Moldy',
                'quantity' => 'Ten Pack',
                'order_date' => $currentTimestamp,
                'drinks' => [4],
            ],
            [
                'customer_name' => 'KonRod',
                'comment' => 'W Beer',
                'quantity' => 'Twelve Pack',
                'order_date' => $currentTimestamp,
                'drinks' => [5],
            ],
        ];

        foreach ($orders as $data) {
            $drinkIds = $data['drinks'] ?? [];
            unset($data['drinks']); // remove before creating order

            $order = Order::create($data);

            if (!empty($drinkIds)) {
                $order->drinks()->attach($drinkIds);
            }
        }
    }
}
