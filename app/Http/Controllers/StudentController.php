<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $student = Student::all();
        // return view('student', ['studentList' => $student]);

        //query builder
        // $student = DB::table('students')->get();

        // eloquent
        $student = Student::all();
        
        dd($student);
        
    }
}