<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title','default_title")</title>
    <!-- css/js go here -->
</head>
<body>
    <!-- this is header -->
    <header>@yield('header_content')</header>
    <!-- this is main -->
    <main>@yield('main_content')</main>
    <!-- this is footer -->
    <footer>@yield('footer_content','this is default footer')</footer>
</body>
</html>