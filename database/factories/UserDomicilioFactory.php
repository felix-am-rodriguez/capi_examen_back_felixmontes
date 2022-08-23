<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserDomicilio;
use App\Models\User;

class UserDomicilioFactory extends Factory
{

    protected $model = UserDomicilio::Class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'user_id' => User::all()->random()->id,
            'user_id' => $this->faker->unique()->randomElement(User::all()),
            'domicilio' => $this->faker->streetName(),
            'numero_exterior' => $this->faker->buildingNumber(),
            'colonia' => $this->faker->citySuffix(),
            'cp' => $this->faker->postcode(),
            'ciudad' => $this->faker->city()
        ];
    }
}
