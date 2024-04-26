<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="/create">Create a post</a>

    @foreach($posts as $post)
        <ul>
            <p>PostID - {{ $post->id }}</p>

            <a href="/show/{{ $post->id }}">
                <li> {{ $post->title }} </li>
            </a>
                <p>CategoryID - {{ $post->category_id }}</p>
                
                <br></br>
        </ul>
    @endforeach

</body>
</html>