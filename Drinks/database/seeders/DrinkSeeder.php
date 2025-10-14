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

        DB::table('drinks')->Insert([
            [
                'brand' => 'Heineken',
                'vol' => '4.3%',
                'image_url' => 'heineken.jpg',
                'description' => 'Heineken Lager Beer, or simply Heineken is a Dutch pale lager beer with 5% alcohol by volume, produced by the Dutch brewing company Heineken N.V. It is typically sold in a green bottle with a red star.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'Smirnoff',
                'vol' => '40%',
                'image_url' => 'smirnoff.jpg',
                'description' => 'Smirnoff  is a brand of vodka owned and produced by the British company Diageo. The Smirnoff brand began with a vodka distillery founded in Moscow by Pyotr Arsenievich Smirnov (1831–1898), but its modern incarnation traces back to the 1930s, by American liquor distributor Heublein.[1] Distributed in 130 countries,[1] it is manufactured in different countries depending on market, but is not currently produced in Russia or anywhere in Eastern Europe.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'Corona Extra',
                'vol' => '4.6%',
                'image_url' => 'corona.jpg',
                'description' => 'Corona is a Mexican brand of beer produced by Grupo Modelo in Mexico and exported to markets around the world. Constellation Brands is the exclusive licensee and sole importer of Corona in the fifty states of the United States, Washington, D.C., and Guam.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'Guiness',
                'vol' => '4.2%',
                'image_url' => 'guiness.jpg',
                'description' => 'Guinness  is a stout that originated in the brewery of Arthur Guinness at St. Jamess Gate, Dublin, Ireland, in the 18th century. It is now owned by the multinational alcoholic beverage maker Diageo. It is one of the most successful alcohol brands worldwide, brewed in almost 50 countries, and available in over 120.[2][3] Sales in 2011 amounted to 850,000,000 litres It is the highest-selling beer in both Ireland and the United Kingdom.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ]
        ]);

        DB::table('users')->Insert([
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
