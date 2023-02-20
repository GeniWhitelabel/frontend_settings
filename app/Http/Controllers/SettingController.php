<?php

namespace App\Http\Controllers;

use App\Models\GantiWarna;
use App\Models\Ikon;
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

    // public function tambahIkon(Request $request)
    // {
    //     $ikonedimu = new Ikon();
        
    //     $ikonedimu->icon1=$request->icon1;
    //     $ikonedimu->icon2=$request->icon2;
    //     $ikonedimu->icon3=$request->icon3;
    //     $ikonedimu->icon4=$request->icon4;
    //     $ikonedimu->icon5=$request->icon5;
    //     $ikonedimu->icon6=$request->icon6;
    //     $ikonedimu->icon7=$request->icon7;
    //     $ikonedimu->icon8=$request->icon8;
    //     $ikonedimu->icon9=$request->icon9;

    //     $ikonedimu->save();
        
    //     return response([
    //         'status' => 'success',
    //         'data' => $ikonedimu
    //     ],200);

    // }

    // public function updateIkon(Request $request, $id){
    //     $ikonedimu = new Ikon();
        
    //     $ikonedimu->icon1=$request->icon1;
    //     $ikonedimu->icon2=$request->icon2;
    //     $ikonedimu->icon3=$request->icon3;
    //     $ikonedimu->icon4=$request->icon4;
    //     $ikonedimu->icon5=$request->icon5;
    //     $ikonedimu->icon6=$request->icon6;
    //     $ikonedimu->icon7=$request->icon7;
    //     $ikonedimu->icon8=$request->icon8;
    //     $ikonedimu->icon9=$request->icon9;

    //     $ikonedimu->save();
        
    //     return response([
    //         'status' => 'success',
    //         'data' => $ikonedimu
    //     ],200);
    // }

}