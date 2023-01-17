<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public $host, $header;

    public function warnaApi(Request $request)
    {
        $data = DB::table('warna')
            ->get();
        return response([
            'status' => 'ok',
            'data' => $data
        ],200);
    }

}