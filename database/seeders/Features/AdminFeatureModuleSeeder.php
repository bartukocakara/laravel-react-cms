<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminFeatureModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminFeatureModule::insert([
            "country_id" => "",
            "city_id" => "",
            "district_id" => "",
            "name" => "",
            "address" => "",
            "phone_code" => "",
            "phone" => "",
        ]);
    }
}
