<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MessageType;

class MessageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MessageType::factory()
            ->times(50)
            ->create();
    }
}
