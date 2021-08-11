<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Referee;

class RefereeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Referee::factory()
            ->times(50)
            ->create();
    }
}
