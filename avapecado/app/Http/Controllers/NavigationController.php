<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;

class NavigationController extends Controller
{
    public function Index($route)
    {
        $page = Page::where('route',$route)->firstOrFail();
        //this uses the name value from the page table and calls it as a function to allow dynamic addition of pages
        return call_user_func([$this,$page->name],$page);
    }

    public function home()
    {
        $page = Page::where('route','/')->firstOrFail();
        return view('pages.index' , $page->elements->keyBy('name'));
    }

    public function gallery($page)
    {
        $data=[
            'galleries'=> Gallery::all(),
        ];

        return view('pages.gallery' ,$data);
    }

    public function basket($page)
    {
        return view('pages.basket' ,  $page->elements->keyBy('name'));
    }

    public function shop($page)
    {
        $data = [
            'products' => Product::all()
        ];
        return view('pages.shop' , $data );
    }

    public function userPage($page)
    {
        return view('pages.userPage' , $page->elements->keyBy('name'));
    }

    public function adminPage($page)
    {
        $data = [
            'galleries' => Gallery::all(),
            'images' => Image::all(),
            'users' => User::all(),
            'pages' => Page::all(),
            'elements' => Element::all(),
            'products' => Product::all()
        ];
        return view(
                'pages.adminPage',
                array_merge($data, $page->elements->keyBy('name')->toArray())
            );
    }

    public function aboutUs($page)
    {
        return view('pages.aboutUs' , $page->elements->keyBy('name'));
    }

    public function logIn($page)
    {
        return view('pages.logInPage' , $page->elements->keyBy('name'));
    }
}
