<?php

namespace App\Http\Controllers;

use App\Models\Testimony;

class TestimonyController extends Controller
{
    public function index()
    {
        // use paginate() instead of get()
        $testimonies = Testimony::with('user')->latest()->paginate(10);

        return view('testimonies', compact('testimonies'));
    }
}