<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $code = "IP" . $this->faker->randomNumber(5);

        while(Employee::where('code', $code)->count() != 0){
            $code = "IP" . $this->faker->randomNumber(5);
        }

        return [
            'code' => $code,
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'birth_date' => $this->faker->date,
            'join_date' => $this->faker->date,
        ];
    }
}
