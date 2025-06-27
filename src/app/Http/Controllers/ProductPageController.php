<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductPageController extends Controller
{
    public function show(Request $request) {

        $product_id = $request->product_id;

        $product = DB::table('products')
            ->join('subcategories', 'subcategories.subcategory_id' ,'=', 'products.subcategory_id')
            ->where('product_id', '=', $product_id)
            ->first();
        
        $images = DB::select(
            "
            select * from product_images pi2
            where pi2.product_id = ?
            "
        , [$product_id]
        );
        
        return view('productpage', ['product' => $product, 'images' => $images]);
    }
}
