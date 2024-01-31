<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <h1>Spooftify</h1>

    @foreach ($music as $song)
    <p>{{ $song->title }}</p>
    <a href={{ route('music.show', $song->id) }}>look!</a>
    @endforeach 
</body>
</html>