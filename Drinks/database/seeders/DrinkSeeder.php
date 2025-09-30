<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class DrinkSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $currentTimestamp = Carbon::now();

        Drink::insert([
            [
                'brand' => 'Heineken',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ]
            ]);
    }
}
