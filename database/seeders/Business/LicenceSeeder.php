<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Licence;

class LicenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Licence::factory()
            ->times(50)
            ->create();
    }
}
