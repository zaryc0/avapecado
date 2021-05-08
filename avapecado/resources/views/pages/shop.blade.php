@extends("layouts.master")
@section("title")
AVapeCado | Shop
@endsection
@section("content")
    <h1 class="margin-1">Products</h1>
    @foreach ($products as $product)
        @include("layouts.productBox",['product'=>$product])
    @endforeach
@endsection
