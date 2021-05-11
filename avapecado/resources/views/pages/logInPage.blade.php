@extends("layouts.master")
@section("title")
AVapeCado | Log-in
@endsection
{{ dump($errors) }}
@section("content")
@include("auth.login")
@include("auth.register")
@endsection
