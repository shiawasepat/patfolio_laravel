<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // CLear existing data
        User::truncate();
        Post::truncate();
        Category::truncate();

        // Create sample categories
        $categories = Category::factory(5)->create();

        // Create sample users and posts
        $users = User::factory(10)->create();

        // Create posts 
        Post::factory(30)->create([
            'user_id' => $users->random()->id,
            'category_id' => $categories->random()->id,
        ]);

        // User::factory(10)->create();
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    
        $this->call(TestimonySeeder::class);

        // Create sample skills
        \App\Models\Skill::factory(8)->create();

        // Create sample projects
        \App\Models\Project::factory(5)->create();
    }
    
}
