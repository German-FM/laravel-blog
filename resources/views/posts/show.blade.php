<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 | {{ $post }}</title>
</head>
<body>
    @if ($category)
    <h1>Aqui se visualiza el post {{ $post }} de la categoria {{ $category }}</h1>
    @else
    <h1>Aqui se visualiza el post {{ $post }}</h1>
    @endif
</body>
</html>