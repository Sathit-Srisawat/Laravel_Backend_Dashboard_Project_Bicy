<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lockModel;

class apiController extends Controller
{
    public function update(Request $request) {
	$updates = lockModel::find($request->id);
	$updates->fuck  = $request->fuck;
	$updates->save();	
    }  
}
