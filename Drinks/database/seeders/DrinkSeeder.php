<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        'image_url' => 'heineken.jpg',
        'description' => 'blaabllaaaa',
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp
    ],
    [
        'brand' => 'Smirnoff',
        'vol' => '40%',
        'image_url' => 'smirnoff.jpg',
        'description' => 'blaabllaaaa',
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp
    ],
    [
        'brand' => 'Corona Extra',
        'vol' => '4.6%',
        'image_url' => 'corona.jpg',
        'description' => 'blaabllaaaa',
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp
    ],
    [
        'brand' => 'Guiness',
        'vol' => '4.2%',
        'image_url' => 'guiness.jpg',
        'description' => 'blaabllaaaa',
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp
    ]
]);

DB::table('users')->insert([
    [
        'name' => 'Alice Johnson',
        'email' => 'alice@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password123',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
    [
        'name' => 'Bob Smith',
        'email' => 'bob@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password1234',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
    [
        'name' => 'Charlie Brown',
        'email' => 'charlie@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password1235',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
    [
        'name' => 'Diana Prince',
        'email' => 'diana@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password1236',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
    [
        'name' => 'Ethan Hunt',
        'email' => 'ethan@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password1237',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
    [
        'name' => 'Fiona Gallagher',
        'email' => 'fiona@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password1238',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
    [
        'name' => 'George Lucas',
        'email' => 'george@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password1239',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
    [
        'name' => 'Hannah Baker',
        'email' => 'hannah@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password12310',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
    [
        'name' => 'Ian Malcolm',
        'email' => 'ian@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password12311',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
    [
        'name' => 'Julia Roberts',
        'email' => 'julia@example.com',
        'email_verified_at' => $currentTimestamp,
        'password' => 'password12312',
        'remember_token' => Str::random(10),
        'created_at' => $currentTimestamp,
        'updated_at' => $currentTimestamp,
    ],
]);


    }
}
