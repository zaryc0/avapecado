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
        $product_data = $request->only(['name', 'description','price', 'img_url','tag_id']);
        $product = Product::create($product_data);
        $stock_data = [
            'p_id' => $product->id,
            'quantity' => $request->input('quantity')
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
