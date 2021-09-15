<?php

namespace App\Http\Controllers;

use App\Models\projectfinal;
use Illuminate\Http\Request;
use App\Models\Post;

class ProjectfinalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::latest()->paginate(5);
    
        return view('final.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('final.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
 	    'phonenumber' => 'required',
	    'email' => 'required',
   	    'idcard' => 'required',
        ]);
    
        projectfinal::create($request->all());
     
        return redirect()->route('final.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projectfinal  $projectfinal
     * @return \Illuminate\Http\Response
     */
    public function show(projectfinal $projectfinal)
    {
        return view('final.show',compact('projectfinal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projectfinal  $projectfinal
     * @return \Illuminate\Http\Response
     */
    public function edit(projectfinal $projectfinal)
    {
        return view('final.edit',compact('projectfinal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projectfinal  $projectfinal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projectfinal $projectfinal)
    {
        $request->validate([
            'id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required',
            'email' => 'required',
            'idcard' => 'required',
        ]);
    
        $projectfinal->update($request->all());
    
        return redirect()->route('final.index')
                        ->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projectfinal  $projectfinal
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectfinal $projectfinal)
    {
        $projectfinal->delete();
    
        return redirect()->route('final.index')
                        ->with('success','Deleted successfully');
    }
}
