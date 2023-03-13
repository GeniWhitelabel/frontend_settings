<?php

use App\Http\Controllers\SettingsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('kodewarna', 'ApiController@warnaApi');

Route::get('warna', 'ApiController@warnaBaru');

Route::get('/pengaturan', 'ApiController@settingApi');


Route::post('/tambahsetting', 'SettingController@editApi');

Route::post('/ubahsetting/{id}', 'SettingController@updateEdit');

Route::post('/tambahwarna', 'SettingController@tambahWarna');

Route::post('/ubahwarna/{id}', 'SettingController@updateWarna');

// Route::post('/tambahicon','SettingController@tambahIkon');

// Route::post('/ubahicon/{id}','SettingController@updateIkon');
