<?php

namespace Database\Factories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween(01, 500),
            "title" => $this->faker->name(),
            "message" => $this->faker->name(),
            "type" => $this->faker->name(),
            // "country_id" => $this->faker->numberBetween(01, 500),
            // "code" => $this->faker->numberBetween(01, 500),
            // "name" => $this->faker->cityName,
        ];
    }
}
