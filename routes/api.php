<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
use App\Http\Controllers\apiController;
use App\Http\Controllers\walletController;
use App\Http\Controllers\Mqtt_request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/push', [projectController::class, 'push']);
Route::post('/locks', [projectController::class, 'locks']);
Route::put('/update', [apiController::class, 'update']);
Route::put('/topup', [walletController::class, 'update']);
Route::post('/historyup', [walletController::class, 'historyUp']);
Route::put('/purchase', [walletController::class, 'purchase']);
Route::post('/return', [walletController::class, 'return']);
Route::put('/update_station', [projectController::class, 'update_station']);
Route::put('/lock_unlock', [projectController::class, 'lock_unlock']);
Route::put('/update_lock_channel', [projectController::class, 'update_lock_channel']);
Route::put('/pocket', [projectController::class, 'pocket']);
Route::post('/history_pocket', [projectController::class, 'history_pocket']);
Route::post('/Report_Problem', [projectController::class, 'Report_Problem']);
Route::post('/mqtt_request', [Mqtt_request::class, 'SendMsgViaMqtt']);
Route::post('/register', [projectController::class, 'register']);
Route::post('/create_wallet', [walletController::class, 'create_wallet']);
Route::put('/update_location', [projectController::class, 'update_location']);
Route::post('/history_rent', [projectController::class, 'history_rent']);






















