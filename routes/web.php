<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
use App\Http\Controllers\ProController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectfinalController;
use App\Http\Controllers\walletController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\BicycleController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\Mqtt_request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dataUser', [projectController::class, 'dataUser']);

Route::get('/lock', [projectController::class, 'lock']);

Route::get('/all_zone', [projectController::class, 'zone'])->name('home');;

Route::get('/testAPI', [projectController::class, 'testAPI'])->name('testAPI');;

Route::get('/testIndex', [projectController::class, 'testIndex'])->name('testIndex');;

Route::resource('posts', PostController::class);

Route::get('/balance', [walletController::class, 'walletBalance']);

Route::get('/historybalance', [walletController::class, 'history']);

Route::get('/HistoryReturn', [walletController::class, 'HistoryReturn']);

Route::get('/', [projectController::class, 'home']);

Route::get('/wallet-admin', [projectController::class, 'walletadmin']);

Route::get('/report', [projectController::class, 'report']);

Route::resource('stations', StationController::class);

Route::resource('bicycles', BicycleController::class);

Route::get('/station-api', [projectController::class, 'station_api']);

Route::get('/bicycle-api', [projectController::class, 'bicycle_api']);

Route::resource('hardwares', HardwareController::class);

Route::resource('zones', ZoneController::class);

Route::get('/show_station', [projectController::class, 'station_show']);

Route::get('/show_bicycle', [projectController::class, 'bicycle_show']);

Route::get('/zone_api', [projectController::class, 'zone_api']);

Route::get('/lock_unlock_api', [projectController::class, 'lock_unlock_api']);

Route::get('/pocket_api', [projectController::class, 'pocket_api']);

Route::get('/history_pocket_api', [projectController::class, 'history_pocket_api']);

Route::resource('problems', ProblemController::class);

Route::get('/userall', [projectController::class, 'userall']);

Route::get('/findBicycle', [projectController::class, 'findBicycle']);

Route::get('/findStation', [projectController::class, 'findStation']);

Route::get('/bicycle_detail', [projectController::class, 'bicycle_detail']);

Route::get('/history_use', [projectController::class, 'history_use']);

Route::get('/use_by', [projectController::class, 'use_by']);

Route::get('/detail_user', [projectController::class, 'detail_user']);









