<?php

namespace Database\Factories;

use App\Models\ActiveSubstance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MedicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->words(\rand(2,4), true);

        return [
            'name' => Str::ucfirst($name),
            'price' => $this->faker->randomNumber(6, true),
        ];
    }
}
