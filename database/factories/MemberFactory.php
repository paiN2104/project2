<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $age = rand(1,100);
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'gender' => $this->faker->randomElement(["Male","Female"]),
            'age' => $age,
            'joindate' => $this->faker->date,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'postcode' => $this->faker->postcode,
            'photo' => "logouc2.jpg",
            'description' => $this->faker->text,
        ];
    }
}
