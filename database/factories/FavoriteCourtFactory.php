<?php

namespace Database\Factories;

use App\Models\FavoriteCourt;
use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteCourtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FavoriteCourt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "sender_id" => $this->faker->randomNumber,
            "receiver_id" => $this->faker->randomNumber
        ];
    }
}
