<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-700">
    <nav class="bg-white shadow mb-8">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-center">
                <a href="{{ route('home') }}" class="mx-4 text-gray-800 hover:text-gray-600">Home</a>
                <a href="{{ route('skills') }}" class="mx-4 text-gray-800 hover:text-gray-600">Skills</a>
                <a href="{{ route('projects') }}" class="mx-4 text-gray-800 hover:text-gray-600">Projects</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6">
        @yield('content')
    </div>

    <a href="/" class="fixed bottom-4 right-4 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded
    dark:bg-indigo-400 dark:hover:bg-indigo-400/50 dark:transition-all">
        Back to Home
    </a>
</body>
</html>