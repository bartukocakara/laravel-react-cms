<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainerStatus;

class TrainerStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainerStatus::factory()
            ->times(50)
            ->create();
    }
}
