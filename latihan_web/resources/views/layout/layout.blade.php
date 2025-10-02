<!--call layout-->
@extends('layout.default')
<!--content-->
@section ('main_content')
<body>
    <!-- this is header -->
    <header>@yield('header_content')</header>
    <!-- this is main -->
    <main>@yield('main_content')</main>
    <!-- this is footer -->
    <footer>@yield('footer_content','this is default footer')</footer>
</body>
@endsection