<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlayerRatingType;

class PlayerRatingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlayerRatingType::factory()
            ->times(50)
            ->create();
    }
}
