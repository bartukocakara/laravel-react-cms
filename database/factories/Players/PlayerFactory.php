<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFakerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->name(),
            "positions" => $this->faker->name(),
            "settings" => $this->faker->name(),
            "name" => $this->faker->name(),
            "prize_earnings" => $this->faker->name(),
        ];
    }
}
