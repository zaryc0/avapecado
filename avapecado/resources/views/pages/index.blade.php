@extends("layouts.master")
@section("title")
AVapeCado | Home
@endsection

@section("content")
    <!-- main logo-->
    <div class="image_box top: 10%"
    style="top: 10%; width: 100%; margin: 0 auto2; text-align:center">
        <img src={{ $main_logo['imageAddress'] }} alt={{ $main_logo['description'] }}>
    </div>
    <div class="image_spread_x" style="top: 35%">
        <!-- left image box-->
        <img class="img_class" src={{ $left_image['imageAddress'] }} alt={{ $left_image['description'] }} >
        <!-- centre image box-->
        <img class="img_class" src={{ $centre_image['imageAddress'] }} alt={{ $centre_image['description'] }}>
        <!-- right image box-->
        <img class="img_class" src={{ $right_image['imageAddress'] }} alt={{ $right_image['description'] }}>
    </div>
    <div class="container2 bg-darkgrey">
        <div class="text_display">
            {{ $intro['textContent'] }}
        </div>
        <div class="text_display">
            {{ $main_body['textContent'] }}
        </div>
    </div>
@endsection
