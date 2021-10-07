<?php

namespace Database\Factories;

use App\Models\AllStar;
use Illuminate\Database\Eloquent\Factories\Factory;

class AllStarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AllStar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city = $this->faker->city;
        $slug = $city."-allstar";
        return [
            "court_id" => $this->faker->unique()->randomDigit,
            "country_id" => $this->faker->unique()->randomDigit,
            "city_id" => $this->faker->unique()->randomDigit,
            "district_id" => $this->faker->unique()->randomDigit,
            "players" => $this->faker->name(10, true),
            "gifts" => $this->faker->randomElement([[123, 232, 54], [1,3,4,5,6,7,8,9,10]]), //gift Ids
            "prizes" => $this->faker->randomElement([[123, 232, 54], [1,3,4,5,6,7,8,3,21]]),
            "teams" => $this->faker->randomElement([[123, 232, 54,23,3242,12], [15, 11, 23, 22, 4, 12]]),
            "content" => $this->faker->words(3, true),
            "referees" => $this->faker->randomElement([123, 232, 54,23,3242,12]),
            "status" => $this->faker->randomElement(["PENDING", "STARTED", "ENDED", "CANCELED", "FAILED"]),
            "event_date" => $this->faker->dateTimeBetween('+0 days', '+2 years'),
            "url_slug" => $slug,
        ];
    }
}
