<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MatchSetting;

class MatchSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MatchSetting::factory()
            ->times(50)
            ->create();
    }
}
