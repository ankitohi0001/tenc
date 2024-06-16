<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nette\Schema\Elements\Structure;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view('student.show',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $student = new Student();
       $student ->name = $request->name;
       $student ->class = $request->class;
       $student ->section = $request->section;
       $student ->rollno = $request->rollno;
       $student ->teacher_id = $request->teacher_id;
        $student->save(); 
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::where('id',$id)->first();
        return view ('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student ->name = $request->name;
        $student ->class = $request->class;
        $student ->section = $request->section;
        $student ->rollno = $request->rollno;
         $student->save(); 
         return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('student');
    }
}
