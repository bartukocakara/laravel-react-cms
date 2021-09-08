<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainingItem;

class TraininigItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainingItem::factory()
            ->times(50)
            ->create();
    }
}
