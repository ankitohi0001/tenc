<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view("doctor.index",compact("doctors"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("doctor.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doctor = new doctor();
        $doctor -> name = $request-> name;
        $doctor -> patient = $request-> patient;
        $doctor -> wardno = $request-> wardno;
        $doctor -> disease = $request-> disease;
    $doctor->save();
    return redirect()->route("doctor.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctor = Doctor::where('id',$id)->first();
        return view ("doctor.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $doctor -> name = $request-> name;
        $doctor -> patient = $request-> patient;
        $doctor -> wardno = $request-> wardno;
        $doctor -> disease = $request-> disease;
        $doctor->save();
        return redirect()->route("doctor.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect("doctor");
    }
}
