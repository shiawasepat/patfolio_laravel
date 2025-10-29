<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    protected $model = Skill::class;

    public function definition(): array
    {
        $skills = [
            'HTML' => 'Frontend',
            'CSS' => 'Frontend',
            'Flutter' => 'Frontend',
            'PHP' => 'Backend',
            'Laravel' => 'Backend',
            'MySQL' => 'Database',
            'SQLite' => 'Database',
        ];

        $skill = $this->faker->unique()->randomElement(array_keys($skills));

        return [
            'name' => $skill,
            'category' => $skills[$skill],
            'description' => $this->faker->sentence(),
        ];
    }
}