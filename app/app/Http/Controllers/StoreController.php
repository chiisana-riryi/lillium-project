<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function show(Request $request) {
        $search_query = $request->get('search_query');

        return view('store', ['search_query' => $search_query]);
    }

}
