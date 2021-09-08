<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourtSetting;

class CourtSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourtSetting::factory()
            ->times(50)
            ->create();
    }
}
