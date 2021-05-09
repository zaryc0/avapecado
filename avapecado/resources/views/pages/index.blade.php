@extends("layouts.master")
@section("title")
AVapeCado | Home
@endsection

@section("content")
    <!-- main logo-->
    <div class="image_box top: 10%"
    style="top: 10%; width: 100%; margin: 0 auto2; text-align:center">
        <img src="{{ $images->find($home_main_logo['img_id'])->url }}" alt="{{ $home_main_logo['description'] }}">
    </div>
    <div class="image_spread_x" style="top: 35%">
        <!-- left image box-->
        <img class="img_class" src={{ $images->find($home_left_image['img_id'])->url }} alt={{ $home_left_image['description'] }} >
        <!-- centre image box-->
        <img class="img_class" src={{ $images->find($home_middle_image['img_id'])->url }} alt={{ $home_middle_image['description'] }}>
        <!-- right image box-->
        <img class="img_class" src={{ $images->find($home_right_image['img_id'])->url }} alt={{ $home_right_image['description'] }}>
    </div>
    <div class="container2 bg-darkgrey">
        <div class="text_display">
            {{ $home_intro['textContent'] }}
        </div>
        <div class="text_display">
            {{ $home_main_body['textContent'] }}
        </div>
    </div>
@endsection
