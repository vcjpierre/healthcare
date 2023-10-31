<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Patient;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     */

    protected $model = Patient::class;

    public function definition(): array
    {
        static $user_id = 7;

        return [
            //'user_id' => $this->faker->unique()->numberBetween(7, 1000),
            'user_id' => $user_id++,
            'patient_unique_id' => $this->faker->unique()->regexify('[A-Za-z0-9]{8}'),
            'created_at' => now(),            
        ];
    }
}
