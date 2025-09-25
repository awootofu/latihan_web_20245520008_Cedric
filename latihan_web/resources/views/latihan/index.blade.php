<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ config('app.name', 'laravel') }}
    </title>
</head>
<body>
    <a href="{{ url('/') }}"> Home </a> |
    <a href="{{ url('/latihan') }}"> Latihan </a> |
    <a href="{{ url('/latihan_dua') }}"> Latihan 2 </a> |
    <a href="http://www.matanauniversity.ac.id/"> Website Matana </a> |
    <p>This is index</p>
</body>
</html>