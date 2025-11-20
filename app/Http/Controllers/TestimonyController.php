<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Testimony;

class TestimonyController extends Controller
{
    public function index(): JsonResponse
    {
        $testimonies = Testimony::with(['user'])->latest()->get();

        return response()->json(['data' => $testimonies]);
    }

    public function show($id): JsonResponse
    {
        $testimony = Testimony::with(['user'])->findOrFail($id);

        return response()->json(['data' => $testimony]);
    }
}