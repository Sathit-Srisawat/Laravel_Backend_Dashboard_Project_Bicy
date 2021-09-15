<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lock_unlock;


class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hardwares = lock_unlock::all();

        return view('hardwares.index', compact('hardwares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hardwares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status' => 'required',
            'station' => 'required',
        ]);

        lock_unlock::create($request->all());

        return redirect()->route('hardwares.index')->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(lock_unlock $hardware)
    {
        return view('hardwares.show',compact('hardware'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(lock_unlock $hardware)
    {
         return view('hardwares.edit',compact('hardware'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lock_unlock $hardware)
    {
   
	$request->validate([

	    'id' => 'required',
            'status' => 'required',
            'station' => 'required',
        ]);

        $hardware->update($request->all());

        return redirect()->route('hardwares.index')->with('success','updated successfully');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(lock_unlock $hardware)
    {
        $hardware->delete();

       return redirect()->route('hardwares.index')
                       ->with('success','deleted successfully');
    }
}
