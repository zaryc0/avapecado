@extends("layouts.master")
@section("title")
AVapeCado | Admin
@endsection

@section("content")
<div class="float-none">
    @include("create.gallery")
    @include("delete.gallery")
</div>
<div class="float-none">
    @include("create.image")
    @include("delete.image")
</div>
<div class="float-none">
    @include("create.user")
    @include("delete.user")
</div>
<div class="float-none">
    @include("create.element")
    @include("delete.element")
</div>
@endsection
