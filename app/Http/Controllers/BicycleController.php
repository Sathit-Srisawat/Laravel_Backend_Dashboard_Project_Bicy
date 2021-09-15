<?php

namespace App\Http\Controllers;

use App\Models\bicycle;
use Illuminate\Http\Request;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bicy = bicycle::all();

        return view('bicycles.index', compact('bicy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bicycles.create');
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
            'type' => 'required',
	    'status' => 'required',
	    'station' => 'required',
            'detail' => 'required',
            'advised' => 'required',
            'bath' => 'required',
            'url' => 'required',
            'channel' => 'required',
            'zone_id' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        bicycle::create($request->all());

        return redirect()->route('bicycles.index')->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(bicycle $bicycle)
    {
        return view('bicycles.show',compact('bicycle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(bicycle $bicycle)
    {
        return view('bicycles.edit',compact('bicycle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bicycle $bicycle)
    {
        $request->validate([
            'id' => 'required',
            'type' => 'required',
            'status' => 'required',
            'station' => 'required',
            'detail' => 'required',
            'advised' => 'required',
            'bath' => 'required',
            'url' => 'required',
            'channel' => 'required',
            'zone_id' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
	 ]);

        $bicycle->update($request->all());

        return redirect()->route('bicycles.index')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(bicycle $bicycle)
    {
        $bicycle->delete();

       return redirect()->route('bicycles.index')->with('success','deleted successfully');

    }
}
















