<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function city(Request $request)
    {
        $data = Kota::whereProvinsiId($request->id)->get();
        echo json_encode($data);
    }
}
