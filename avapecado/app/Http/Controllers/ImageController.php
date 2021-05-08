<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function create()
    {
        return view('pages.admin');
    }
    public function store(Request $request)
    {
        $image = Image::create($request->only(['name', 'alt_text', 'gallery_id']));
        try {
            $image
            ->addMediaFromRequest('image')
            ->toMediaCollection('images');

        }
        catch (\Exception $e){
            $image->delete();
        }

        return back();
    }
    public function delete(Request $request)
    {
        $image =Image::find($request->input('image_id'));
        $image->delete();
        return back();
    }
}
