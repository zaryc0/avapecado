@extends("layouts.master")
@section("title")
AVapeCado | Contact us
@endsection
<div class="margin 1 float-left width-50">
    <img src={{ $side_logo['imageAddress'] }} alt={{ $side_logo['description'] }}>
    <div class="rad-05 bg-darkgrey margin-1 padding-1 float-none">
        {{ $about_us_content['textContent'] }}
    </div>
</div>
<div class="margin-1 float-left">
    @include("layouts.map")
</div>
@section("content")
@endsection
