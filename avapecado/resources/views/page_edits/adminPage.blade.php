@extends("layouts.master")
@section("title")
AVapeCado | Admin
@endsection

@section("content")
    @include("create.gallery")
    @include("delete.gallery")
    @include("create.image")
    @include("delete.image")
    @include("create.user")
    @include("delete.user")
    @include("create.element")
    @include("delete.element")
@endsection
