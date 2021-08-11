<?php

namespace Database\Factories;

use App\Models\CourtRatingType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourtRatingTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourtRatingType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "name" => $this->faker->name(),
            "name" => $this->faker->name(),
        ];
    }
}
