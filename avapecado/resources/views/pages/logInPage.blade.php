@extends("layouts.master")
@section("title")
AVapeCado | Log-in
@endsection

@section("content")
{{ dump($errors) }}
{{ dump(Auth::check()) }}
@include("auth.login")
@include("auth.register")
@endsection
