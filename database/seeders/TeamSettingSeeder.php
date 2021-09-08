<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamSetting;

class TeamSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamSetting::factory()
            ->times(50)
            ->create();
    }
}
