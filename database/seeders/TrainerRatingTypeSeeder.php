<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainerRatingType;

class TrainerRatingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainerRatingType::factory()
            ->times(50)
            ->create();
    }
}
