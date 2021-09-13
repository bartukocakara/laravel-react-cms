<?php

namespace Database\Factories;

use App\Models\PlayerSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlayerSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $count = 5;
        $days = ["MONDAY", "THUESDAY", "WEDNESDAY", "THURSDAY", "SUNDAY"];
        $randomDays = $faker->take($count)->randomElement($days);
        
        $privacy = [
            "is_match_req_enabled" => $this->faker->randomElement([0, 1]),
            "is_messages_enabled" => $this->faker->randomElement([0, 1]),
            "is_join_req_enabled" => $this->faker->randomElement([0, 1]),
            "is_training_req_enabled" => $this->faker->randomElement([0, 1]),

        ];
        $eventAvailability = [
                "date_range" => [
                    "from" => $this->faker->dateTimeBetween('now', '+2 years'),
                    "to" => $this->faker->dateTimeBetween('now', '+2 years'),
                ],
                "week_days" => $randomDays,
                "is_all_requests_enabled" => [0, 1]
        ];
        return [
            "privacy" => $privacy,
            "event_availability" => $eventAvailability,
        ];
    }
}
