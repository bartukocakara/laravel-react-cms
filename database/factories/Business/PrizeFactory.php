<?php

namespace Database\Factories;

use App\Models\Prize;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrizeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prize::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "content" => $this->faker->name(),
            "icon_name" => $this->faker->name(),
            "avatar" => $this->faker->name(),
            "images" => $this->faker->name(),
        ];
    }
}
