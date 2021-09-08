<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CoachSetting;

class CoachSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CoachSetting::factory()
            ->times(50)
            ->create();
    }
}
