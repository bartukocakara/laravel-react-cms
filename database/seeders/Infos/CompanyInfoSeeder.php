<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyInfo;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyInfo::insert([
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
