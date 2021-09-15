<?php

namespace App\Http\Controllers;

use App\Models\station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = station::all();
        return view('stations.index', compact('stations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stations.create');
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
            'station_name' => 'required',
            'urls' => 'required',
            'zone_id' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
	 ]);

        station::create($request->all());

        return redirect()->route('stations.index')->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(station $station)
    {
        return view('stations.show',compact('station'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(station $station)
    {
        return view('stations.edit',compact('station'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,station  $station)
    {
        $request->validate([
            'id' => 'required',
            'station_name' => 'required',
            'urls' => 'required',
            'zone_id' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
	 ]);

        $station->update($request->all());

        return redirect()->route('stations.index')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(station $station)
    {
        $station->delete();

       return redirect()->route('stations.index')
                       ->with('success','deleted successfully');
    }
}
