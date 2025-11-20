<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource for the API.
     */
    public function indexApi(): JsonResponse
    {
        // Eager load the user and category relationships for a more useful API response
        $posts = Post::with(['user', 'category'])->latest()->get();

        return response()->json(['data' => $posts]);
    }

    public function showpage(): View
    {
        $posts = Post::with(['user', 'category'])->latest()->paginate(10);
        
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
