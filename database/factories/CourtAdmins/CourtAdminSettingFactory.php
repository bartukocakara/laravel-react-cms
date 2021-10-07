<?php

namespace Database\Factories;

use App\Models\CourtAdminSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourtAdminSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourtAdminSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $privacy = [
            "is_email_show_enabled" => $this->faker->randomElement([0, 1]),
            "is_phone_show_enabled" => $this->faker->randomElement([0, 1]),
            "is_name_show_enabled" => $this->faker->randomElement([0, 1]),
            "is_avatar_show_enabled" => $this->faker->randomElement([0, 1])
        ];
        return [
            "user_id" => User::all()->random()->id,
            "privacy" => json_encode($privacy),
        ];
    }
}
