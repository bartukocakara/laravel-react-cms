<?php

namespace Database\Factories;

use App\Models\Commission;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "type" => $this->faker->randomElement(["MATCH", "TRAINING", "TOURNAMENT", "ALL_STAR"]),
            "name" => $this->faker->name,
            "description" => $this->faker->numberBetween(1, 100),
            "amount" => $this->faker->randomElement(["20", "30", "50", "70", "80"]),
            "status" => $this->faker->randomElement([0, 1]),
        ];
    }
}
