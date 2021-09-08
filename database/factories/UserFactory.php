<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        $slug = str_slug($name, '-');
        return [
            'country_id' => $this->faker->numberBetween(),
            'city_id' => $this->faker->numberBetween(),
            'district_id' => $this->faker->numberBetween(),
            'membership_type_id' => $this->faker->numberBetween(),
            'role_id' => $this->faker->numberBetween(1, 9),
            'active_currencies' => $this->faker->randomElement(["TRY|EUR|USD", "TRY|USD", "EUR|USD", "TRY|EUR"]),
            'name' => $this->faker->name("null|'male'|'female'"),
            'second_name' => $this->faker->name("null|'male'|'female'"),
            'surname' => $this->faker->lastName,
            'avatar' => $this->faker->image('public/assets/avatars', 100, 100, null, false),
            'images' => $this->faker->randomElement(["20", "30", "50", "70", "80"]),
            'slug' => $slug,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => $this->faker->password(10, 20), // password
            'settings' => $this->faker->name(),
            'licences' => $this->faker->name(),
            'rewards' => $this->faker->name(),
            'age' => $this->faker->numberBetween(10,60),
            'phone_code' => $this->faker->numberBetween(10,500),
            'phone' => $this->faker->mobileNumber,
            'address' => $this->faker->townState,
            'address' => $this->faker->latitude(-90, 90),
            'address' => $this->faker->longitude(-90, 90),
            'remember_token' => Str::random(10),
            'birth_date' => $this->faker->dateTimeBetween('now', '+2 years')
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
