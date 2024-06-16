<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $practices =Practice::all();
        return view ("practice.index",compact('practices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("practice.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $practice = new practice();
        $practice -> name = $request->name;
        $practice ->class = $request->class;
        $practice -> section = $request->section;
        $practice -> rollno = $request->rollno;
           $practice->save();
           return redirect()->route('practice.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Practice $practice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $practice = Practice::where('id',$id)->first();
         return view ('practice.edit',compact('practice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Practice $practice)
    {
        $practice -> name = $request->name;
        $practice ->class = $request->class;
        $practice -> section = $request->section;
        $practice -> rollno = $request->rollno;
        $practice->save();
        return redirect()->route('practice.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Practice $practice)
    {
        $practice->delete();
         return redirect('practice');
    }
}
