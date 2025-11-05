<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog Posts</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 20px auto; padding: 0 20px; }
        .post { border: 1px solid #ddd; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        .post-meta { font-size: 0.9em; color: #666; margin-bottom: 10px; }
        .post-meta span { font-weight: bold; }
        .pagination { text-align: center; margin-top: 30px; }
        .pagination a, .pagination span { padding: 8px 12px; border: 1px solid #ddd; margin: 0 2px; text-decoration: none; color: #007bff; }
        .pagination .active span { background-color: #007bff; color: white; border-color: #007bff; }
        .pagination .disabled span { color: #ccc; }
    </style>
</head>
<body>

    <h1>All Blog Posts</h1>

    @if($posts->count())
        @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <div class="post-meta">
                    By <span>{{ $post->user->name }}</span> in <span>{{ $post->category->name }}</span>
                </div>
            </div>
        @endforeach

        {{-- This will render the pagination links --}}
        <div class="pagination">
            {{ $posts->links() }}
        </div>
    @else
        <p>No posts found.</p>
    @endif

</body>
</html>