<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use App\Models\Tag;

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
        // this is used to pass additional data to the view e.g images
        $data_additional = ['images'=>Image::all()];

        $elements = $page->elements->keyBy('name')->toArray();

        $data = array_merge($elements, $data_additional);

        return view('pages.index' , $data );
    }

    public function gallery($page)
    {
        // this is used to pass additional data to the view e.g images
        $data_additional = ['galleries'=> Gallery::all()];

        $elements = $page->elements->keyBy('name')->toArray();

        $data = array_merge($elements, $data_additional);


        return view('pages.gallery' , $data );
    }

    public function basket($page)
    {
        $data_additional = ['galleries'=> Gallery::all()];

        $elements = $page->elements->keyBy('name')->toArray();

        $data = array_merge($elements, $data_additional);

        return view('pages.basket' ,  $data );
    }

    public function shop($page)
    {
        $data_additional = ['products'=> Product::all(),'images'=>Image::all()];

        $elements = $page->elements->keyBy('name')->toArray();

        $data = array_merge($elements, $data_additional);
        return view('pages.shop' , $data );
    }

    public function userPage($page)
    {
        $data_additional = ['galleries'=> Gallery::all()];

        $elements = $page->elements->keyBy('name')->toArray();

        $data = array_merge($elements, $data_additional);

        return view('pages.userPage' , $data );
    }

    public function adminPage($page)
    {
        $data = [];
        if(!Auth::user()->admin)
        {
            return view('pages.userPage');
        }
         $data_additional = [
                'galleries'         => Gallery::all(),
                'images'            => Image::all(),
                'users'             => User::all(),
                'pages'             => Page::all(),
                'elements'          => Element::all(),
                'products'          => Product::all(),
                'tags'              => Tag::all(),
            ];

        $elements = $page->elements->keyBy('name')->toArray();

        $data = array_merge($elements, $data_additional);

        return view('pages.adminPage', $data );
    }

    public function aboutUs($page)
    {
        $data_additional = ['images'=> Image::all()];

        $elements = $page->elements->keyBy('name')->toArray();

        $data = array_merge($elements, $data_additional);

        return view('page_edits.aboutUs' , $data);
    }

    public function logIn($page)
    {
        $data_additional = [];

        $elements = $page->elements->keyBy('name')->toArray();

        $data = array_merge($elements, $data_additional);

        if(Auth::check())
        {
            if(!Auth::user()->admin)
            {
                return redirect('userPage');
            }
            if(Auth::user()->admin)
            {
                return redirect('adminPage');
            }
        }
        else
        {
            return view('pages.logInPage' , $data);
        }
    }
}
