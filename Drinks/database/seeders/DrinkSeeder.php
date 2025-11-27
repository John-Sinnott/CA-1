<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Order;


class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

       $drinks = [
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
                'brand' => 'Guinness',
                'vol' => '4.2%',
                'image_url' => 'guinness.jpg',
                'description' => 'Guinness  is a stout that originated in the brewery of Arthur Guinness at St. Jamess Gate, Dublin, Ireland, in the 18th century. It is now owned by the multinational alcoholic beverage maker Diageo. It is one of the most successful alcohol brands worldwide, brewed in almost 50 countries, and available in over 120.[2][3] Sales in 2011 amounted to 850,000,000 litres It is the highest-selling beer in both Ireland and the United Kingdom.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],


            [
                'brand' => 'Disaronno',
                'vol' => '28%',
                'image_url' => 'disaronno.jpg',
                'description' => 'Disaronno Originale (28% ABV, 56 proof) is a type of amaretto—an amber-colored liqueur with a characteristic almond taste, although it does not actually contain almonds. It is produced in Saronno, in the Lombardy region of Italy, by ILLVA Saronno and is sold worldwide.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'FireBall Cinnamon Whiskey',
                'vol' => '33%',
                'image_url' => 'fireball.jpg',
                'description' => 'Fireball Cinnamon Whisky is a liqueur produced by the Sazerac Company. It is a mixture of a Canadian whisky base with cinnamon flavoring and sweeteners, and is bottled at 33% alcohol by volume (66 U.S. proof).',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'Buzz Ball',
                'vol' => '15%',
                'image_url' => 'buzzball.jpg',
                'description' => 'BuzzBallz is a range of US-owned ready to drink cocktail mix currently manufactured by Sazerac Company, Inc. Originally devised as a Masters degree project, it was incorporated as BuzzBallz, LLC and markets itself as a woman-owned and family-run business. It was acquired by Sazerac in 2024. The company manufactures a wide range of beverages sold domestically and internationally and describes itself as a distillery, winery, and brewery in the state of Texas.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'Konrad',
                'vol' => '4.8%',
                'image_url' => 'konrad.png',
                'description' => 'A wonderful example of a Czech Pilsner in the mid-session strength. The aroma is pleasant and mild, earthy and herbaceous, with notes of biscuit, sweet bready malt and hints of grass. The taste is beautifully malty and grassy coupled with a delicate bitterness. Medium bodied with excellent drinkability and a semi-dry finish. A cleanly lagered beer to enjoy in full on Friday and the weekend. ',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'Stella Artois',
                'vol' => '5.2%',
                'image_url' => 'stella.jpg',
                'description' => 'Stella Artois is a pilsner beer, first brewed in 1926 by Brouwerij Artois in Leuven, Belgium. In its original form, the beer is 5.2 per cent ABV, the countrys standard for pilsners. The beer is sold in many EU countries, but also in the US, UK, Canada and Australia, where it has a reduced ABV. Stella Artois is owned by Interbrew International B.V. which is a subsidiary of the worlds largest brewer',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'Soplica Vodka',
                'vol' => '60%',
                'image_url' => 'soplica.jpg',
                'description' => 'Soplica ([sɔplitsa]) is one of the older brands of Polish pure and flavoured vodka, having been first produced in 1891 (in a factory that was opened in 1888).[1] Although the origins of vodka in Poland can be traced back to as early as the 8th century, Soplica is one of the older industrially produced brands of vodka in the country.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'Poitín',
                'vol' => '90%',
                'image_url' => 'potin.jpg',
                'description' => 'Poitín, poteen or potcheen, is a traditional Irish distilled beverage (40–90% ABV). Former common names for Poitín were "Irish moonshine" and "mountain dew". It was traditionally distilled in a small pot still, and the term is a diminutive of the Irish word pota, meaning pot. In accordance with the Irish Poteen/Irish Poitín technical file, it can be made only from cereals, grain, whey, sugar beet, molasses and potatoes.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            [
                'brand' => 'Absinthe',
                'vol' => '74%',
                'image_url' => 'absinthe.png',
                'description' => 'Absinthe is an anise-flavoured spirit derived from several plants, including the flowers and leaves of Artemisia absinthium ("grand wormwood"), together with green anise, sweet fennel, and other medicinal and culinary herbs.[1] Historically described as a highly alcoholic spirit, it is 45–74% ABV or 90–148 proof in the US.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
        ];

        foreach ($drinks as $drinkData) {
            $drink = Drink::create(array_merge($drinkData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));

            $orders = Order::inRandomOrder()->take(2)->pluck('id');

            $drink->orders()->attach($orders);
        }

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
