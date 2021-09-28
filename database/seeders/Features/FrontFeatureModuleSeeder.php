<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FrontFeature;

class FrontFeatureModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FrontFeature::factory()
            ->times(50)
            ->create();
    }
}
