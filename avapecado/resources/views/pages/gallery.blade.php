@extends("layouts.master")
@section("title")
AVapeCado | Gallery
@endsection
@section("content")
    <h1 class="margin-1">Galleries</h1>
    @foreach ($galleries as $gallery)
        @if ($gallery->name!='Products')
            @if($gallery->name!='elements')
                @include("layouts.gallery",['gallery'=>$gallery])
            @endif
        @endif
    @endforeach
@endsection|

