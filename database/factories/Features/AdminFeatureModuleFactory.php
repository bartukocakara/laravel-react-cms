<?php

namespace Database\Factories;

use App\Models\AdminFeatureModule;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFeatureModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminFeatureModule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "version" => $this->faker->words(3, true),
            "description" => $this->faker->name(10, true),
            "modules" => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            "sub_modules" => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            "pages" => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            "user_types" => $this->faker->randomElement('["SUPER_ADMIN", "ADMIN", "PLAYER", "TRAINER", "TEAM_HOST", "COURT_HOST", "MANAGER", "COACH", "REFEREE"]'),
        ];
    }
}
