<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::factory()
            ->times(3)
            ->create();
        Currency::insert([
            [
                "name" => "Dollar",
                "code" => "USD",
                "symbol" => "$"
            ],
            [
                "name" => "Euro",
                "code" => "EUR",
                "symbol" => "€"
            ],
            [
                "name" => "Turkish Lira",
                "code" => "TRY",
                "symbol" => "₺"
            ],
        ]);

    }
}
