<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIBRARY</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <h2>INDEX</h2>

    @foreach ($books as $book)
    <ul>
        <li>
            {{$book['pages']}} - {{$book['author']}} - {{$book['year']}}
        </li>
    </ul>
        
    @endforeach
</body>

</html>
