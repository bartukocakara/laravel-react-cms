<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ManagerContract;

class ManagerContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ManagerContract::factory()
            ->times(50)
            ->create();
    }
}
