<?php

namespace Database\Factories;

use App\Models\PlayerContract;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerContractFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlayerContract::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "player_id" => $this->faker->name(),
            "title" => $this->faker->name(),
            "content" => $this->faker->name(),
            "price" => $this->faker->name(),
            "payment_type_id" => $this->faker->name(),
            "status" => $this->faker->randomElement(["PENDING", "COMPLETED", "FAILED", "CANCELED"]),
        ];
    }
}
