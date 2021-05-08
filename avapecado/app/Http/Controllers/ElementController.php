<?php

namespace App\Http\Controllers;

use App\Models\Element;
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
}
