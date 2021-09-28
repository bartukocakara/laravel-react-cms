<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatchFactory extends Factory
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
        $users = [12, 17, 18, 20, 35, 56, 90, 102, 300, 253];
        $teams = [20, 30];
        return [
            "players" => json_encode($users),
            "teams" => json_encode($teams),
            "court_id" => $this->faker->randomNumber(null, false),
            "rating_id" => $this->faker->name(),
            "match_category" => $this->faker->randomElement(["STANDARD", "TOURNAMENT", "ALL_STAR"]),
            "status" => $this->faker->randomElement(["PENDING", "READY", "FAILED", "CANCELED", "STARTED", "ENDED", "PAYMENT_COMPLETED", "REFUND_COMPLETED", "REFUND_REQUEST_CREATED", "REFUND_REQUEST_REJECTED", "REFUND_REQUEST_APPROVED"]),
        ];
    }
}
