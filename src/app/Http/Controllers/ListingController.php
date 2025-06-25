<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\BaseProductController;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function show(Request $request) {
        return BaseProductController::base_show($request, 'listing');
    }
}
