<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usersModel;
use App\Models\lockModel;
use App\Models\station;
use App\Models\bicycle;
use App\Models\Zone;
use App\Models\lock_unlock;
use App\Models\pocket;
use App\Models\admin_pocket_history;
use App\Models\problem;
use App\Models\Post;
use App\Models\historyRent;



class projectController extends Controller
{
     public function dataUser(){
       $items = usersModel::all();
       return response()->json($items); 
    }
    public function push(Request $request){
	$input = $request->all();
	$data = usersModel::create($input);
    }
    public function webProject(){
        return view('project');
    }

    public function testIndex(){
        $items = usersModel::all();
	return view('Index', ["items" => $items]);
    }

//    public function webProject(){
//        return view('contacts/create');
//    }

    public function testAPI(){
        $items = usersModel::all();
        return view('test', ["items" => $items]);
    }

    public function lock(){
       $items = lockModel::all();
       return response()->json($items);             
    }
    public function locks(Request $request){
        $input = $request->all();
        $data = lockModel::create($input);
    }

    public function update(Request $request) {
	//$updates = lockModel::all();
	//$updates->lock = $request->lock;
	//$result->$updates->save();
	
    }  
    public function home(){
        $pocket = pocket::all();
	$bicycle = bicycle::orderBy('no', 'desc')->value('no');
	$zone = Zone::orderBy('no', 'desc')->value('no');
        $problem = problem::orderBy('id', 'desc')->value('id');
        return view('home',["pocket"=>$pocket] , ["zone"=>$zone ,"bicycle" =>$bicycle, "problem"=>$problem]);
    }

    public function walletadmin(){
       $items = pocket::all();
       $sathits  = admin_pocket_history::all();
       return view('wallet-admin', ["items" => $items] , ["sathits" => $sathits]);
    }

    public function report(){
        return view('report');
    }


    public function station_api(){
       $items = station::all();
       return response()->json($items);
    }

    public function bicycle_api(){
       $items = bicycle::all();
       return response()->json($items);
    }

    public function update_station(Request $request) {
        $updates = bicycle::find($request->id);
        $updates->station = $request->station;
        $updates->channel = $request->channel;
        $updates->zone_id = $request->zone_id;       
	$updates->save();
    }

    public function zone(){
       $items = Zone::all();
       return view('project', ["items" => $items]);
    }

    public function station_show(){
       $items = station::all();
       return view('station', ["items" => $items]);
    }

    public function bicycle_show(){
       $items = bicycle::all();
       return view('bicycle', ["items" => $items]);
    }

    public function lock_unlock(Request $request) {
	$updates = lock_unlock::find($request->id);
	$updates->status  = $request->status;
	$updates->save();	
    }  

    public function zone_api(){
       $items = Zone::all();
       return response()->json($items);
    }

    public function lock_unlock_api(){
       $items = lock_unlock::all();
       return response()->json($items);
    }

    public function update_lock_channel(Request $request) {
        $updates =lock_unlock::find($request->id);
        $updates->status = $request->status;
        $updates->save();
    }

    public function pocket(Request $request) {
        $updates = pocket::find($request->id);
        $updates->total = $request->total + $updates->total;
        $updates->receive = $request->receive;
        $updates->transfer = $request->transfer;
        $updates->save();
    }

    public function pocket_api(){
       $items = pocket::all();
       return response()->json($items);
    }

    public function history_pocket(Request $request) {
	$input = $request->all();
        $data = admin_pocket_history::create($input);
    }

    public function history_pocket_api(Request $request){
       $items = admin_pocket_history::all();
       return response()->json($items);
    }

    public function Report_Problem(Request $request) {
        $input = $request->all();
        $data = problem::create($input);
    }

    public function pocket_web(){
       $items = pocket::all();
       return view('pocket_web', ["items" => $items]);
    }

     public function userall(){
       $items = Post::all();
       return response()->json($items);
    }
    public function register(Request $request){
        $input = $request->all();
        $data = Post::create($input);
    }

    public function findBicycle(){
       return view('findBicycle');
    }

    public function findStation(){
       return view('findStation');

    }

    public function update_location(Request $request) {
        $updates = bicycle::find($request->id);
        $updates->longitude = $request->longitude;
        $updates->latitude = $request->latitude;
        $updates->save();
    }
    public function bicycle_detail(){
       $items = bicycle::all();
       return view('bicycle_detail', ["items" => $items]);
    }

    public function history_use(){
       $items = bicycle::all();
       return view('history_use', ["items" => $items]);
    }

    public function history_rent(Request $request){
        $input = $request->all();
        $data = historyRent::create($input);
    }

    public function use_by(){
       $items = historyRent::all();
       return view('use_by', ["items" => $items]);
    }

    public function detail_user(){
       $items = Post::all();
       return view('detail_user', ["items" => $items]);
    }

}





























































