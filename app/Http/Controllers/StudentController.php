<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request; // kamu perlu tambahkan ini juga

class StudentController extends Controller
{
    public function index()
    {
        {
    $students = Student::all();
    return view('students.index', compact('students'));
}


    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
{
    $student = Student::with('extracurriculars')->findOrFail($id);
    return view('students.show', compact('student'));
}

    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
    // StudentController.php
public function enroll(Request $request, $id)
{
    $student = Student::findOrFail($id);
    $student->extracurriculars()->attach($request->extracurricular_id);
    $student->extracurriculars()->syncWithoutDetaching([$request->extracurricular_id]);


    return back()->with('success', 'Siswa berhasil didaftarkan ke ekstrakurikuler!');
}
public function unenroll($studentId, $ekskulId)
{
    $student = Student::findOrFail($studentId);
    $student->extracurriculars()->detach($ekskulId);

    return back()->with('success', 'Berhasil membatalkan eskul!');
}


}

