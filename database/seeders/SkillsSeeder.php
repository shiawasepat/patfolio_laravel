<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'name' => 'Laravel',
            'category' => 'Backend',
            'description' => 'A PHP framework for web artisans.',
        ]);
        // Add more skills as needed
    }
}
