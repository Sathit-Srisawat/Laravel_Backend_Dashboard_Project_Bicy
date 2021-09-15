<?php

namespace App\Http\Controllers;

use App\Models\problem;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problem = problem::all();

        return view('problems.index', compact('problem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('problems.create');
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
            'topic' => 'required',
            'detail' => 'required',
        ]);

        peoblem::create($request->all());

        return redirect()->route('problems.index')->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(problem $problem)
    {
        return view('problems.show',compact('problem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(problem $problem)
    {
	return view('problems.edit',compact('problem'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, problem $problem)
    {
        $request->validate([
            'topic' => 'required',
            'detail' => 'required',
        ]);

        $problem->update($request->all());

        return redirect()->route('problems.index')->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(problem $problem)
    {
        $problem->delete();

       return redirect()->route('problems.index')
                       ->with('success','deleted successfully');
    }
}
