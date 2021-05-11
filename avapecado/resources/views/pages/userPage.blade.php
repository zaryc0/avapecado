@extends("layouts.master")
@section("title")
AVapeCado | Account details
@endsection

@section("content")
    @include("layouts.user_details",['user'=>Auth::user()])
    <div class="bg-darkgrey height-fit rad-05 padding-1 margin-1 ">
        to be filled
    </div>
@endsection
