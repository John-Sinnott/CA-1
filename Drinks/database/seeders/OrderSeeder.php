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
                'comment' => 'Order in for Heineken + Smirnoff',
                'order_date' => $currentTimestamp,
                'drinks' => [1, 2],

            ],
            [
                'customer_name' => 'D-BO',
                'comment' => 'Put an order in for Corona + Guiness, hoping for some good stuff lad',
                'order_date' => $currentTimestamp,
                'drinks' => [3, 4],
            ],
            [
                'customer_name' => 'Luca D GOAT',
                'comment' => 'Dissorano + Fireball for me please!',
                'order_date' => $currentTimestamp,
                'drinks' => [5, 6],
            ],
            [
                'customer_name' => 'John Sinnott',
                'comment' => 'BuzzBall + Stella + Konrad, especially excited for that konrad you know',
                'order_date' => $currentTimestamp,
                'drinks' => [7, 8, 9],
            ],
            [
                'customer_name' => 'KonRod',
                'comment' => 'Soplica Vodka, Poitín and Absinthe, only the hard stuff for a top bloke like me',
                'order_date' => $currentTimestamp,
                'drinks' => [10, 11, 12],
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
