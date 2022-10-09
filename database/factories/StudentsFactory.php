<?php

namespace Database\Factories;

use App\Models\Section;
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
            'section_id'=>Section::factory(),
            'Full_Marks' => $this->faker->numerify('###'),
            'Index_Number'=>$this->faker->numerify("#####"),

        ];
    }
}
