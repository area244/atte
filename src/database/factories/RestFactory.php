<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'work_date' => $this->faker->date,
            'work_start' => $this->faker->time,
            'Work_end' =>$this->faker->time
        ];
    }
}
