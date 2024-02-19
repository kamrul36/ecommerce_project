<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function BrandList():JsonResponse 
    {
        $data = Brand::all();
        return ResponseHelper::Out('v1', true, 'GET', $data, 200);

    }
}
