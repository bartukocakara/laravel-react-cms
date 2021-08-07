<?php

namespace Database\Factories;

use App\Models\CourtStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourtStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourtStatus::class;

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
