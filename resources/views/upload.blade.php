<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
    <h1>Upload</h1>
    <form action="{{ route('music.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file_upload">
        <button type="submit">Sublit</button>
    </form>
</body>
</html>