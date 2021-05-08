<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function create()
    {
        return view('pages.admin');
    }
    public function store(Request $request)
    {
        Gallery::create($request->only(['name']));
        return back();
    }
    public function delete(Request $request)
    {
        $gallery =Gallery::find($request->input('gallery_id'));
        $gallery->delete();
        return back();
    }
}
