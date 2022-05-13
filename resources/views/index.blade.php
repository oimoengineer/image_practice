<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        @foreach($posts as $post)
            <p>{{ $post->body }}</p>
            <img src='{{ $post->image }}' width='100px' height='80px'>
        @endforeach
        <a href='post/create'>[create]</a>
    </body>
    
</html>