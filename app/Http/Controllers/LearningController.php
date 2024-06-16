<?php

namespace App\Http\Controllers;

use App\Models\Learning;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $learnings = Learning::all();
      return view ('learning.index',compact('learnings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('learning.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $learning =  new Learning();
        $learning -> name = $request -> name;
        $learning -> fathername = $request -> fathername;
        $learning -> semester = $request -> semester;
        $learning -> contact = $request -> contact;
        $learning->save();
        return redirect()->route('learning.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Learning $learning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $learning = Learning::where('id',$id)->first();
       return view ('learning.edit',compact('learning'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Learning $learning)
    {
        $learning -> name = $request -> name;
        $learning -> fathername = $request -> fathername;
        $learning -> semester = $request -> semester;
        $learning -> contact = $request -> contact;
        $learning->save();
        return redirect()->route('learning.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Learning $learning)
    {
        $learning->delete();
        return redirect('learning');
    }
}
