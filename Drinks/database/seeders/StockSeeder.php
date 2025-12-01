<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    public function run(): void
    {
        // Create timestamp BEFORE inserting
        $currentTimestamp = now();

        Stock::insert([
            [ 'user_id'=> '1', 'drink_id'=> 1, 'rating' => '5', 'stock_type' => 'Six Pack', 'comment' => 'Had a Great night with friends, suitably drunk', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            [ 'user_id'=> '2', 'drink_id'=> 2, 'rating' => '3', 'stock_type' => 'Four Pack', 'comment' => 'Bit of a bad one', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            [ 'user_id'=> '3', 'drink_id'=> 3, 'rating' => '7', 'stock_type' => 'Ten Pack', 'comment' => 'Nice Tasteing you get me', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            [ 'user_id'=> '4', 'drink_id'=> 4, 'rating' => '10', 'stock_type' => 'Twelve Pack', 'comment' => 'WHOPPER BEER BRO I LOVE THIS SO MUCH!!!', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            [ 'user_id'=> '5', 'drink_id'=> 5, 'rating' => '8', 'stock_type' => 'Six Pack', 'comment' => 'Sublime Taste Had a blast', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
        ]);
    }
}
