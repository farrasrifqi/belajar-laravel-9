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
        
        //create
        // DB::table('students')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '0167289',
        //     'class_id' => 1
        // ]);

        //update
        DB::table('students')->where('id', 26)->update([
            'name' => 'query builder 2',
            'class_id' => 3
        ]);

        // eloquent
        // $student = Student::all();
        
        //create
        // Student::create([
        //     'name' => 'eloquent',
        //     'gender' => 'p',
        //     'nis' => '0163419',
        //     'class_id' => 2
        // ]);

        //update
        Student::find(27)->update([
            'name' => 'eloquent 2',
            'class_id' => 1
        ]);
        
        // dd($student);

        // insert into students ('name', 'gender', 'nis', 'class_id') values(.....)
    }
}