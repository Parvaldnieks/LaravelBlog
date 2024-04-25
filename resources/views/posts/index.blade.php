<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    @foreach($posts as $post)
        <ul>
                <a href="/show/{{ $post->id }}">
                    <li> {{ $post->title }} </li>
                </a>
            <p>CategoryID - {{ $post->category_id }}</p>
        </ul>
    @endforeach

</body>
</html>