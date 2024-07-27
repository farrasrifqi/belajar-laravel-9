<?php

namespace App\Http\Controllers;

use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
        $student = Student::with(['class', 'ekskuls'])->get();
        return view('student', ['studentList' => $student]);
    }
}