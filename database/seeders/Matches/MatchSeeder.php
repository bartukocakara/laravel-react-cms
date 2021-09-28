<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Match;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Match::factory()
            ->times(50)
            ->create();
    }
}
