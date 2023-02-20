<?php

namespace App\Http\Controllers;

use App\Models\GantiWarna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

class SettingController extends Controller
{
    public function editApi(Request $request)
    {
        $pengaturan=new Setting();
        $pengaturan->text_fitur1=$request->text_fitur1;
        $pengaturan->text_fitur2=$request->text_fitur2;
        $pengaturan->text_fitur3=$request->text_fitur3;
        $pengaturan->text_fitur4=$request->text_fitur4;
        $pengaturan->text_fitur5=$request->text_fitur5;
        $pengaturan->text_fitur6=$request->text_fitur6;
        $pengaturan->text_fitur7=$request->text_fitur7;
        $pengaturan->text_fitur8=$request->text_fitur8;
        $pengaturan->text_fitur9=$request->text_fitur9;
        $pengaturan->warna_text=$request->warna_text;
        $pengaturan->warna_background=$request->warna_background;

        $pengaturan->save();
        
        return response([
            'status' => 'success',
            'data' => $pengaturan
        ],200);
        
    }
    public function updateEdit(Request $request, $id)
    {
        $pengaturan= Setting::find($id);
        $pengaturan->text_fitur1=$request->text_fitur1;
        $pengaturan->text_fitur2=$request->text_fitur2;
        $pengaturan->text_fitur3=$request->text_fitur3;
        $pengaturan->text_fitur4=$request->text_fitur4;
        $pengaturan->text_fitur5=$request->text_fitur5;
        $pengaturan->text_fitur6=$request->text_fitur6;
        $pengaturan->text_fitur7=$request->text_fitur7;
        $pengaturan->text_fitur8=$request->text_fitur8;
        $pengaturan->text_fitur9=$request->text_fitur9;
        $pengaturan->warna_text=$request->warna_text;
        $pengaturan->warna_background=$request->warna_background;


        $pengaturan->update();
        
        return response([
            'status' => 'success',
            'data' => $pengaturan
        ],200);
    }

    public function tambahWarna(Request $request)
    {
        $gantiwarna = new GantiWarna();
        
        $gantiwarna->warnaAppbar=$request->warnaAppbar;
        $gantiwarna->warnaTeks=$request->warnaTeks;
        $gantiwarna->warnaBackground=$request->warnaBackground;

        $gantiwarna->save();
        
        return response([
            'status' => 'success',
            'data' => $gantiwarna
        ],200);
        
    }

    public function updateWarna(Request $request, $id){
        $gantiwarna = GantiWarna::find($id);
        
        $gantiwarna->warnaAppbar=$request->warnaAppbar;
        $gantiwarna->warnaTeks=$request->warnaTeks;
        $gantiwarna->warnaBackground=$request->warnaBackground;

        $gantiwarna->update();
        
        return response([
            'status' => 'success',
            'data' => $gantiwarna
        ],200);
    }
}