<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https:fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
    @section('content')
        <p>{{Auth::user()->name}}</p>
        <h1> <a href="/">Blog Name</a></h1>
        [<a href='/posts/create'>create</a>]
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <form action="/posts/{{ $post->id }}" id='form_delete' method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button">[<span onclick="return deletePost()";>delete</span>]</button>
                </form>
            @endforeach
            
        </div>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost() {
            'use script';
            if( confirm("削除してもいいですかー？")) {
                document.getElementById('form_delete').submit();
            }
            }
        </script>
    @endsection
</html>
