<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tblEmployee>
 */
class tblEmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'intEmpCode' => $this->faker->numberBetween(1),
            'strEmpName' => $this->faker->name(),
            'strCNICNo' => $this->faker->numberBetween(1000000000,9999999999),
            'strEmpFatherName' => $this->faker->firstNameMale(),
            'strPhone' => $this->faker->phoneNumber(),
            'strAddress' => $this->faker->address()
        ];
    }
}
