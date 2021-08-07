<?php

namespace Database\Factories;

use App\Models\TrainerStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TrainerStatus::class;

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
