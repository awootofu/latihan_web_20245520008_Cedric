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
    <p>
        This is latihan 
        <br> This is break
        <br> <u>This is another break</u>
        <br> <i>This is italic</i>
        <br> <b>This is bold</b>
        <br> <mark>This is mark</mark>
    </p>
</body>
</html>