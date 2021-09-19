<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerFakerFactory extends Factory
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
        $favPlayers = [];
        $favTeams = [];
        for ($i=0; $i < 20; $i++) {
            $favPlayers[] = $this->faker->randomDigit;
            $favTeams[] = $this->faker->randomDigit;
            $i++;
        }
        return [
            "user_id" => $this->faker->randomDigit,
            "rating_id" => $this->faker->randomDigit,
            "status_id" => $this->faker->randomDigit,
            "training_types" => $this->faker->name(),
            "favourite_players" => json_encode($favPlayers),
            "favourite_teams" => json_encode($favTeams),
        ];
    }
}
