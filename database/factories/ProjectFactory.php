<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    protected function getRandomProjectImage()
    {
        // Get all images from storage/app/public/projects
        $files = Storage::disk('public')->files('projects');
        
        // Filter only image files
        $images = array_filter($files, function($file) {
            return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif']);
        });

        // Return random image or default
        return !empty($images) 
            ? $images[array_rand($images)] 
            : 'projects/default.jpg';
    }

    public function definition(): array
    {
        $title = $this->faker->randomElement(['E-commerce', 'Portfolio', 'Blog']) . ' ' . $this->faker->words(2, true);
        
        return [
            'title' => $title,
            'description' => $this->faker->paragraphs(2, true),
            'image_url' => $this->getRandomProjectImage(),
            'github_url' => 'https://github.com/username/' . $this->faker->slug(),
            'live_url' => $this->faker->url(),
            'technologies' => json_encode($this->faker->randomElements(['PHP', 'Laravel', 'Vue.js', 'MySQL', 'AWS'], 3)),
            'completed_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
        ];
    }
}