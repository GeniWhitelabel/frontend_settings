<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

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

    public function editApi(Request $request)
    {
        $pengaturan=new Setting();
        $pengaturan->gambar_logo=$request->gambar_logo;
        $pengaturan->gambar_icon=$request->gambar_icon;
        $pengaturan->hint_text=$request->hint_text;
        $pengaturan->text=$request->text;
        $pengaturan->warna_logo=$request->warna_logo;
        $pengaturan->warna_tombol=$request->warna_tombol;
        $pengaturan->warna_background=$request->warna_background;

        $pengaturan->save();
        
        return response([
            'status' => 'success',
            'data' => $pengaturan
        ],200);
        
    }
}