<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Berita</title>
</head>

<body>
    <h1>Latest News</h1>

    @foreach ($articles as $article)
        <article>
            <h2>{{ $article['title'] }}</h2>
            <p>{{ $article['description'] }}</p>
            <a href="{{ $article['url'] }}" target="_blank">Read more</a>
        </article>
    @endforeach
</body>

</html>
