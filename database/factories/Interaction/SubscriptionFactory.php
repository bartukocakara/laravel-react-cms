<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "currency_id" => $this->faker->name(),
            "code" => $this->faker->name(),
            "title" => $this->faker->name(),
            "description" => $this->faker->name(),
            "status" => $this->faker->name(),
            "amount" => $this->faker->name(),
        ];
    }
}
