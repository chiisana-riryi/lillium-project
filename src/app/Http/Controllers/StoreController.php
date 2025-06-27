<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\BaseProductController;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function show(Request $request) {
        return BaseProductController::base_show($request, 'store', true, true);
    }
}
