<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Full_Name' => $this->faker->name(),
            'Full_Marks' => $this->faker->numerify('###'),
            'Index_Number'=>$this->faker->numerify("#####"),

        ];
    }
}
