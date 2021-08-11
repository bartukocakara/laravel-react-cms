<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prize;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prize::factory()
            ->times(50)
            ->create();
    }
}
