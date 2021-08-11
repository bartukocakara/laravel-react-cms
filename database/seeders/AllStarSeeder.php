<?php

namespace Database\Seeders;

use App\Models\AllStar;
use Illuminate\Database\Seeder;

class AllStarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllStar::factory()
            ->times(50)
            ->create();
    }
}
