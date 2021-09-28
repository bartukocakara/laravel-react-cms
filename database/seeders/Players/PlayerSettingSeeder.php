<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlayerSetting;

class PlayerSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlayerSetting::factory()
            ->times(50)
            ->create();
    }
}
