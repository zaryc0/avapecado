<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/gallery">Gallery</a>
    <a href="/shop">Shop</a>
    <a href="/basket">Basket</a>
    @if (\Auth::check())
        @if(\Auth::user()->admin )
        <a href="/adminPage">Admin page</a>
        @else
        <a href="/userPage">Account details</a>
        @endif
    @else{
        <a href="/logIn">Log in</a>
    @endif
    <a href="/aboutUs">Contact</a>
    @if (\Auth::check())
        <a href="{{ url('user-logout') }}">Log out</a>
    @endif
    </div>

    <!-- element to open the sidenav -->
    <span onclick="openNav()">
        <img src="{{ asset('assets/images/icons/list.png') }}" alt="">
    </span>
