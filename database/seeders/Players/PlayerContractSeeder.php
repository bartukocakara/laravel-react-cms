<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlayerContract;

class PlayerContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlayerContract::factory()
            ->times(50)
            ->create();
    }
}
