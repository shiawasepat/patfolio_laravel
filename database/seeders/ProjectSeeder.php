<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Category;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $video = Category::where('name', 'Video')->first();

        Project::insert([
            [
                'title' => 'Cinematic Travel Video',
                'description' => 'Short cinematic video shot in Bali.',
                'category_id' => $video->id,
            ],
        ]);
    }
}
