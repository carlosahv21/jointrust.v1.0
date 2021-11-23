<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Arr;
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
        return [
            'first_name' => 'Carlos',
            'last_name' => 'Hernandez',
            'email' => 'carfred18@gmail.com',
            'phone' => $this->faker->buildingNumber,
            'address' => $this->faker->address,
            'neighborhood' => $this->faker->city,
            'location' => 'bogota',
            'role' => 'admin',
            'password' => '12345', // password
            'identificacion' => $this->faker->randomNumber(6),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
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
