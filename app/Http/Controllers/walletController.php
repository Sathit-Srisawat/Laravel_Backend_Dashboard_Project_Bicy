<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wallet;
use App\Models\history;
use App\Models\HistoryReturnModel;





class walletController extends Controller
{
    public function walletBalance(){
       $items = wallet::all();
       return response()->json($items);
    }

    public function history(){
       $items = history::all();
       return response()->json($items);
    }

    public function update(Request $request) {
	$updates = wallet::find($request->id);
	$updates->balance = $updates->balance + $request->balance;
	$updates->save();	
    }

    public function purchase(Request $request) {
        $updates = wallet::find($request->id);
        $updates->balance = $updates->balance - $request->balance;
        $updates->save();
    }

    public function historyUp(Request $request){
        $input = $request->all();
        $data = history::create($input);
    } 


    public function return(Request $request){
        $input = $request->all();
        $data = HistoryReturnModel::create($input);
    }

    public function HistoryReturn(){
       $items = HistoryReturnModel::all();
       return response()->json($items);
    }

    public function create_wallet(Request $request) {
        $input = $request->all();
        $data = wallet::create($input);
    }
}
