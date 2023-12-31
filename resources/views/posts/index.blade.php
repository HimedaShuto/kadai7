<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>Blog Name</h1>
        <a href='/posts/create'>create</a>
        <dev class='post'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{$post->body}}</p>
                </div>
            @endforeach    
        </dev>
        <div class='paginate'>
            {{$posts->links()}}
        </div>
    </body>
</html>
