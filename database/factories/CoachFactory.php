<?php

namespace Database\Factories;

use App\Models\Coach;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoachFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coach::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween(1, 100),
            "coach_setting_id" => $this->faker->numberBetween(1, 100),
            "comment_id" => $this->faker->numberBetween(1, 100),
            "licences" => $this->faker->randomElement([1, 2, 3], [3, 5 ,7], [3, 5 ,9, 10]),
            "rewards" => $this->faker->randomElement([1, 2, 5], [3, 5 ,10], [3, 5 ,9, 4]),
        ];
    }
}
