<!DOCTYPE html>
<html>
<head>
    <title>Blog Solatino</title>
    <style>
        body { font-family: sans-serif; background: #f8f8f8; padding: 20px; }
        .post { background: white; padding: 15px; margin-bottom: 15px; border-radius: 8px; }
        .post h2 { margin: 0; }
        .meta { font-size: 0.9em; color: gray; margin-bottom: 10px; }
        .tags span { background: #e2e2ff; padding: 3px 7px; border-radius: 4px; margin-right: 5px; font-size: 0.8em; }
    </style>
</head>
<body>
    <h1>Blog Solatino</h1>

    @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <div class="meta">
                Autor: <strong>{{ $post->user->name }}</strong> |
                Categoría: <em>{{ $post->category->name }}</em> |
                Publicado: {{ $post->created_at->format('d/m/Y') }}
            </div>
            <p>{{ $post->content }}</p>
            <div class="tags">
                @foreach ($post->tags as $tag)
                    <span>#{{ $tag->name }}</span>
                @endforeach
            </div>
        </div>
    @endforeach
</body>
</html>
