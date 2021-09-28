<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManagerRating;

class ManagerRatingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ManagerRating::factory()
            ->times(50)
            ->create();
    }
}
