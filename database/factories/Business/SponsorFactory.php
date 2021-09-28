<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class SponsorFakerFactory extends Factory
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
            "currency_id" => $this->faker->name(),
            "sector_id" => $this->faker->name(),
            "title" => $this->faker->name(),
            "img" => $this->faker->name(),
            "amount" => $this->faker->name(),
            "recurring_status" => $this->faker->name(),
            "is_active" => $this->faker->name(),
        ];
    }
}
