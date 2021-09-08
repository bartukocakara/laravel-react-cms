<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainingSetting;

class TrainingSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainingSetting::factory()
            ->times(50)
            ->create();
    }
}
