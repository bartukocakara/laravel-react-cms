<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LicenceType;

class LicenceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LicenceType::factory()
            ->times(50)
            ->create();
    }
}
