<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        DB::table('drinks')->insert([
    [
        'brand' => 'Heineken',
        'vol' => '4.3%',
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp
    ],
    [
        'brand' => 'Smirnoff',
        'vol' => '40%',
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp
    ],
    [
        'brand' => 'Corona Extra',
        'vol' => '4.6%',
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp
    ],
    [
        'brand' => 'Guiness',
        'vol' => '4.2%',
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp
    ]
]);
    }
}
