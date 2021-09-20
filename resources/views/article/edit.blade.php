<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    
    <h1>新規論文投稿</h1>
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $article->id }}">
        <p>
            <label for="title">論文タイトル</label>
            <input type="text" name="title" value="{{ $article->title }}">

            <label for="body">本文</label>
            <input type="text" name="body" value="{{ $article->body }}">
        </p>
</body>
</html>
