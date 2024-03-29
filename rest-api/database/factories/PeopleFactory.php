<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'surname'=>$this->faker->lastName(),
            'phone_number'=>$this->faker->phoneNumber(),
            'country'=>$this->faker->country(),
            'city'=>$this->faker->city(),
            'street'=>$this->faker->streetAddress()
        ];
    }
}
