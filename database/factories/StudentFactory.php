<?php

namespace Database\Factories;

use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'lastname'=> $this->faker->lastName,
            'email' => $this->faker->email,
            'province_id' => Province::InRandomOrder()->first()->id,
            'created_at'=> now(),
        ];
    }
}
