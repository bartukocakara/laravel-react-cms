<?php

namespace Database\Factories;

use App\Models\Licence;
use Illuminate\Database\Eloquent\Factories\Factory;

class LicenceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Licence::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "code" => $this->faker->randomElement("PL", "CO", "MA", "TE", "TR"),
            "name" => $this->faker->randomElement("Player", "Coach", "Manager", "Team", "Trainer"),
            "description" => $this->faker->sentence(5, true),
            "status" => $this->faker->randomElement(1, 0),
        ];
    }
}
