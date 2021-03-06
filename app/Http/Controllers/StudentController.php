<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
           'name' => 'required|max:255',
           'surname' => 'required|max:255',
           'student_id' =>'required|unique:students,student_id',
           'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:students,email',
       ]);
        $studenti = $request->all();
        $newStudent = new Student();
        $newStudent->fill($studenti);
        $newStudent->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
        $student = Student::find($id);
        if ($student) {
            return view('students.edit', compact('student'));
        }
        return abort('404');
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'student_id' => 'required|unique:students,student_id,' .$student->id,
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:students,email,'.$student->id,
        ]);
        $dati = $request->all();
        if ($student) {
            $student->update($dati);
        }
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
        }
        return redirect()->route('students.index');
    }
}
