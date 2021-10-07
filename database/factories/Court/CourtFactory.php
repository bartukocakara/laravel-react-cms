<?php

namespace Database\Factories;

use App\Models\Court;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Court::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->name(),
            "comment_id" => $this->faker->name(),
            "country_id" => $this->faker->name(),
            "city_id" => $this->faker->name(),
            "district_id" => $this->faker->name(),
            "name" => $this->faker->name(),
            "address" => $this->faker->name(),
            "qualifications" => $this->faker->name(),
        ];
    }
}
