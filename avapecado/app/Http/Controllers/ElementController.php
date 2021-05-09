<?php

namespace App\Http\Controllers;

use App\Models\Element;
use App\Models\Image;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function create()
    {
        return view('pages.admin');
    }
    public function store(Request $request)
    {
        Element::create($request->only(['name','description','imageAddress','textContent','page_id']));
        return back();
    }
    public function delete(Request $request)
    {
        $element =Element::find($request->input('element_id'));
        $element->delete();
        return back();
    }
    public function updateText(Request $request)
    {
        $text=$request->input('textContent');
        $id=$request->input('element_id');
        Element::find($id)->update(['textContent' => $text]);
        return back();
    }
    public function updateImg(Request $request)
    {
        $img_id=$request->input('img_id');
        $image = Image::find('img_id');
        $altText = $image->dalt_text;
        $id=$request->input('element_id');
        Element::find($id)->update(['img_id' => $img_id]);
        return back();
    }
}
