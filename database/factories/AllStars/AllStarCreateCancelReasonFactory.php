<?php

namespace Database\Factories;

use App\Models\AllStarCreateCancelReason;
use Illuminate\Database\Eloquent\Factories\Factory;

class AllStarCreateCancelReasonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AllStarCreateCancelReason::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->words(4, true),
            "detail" => $this->faker->words(10, true),
            "status" => $this->faker->randomElement([0, 1]),
        ];
    }
}
