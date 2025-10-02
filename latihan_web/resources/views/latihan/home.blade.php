@extends('layout.layout')
@section ('header_content')
navbar
@endsection

@section ('main_content')
this is body content
@endsection

@section('main_content')
 <a href="{{ url('/') }}"> Home </a> |
    <a href="{{ url('/latihan') }}"> Latihan </a> |
    <a href="{{ url('/latihan_dua') }}"> Latihan 2 </a> |
    <a href="http://www.matanauniversity.ac.id/"> Website Matana </a> |
    <p>This is Home Page</p>
@endsection