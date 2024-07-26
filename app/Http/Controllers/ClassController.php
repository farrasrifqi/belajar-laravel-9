<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        // lazy loud
        $class = ClassRoom::all();
        // select * from table class
        // select * from student where class = 1A
        // select * from student where class = 1B
        // select * from student where class = 1C
        // select * from student where class = 1D

        // eager loud
        // select * from table class
        // select * from student where class in (1a,1b, 1c, 1d)
        return view('classroom', ['classList' => $class]);
    }
}