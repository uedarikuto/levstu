<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <p class="edit"><a href="/posts/{{ $post->id }}/edit">[編集]</a></p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
            @csrf
            @method('delete')
            <p class='delete'><span onclick='return deletePost(this);'><button type="submit">[削除]</button></span></p>
            
        </form>
        <div class="content">
            <div class="content__post">
                <h4>(本文)</h4>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">[戻る]</a>
        </div>
        <script>
            function deletePost(e){
                'use strict';
                if (confirm("削除すると復元できません。\n本当に削除しますか？")){
                    document.getElementById('from_delete').submit();
                }
            }
        </script>
    </body>
</html>