<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManagerSetting;

class ManagerSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ManagerSetting::factory()
            ->times(50)
            ->create();
    }
}
