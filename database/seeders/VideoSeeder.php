<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourtStatus;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourtStatus::factory()
            ->times(50)
            ->create();
    }
}
