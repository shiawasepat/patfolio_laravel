<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function home()
    {
        $skills = Skill::orderBy('category')->take(6)->get();
        $projects = Project::latest('completed_at')->take(3)->get();
        
        return view('portfolio.welcome', compact('skills', 'projects'));
    }

    public function skills()
    {
        $skills = Skill::orderBy('category')->get();
        return view('portfolio.skills', compact('skills'));
    }

    public function projects()
    {
        $projects = Project::latest('completed_at')->get();
        return view('portfolio.projects', compact('projects'));
    }
}