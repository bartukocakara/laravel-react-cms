<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TournamentSetting;

class TournamentSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TournamentSetting::factory()
            ->times(50)
            ->create();
    }
}
