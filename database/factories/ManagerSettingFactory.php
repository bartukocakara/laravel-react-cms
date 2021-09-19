<?php

namespace Database\Factories;

use App\Models\ManagerSetting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ManagerSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ManagerSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   $privacy = [
                "is_match_req_enabled" => $this->faker->numberBetween(0, 1),
                "is_messages_enabled" => $this->faker->numberBetween(0, 1),
                "is_join_req_enabled" => $this->faker->numberBetween(0, 1),
                "is_training_req_enabled" => $this->faker->numberBetween(0, 1),
        ];
        $couponCode = Str::random(6);

        return [
            "created_user_id" => $this->faker->randomNumber(null, false),
            "payment_type_id" => $this->faker->numberBetween(1, 3),
            "reward_id" => $this->faker->numberBetween(1, 10),
            "max_player_limit" => $this->faker->numberBetween(8, 10),
            "min_player_limit" => 4,
            "note" => $this->faker->sentence(10, true),
            "fee" => $this->faker->randomFloat(10, 0, 150),
            "coupon" => $couponCode,
            "court_option" => $this->faker->randomElements(["HALF", "FULL"]),
            "payment_time" => $this->faker->randomElements(["PRE_PAID", "CHECKIN_PAID", "HALF_PREPAID"]),
            "event_datetime" => $this->faker->dateTime(),
        ];
    }
}
