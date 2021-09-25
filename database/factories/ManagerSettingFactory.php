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
            
        ];
    }
}
