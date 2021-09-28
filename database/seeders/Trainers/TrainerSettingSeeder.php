<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainerSetting;

class TrainerSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainerSetting::factory()
            ->times(50)
            ->create();
    }
}
