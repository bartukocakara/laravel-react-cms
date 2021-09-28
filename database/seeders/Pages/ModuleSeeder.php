<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory()
            ->times(50)
            ->create();
    }
}
