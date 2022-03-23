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
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <form action="/posts/{{ $post->id }}" id='form_delete' method="post">
            @csrf
            @method('DELETE')
            <button type="button">[<span onclick="return deletePost()";>delete</span>]</button>
            </form>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        </div>
         <a href="/">戻る</a>
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
