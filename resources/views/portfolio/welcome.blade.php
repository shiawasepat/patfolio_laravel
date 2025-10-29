@extends('portfolio.home')

@section('content')

    <h1 class="text-4xl font-bold text-center mb-8 dark:text-gray-50">Welcome to My Portfolio</h1>
    <div class="max-w-3xl mx-auto text-center">
        <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
            Hi! I'm Patrick, a 3rd semester University student with a passion for designing and video editing.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="{{ route('skills') }}" class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold mb-2">My Skills</h2>
                <p class="text-gray-600">Explore my technical expertise and capabilities</p>
            </a>
            <a href="{{ route('projects') }}" class="block p-6 bg-white rounded-lg shadow hover:shadow-md transition">
                <h2 class="text-xl font-semibold mb-2">My Projects</h2>
                <p class="text-gray-600">Check out some of my recent work</p>
            </a>
        </div>
    </div>
@endsection