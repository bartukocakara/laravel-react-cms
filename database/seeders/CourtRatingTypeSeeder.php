<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourtRatingType;

class CourtRatingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourtRatingType::factory()
            ->times(50)
            ->create();
    }
}
