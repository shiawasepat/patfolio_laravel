<?php

namespace Database\Factories;

use App\Models\Testimony;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimony> */
class TestimonyFactory extends Factory
{
    protected $model = Testimony::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'content' => $this->faker->paragraph(),
            'rating' => $this->faker->numberBetween(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}