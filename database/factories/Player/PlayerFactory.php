<?php

namespace Database\Factories\Player;

use App\Models\Player\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => 1,
            "positions" => $this->faker->name(),
            "settings" => $this->faker->name(),
            "name" => $this->faker->name(),
            "prize_earnings" => $this->faker->name(),
        ];
    }
}
