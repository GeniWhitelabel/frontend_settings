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

    public function settingApi(Request $request)
    {
        $db = DB::table('settings')
            ->get();
        return response([
            'status' => 'ok',
            'data' => $db
        ],200);
    }

    public function warnaDb(Request $request)
    {
        $data = DB::table('setting_warna')
            ->get();
        return response([
            'status' => 'ok',
            'data' => $data
        ],200);
    }
}