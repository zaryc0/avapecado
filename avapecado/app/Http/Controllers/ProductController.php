<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    public function create()
    {
        return view('pages.admin');
    }
    public function store(Request $request)
    {
        $data = [
            'name'          => $request->input('name'),
            'description'   => $request->input('description'),
            'price'         => (double)$request->input('price'),
            'img_id'        => $request->input('img_id'),
            'tag_id'        => $request->input('tag_id')
        ];
        $product = Product::create($data);

        $stock_data = [
            'quantity' => $request->input('quantity'),
            'product_id' => $product->id

        ];
        Stock::create($stock_data);
        return back();
    }
    public function delete(Request $request)
    {
        $p_id = $request->input('product_id');
        $user = Product::find($p_id);
        $stock = Stock::where('product_id',$p_id);
        $stock->each()->delete();
        $user->delete();

        return back();
    }
}
