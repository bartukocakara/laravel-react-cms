<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubModule;

class SubModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubModule::factory()
            ->times(50)
            ->create();
    }
}
