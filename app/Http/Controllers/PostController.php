<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Fetch posts with their related user and category
        // We use latest() to order them by newest first and paginate() for page links
        $posts = Post::with(['user', 'category'])->latest()->paginate(10);

        // Pass the $posts variable to the 'posts.index' view
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
